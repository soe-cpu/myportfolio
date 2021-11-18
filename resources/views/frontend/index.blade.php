<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
  
</head>
<body class="bg-light">
 
<!-- Navbar Start -->
<!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container-lg">
    <a class="navbar-brand text-danger fw-bold fs-4 " href="#">Soe <span class="bg-danger py-2">&nbsp;</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              @if (Auth::user()->status == 'admin')
                <a href="{{ url('admin/dashboard') }}" class="dropdown-item">Dashboard</a>
              @endif
             
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @endguest
      </ul>
      <span class="navbar px-1">
        <a href="#" class="btn btn-danger btn-sm">Download CV</a>
      </span>
    </div>
  </div>
</nav>
<!-- Navbar End -->
<!-- Home Section Start -->
<section class="home py-5" id="home">
  <div class="container">
    <div class="row min-vh-100 align-items-center align-content-center">
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="home-img text-center">
          <img src="{{asset ('frontend/img/pp.jpg') }}" class="rounded-circle mw-100" alt="profile img">
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0 order-md-first animate__animated animate__backInLeft">
        <div class="home-text">
          <p class="text-muted mb-1">Hello I'm Soe Linn Aung</p>
          <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Developer</h1>
          <h2 class="mt-4">Myanmar,Kachin, Myitkyina</h2>
          <p class="mt-4 text-muted">I want to become web developer. I like IT job very much.</p>
          <a href="#portfolio" class="btn btn-danger px-3 mt-3">My Work</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Home Section End -->
<!-- About Section Start -->
<section class="about bg-white py-5" id="about">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">About Me</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 animate__animated animate__backInLeft">
        <div class="about-text">
          <h3 class="fs-4 mb-3">Lorem ipsum dolor sit amet</h3>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="row text-center text-uppercase my-3">
          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">100</h4>
              <p class="text-muted">Project Complete</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">90</h4>
              <p class="text-muted">Happy Client</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="fact-item">
              <h4 class="fs-1 fw-bold">70</h4>
              <p class="text-muted">Positive Reviews</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-center">
            <a href="#" class="btn btn-danger me-5">Download Cv</a>
            <div class="social-links">
              <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-dark me-2"></a><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-dark me-2"></a><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        @foreach ($skills as $skill)
        <div class="skill-item mb-4">
          <h3 class="fs-6">{{ $skill->name }}</h3>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $skill->percent }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$skill->percent}}%</div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- Service Section Start -->
<section class="service py-5" id="service">
  <div class="container-lg">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Waht I do</h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="service-item shadow-sm  p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="fs-5 py-2">Web Development</h3>
          <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          <p></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="service-item shadow-sm  p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h3 class="fs-5 py-2">Creative Design</h3>
          <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          <p></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="service-item shadow-sm  p-4 rounded bg-white">
          <div class="icon my-3 text-danger fs-2">
            <i class="fas fa-image"></i>
          </div>
          <h3 class="fs-5 py-2">Photo Shop</h3>
          <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service Section End -->
<!-- Portfolio Section Start -->
<section class="portfolio bg-white" id="portfolio">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Latest Works</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($projects as $project)
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item">
            <img src="{{asset($project->photo)}}" class="w-100 img-thumbnail" alt="project item">
            <h3 class="text-capitalize fs-5 my-2">{{ $project->name }}</h3>
            <p class="mb-4"><a href="{{ $project->url }}" class="text-danger text-decoration-none">Live Demo</a></p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Portfolio Section End -->
<!-- Freelancer available section start -->
<section class="freelancer-avaliable py-5 bg-danger">
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="text-light fs-5">Do you have any project?</p>
        <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
        <hr>
        <a href="#contact" class="btn btn-outline-light">Cotact Me</a>
      </div>
    </div>
  </div>
</section>
<!-- Freelancer available section end -->
<!-- Testimonials section start -->
<section class="testimonials py-5 " id="testimonials">
  <div class="container lg py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Testimonials</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">
        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators ">
            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></li>
            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="1"></li>
            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="2" ></li>
          </div>
          <div class="carousel-inner p-1">
            <!-- start testi -->
            <div class="testi-item bg-white carousel-item active shadow-sm rounded p-4 mb-5">
              <div class="testi-author-info d-flex align-items-center" >
                <img src="img/testimonial/1.jpg" class="img-thumbnail rounded-circle" alt="author img">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">Mr.John</h3>
                  <p class="textt-muted m-0">Seo Manager</p>
                </div>
              </div>
              <p class="text-muted mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam maxime repellat, repellendus mollitia omnis nobis quas ab perferendis repudiandae, numquam ex. Rem distinctio sed minus recusandae blanditiis deleniti cumque ducimus.</p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- end testi -->
            <!-- start testi -->
            <div class="testi-item bg-white carousel-item shadow-sm rounded p-4 mb-5">
              <div class="testi-author-info d-flex align-items-center" >
                <img src="img/testimonial/1.jpg" class="img-thumbnail rounded-circle" alt="author img">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">Mr.John</h3>
                  <p class="textt-muted m-0">Seo Manager</p>
                </div>
              </div>
              <p class="text-muted mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam maxime repellat, repellendus mollitia omnis nobis quas ab perferendis repudiandae, numquam ex. Rem distinctio sed minus recusandae blanditiis deleniti cumque ducimus.</p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- end testi -->
            <!-- start testi -->
            <div class="testi-item bg-white carousel-item shadow-sm rounded p-4 mb-5">
              <div class="testi-author-info d-flex align-items-center" >
                <img src="img/testimonial/1.jpg" class="img-thumbnail rounded-circle" alt="author img">
                <div class="author ms-3">
                  <h3 class="fs-6 mb-1">Mr.John</h3>
                  <p class="textt-muted m-0">Seo Manager</p>
                </div>
              </div>
              <p class="text-muted mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam maxime repellat, repellendus mollitia omnis nobis quas ab perferendis repudiandae, numquam ex. Rem distinctio sed minus recusandae blanditiis deleniti cumque ducimus.</p>
              <div class="rating text-danger">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <!-- end testi -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section start -->
<!-- Contact Section Start-->
<section class="contact" id="contact">
  <div class="container-lg">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="fw-bold mb-5">Contact Me</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="contact-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="text ms-3">
            <h3 class="fs-5">Email</h3>
            <p class="text-muted">soelinaung709@gmail.com</p>
          </div>
        </div>
        <div class="contact-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-phone"></i>
          </div>
          <div class="text ms-3">
            <h3 class="fs-5">Phone</h3>
            <p class="text-muted">09-790586341</p>
          </div>
        </div>
        <div class="contact-item d-flex mb-3">
          <div class="icon fs-4 text-danger">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="text ms-3">
            <h3 class="fs-5">Address</h3>
            <p class="text-muted">Myanmar,Myitkyina</p>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="contact-form">
          <form action="">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <input type="text" placeholder="Your Name" class="form-control form-control-lg fs-6 border-0 shadow-sm">
              </div>
              <div class="col-lg-6 mb-4">
                <input type="text" placeholder="Your Email" class="form-control form-control-lg fs-6 border-0 shadow-sm">
              </div>
            </div> 
            <div class="row">
              <div class="col-lg-12 mb-4">
                <input type="text" placeholder="Subject" class="form-control form-control-lg fs-6 border-0 shadow-sm">
              </div>
            </div> 
            <div class="row">
              <div class="col-lg-12 mb-4">
                <textarea placeholder="Your Message" class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
              </div>
            </div> 
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-danger px-3">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section end-->
<!-- Footer Start -->
<footer class="footer border-top mt-3 py-3">
  <div class="container-lg">
    <div class="row">
      <div class="col-lg-12">
        <p class="m-0 text-center text-muted">&copy; 2021 Soe</p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->
<script src="{{asset ('frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>