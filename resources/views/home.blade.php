@extends('layout')

@section('content')

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">        
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">          
          <small>Hello, I am</small>
          <!-- <h1>{{ $siteSetting->headline }}</h1> -->
           <h1>{{ $siteSetting->name }}</h1>
          <p>{{ $siteSetting->short_bio }}</p>

          <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
        </div>

          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">          
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
 

<!-- Clients Section -->
<section id="clients" class="clients section light-background">

  <div class="container" data-aos="zoom-in">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 5,
              "spaceBetween": 120
            },
            "1200": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/clients/codeigniter.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/laravel.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/wordpress.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/mysql.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/rest_api.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/jquery.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/bootstrap.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/github.png" class="img-fluid" alt=""></div>
      </div>
    </div>

  </div>

</section><!-- /Clients Section -->


  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
      <h2>About</h2>
    </div>

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
          <p>{!! nl2br(e($siteSetting->about)) !!}</p>
          <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
        </div>

      </div>

    </div>

  </section><!-- /About Section -->



    <!-- Skills Section -->

    <section id="skills" class="skills section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">

      <div class="col-12">
        <h3>Technical Skills</h3>

        <p class="fst-italic">
          As a senior web developer, I bring together front-end finesse and back-end power
          to build complete, scalable, and high-performing digital solutions.
        </p>
      </div>

      @php
          $columns = $skills->chunk(ceil($skills->count() / 2));
      @endphp

      @foreach($columns as $column)

        <div class="col-lg-6 pt-4 pt-lg-0 content">

          <div class="skills-content skills-animation">

            @foreach($column as $skill)

              <div class="progress">

                <span class="skill">
                  <span>{{ $skill->name }}</span>
                  <i class="val">{{ $skill->proficiency }}%</i>
                </span>

                <div class="progress-bar-wrap">
                  <div
                    class="progress-bar"
                    role="progressbar"
                    aria-valuenow="{{ $skill->proficiency }}"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: {{ $skill->proficiency }}%;"
                  ></div>
                </div>

              </div>

            @endforeach

          </div>

        </div>

      @endforeach

    </div>

  </div>

</section>
<!-- /Skills Section -->
      
      @include('services')
      @include('portfolio')
      @include('contact')

  @endsection