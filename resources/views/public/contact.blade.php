<section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Hubungi Kami</h2>
          </div>
        </div>
        <div class="row mb-5">



          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>office cloud @solo</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-instagram d-block h4 text-primary"></span>
              <a href="https://www.instagram.com/waralabapediacom/" target="_blank">@waralabapediacom</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="mailto:hello@waralabapedia.com" target="_blank">hello@waralabapedia.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">



            <form action="/contactus/send" method="post" class="p-5 bg-white">
            {{ csrf_field() }}
              <h2 class="h4 text-black mb-5">Formulir</h2>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Awal</label>
                  <input type="text" name="firstname" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Akhir</label>
                  <input type="text" name="lastname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Alamat Email</label>
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesan</label>
                  <textarea name="message" name="messages" id="message" cols="30" rows="7" class="form-control" placeholder="Saran Anda begitu berarti bagi kami..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-md text-white">
                </div>
              </div>


            </form>
          </div>

        </div>
      </div>
    </section>
