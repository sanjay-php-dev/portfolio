    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>

            @php
                $allowedSkills = ['CodeIgniter', 'Laravel', 'WordPress', 'PHP'];
            @endphp

            @foreach($skills as $skill)
                @if(in_array($skill->name, $allowedSkills, true))
                    <li data-filter=".filter-{{ $skill->slug }}">{{ $skill->name }}</li>
                @endif
            @endforeach

          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($projects as $project)
            @php
              $imageUrl = $project->image
                          ? asset('storage/' . ltrim($project->image, '/'))
                          : asset('assets/img/portfolio/placeholder.png');
            @endphp

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ Str::slug($project->technology_name) }}">
              <img src="{{ $imageUrl }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $project->title }}</h4>
                <p>{{ $project->description }}</p>
                <a href="{{ $imageUrl }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{$project->project_url}}" target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
          @endforeach

            

            
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->