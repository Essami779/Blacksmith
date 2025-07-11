    <header class="site-navbar py-3" role="banner" dir="rtl">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
           <a href="{{ url('/') }}">
              <img src="{{ asset('frontend/images/WhatsApp Image 2025-07-11 at 22.38.22_43442221.jpg') }}" alt="ورشة القدسي" style="max-width: 90px; height: auto; border-radius: 50%;" />
            </a>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li><a href="{{ route('gallery') }}">المعرض</a></li>
                {{-- <li><a href="services.html">الخدمات</a></li> --}}
                <li><a href="{{ route('about') }}">من نحن</a></li>
                {{-- <li><a href="{{ route('contact.show') }}">اتصل بنا</a></li> --}}
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-left" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav mr-auto list-unstyled d-flex text-left mb-0" data-class="social">
                <li>
                  <a href="https://wa.me/967771839780" target="_blank" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/share/1EyxBLDgNc/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>
