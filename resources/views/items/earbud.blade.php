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
                 <h1 class="coffee_taital">Product Description</h1>
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
                    <center><h3><bold><span>Buy your new electronic products here now !!</span></bold></h3></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="about_section layout_padding">
        <div class="container">
           <div class="about_section_2">
              <div class="row">
                 <div class="col-md-6">
                    <div class="about_taital_box">
                       <h3 class="about_taital">WIRELESS EARBUD BLUETOOTH</h3>
                       <h4 class=" about_text">
                            <h3><strong>Kode Barang :</strong> DF076</h3>
                            <h3><strong>Merek :</strong> Sony</h3>
                            <h3><strong>Warna :</strong> Cream</h3>
                            <h3><strong>Harga :</strong> $102.99</h3>
                            <h3><strong>Jumlah Stock :</strong> 10</h3>
                            <div class="readmore_btn"><a href="/transaction">Buy Now</a></div>
                        </h4>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="image_iman"><img src="{{asset('/template/images/product-10.jpg')}}" class="about_img" style="width: 500px; height: 500px;"></div>
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
