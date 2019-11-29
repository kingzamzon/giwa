<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            // x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        // x.innerHTML = "Latitude: " + position.coords.latitude +
        // "<br>Longitude: " + position.coords.longitude;
        // console.log(`Lat: ${position.coords.latitude} >> Long: ${position.coords.longitude}`);
        sessionStorage.setItem('loc',JSON.stringify({lat: position.coords.latitude, long: position.coords.longitude}));
    }
    getLocation();
    console.log(JSON.parse(sessionStorage.getItem('loc')), 'located');

    function save(msg, productName){
        console.log(productName.trim())
        let fc;
        let p = JSON.parse(localStorage.getItem('products'));
        if ( msg === 'is added to cart !' ){
            console.log('in??')
            if(sessionStorage.getItem('cart')){
                console.log('in???')
                let cart = JSON.parse(sessionStorage.getItem('cart'));
                fc = cart.find(item=>{
                    if (item.name.toLowerCase() === productName.trim().toLowerCase()) return true;
                })
                if (!fc){
                    p.find(item=>{
                        if(item.name.toLowerCase() === productName.trim().toLowerCase()){
                            item['qty1'] = 1;
                            cart.push(item);
                            sessionStorage.setItem('cart', JSON.stringify(cart));
                            cartCount();
                        }
                    })
                }
            }else{
                console.log('in????')
                p.find(item=>{
                    // console.log(item);
                    console.log()
                    if(item.name.toLowerCase() === productName.trim().toLowerCase()){
                        item['qty1'] = 1;
                        console.log(item);
                        sessionStorage.setItem('cart', JSON.stringify([item]));
                        cartCount();
                    }
                })
            }
            return fc ? true : false;
        }else if ( msg === 'is added to wishlist !' ){
            console.log('out?')
            if(sessionStorage.getItem('wishlist')){
                let wish = JSON.parse(sessionStorage.getItem('wishlist'));
                fc = wish.find(item=>{
                    if (item.name.toLowerCase() === productName.trim().toLowerCase()) return true;
                })
                if (!fc){
                    p.find(item=>{
                        if(item.name.toLowerCase() === productName.trim().toLowerCase()){
                            wish.push(item);
                            sessionStorage.setItem('cart', JSON.stringify(wish));
                        }
                    })
                }
            }else{
                p.find(item=>{
                    if(item.name.toLowerCase() === productName.trim().toLowerCase()){
                        sessionStorage.setItem('wishlist', JSON.stringify([item]));
                    }
                })
            }
            return fc ? true : false;
        }
    }

    function cartCount(){
        let cart = JSON.parse(sessionStorage.getItem('cart'));
        if(cart){
            console.log(cart);
            let out = '';
            let cartTotal = 0;
            cart.forEach(i=>{
                cartTotal += (parseInt(i.qty1) * parseInt(i.price));
                out += `
                <li class="header-cart-item">
                    <div class="header-cart-item-img">
                        <img src="${i.img}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt">
                        <a href="#" class="header-cart-item-name">
                            ${i.name}
                        </a>

                        <span class="header-cart-item-info">
                            ${i.qty1} x ${
          currencyConverter(i.price)
            .currency
        }${
          currencyConverter(i.price)
            .figure
        }
                        </span>
                    </div>
                </li>
                `
            });
            document.querySelectorAll('.header-cart-wrapitem').forEach(i => {
                i.innerHTML = out;
            });

            document.querySelectorAll('.header-cart-total').forEach(c => {
                c.innerHTML = `Total: ${
          currencyConverter(cartTotal)
            .currency
        }${
          currencyConverter(cartTotal)
            .figure
        }`;
            });

            document.querySelectorAll('.cartCount').forEach(c => {
                c.innerHTML = String(cart.length);
            });

            document.querySelectorAll('.header-cart-buttons').forEach(cb=>{
                cb.style.display = 'flex';
            })
        }else{
            document.querySelectorAll('.header-cart-buttons').forEach(cb=>{
                cb.style.display = 'none';
            })

            document.querySelectorAll('.header-cart-wrapitem').forEach(i => {
                i.innerHTML = 'No item in Cart.';
                i.style.textAlign = 'center';
            });
        }
    }
    cartCount()

    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            console.log('added Cart')
            let msg = save("is added to cart !", nameProduct);
            let ms;
            (!msg) ? ms = {msg: "is added to bag !", i: 'success'}
                         : ms = {msg: 'Item already in bag !', i: 'info'}
            swal(nameProduct, ms.msg, ms.i);
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            console.log('add wish')
            let msg = save("is added to wishlist !", nameProduct);
            let ms;
            (!msg) ? ms = {msg: "is added to wishlist !", i: 'success'}
                         : ms = {msg: 'Item already in wishlist !', i: 'info'}
            swal(nameProduct, ms.msg, ms.i);
        });
    });
</script>


<!--===============================================================================================-->
<script src="js/main.js"></script>
