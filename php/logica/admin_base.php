<?php

session_start();


function getIniCabeceraAdmin(){
    $v_cabecera = "";
    $v_cabecera="<!DOCTYPE html>
            <html class='no-js' lang='zxx'>
            <head>
                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <meta name='description' content='meta description'>

                <title>Store e-Commerce</title>

                <!--=== Favicon ===-->
                <link rel='shortcut icon' href='assets/img/favicon.ico' type='image/x-icon'/>

                <!--== Google Fonts ==-->
                <link rel='stylesheet' type='text/css'
                    href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i'/>
                <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'/>
                <link rel='stylesheet' type='text/css'
                    href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i'/>

                <!--=== Bootstrap CSS ===-->
                <link href='assets/css/vendor/bootstrap.min.css' rel='stylesheet'>
                <!--=== Font-Awesome CSS ===-->
                <link href='assets/css/vendor/font-awesome.css' rel='stylesheet'>
                <!--=== Plugins CSS ===-->
                <link href='assets/css/plugins.css' rel='stylesheet'>
                <!--=== Main Style CSS ===-->
                <link href='assets/css/style.css' rel='stylesheet'>

                <!-- Modernizer JS -->
                <script src='assets/js/vendor/modernizr-2.8.3.min.js'></script>


                <!--[if lt IE 9]>
                <script src='//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
                <script src='//oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
                <![endif]-->

                <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                
                /* Full-width input fields */
                input[type=text], input[type=password] {
                  width: 100%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
                }
                
                /* Set a style for all buttons */
                button {
                  background-color: black;
                  color: white;
                  padding: 14px 20px;
                  margin: 8px 0;
                  border: none;
                  cursor: pointer;
                  width: 100%;
                }
                
                button:hover {
                  opacity: 0.8;
                }
                
                /* Extra styles for the cancel button */
                .cancelbtn {
                  width: auto;
                  padding: 10px 18px;
                  background-color: #f44336;
                }
                
                /* Center the image and position the close button */
                .imgcontainer {
                  text-align: center;
                  margin: 24px 0 12px 0;
                  position: relative;
                }
                
                img.avatar {
                  width: 40%;
                  border-radius: 50%;
                }
                
                .container {
                  padding: 16px;
                }
                
                span.psw {
                  float: right;
                  padding-top: 16px;
                }
                
                /* The Modal (background) */
                .modal {
                  display: none; /* Hidden by default */
                  position: fixed; /* Stay in place */
                  z-index: 1; /* Sit on top */
                  left: 0;
                  top: 0;
                  width: 70%; /* Full width */
                  height: 70%; /* Full height */
                  overflow: auto; /* Enable scroll if needed */
                  background-color: rgb(0,0,0); /* Fallback color */
                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                  padding-top: 60px;
                }
                
                /* Modal Content/Box */
                .modal-content {
                  background-color: #fefefe;
                  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                  border: 1px solid #888;
                  width: 30%; /* Could be more or less, depending on screen size */
                }
                
                /* The Close Button (x) */
                .close {
                  position: absolute;
                  right: 25px;
                  top: 0;
                  color: #000;
                  font-size: 35px;
                  font-weight: bold;
                }
                
                .close:hover,
                .close:focus {
                  color: red;
                  cursor: pointer;
                }
                
                /* Add Zoom Animation */
                .animate {
                  -webkit-animation: animatezoom 0.6s;
                  animation: animatezoom 0.6s
                }
                
                @-webkit-keyframes animatezoom {
                  from {-webkit-transform: scale(0)} 
                  to {-webkit-transform: scale(1)}
                }
                  
                @keyframes animatezoom {
                  from {transform: scale(0)} 
                  to {transform: scale(1)}
                }
                
                /* Change styles for span and cancel button on extra small screens */
                @media screen and (max-width: 300px) {
                  span.psw {
                     display: block;
                     float: none;
                  }
                  .cancelbtn {
                     width: 40%;
                  }
                }
                </style>

            </head>



            <body>

            <!--== Header Area Start ==-->
            <header id='header-area' class='header__3'>
                <div class='ruby-container'>
                    <div class='row'>
                        <!-- Logo Area Start -->
                        <div class='col-3 col-lg-1 col-xl-2 m-auto'>
                            <a href='index.html' class='logo-area'>
                                <img src='assets/img/logo-black.png' alt='Logo' class='img-fluid'/>
                            </a>
                        </div>
    ";

    return $v_cabecera;
}


function getFinCabeceraAdmin(){

    $usuario=$_SESSION['usuario'] ;
    $email=$_SESSION['email'];
    $tipo=$_SESSION['tipo']; 
    $id=$_SESSION['id']; 

    $v_cabecera = "";
   $v_cabecera = "
                 
           <!-- Header Right Meta Start -->
           <div class='col-6 col-lg-2 m-auto'>
               <div class='header-right-meta text-right'>
                   <ul>
                       
                       <li class='settings'><a href='#'><i class='fa fa-cog'></i></a>
                           <div class='site-settings d-block d-sm-flex'>
                          
                                   <dl class='my-account'>
                                   <dt>".$usuario."</dt>
                                   <dd><a href='login.php'>Datos de Perfil</a></dd>
                                   <dd><a href='salir.php'>Cerrar Sesión</a></dd>
                                   
                                   </dl>
                           
                           </div>
                       </li>
                       
                   </ul>
               </div>
           </div>


           <!-- Header Right Meta End -->
                       </div>
                   </div>
               </header>
               <!--== Header Area End ==-->
               
                   <div id='id01' class='modal'>
                   
                   <form class='modal-content animate' action='/loguear.php' method='post'>
                       <div class='imgcontainer'>
                       <span onclick='document.getElementById('id01').style.display='none'' class='close' title='Close Modal'>&times;</span>
                       <img src='img_avatar2.png' alt='Avatar' class='avatar'>
                       </div>

                       <div class='container'>
                       <label for='uname'><b>Email</b></label>
                       <input type='text' placeholder='Enter Username' name='email' required>

                       <label for='psw'><b>Contraseña</b></label>
                       <input type='password' placeholder='Enter Password' name='password' required>
                           
                       <button type='submit'>Login</button>
                       <label>
                           <input type='checkbox' checked='checked' name='remember'> Remember me
                       </label>
                       </div>

                       <div class='container' style='background-color:#f1f1f1'>
                       <button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>Cancel</button>
                       <span class='psw'>olvidaste tu <a href='#'>password?</a></span>
                       </div>
                   </form>
                   </div>

               <!-- Scroll to Top Start -->
               <a href='#' class='scrolltotop'><i class='fa fa-angle-up'></i></a>
               <!-- Scroll to Top End -->


               <!--=======================Javascript============================-->
               <!--=== Jquery Min Js ===-->
               <script src='assets/js/vendor/jquery-3.3.1.min.js'></script>
               <!--=== Jquery Migrate Min Js ===-->
               <script src='assets/js/vendor/jquery-migrate-1.4.1.min.js'></script>
               <!--=== Popper Min Js ===-->
               <script src='assets/js/vendor/popper.min.js'></script>
               <!--=== Bootstrap Min Js ===-->
               <script src='assets/js/vendor/bootstrap.min.js'></script>
               <!--=== Plugins Min Js ===-->
               <script src='assets/js/plugins.js'></script>

               <!--=== Active Js ===-->
               <script src='assets/js/active.js'></script>


               <script>
               // Get the modal
               var modal = document.getElementById('id01');
               
               // When the user clicks anywhere outside of the modal, close it
               window.onclick = function(event) {
                   if (event.target == modal) {
                       modal.style.display = 'none';
                   }
               }
               </script>

               </body>

               </html>
   ";
   return $v_cabecera;
   }


   function getFooterAdmin(){

       $v_footer= "";

       $v_footer="
       
       <!-- Footer Area Start -->
       <footer id='footer-area'>
           <!-- Footer Call to Action Start -->
           <div class='footer-callto-action'>
               <div class='ruby-container'>
                   <div class='callto-action-wrapper'>
                       <div class='row'>
                           <div class='col-lg-3 col-md-6'>
                               <!-- Single Call-to Action Start -->
                               <div class='single-callto-action d-flex'>
                                   <figure class='callto-thumb'>
                                       <img src='assets/img/air-plane.png' alt='WorldWide Shipping'/>
                                   </figure>
                                   <div class='callto-info'>
                                       <h2>Free Shipping Worldwide</h2>
                                       <p>On order over $150 - 7 days a week</p>
                                   </div>
                               </div>
                               <!-- Single Call-to Action End -->
                           </div>

                           <div class='col-lg-3 col-md-6'>
                               <!-- Single Call-to Action Start -->
                               <div class='single-callto-action d-flex'>
                                   <figure class='callto-thumb'>
                                       <img src='assets/img/support.png' alt='Support'/>
                                   </figure>
                                   <div class='callto-info'>
                                       <h2>24/7 CUSTOMER SERVICE</h2>
                                       <p>Call us 24/7 at 000 - 123 - 456k</p>
                                   </div>
                               </div>
                               <!-- Single Call-to Action End -->
                           </div>

                           <div class='col-lg-3 col-md-6'>
                               <!-- Single Call-to Action Start -->
                               <div class='single-callto-action d-flex'>
                                   <figure class='callto-thumb'>
                                       <img src='assets/img/money-back.png' alt='Money Back'/>
                                   </figure>
                                   <div class='callto-info'>
                                       <h2>MONEY BACK Guarantee!</h2>
                                       <p>Send within 30 days</p>
                                   </div>
                               </div>
                               <!-- Single Call-to Action End -->
                           </div>

                           <div class='col-lg-3 col-md-6'>
                               <!-- Single Call-to Action Start -->
                               <div class='single-callto-action d-flex'>
                                   <figure class='callto-thumb'>
                                       <img src='assets/img/cog.png' alt='Guide'/>
                                   </figure>
                                   <div class='callto-info'>
                                       <h2>SHOPPING GUIDE</h2>
                                       <p>Quis Eum Iure Reprehenderit</p>
                                   </div>
                               </div>
                               <!-- Single Call-to Action End -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Footer Call to Action End -->

           <!-- Footer Follow Up Area Start -->
           <div class='footer-followup-area'>
               <div class='ruby-container'>
                   <div class='followup-wrapper'>
                       <div class='row'>
                           <div class='col-lg-12 text-center'>
                               <div class='follow-content-wrap'>
                                   <a href='index.html' class='logo'><img src='assets/img/logo.png' alt='logo'/></a>
                                   <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>

                                   <div class='footer-social-icons'>
                                       <a href='#'><i class='fa fa-facebook'></i></a>
                                       <a href='#'><i class='fa fa-twitter'></i></a>
                                       <a href='#'><i class='fa fa-pinterest'></i></a>
                                       <a href='#'><i class='fa fa-instagram'></i></a>
                                       <a href='#'><i class='fa fa-flickr'></i></a>
                                   </div>

                                   <a href='#'><img src='assets/img/payment.png' alt='Payment Method'/></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Footer Follow Up Area End -->

           <!-- Footer Image Gallery Area Start -->
           <div class='footer-image-gallery'>
               <div class='ruby-container'>
                   <div class='image-gallery-wrapper'>
                       <div class='row'>
                           <div class='col-lg-12'>
                               <div class='imgage-gallery-carousel owl-carousel'>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-1.jpg' alt='Gallery'/></a>
                                   </div>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-2.jpg' alt='Gallery'/></a>
                                   </div>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-3.jpg' alt='Gallery'/></a>
                                   </div>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-4.jpg' alt='Gallery'/></a>
                                   </div>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-3.jpg' alt='Gallery'/></a>
                                   </div>
                                   <div class='gallery-item'>
                                       <a href='#'><img src='assets/img/gallery-img-2.jpg' alt='Gallery'/></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Footer Image Gallery Area End -->

           <!-- Copyright Area Start -->
           <div class='copyright-area'>
               <div class='ruby-container'>
                   <div class='row'>
                       <div class='col-lg-12 text-center'>
                           <div class='copyright-text'>
                               <p><a href='templatespoint.net'>Templatespoint</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Copyright Area End -->

       </footer>
       <!-- Footer Area End -->

       <!-- Start All Modal Content -->
       <!--== Product Quick View Modal Area Wrap ==-->
       <div class='modal fade' id='quickView' tabindex='-1' role='dialog'>
           <div class='modal-dialog modal-dialog-centered' role='document'>
               <div class='modal-content'>
                   <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                       <span aria-hidden='true'><img src='assets/img/cancel.png' alt='Close' class='img-fluid'/></span>
                   </button>
                   <div class='modal-body'>
                       <div class='quick-view-content single-product-page-content'>
                           <div class='row'>
                               <!-- Product Thumbnail Start -->
                               <div class='col-lg-5 col-md-6'>
                                   <div class='product-thumbnail-wrap'>
                                       <div class='product-thumb-carousel owl-carousel'>
                                           <div class='single-thumb-item'>
                                               <a href='single-product.html'><img class='img-fluid'
                                                                               src='assets/img/single-pro-thumb.jpg'
                                                                               alt='Product'/></a>
                                           </div>

                                           <div class='single-thumb-item'>
                                               <a href='single-product.html'><img class='img-fluid'
                                                                               src='assets/img/single-pro-thumb-2.jpg'
                                                                               alt='Product'/></a>
                                           </div>

                                           <div class='single-thumb-item'>
                                               <a href='single-product.html'><img class='img-fluid'
                                                                               src='assets/img/single-pro-thumb-3.jpg'
                                                                               alt='Product'/></a>
                                           </div>

                                           <div class='single-thumb-item'>
                                               <a href='single-product.html'><img class='img-fluid'
                                                                               src='assets/img/single-pro-thumb-4.jpg'
                                                                               alt='Product'/></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!-- Product Thumbnail End -->

                               <!-- Product Details Start -->
                               <div class='col-lg-7 col-md-6 mt-5 mt-md-0'>
                                   <div class='product-details'>
                                       <h2><a href='single-product.html'>Crown Summit Backpack</a></h2>

                                       <div class='rating'>
                                           <i class='fa fa-star'></i>
                                           <i class='fa fa-star'></i>
                                           <i class='fa fa-star'></i>
                                           <i class='fa fa-star-half'></i>
                                           <i class='fa fa-star-o'></i>
                                       </div>

                                       <span class='price'>$52.00</span>

                                       <div class='product-info-stock-sku'>
                                           <span class='product-stock-status'>In Stock</span>
                                           <span class='product-sku-status ml-5'><strong>SKU</strong> MH03</span>
                                       </div>

                                       <p class='products-desc'>Ideal for cold-weathered training worked lorem ipsum outdoors,
                                           the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out
                                           the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor sit
                                           amet, consectetur adipisicing elit. Enim, reprehenderit.</p>
                                       <div class='shopping-option-item'>
                                           <h4>Color</h4>
                                           <ul class='color-option-select d-flex'>
                                               <li class='color-item black'>
                                                   <div class='color-hvr'>
                                                       <span class='color-fill'></span>
                                                       <span class='color-name'>Black</span>
                                                   </div>
                                               </li>

                                               <li class='color-item green'>
                                                   <div class='color-hvr'>
                                                       <span class='color-fill'></span>
                                                       <span class='color-name'>green</span>
                                                   </div>
                                               </li>

                                               <li class='color-item orange'>
                                                   <div class='color-hvr'>
                                                       <span class='color-fill'></span>
                                                       <span class='color-name'>Orange</span>
                                                   </div>
                                               </li>
                                           </ul>
                                       </div>

                                       <div class='product-quantity d-flex align-items-center'>
                                           <div class='quantity-field'>
                                               <label for='qty'>Qty</label>
                                               <input type='number' id='qty' min='1' max='100' value='1'/>
                                           </div>

                                           <a href='cart.html' class='btn btn-add-to-cart'>Add to Cart</a>
                                       </div>
                                   </div>
                               </div>
                               <!-- Product Details End -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--== Product Quick View Modal Area End ==-->
       <!-- End All Modal Content -->
       ";
       return $v_footer;
   }

