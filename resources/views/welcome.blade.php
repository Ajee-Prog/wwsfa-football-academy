@extends('layouts.app')
@section('content')

{{-- <div class="container"> --}}
    {{-- Start restaurant Banner here.. --}}

    {{-- <div class="row mt-1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="/storage/{{$post->image}}" class="d-block w-100 " style="height: 525px;">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/storage/{{$post->image}}" class="d-block w-100 " alt="..." style="height: 525px;">
              </div>
              <div class="carousel-item">
                <img src="/storage/{{$post->image}}" class="d-block w-100 " alt="..." style="height: 525px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div> --}}
    {{-- END Resturant-banner here --}}

    {{-- <div class="row mt-2"> --}}

        {{-- @foreach ($user->posts as $post)
        <div class="col col-sm-6 col-md-4 mb-3"> --}}
            {{-- @foreach ($recipes as $recipe) --}}
            {{-- <div class="card">

                <img src="/storage/{{$post->image}}" class="d-block w-100 ">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"> <b> {{$user->profile->title}} </b></h6>
                        <p class="card-text">{{$user->profile->description}}</p>

                        <button  class="card-link btn btn-primary toggle-class" data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $recipe->food_status ? '' : '' }}><i class="bi bi-hand-thumbs-up-fill"></i>{{$recipe->food_staus}}

                        </button> --}}
                        {{-- <button  class="card-link btn btn-primary toggle-class" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $recipe->food_status ? '' : '' }}><i class="bi bi-hand-thumbs-up-fill"></i>{{$recipe->food_staus}}
                            <input data-id="{{$recipe->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Like" data-off="Deslike" {{ $recipe->food_status ? '' : '' }}>
                        </button> --}}
                {{-- </div>
            </div> --}}

            {{-- @endforeach --}}
            {{-- <div class="card">

                    <img src="{{asset('images/food1.jpg')}}" class="d-block w-100 ">

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"> <b> Food subtitle </b></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link btn btn-primary"><i class="bi bi-hand-thumbs-down-fill"></i></i>Like</a>
                </div>
            </div> --}}
        {{-- </div>
        @endforeach --}}





{{-- </div> --}}

{{-- @endsection --}}

{{-- Copied here --}}


{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title> --}}

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">




    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> --}}


    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> --}}


    <!-- Custom styles for this template -->
    {{-- <link href="carousel.css" rel="stylesheet">
  </head>
  <body> --}}

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <div class="containe"><div class="row align-items-center justify-content-center mr-5 ">


        <div class="col">
            <img src="{{asset('/images/WwolfLogo.jpeg')}}" class="d-flex w30 rounded-circle  ml-4 " style="height: 20px; width:20px;">
            <a class="navbar-brand" href="{{ url('/') }}">WWSFA</a>
        </div>
        {{-- <a class="navbar-brand" href="#">WWSFA</a> --}}
        </div></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/teams') }}">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Training</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/posts/show') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/p/{post}') }}">Join Member</a>
            </li>
            </ul>
            {{-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
    </div>
  </nav>
</header>

{{-- <main> --}}
<div class="container-fluid p-3 fixed bg-success">
  <div class="row">
    <div class="col-md-12"> <marquee behavior="" direction=""> <strong>TODAY's Tournament:</strong>  <span class="text-warning">March VS March</span> Time: 4pm - 6pm </marquee></div>
  </div>

  </div>
  <div class="container-fluid p-4 bg-dark">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/images/TeamA1.jpeg')}}" class="d-block w-100 " style="height: 525px;">

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            <a href="instagram"><i class="bi bi-instagram" style="font-size: 2rem; color: cornflowerblue;"></i></a>
                            <a href="twitter"><i class="bi bi-twitter ml-5" style="font-size: 2rem; color: #55acee;"></i></a>
                            <a href="facebook"><i class="bi bi-facebook ml-5" style="font-size: 2rem; color: #3b5998;"></i></a>
                            <a href="whatsapp"><i class="bi bi-whatsapp ml-5" style="font-size: 2rem; color: green;"></i></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
                {{-- <img src="/images/WwolfLogo.jpeg" alt="" class="rounded-circle w-100"> --}}
                <img src="{{asset('/images/TeamB2.jpeg')}}" class="d-block w-100 " style="height: 525px;">

                <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                </div>
                </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/images/TeamC1.jpeg')}}" class="d-block w-100 " style="height: 525px;">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        {{-- <div class="row"> --}}
                            <a href="instagram"><i class="bi bi-instagram" style="font-size: 2rem; color: cornflowerblue;"></i></a>
                            <a href="twitter"><i class="bi bi-twitter ml-5" style="font-size: 2rem; color: #55acee;"></i></a>
                            <a href="facebook"><i class="bi bi-facebook ml-5" style="font-size: 2rem; color: #3b5998;"></i></a>
                            <a href="whatsapp"><i class="bi bi-whatsapp ml-5" style="font-size: 2rem; color: green;"></i></a>

                        {{-- </div> --}}
                    </div>
                </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      <div class="container-fluid bg-dark pt-3">


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing ">

        <!-- Three columns of text below the carousel -->
        <div class="row mt-3">
          <div class="col-lg-4">
            {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
            <img src="{{asset('/images/Yusuf-Passport-280.jpg')}}" class="d-block rounded-circle w100 " style="height: 140px; width:140px;"  height="140">

            <h2>Captain Team A</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="{{asset('/images/WwolfLogo.jpeg')}}" class="d-block rounded-circle w100 " style="height: 140px; width:140px;"  height="140">

            <h2>Captain Team B</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="{{asset('/images/WwolfLogo.jpeg')}}" class="d-block w100 " style="height: 140px; width:140px;"  height="140">

            <h2>Captain Team C</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View Profile &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette bg-secondary p-3">
          <div class="col-md-5">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>
          <div class="col-md-7">
            {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
            <img src="{{asset('/images/TeamA1.jpeg')}}" class="d-block w-100 " style="height: 525px;">

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette bg-warnin p-4">
          <div class="col-md-5 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          </div>
          <div class="col-md-7 order-md-1">
            <img src="{{asset('/images/TeamB2.jpeg')}}" class="d-block w-100 " style="height: 525px;">

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette bg-primary p-5">
          <div class="col-md-5">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-7">
            <img src="{{asset('/images/TeamC1.jpeg')}}" class="d-block w-100 " style="height: 525px;">

          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
        <section>
          <div class="container">
            <div class="row">
              <img src="{{asset('/images/balls.jpg')}}" alt="" class="w-100 h-100">
            </div>
          </div>
        </section>
        <section class="mt-2 bg-primary">
          <div class="container">
            <div class="row">
              <div class="col col-md-4">
                <img src="{{asset('/images/trainig1.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/kid.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/kidFit.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/fitness.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/adultFit.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/fullField.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/balls.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/trainingField.jpg')}}" alt="" class="mt-2">
              </div>
              <div class="col col-md-4">
                <img src="{{asset('/images/balls.jpg')}}" alt="" class="mt-2">
              </div>
            </div>
          </div>
        </section>
        {{-- New external section --}}
        <section class="meetourfamily">
          <div class="container">
            <div class="row">
              <div class="col col-8">
                <div class="container">
                  <div class="row row-col justify-content-center section-heading">
                    <p class="heading-text-small">Meet Us</p>
                    <h2 class="heading-main">Our Team Members</h2>
                  </div>
                <div class="meetus-content">
                <div class="row">
                  <div class="col-lg-8">
                  {{-- <figure class="large-image-block">
                  <img class="img-responsive img-rounded" src="https://quotevelocity.com/pages/lifestyle/images/family.png" alt="Meet Our Family">

                  </figure> --}}
                  </div>
                  <div class="col-lg-4">
                    <div class="meetusimagecard">
                      <a href="https://www.linkedin.com/company/quotevelocity/" target="_blank">
                        <figure class="figure">
                          <img src="https://quotevelocity.com/pages/lifestyle/images/image-card1.jpg" alt="" class="img-responsive center-block img-rounded">
                        </figure>
                        <div class="card-content2">
                          <h4>Connect with us on linkedin</h4>
                          <img class="img-responsive" src="https://quotevelocity.com/pages/lifestyle/images/quotevelocity_linkedin.jpg" alt="LinkedIn">
                        </div>
                      </a>
                    </div>
                  </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 no-padding">
                  <div class="col-lg-6 col-md-6">
                    <div class="meetusimagecard">
                      <figure class="figure">
                      <img src="{{asset('/images/messi.jpg')}}" alt="" class="w-100 img-responsive center-block img-rounded">
                      </figure>
                      <div class="card-content">
                        <h4>Cristian Castellanos</h4>
                        <small>Senior Customer Support Advocate</small>
                        <p>This company has been extremely rewarding as I’ve been able to help people while making money from home. Grateful for the personal development programs and team comradery!</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-4"></div>
            </div>
          </div>


            </section>
        {{-- End new external section --}}

      </div><!-- /.container -->
  </div>
  @endsection


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>

