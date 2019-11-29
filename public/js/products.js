const productsDiv = document.querySelector('.products');
const products = JSON.parse(localStorage.getItem('products'));
console.log(region)

let url = window.location.href.split('?');
let items = [];
if (!url[1]){
  displayProduct(products);
}else{
  url = url[1].split('=');
  console.log(url)
  // let itms = [];
  if(url[0] == 'coll' || url[0] == 'cat' || url[0] == 'brand'){
    products.forEach(item=>{
      if(item.collection === url[1] || item.category == url[1] || item.brand == url[1]){
        console.log(item);
        items.push(item);
      }
    });
  }// else if(url[0] == 'pricing'){

  // }
  
  displayProduct(items);
}
console.log(items, 'items')

document.querySelector('.sortByPrice').innerHTML = `
  <option value='all'>All Price</option>
  <option value='200-999'>${
    currencyConverter(200)
      .currency
  }
  ${
    currencyConverter(200.00)
      .figure
  } - ${
    currencyConverter(999.99)
      .currency
  }
  ${
    currencyConverter(999.99)
      .figure
  }</option>
  <option value='1000-4999'>${
    currencyConverter(1)
      .currency
  }
  ${
    currencyConverter(1000.00)
      .figure
  } - ${
    currencyConverter(4)
      .currency
  }
  ${
    currencyConverter(4999.99)
      .figure
  }</option>
  <option value='5000-9999'>${
    currencyConverter(5)
      .currency
  }
  ${
    currencyConverter(5000)
      .figure
  } - ${
    currencyConverter(9)
      .currency
  }
  ${
    currencyConverter(9999.99)
      .figure
  }</option>
  <option value='10000-14999'>${
    currencyConverter(10)
      .currency
  }
  ${
    currencyConverter(10000)
      .figure
  } - ${
    currencyConverter(14)
      .currency
  }
  ${
    currencyConverter(14999.99)
      .figure
  }</option>
  <option value='15000'>${
    currencyConverter(15)
      .currency
  }
  ${
    currencyConverter(15000)
      .figure
  }+</option>
`

function displayProduct(products){
  let out = '';
  products.forEach((product)=>{
    out += `
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
      <!-- Block2 -->
      <div class="block2">
        <div class="block2-img wrap-pic-w of-hidden pos-relative">
          <img src="${product.img}" alt="IMG-PRODUCT">
          <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
              <i class="fa fa-heart icon_heart_alt" aria-hidden="true"></i>
              <i class="fa fa-heart icon_heart dis-none" aria-hidden="true"></i>
            </a>
            <div class="block2-btn-addcart w-size1 trans-0-4">
              <!-- Button -->
              <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                Add to Bag
              </button>
            </div>
          </div>
        </div>
        <div class="block2-txt p-t-20">
          <a href="product-detail.php?prod=${product.name}" class="block2-name dis-block s-text3 p-b-5">
            ${product.name}
          </a>
          <span class="block2-price m-text6 p-r-5">
            ${
              currencyConverter(product.price)
                .currency
            }
            ${
              currencyConverter(product.price)
                .figure
            }
          </span>
        </div>
      </div>
    </div>
    `
  });

  productsDiv.innerHTML = out;
}
let m = 23.9983343;
console.log(m.toFixed(2))


// document.querySelector('.category').addEventListener('click', collection);
document.querySelector('.sortByPrice').addEventListener('change',sortByPrice);
document.querySelector('.sortByOther').addEventListener('change',sortByOther);
document.querySelector('.searchFilter').addEventListener('keyup',searchAlgo);

// function collection(e){
//   if(e.target.classList.contains('cats')){
//     console.log(e.target.innerText);
//     let itms = [];
//     products.forEach(item=>{
//       // console.log(item.collection, e.target.innerText.toLowerCase(), item.collection === e.target.innerText.toLowerCase())
//       if(item.collection === e.target.innerText.toLowerCase()){
//         itms.push(item);
//       }
//     })
//     // e.target.style.color = ''
//     items = itms;
//     displayProduct(itms);
//     return;
//   }else if(e.target.classList.contains('catAll')){
//     items = products;
//     displayProduct(products);
//     return;
//   }
//   e.preventDefault()
// }

function sortByPrice(e){
  console.log(e.target);
  console.log(items, products);
  let tems = items.length === 0 ? products : items;
  let itms = [];
  let val = e.target.options[e.target.selectedIndex].value.split('-');
  console.log(val)

  if(val == 'all') itms = products;
  else{
    tems.forEach(product=>{
      console.log('in?')
      if(product.price >= parseInt(val[0]) && product.price <= parseInt(val[1])){
        console.log('in??')
        itms.push(product);
      }
    });
  }
  if(itms.length > 0) displayProduct(itms);
  else productsDiv.innerHTML = 'No products in price range';
  return;
}

function sortByOther(e){
  let itms = items.length === 0 ? products : items;
  let val = e.target.options[e.target.selectedIndex].value;
  console.log(val)
  switch(val){
    case 'high':
      itms.sort((a,b)=>{
        return a.price < b.price ? 1 : ( a.price == b.price ) ? ((a.name > b.name) ? 1 : -1) : -1 
      })
      // console.log(itms)
      break;
    case 'low':
      itms.sort((a,b)=>{
        return a.price > b.price ? 1 : ( a.price == b.price ) ? ((a.name > b.name) ? 1 : -1) : -1 
      })
      // console.log(itms)
      break;
    case 'default':
      itms = items.length === 0 ? products : items;
  }
  displayProduct(itms);
}

function searchAlgo(e){
  let itms = [];
  let val = e.target.value.toLowerCase();
  products.forEach(product=>{
    let x = product.name.split(' ');
    for(let i=0;i<x.length;i++){
      if( x[i].toLowerCase().match(val) ){
        console.log(product);
        itms.push(product);
        break;
      }
    }
  });
  console.log(itms);
  displayProduct(itms);
}
