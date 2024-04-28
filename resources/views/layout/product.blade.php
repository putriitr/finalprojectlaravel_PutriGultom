<!DOCTYPE html>
<html>
   <head>
    @include('partial.head')
    <style>
        .product-box i img {
            width: 300px;
            height: 300px;
        }
    </style>
   </head>
   <body>
      <div class="header_section header_bg">
         <div class="container">
            @include('partial.nav')
         </div>
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="coffee_taital">Our Product</h1>
              </div>
           </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                    <center><h3><bold><span>We package the products with best quality to make you a happy customer.</span></bold></h3></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                    <a href="/laptop">
                        <i><img src="{{('/template/images/product-1.jpg')}}"/></i>
                    </a>
                     <h3>LG Laptop</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                    <a href="/smartphone">
                        <i><img src="{{('/template/images/product-2.jpg')}}"/></i>
                    </a>
                     <h3>Apple iPhone 14</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                        <a href="/speaker">
                        <i><img src="{{('/template/images/product-3.jpg')}}"/></i>
                    </a>
                     <h3>Speaker Bluetooth</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/mouse">
                        <i><img src="{{('/template/images/product-4.jpg')}}"/></i>
                    </a>
                     <h3>Logitec Aurora G705 Wireless Mouse</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/printer">>
                        <i><img src="{{('/template/images/product-5.jpg')}}"/></i>
                    </a>
                     <h3>Epson WF-2850 Printer</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/vacuum">
                        <i><img src="{{('/template/images/product-6.jpg')}}"/></i>
                    </a>
                     <h3>Dustbuster Hand Vacuum</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/refrigerator">
                        <i><img src="{{('/template/images/product-7.jpg')}}"/></i>
                    </a>
                     <h3>Samsung Refrigerator</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/washing">
                        <i><img src="{{('/template/images/product-8.jpg')}}"/></i>
                    </a>
                     <h3>Samsung Washing Machine</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/tv">
                        <i><img src="{{('/template/images/product-9.jpg')}}"/></i>
                    </a>
                     <h3>ENGEL Television</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <<a href="/earbud">
                        <i><img src="{{('/template/images/product-10.jpg')}}"/></i>
                    </a>
                     <h3>Wireless Earbud Bluetooth</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/microwave">
                        <i><img src="{{('/template/images/product-11.jpg')}}"/></i>
                    </a>
                     <h3>HADEN Microwave</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <a href="/iron">
                        <i><img src="{{('/template/images/product-12.jpg')}}"/></i>
                    </a>
                     <h3>Portable Travel Stream Iron</h3>
                  </div>
               </div>
               </div>
            </div>
        </div>
        <!-- coffee section end -->
        <br><br><br>
        <!-- footer section start -->
        @include('partial.footer')
        <!-- footer section end -->
        <!-- copyright section start -->
        @include('partial.copyright')
        <!-- copyright section end -->
        <!-- Javascript files-->
        @include('partial.javascript')
    </body>
</html>
