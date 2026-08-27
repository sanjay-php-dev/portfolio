<footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Tech</span>
          </a>
          <div class="footer-contact pt-3">
            @php
              $location = explode('|', $siteSetting->location);
            @endphp
            <p>{{$location[0]}}</p>
            <p>{{$location[1]}}</p>
            <p class="mt-3"><strong>Phone:</strong> <a href="tel:{{$siteSetting->phone}}" class="cf_phone">{{$siteSetting->phone}}</a></p>
            <p><strong>Email:</strong> <a href="mailto:{{$siteSetting->email}}" class="cf_email">{{$siteSetting->email}}</a></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#skills">Skills</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Web development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">APIs & Integration</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">CMS</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Responsive UI</a></li>
          </ul>
        </div>

        
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>More services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Hosting & Automation</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Database optimization</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Version control & Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Resolved bugs</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12">
          <h4>Follow Me</h4>
          <p>Follow me on social media for the latest updates, project showcases, tips, and more.</p>
          <div class="social-links d-flex">
            
            <a href="{{ $siteSetting->github_url }}"><i class="bi bi-github"></i></a>
            <a href="{{ $siteSetting->linkedin_url }}"><i class="bi bi-linkedin"></i></a>
            <a href="{{ $siteSetting->facebook_url }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $siteSetting->instagram_url }}"><i class="bi bi-instagram"></i></a>

          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright {{ date("Y") }}</span> <strong class="px-1 sitename">Tech</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed & Developed by <a href="{{ url('/') }}">{{$siteSetting->name}}</a>
      </div>
    </div>

  </footer>