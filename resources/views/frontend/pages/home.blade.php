
  @extends('frontend.layouts.app')

  @section('title' ,'Welcome home')

  @push('css')
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("{{ asset('uploads/hero/'.$hero->image) }}");
            background-size: cover;
            background-attachment: fixed;
            background-position: top center;
        }
    </style>
  @endpush

  @section('content')
          <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $hero->title }}</h1>
      <p class="mb-4">I'm <span class="typed" data-typed-items="Web Designer, Web Developer"></span></p>
      <a href="{{asset('uploads/cv/'.$global->cv)}}" class="btn btn-primary" download="">Download CV</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>
            {!! $about->description ?? '' !!}
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('assets/frontend/')}}/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $about->title ?? '' }}</h3>

            <div class="row mt-3">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->birthday ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city ?? '' }}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about->email ?? '' }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->freelance ?? '' }}</span></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>Services</h2>
          </div>

          <div class="row">
            @if (count($services) > 0)
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="{{ $service->icon ?? '' }}"></i></div>
                        <h4 class="title"><a href="">{{ $service->title ?? '' }}</a></h4>
                        <p class="description">{{ $service->description ?? '' }}</p>
                    </div>
                @endforeach
            @endif
          </div>
        </div>
      </section><!-- End Services Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">
            @if (count($skills) > 0)
            @foreach ($skills as $skill)
            <div class="col-lg-6" data-aos="fade-up">
                <div class="progress">
                  <span class="skill">{{ $skill->name ?? 0 }} <i class="val"> {{ $skill->percentage ?? 0 }}%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            @endforeach
        @endif
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resume</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Newaz Sharif</h4>
              <p><em>Innovative and deadline-driven full stack developer with 1+ years of experience.</em></p>
              <ul>
                <li>West Shewrapa, Mirpur-1216, Dhaka</li>
                <li>+88 01743-640467</li>
                <li>+88 01741-387547</li>
                <li>newazcse1503@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Science in Computer Science and Engineering (CSE)</h4>
              <h5>2017 - Present</h5>
              <p><em>Green University Of Bangladesh, Begum Rokeya Sarani, Dhaka</em></p>
            </div>
            <div class="resume-item">
              <h4>Higher School Certificate (HSC)</h4>
              <h5>2014 - 2016</h5>
              <p><em>Rajshahi Govt City College</em></p>
            </div>
            <div class="resume-item">
                <h4>Secondary School Certificate (SSC)</h4>
                <h5>2012 - 2014</h5>
                <p><em>Singra Damdama Pilot School & College</em></p>
              </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Junior Full stack Developer</h4>
              <h5>2022 - Present</h5>
              <p><em>Ayaan Tech Limited, Gulshan-1, Niketon, Dhaka </em></p>
              <ul>
                <li>Delegate tasks to the 5 members of the develop team and provide counsel on all aspects of the project. </li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @if (count($categories) > 0)
                 @foreach ($categories as $category)
                    <li data-filter=".filter-{{ $category->slug ?? '' }}">{{ $category->name ?? '' }}</li>
                 @endforeach
              @endif
            </ul>
          </div>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($portfolios as $portfolio )
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category->slug }}">
                     <a href="{{ url('portfolio-details'.'/'.$portfolio->id) }}">
                        <div class="portfolio-wrap">
                            <div style="height:220px">
                                 <img src="{{ asset('uploads/portfolio/'.$portfolio->image)}}" class="img-fluid" alt="" style="height:100%">
                            </div>
                            <div class="portfolio-links">
                                <p class="bg-dark d-block text-white w-100 text-center py-1">{{ $portfolio->title ?? ''}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $global->location ?? '' }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $global->email ?? '' }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $global->phone ?? '' }}</p>
              </div>

              <iframe src="{{ $global->map ?? '' }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

            <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form pt-2">
                @csrf
              <div class="row">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Suucess!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                  @if($errors->has('name'))
                     <small class="error text-danger">{{ $errors->first('name') }}</small>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                  @if($errors->has('email'))
                     <small class="error text-danger">{{ $errors->first('email') }}</small>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" name="phone" id="subject">
                    @if($errors->has('phone'))
                     <small class="error text-danger">{{ $errors->first('phone') }}</small>
                     @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                    @if($errors->has('subject'))
                        <small class="error text-danger">{{ $errors->first('subject') }}</small>
                    @endif
                </div>
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10"></textarea>
                    @if($errors->has('message'))
                        <small class="error text-danger">{{ $errors->first('message') }}</small>
                    @endif
                </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection

  @push('script')

  @endpush
