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
                </ul>
              </div>
            </div>
        </div>
    </div>
    <div class="menu-footer">
      <div class="container">
        <ul class="footer-social">
          <li><a href="#"> <i class="fab fa-behance"></i> </a></li>
          <li><a href="#"> <i class="fab fa-dribbble"></i> </a></li>
          <li><a href="#"> <i class="fab fa-github"></i> </a></li>
          <li><a href="#"> <i  class="fab fa-facebook-f"></i> </a></li>
          <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
          <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
          <li><a href="#"> <i  class="fab fa-linkedin-in"></i> </a></li>
        </ul>
        <div class="copyright-text">
          <p>Copyright © {{ date('Y') }} ZakirSoft. All rights Reserved.</p>
        </div>
      </div>
    </div>
</div>
