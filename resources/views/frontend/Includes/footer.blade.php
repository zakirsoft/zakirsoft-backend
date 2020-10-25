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
            <p>{{$content->content ?? ''}}</p>
            <span class="email">{{$content->email ?? ''}}</span>
          </div>
          <div>
            <ul class="social_links">
                @foreach ($socials as $social)
                <li>
                  <a href="{{$social->profile_link}}"><i class="{{$social->social_media}}"></i></a>
                </li>
                @endforeach
              </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="copyright_text">
            <p> Copyright © {{date('Y')}} ZakirSoft. All Rights Reserved. </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
