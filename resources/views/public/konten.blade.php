<!-- <div class="site-blocks-cover overlay" style="background-image: url(images/img_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">


              <div class="col-md-6 mt-lg-5 text-center">
                <h1>Where Do You Learn HTML & CSS in 2019?</h1>
                <p class="post-meta">March 21, 2019 &bull; Posted by <a href="#">Admin</a> in <a href="#">Events</a></p>

              </div>

        </div>
      </div>
    </div> -->





    <section class="site-section">
      <div class="container">
      <div class="row"> <div class="col-md-8 blog-content"> <br> </div></div>
        <div class="row">
          <div class="col-md-8 blog-content"><br> <br>
          <h3>{{ $artikel->judul }}</h3>
            <div class="row mb-5">

              <div class="col-lg-6">

                <figure><a href="#" ><img src="../data_gambar/{{ $artikel->gambar }}" alt="{{ $artikel->judul }}" class="img-fluid"></a>
                  <figcaption>{{ $artikel->judul }}</figcaption></figure>
              </div>

            </div>

            {!! $artikel->konten !!}

            <div class="pt-5">
              <p>Categories:  <a href="/kategori/{{ $artikel->id_kategori }}">{{ $artikel->id_kategori }}</a>, </p>
            </div>



          </div>
            <!-- comment section -->
            @include('public.sidebarartikel')
        </div>
      </div>
    </section>
