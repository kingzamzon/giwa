const products = JSON.parse(localStorage.getItem('products'));

let url = window.location.href.split('?');

let product;
if (!url[1]){

}else{
  url = url[1].split('=')[1].toLowerCase().replace(/%20/g, ' ');
  url = url.replace(/%27/, "'")
  console.log(url)
  product = products.find(product=>{
    return product.name.toLowerCase() == url ? product : null;
  })
  
  populateDOM(product)
  console.log(url);
}

document.querySelector('.productBreadcrumb').innerHTML = `
  <a href="index.php" class="s-text16">
    Home
    <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
  </a>

  <a href="products.php?coll=${product.collection}" class="s-text16">
    ${product.collection}
    <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
  </a>

  <a href="products.php?cat=${product.category}" class="s-text16">
    ${product.category}
    <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
  </a>

  <span class="s-text17">
    ${product.name}
  </span>
`



function populateDOM(product){
  const productName = document.querySelector('.productName');
  const productPrice = document.querySelector('.productPrice');
  const productDesc = document.querySelector('.productDesc');
  const productSizes = document.querySelector('.productSize');
  const productColor = document.querySelector('.productColor');
  const productQty = document.querySelector('.productQty');
  const productImg = document.querySelector('.productImgSlick');

  productName.innerHTML = product.name;
  productPrice.innerHTML = `${
    currencyConverter(product.price)
      .currency
  }${
    currencyConverter(product.price)
      .figure
  }`;
  productDesc.innerHTML = product.desc;
  console.log(product.qty1, product);
  productQty.value = product.qty1;
  
  
  let sizes = '<option disabled selected value="null">Choose an option</option>';
  product.size.forEach(s=>{
    sizes += `<option value='${s}'>Size ${s}</option>`
  })
  productSizes.innerHTML = sizes;

  let colors = '<option disabled selected value="null">Choose an option</option>';
  product.colors.forEach(c=>{
    colors += `<option value='${c.toLowerCase()}'>${c[0].toUpperCase() + c.slice(1,).toLowerCase()}</option>`
  })
  productColor.innerHTML = colors;

  let imgArr = [product.img,'images/trouser2.jpg','images/kids.jpg']
  let imgs = ''
  imgArr.forEach(img=>{
    imgs +=`
      <div class="item-slick3" data-thumb="${img}">
        <div class="wrap-pic-w">
          <img src="${img}" alt="IMG-PRODUCT" class="productImg">
        </div>
      </div>
    `
  });
  productImg.innerHTML = imgs;
  
}


document.querySelector('.addUpItem').addEventListener('click',addQty);
document.querySelector('.subUpItem').addEventListener('click',subQty);

function addQty(e){
  const qty = e.target.previousElementSibling;
  console.log(qty.value);
  if (parseInt(qty.value) + 1 <= product.qty){
    qty.value = String(parseInt(qty.value) + 1)
  }else{}
}

function subQty(e){
  console.log('in??')
  const qty = e.target.nextElementSibling;
  console.log(qty.value);
  if (parseInt(qty.value) - 1 >= 1){
    qty.value = String(parseInt(qty.value) - 1)
  }else{}
}

document.querySelector('.addToCart').addEventListener('click',addToCart);

function addToCart(e){
  let pc = document.querySelector('.productColor')
  let pcVal = pc.options[pc.selectedIndex].value;
  let ps = document.querySelector('.productSize')
  let psVal = ps.options[ps.selectedIndex].value;

  let pass = true;
  let s1 = sessionStorage.getItem('cart');
  let itm;

  if(psVal == 'null'){
    document.querySelector('.sizeErr').style.display = 'block';
    pass = false;
  }else document.querySelector('.sizeErr').style.display = 'none';

  if(pcVal == 'null'){
    document.querySelector('.colorErr').style.display = 'block';
    pass = false;
  }else document.querySelector('.colorErr').style.display = 'none';

  let ind;
  if(pass){
    new Promise(function(res, rej){ 
      if (s1){
        s1 = JSON.parse(s1)
        let flag = false;
        s1.find((c,i)=>{
          // console.log(c.name, product.name, c.name == product.name);
          if(c.name.toLowerCase() == product.name.toLowerCase()){
            ind = i;
            itm = s1[i];
            flag = true;
            return;
          }
        });
        if (flag == false) {
          itm = product
          ind = s1.length;
        };
      }else{
        itm = product;
      }
      res(itm);
    }).then(itm=>{
      itm.colors = pcVal;
      itm.size = psVal;
      itm.qty1 = parseInt(document.querySelector('.productQty').value);

      if(s1) s1.splice(ind,1,itm);
      else s1 = [itm];
      
      sessionStorage.setItem('cart',JSON.stringify(s1));

      window.location.href = 'http://localhost/savvy01/cart.php';
    });
    
  }
}

function relatedProducts(collection, categories){
  let fp = '';
  products.forEach(prod=>{
    if (prod.name !== product.name && (prod.collection == collection)){
      console.log(prod.name, product.name)
      fp += `
      <div class="item-slick2 p-l-15 p-r-15">
      <!-- Block2 -->
      <div class="block2">
        <div class="block2-img wrap-pic-w of-hidden pos-relative">
          <img src="${prod.img}" alt="IMG-PRODUCT">

          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart icon_heart_alt" aria-hidden="true"></i>
              <i class="fa fa-heart icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
              <!-- Button -->
              <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                Add to Cart
              </button>
            </div>
          </div>
        </div>

        <div class="block2-txt p-t-20">
          <a href="product-detail.php?prod=${prod.name}" class="block2-name dis-block s-text3 p-b-5">
            ${prod.name}
          </a>

          <span class="block2-price m-text6 p-r-5">
            ${
              currencyConverter(prod.price)
                .currency
            }${
              currencyConverter(prod.price)
                .figure
            }
          </span>
        </div>
      </div>
    </div>
      `
    }
  });

  document.querySelector('.relatedProducts').innerHTML = fp;
}
relatedProducts(product.collection, product.category);