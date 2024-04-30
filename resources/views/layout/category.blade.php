<!DOCTYPE html>
<html>
   <head>
    @include('partial.head')
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
                 <h1 class="coffee_taital">Category Product</h1>
              </div>
           </div>
        </div>

         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">LAPTOPS</h3>
                                 <p class="looking_text">Temukan berbagai jenis merek dan ukuran laptop di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">SMARTPHONES</h3>
                                 <p class="looking_text">Temukan berbagai jenis merek dan ukuran smartphone di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">SPEAKER</h3>
                                 <p class="looking_text">Temukan berbagai jenis merek dan ukuran speaker di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">ACCESSORIES</h3>
                                 <p class="looking_text">Temukan berbagai jenis aksesoris komputer menarik di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">PRINTER</h3>
                                 <p class="looking_text">Temukan berbagai jenis merek dan ukuran printer di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">CLEANING</h3>
                                 <p class="looking_text">Temukan berbagai jenis perangkat kebersihan menarik di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">REFRIGERATE</h3>
                                 <p class="looking_text">Temukan berbagai jenis perangkat pendingan menarik di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_box">
                                 <h3 class="types_text">COOKING</h3>
                                 <p class="looking_text">Temukan berbagai jenis peralatan masak menarik di toko kami</p>
                                 <div class="read_bt"><a href="/product">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
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
