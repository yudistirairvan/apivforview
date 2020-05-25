<div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                @foreach($kategori as $kategoridata)
                <li><a href="/kategori/{{ $kategoridata->kategori }}">{{ $kategoridata->kategori }}</a></li>
                @endforeach
              </div>
            </div>
            <!-- @include('public.adsartikel') -->
          </div>
