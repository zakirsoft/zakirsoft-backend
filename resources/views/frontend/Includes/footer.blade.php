<footer id="footer_area" class="none">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer_menu">
            <span>Quick Link</span>
            <ul class="nav_links">
              <li class="nav_items"><a href="{{ route('home_website') }}" class="@yield('home_footer')" >Home</a></li>
              <li class="nav_items"><a href="{{ route('about_website') }}" class="@yield('about_footer')" >About</a></li>
              <li class="nav_items"><a href="{{ route('work_website') }}" class="@yield('work_footer')" @yield('_footer')>work</a></li>
              <li class="nav_items"><a href="{{ route('career_website') }}" class="@yield('career_footer')" >Career</a></li>
              <li class="nav_items"><a href="{{ route('contact_website') }}" class="@yield('contact_footer')" >Contact</a></li>
            </ul>
          </div>
          <div class="connect_info">
            <h4>Connect With us</h4>
            <p>
              In consequat, quam id sodales hendrerit, eros mi molestie leo,
              nec lacinia risus neque tristique augue. Proin tempus urna vel
              congue elementum.
            </p>
            <span class="email">Zakirsoft@outlook.com</span>
          </div>
          <div>
            <ul class="social_links">
              <li>
                <a href="#"><i class="fab fa-behance"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-dribbble"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-github"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="copyright_text">
            <p>&#169; 2020 - Zakirsoft</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
