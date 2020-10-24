<div class="fullscreen-menu">
    <div class="menu-body">
      <div class="container">
        <div class="menu-container">
          <div class="menu-close">
            <ul class="close-bar">
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="main-menu">
            <ul>
                <li> <a href="{{ route('home_website') }}"  class="@yield('home')" > <span>01</span> Home </a> </li>
                <li> <a href="{{ route('about_website') }}"  class="@yield('about')" > <span>02</span> About </a> </li>
                <li> <a href="{{ route('work_website') }}"  class="@yield('work')" > <span>03</span> Work </a> </li>
                <li> <a href="{{ route('career_website') }}" class=" @yield('career')" > <span>04</span> Career </a> </li>
                <li> <a href="{{ route('contact_website') }}"  class="@yield('contact')" > <span>05</span> Contact </a> </li>
              {{-- <li> <a href="index.html" class="active"> <span>01</span> Home </a> </li>
              <li> <a href="about.html"> <span>02</span> About </a> </li>
              <li> <a href="work.html"> <span>03</span> Work </a> </li>
              <li> <a href="career.html"> <span>04</span> Career </a> </li>
              <li> <a href="contact.html"> <span>05</span> Contact </a> </li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-footer">
      <div class="container">
        <ul class="footer-social">
            @foreach ($socials as $social)
            <li>
              <a href="{{$social->profile_link}}"><i class="{{$social->social_media}}"></i></a>
            </li>
            @endforeach
        </ul>
        <div class="copyright-text">
          <p> &copy; {{ date('Y') }} - Zakirsoft </h5>
        </div>
      </div>
    </div>
  </div>
