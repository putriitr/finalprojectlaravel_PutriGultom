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
                            Selamat datang di Toko Elektronik, destinasi utama Anda untuk berbagai kebutuhan elektronik masa kini. Kami bangga menyajikan koleksi lengkap produk-produk terbaik dari merek terkemuka, mulai dari smartphone, laptop, hingga perangkat rumah pintar. Dengan fokus pada kualitas, inovasi, dan layanan pelanggan yang unggul, kami bertekad menjadi mitra terpercaya Anda dalam menghadirkan teknologi terbaru ke dalam kehidupan sehari-hari. Mari bergabung dengan kami dan temukan pengalaman berbelanja elektronik yang memuaskan di Toko Elektronik.
                            <br><br><br></p>
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
