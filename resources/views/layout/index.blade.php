<!DOCTYPE html>
<html>
   <head>
        @include('partial.head')
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            @include('partial.nav')
         </div>
         <!-- banner section start -->
         @include('partial.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_box">
                        <h1 class="about_taital">About Our shop</h1>
                        <h1 class="about_taital_1">Electronic distribution</h1>
                        <p class=" about_text">
                            Selamat datang di Toko Elektronik, destinasi utama Anda untuk berbagai kebutuhan elektronik masa kini. Kami bangga menyajikan koleksi lengkap produk-produk terbaik dari merek terkemuka, mulai dari smartphone,
                        </p>
                        <div class="readmore_btn"><a href="/about">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="image_iman"><img src="{{asset('/template/images/about-img.jpg')}}" class="about_img"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
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
      <!-- client section start -->
      <div class="client_section layout_padding">
        <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">Customer Reviews</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="{{asset('/template/images/customer-img.png')}}"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Lucas Moark</h3>
                                    <p class="client_text">Produk yang dijual berkualitas dengan bahan-bahan yang kuat dan tidak mudah rusak. Pengiriman untuk produknya juga aman dan cepat sampai tujuan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital">Customer Reviews</h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img"><img src="{{asset('/template/images/client-img3.png')}}"></div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text">Joanne Morgan</h3>
                                    <p class="client_text">Produk yang dijual berkualitas dengan bahan-bahan yang kuat dan tidak mudah rusak. Pengiriman untuk produknya juga aman dan cepat sampai tujuan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Leave Message</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="Message-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                        <div class="send_bt"><a href="#">Send</a></div>
                     </div>
                  </div>
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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
