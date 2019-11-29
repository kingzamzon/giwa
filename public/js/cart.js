let cart = JSON.parse(sessionStorage.getItem('cart'));


class CartItem{
  constructor(cart){
    this.cartItems = JSON.parse(sessionStorage.getItem('cart'));
  }

  findInCart(name){
    let ind = this.cartItems.find((n,i)=>{
      if (n.name.toLowerCase() == name.toLowerCase()){
        console.log(i, 'i??');
        return i;
      }
    });
    // console.log(this.cartItems.indexOf(ind), 'erm?');
    return this.cartItems.indexOf(ind);
  }

  updateQty(productName, newVal){
    let ind = this.findInCart(productName);
    console.log(ind, 'inddd?')
    let currentItem = this.cartItems[ind];
    console.log(currentItem, 'citem')
    if ((parseInt(newVal.value) + 1) <= currentItem.qty){
      // newVal.
      currentItem.qty1 = newVal.value + 1;
    }

    this.cartItems.splice(ind, 1, currentItem);
    console.log(this.cartItems);
    displayCart(this.cartItems);
    this.persistToStorage(this.cartItems);
  }

  persistToStorage(cart){
    sessionStorage.setItem('cart',JSON.stringify(this.cartItems));
  }
}


displayCart(cart)

function displayCart(cart){
  let out = '';
  let cartTotal = 0;
  cart.forEach(item=>{
    cartTotal += (item.price * item.qty1);
    out += `
    <tr class="table-row">
      <td class="column-1">
        <div class="cart-img-product b-rad-4 o-f-hidden">
          <img src="${item.img}" alt="IMG-PRODUCT">
        </div>
      </td>
      <td class="column-2">${item.name}</td>
      <td class="column-3">${
        currencyConverter(item.price)
          .currency
      }
      ${
        currencyConverter(item.price)
          .figure
      }</td>
      <td class="column-4">
        <div class="flex-w bo5 of-hidden w-size17">
          <button class="color1 flex-c-m size7 bg8 eff2 subQty">
            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
          </button>

          <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" readonly value="${item.qty1}">

          <button class="color1 flex-c-m size7 bg8 eff2 addQty">
            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
          </button>
        </div>
      </td>
      <td class="column-5">${
        currencyConverter(item.price * item.qty1)
          .currency
      }${
        currencyConverter(item.price * item.qty1)
          .figure
      }</td>
      <td style='text-align:center'><a href="#" title='Remove Item' class="btn btn-outline-danger btn-sm removeItem">X</a></td>
    </tr>
    `
    document.querySelector('.cartItems').innerHTML = out;
    document.querySelector('.cartTotal').innerHTML = `${
      currencyConverter(cartTotal)
        .currency
    }
    ${
      currencyConverter(cartTotal)
        .figure
    }`;
    document.querySelector('.cartGrandTotal').innerHTML = `${
      currencyConverter(cartTotal + (cartTotal * 0.05))
        .currency
    }
    ${
      currencyConverter(cartTotal + (cartTotal * 0.05))
        .figure
    }`;
  });
}

document.querySelector('.cartItems').addEventListener('click', addQty);
document.querySelector('.cartItems').addEventListener('click', subQty);
document.querySelector('.cartItems').addEventListener('click', removeItem);
document.querySelector('.continueShopping').addEventListener('click',(e)=>window.location.href = 'http://localhost/savvy01/products.php')
document.querySelector('.checkout').addEventListener('click',(e)=>window.location.href = 'http://localhost/savvy01/checkout.php')

function addQty(e){
  /* if(e.target.classList.contains('addQty')){
    const qty = e.target.previousElementSibling;
    const productName = e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.innerText;
    console.log(qty.value);

    const addUpdateCart = new CartItem;

    addUpdateCart.updateQty(productName,qty);
    
  } */

  if(e.target.classList.contains('addQty')){
    const qty = e.target.previousElementSibling;
    const productName = e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.innerText;
    let s1 = cart;
    let itm;
    let ind;
    let parentObj = new Promise(function(resolve, reject){
      if (s1){
        s1.find((c,i)=>{
          if(c.name.toLowerCase() == productName.toLowerCase()){
            ind = i
            itm = s1[i];
            resolve(itm);
          }
        })
      }
    });

    parentObj
      .then(itm=>{
        if ((parseInt(qty.value) + 1) <= itm.qty){
          qty.value = String(parseInt(qty.value) + 1)
          itm.qty1 = parseInt(qty.value);
          s1 = insertInArr(s1, ind, itm);
          sessionStorage.setItem('cart', JSON.stringify(s1));
    
          displayCart(s1)
        }else{}
      })
    // console.log(itm, 'done');
  }

}

function subQty(e){
  if(e.target.classList.contains('subQty')){
    const qty = e.target.nextElementSibling;
    const productName = e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.innerText;
    let s1 = cart;
    let itm;
    let ind;
    let parentObj = new Promise(function(resolve, reject){
      if (s1){
        s1.find((c,i)=>{
          if(c.name.toLowerCase() == productName.toLowerCase()){
            ind = i
            itm = s1[i];
            resolve(itm);
          }
        })
      }
    });

    parentObj
      .then(itm=>{
        if ((parseInt(qty.value) - 1) >= 1){
          qty.value = String(parseInt(qty.value) - 1)
          itm.qty1 = parseInt(qty.value);
          s1 = insertInArr(s1, ind, itm);
          sessionStorage.setItem('cart', JSON.stringify(s1));
    
          displayCart(s1)
        }else{}
      })
    // console.log(itm, 'done');
  }

}

function insertInArr(arr, index, item){
  let a = arr;
  arr.splice(index,1,item);
  return a;
}


function removeItem(e){

  if(e.target.classList.contains('removeItem')){
    console.log(e.target)
    let parentName = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText;

    console.log(parentName);

    let s1 = cart;
    console.log(s1);
    let parentObj = new Promise(function(resolve, reject){
      s1.find((item, i)=>{
        if (item.name.toLowerCase() === parentName.toLowerCase()){
          resolve({item: item, index: i})
        }
      })
    });

    parentObj
      .then(obj=>{
        if(confirm('Are you sure you want to remove item from cart? ')){
          s1.splice(obj.index,1)

          sessionStorage.setItem('cart',JSON.stringify(s1));

          displayCart(s1);  
        }
      })

    e.preventDefault();
  }
}
