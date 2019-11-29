let cartItems = JSON.parse(sessionStorage.getItem('cart'));
document.querySelector('.placeOrder').addEventListener('click', placeOrder);

let countries = ['Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Central African Republic (CAR)', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo, Democratic Republic of the', 'Congo, Republic of the', 'Costa Rica', "Cote d'Ivoire", 'Croatia', 'Cuba', 'Cyprus', 'Czechia', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini (formerly Swaziland)', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kosovo', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar (formerly Burma)', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'North Macedonia (formerly Macedonia)', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestine', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates (UAE)', 'United Kingdom (UK)', 'United States of America (USA)', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City (Holy See)', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe']

let country = '<option value="" disabled>Select a country</option>';
countries.forEach(c=>{
  if(c.toLowerCase() === 'nigeria') country += `<option value="${c.toLowerCase()}" selected style='text-transform: capitalize;'>${c}</option>`;
  else country += `<option value="${c.toLowerCase()}" style='text-transform: capitalize;'>${c}</option>`;
})

document.querySelector('.countries').innerHTML = country;
document.querySelector('.country2').innerHTML = country;


let total = 0;

const checkItems = ()=>{
  let out = '';
  cartItems.forEach(item=>{
    total += (item.price * item.qty1);
    out += `
    <tr>
      <td style='text-transform: capitalize;'>${item.name} <strong class="mx-2" style='text-transform: lowercase;'>x</strong> ${item.qty1}</td>
      <td>${
        currencyConverter(item.price * item.qty1)
          .currency
      }${
        currencyConverter(item.price * item.qty1)
          .figure
      }</td>
    </tr>
    `;    
  })

  out += `<br><tr>
      <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
      <td class="text-black">${
        currencyConverter(total)
          .currency
      }${
        currencyConverter(total)
          .figure
      }</td>
    </tr>
    <tr>
      <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
      <td class="text-black font-weight-bold"><strong>${
        currencyConverter(total + (total * 5/100))
          .currency
      }${
        currencyConverter(total + (total * 5/100))
          .figure
      }</strong></td>
    </tr>`;

    document.querySelector('.items').innerHTML = out;
}

checkItems();
cartItems['total'] = total;

// console.log(total);


function chckTextFields(e){
  let val = e.target.value;
  if (val.length < 3){
    e.target.className += ' is-invalid';
  }else{
    if(e.target.classList.contains('is-invalid')){
      e.target.classList.remove('is-invalid')
    }
  }
}

let countrys = document.querySelector('.countries');
let firstName = document.querySelector('.firstName');
let lastName = document.querySelector('.lastName');
let companyName = document.querySelector('.companyName');
let apartmentName = document.querySelector('.physicalApartment');
let address = document.querySelector('.physicalAddress');
let state = document.querySelector('.state');
let zipcode = document.querySelector('.zipCode');
let email = document.querySelector('.emailAddress');
let phone = document.querySelector('.phoneNumber');
let orderNote = document.querySelector('.orderNote')
let alt = document.querySelector('.alternateShipAddr');

firstName.addEventListener('keyup',chckTextFields)
lastName.addEventListener('keyup',chckTextFields)
address.addEventListener('keyup',chckTextFields)
state.addEventListener('keyup',chckTextFields)
email.addEventListener('keyup', function(e){
  if(!emailValidation(e.target.value) && e.target.value !== ''){
    e.target.className += ' is-invalid';
  }else{
    if(e.target.classList.contains('is-invalid')){
      e.target.classList.remove('is-invalid');
    }
  }
})

zipcode.addEventListener('keyup', function(e){
  if(!zipValidation(e.target.value) && e.target.value !== ''){
    e.target.className += ' is-invalid';
  }else{
    if(e.target.classList.contains('is-invalid')){
      e.target.classList.remove('is-invalid');
    }
  }
})

phone.addEventListener('keyup', function(e){
  if(!phoneValidation(e.target.value) && e.target.value !== ''){
    e.target.className += ' is-invalid';
  }else{
    if(e.target.classList.contains('is-invalid')){
      e.target.classList.remove('is-invalid');
    }
  }
})

function emailValidation(mail){
  let re = /^[a-z][\w\.\-]+[a-z0-9]+@[a-z0-9]+\.[a-z]{2,6}$/;
  let res = re.test(mail);
  return res;
}
function zipValidation(zip){
  let re = /^[0-9]{6}$/;
  let res = re.test(zip);
  return res;
}
function phoneValidation(tel){
  let re = /^[0-9]{9,13}$/;
  let res = re.test(tel);
  return res;
}





let altForm = document.querySelector('#ship_different_address');

alt.addEventListener('click',function(e){
  if(e.target.checked){
    console.log('checked');
    altForm.style.display = 'block';
  }else altForm.style.display = 'none';
})

let altcountrys = document.querySelector('.country2');
let altfirstName = document.querySelector('.altFirstName');
let altlastName = document.querySelector('.altLastName');
let altcompanyName = document.querySelector('.altCompanyName');
let altapartmentName = document.querySelector('.altApartment');
let altaddress = document.querySelector('.altStrAddr');
let altstate = document.querySelector('.altState');
let altcompanyname = document.querySelector('.altCompanyName');
let altzipcode = document.querySelector('.altZipCode');
let altemail = document.querySelector('.altEmailAddr');
let altphone = document.querySelector('.altPhoneNumber');

  altfirstName.addEventListener('keyup',chckTextFields)
  altlastName.addEventListener('keyup',chckTextFields)
  altaddress.addEventListener('keyup',chckTextFields)
  altstate.addEventListener('keyup',chckTextFields)
  altemail.addEventListener('keyup', function(e){
    if(!emailValidation(e.target.value) && e.target.value !== ''){
      e.target.className += ' is-invalid';
    }else{
      if(e.target.classList.contains('is-invalid')){
        e.target.classList.remove('is-invalid');
      }
    }
  })

  altzipcode.addEventListener('keyup', function(e){
    if(!zipValidation(e.target.value) && e.target.value !== ''){
      e.target.className += ' is-invalid';
    }else{
      if(e.target.classList.contains('is-invalid')){
        e.target.classList.remove('is-invalid');
      }
    }
  })

  altphone.addEventListener('keyup', function(e){
    if(!phoneValidation(e.target.value) && e.target.value !== ''){
      e.target.className += ' is-invalid';
    }else{
      if(e.target.classList.contains('is-invalid')){
        e.target.classList.remove('is-invalid');
      }
    }
  })


function placeOrder(){
  if(document.querySelector('.is-invalid') || firstName.value == '' || lastName.value =='' || email.value == '' || address.value == '' || zipcode.value == '' || state.value == '' || phone.value == ''){
    document.querySelector('.is-invalid').focus();
  }else{
    let obj1, obj2, shippingobj, orderObj;
    obj1 = {
      country: countrys.options[countrys.selectedIndex].value,
      firstName: firstName.value, lastName: lastName.value, 
      companyName: companyName.value || 'blank',
      apartmentName: apartmentName.value || 'blank',
      orderNote: orderNote.value || 'blank',
      address: address.value, state: state.value, 
      zipcode: zipcode.value, email: email.value, 
      phone: phone.value, alternateAddr: alt.checked
    }
    if(obj1.alternateAddr){
      obj2 = {
        country: altcountrys.options[altcountrys.selectedIndex].value,
        firstName: altfirstName.value, lastName: altlastName.value, 
        companyName: altcompanyName.value || 'blank',
        address: altaddress.value, state: altstate.value, 
        zipcode: altzipcode.value, email: altemail.value, 
        phone: altphone.value, altapartment: altapartmentName.value || 'blank'
      }
    }

    if(alt.checked){
      shippingobj = [obj1, obj2];
    }else{
      shippingobj = [obj1];
    }

    console.log(shippingobj[0].email);

    orderObj = {
      total: cartItems.total * 100,
      email: shippingobj[0].email,
      firstName: shippingobj[0].firstName,
      lastName: shippingobj[0].lastName,
      phone: shippingobj[0].phone
    }

    // console.log(mainObj);

    payWithPaystack(orderObj);
  }
  
  
}

function payWithPaystack(obj){
  var handler = PaystackPop.setup({
    // key: 'pk_test_14b931c738a150c9b090b8031a39652dfb7f9832',
    key: 'pk_live_e7ab8f357b4ba696c5503d578a5a1d1db0eaefd5',
    email: obj.email,
    amount: obj.total,
    currency: "NGN",
    ref: obj.firstName + String(obj.total) + '_' + String(Date.now()), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    firstname: obj.firstName,
    lastname: obj.lastName,
    // label: "Optional string that replaces customer email"
    metadata: {
      custom_fields: [
        {
          display_name: "Mobile Number",
          variable_name: "mobile_number",
          value: obj.phone
        }
      ]
    },
    callback: function(response){
        console.log(response);
        alert('success. transaction ref is ' + response.reference);
        window.location.href = `http://localhost/savvy01/thankyou.php?ref=${response.reference}`;
    },
    onClose: function(){
        alert('window closed');
    }
  });
  handler.openIframe();
}