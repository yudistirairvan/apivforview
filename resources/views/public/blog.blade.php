<section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Blog</h2>
          </div>
        </div>

        <div class="row">

        <?php $no = 1; ?>
                @foreach($artikel as $artikeldata)

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">


                    <div class="h-entry">
                    <a href="artikel/{{ $artikeldata->getHashId() }}">
                        <img src="/data_gambar/{{ $artikeldata->gambar }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="font-size-regular"><a href="artikel/{{ $artikeldata->getHashId() }}">{{ $artikeldata->judul}}</a></h2>
                    <div class="meta mb-4">{{ $artikeldata->day}} {{ $artikeldata->month}}, {{ $artikeldata->year}}<span class="mx-2">&bullet;</span> <a href="/kategori/{{ $artikeldata->id_kategori}}">{{ $artikeldata->id_kategori}}</a></div>
                    <p>

                    <?php
                      $nilai=$artikeldata->konten;
                      $removetags = strip_tags($nilai);
                      $data = substr($removetags,0,100);
                      echo $data;

                    ?>...
                    </p>
                    <p><a href="artikel/{{ $artikeldata->getHashId() }}">Continue Reading</a></p>
                    </div>
                </div>

                <?php $no++; ?>
                @endforeach





        </div>
      </div>
    </section>
