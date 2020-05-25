<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3 ml-auto">
              <h2 class="footer-heading mb-4">Pengunjung</h2>
              <!-- <a href='https://www.counters-free.net/'>https://www.Counters-free.net</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=6f73f66dab3ba025e50036fcd076230c513b6acc'></script> -->
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/640374/t/0"></script>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Menu</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ url('/#about-section')}}" class="smoothscroll">Tentang Kami</a></li>
                  <!-- <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li> -->
                  <li><a href="{{ url('/#blog-section')}}" class="smoothscroll">Artikel</a></li>
                  <li><a href="{{ url('/#contact-section')}}" class="smoothscroll">Hubungi Kami</a></li>
                  <li><a href="{{ url('/infoloker')}}" >Info Loker</a></li>
                  <li><a href="{{ url('/admin')}}" class="smoothscroll">Admin</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Temukan Kami Di</h2>
                <a href="https://www.facebook.com/waralabapedia" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/Waralabapedia1" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/waralabapediacom/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <!-- <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a> -->
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Berlangganan Info</h2>
            <form action="{{ url('/subscribe/add')}}" method="post" class="footer-subscribe">
            {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="text" name='email' class="form-control border-secondary text-white bg-transparent" placeholder="Masukkan Email" aria-label="Masukkan Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            <!-- | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>

            </div>
          </div>

        </div>
      </div>
    </footer>
