<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="View Courseport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fwacademy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="icon" type="image/png" href="https://www.findworka.com/static/favicon.png">

  <!-- Custom fonts for this template -->
  <link href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
footer.footer {
  padding-top: 4rem;
  padding-bottom: 4rem;
  margin-bottom: 0;
}
</style>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
				<!-- /Navigation -->
                @include('inc.navbar')
		</header>
		<!-- /Header -->

{{-- <div class="container">
    <div class="center">
        <h2>Beginner to Job-ready</h2>
        Findworka Academy is equipping African youths with the most on-demand technology skills
    </div>
</div> --}}
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/adebayo/image/upload/v1580469085/6BF55C51-7431-4926-9A28-435C9FDA623D_zgzdsh.jpg')"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">Findworka Academy Online Training Courses</h1>
                    <p class="lead white-text">Findworka Academy is equipping African youths with the most on-demand technology skills</p>
                    <a class="main-button icon-button" href="/register">Get Started!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <div class="section-header">
                    <h2>Welcome to Findworka Academy</h2>
                    <p class="lead">Beginnner to Job-Ready</p>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Online Courses </h4>
                        <p>You can learn anywhere - either at our Lagos training centers or from your couch. This means that you can re-learn difficult concepts by watching our materials.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>Expert Teachers</h4>
                        <p>We have world-class facilitators to put learners through the principle of software development</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-comments"></i>
                    <div class="feature-content">
                        <h4>Saucecode Community</h4>
                        <p>Our closely knit circle of techies, staying updated on tech trends and following gig alerts.</p>
                    </div>
                </div>
                <!-- /feature -->

            </div>

            <div class="col-md-6">
                <div class="about-img">
                    <img src="https://pbs.twimg.com/media/EQ-EiIpXsAA8y8p?format=jpg&name=small" alt="">
                </div>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</div>
    
  {{-- test --}}
  <div class="container">
    <div id="courses" class="section-header">
        <h2>Have access to our courses</h2>
        <p>Jump Right Back Into Learning</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.codes4share.com/wp-content/uploads/2016/02/laravel-logo-white.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Web Development</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" role="link" class="btn btn-sm btn-outline-secondary"><a href="{{url('/webdevelopment')}}">View Course</a></button>
              </div>
              <small class="text-muted">65 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTXWnRo85gxyL1QiiQWjO1uRsJ2yBjL2gB_iAqowL8y85ai34MJ" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">UI/UX Design</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/uiux')}}">View Course</a></button>
              </div>
              <small class="text-muted">32 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu-9zFVTmRhrK2NqIA8pP62orN1cy4M3hPong5AQvisAqbTVsy" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Data Science</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/datascience')}}">View Course</a></button>
              </div>
              <small class="text-muted">45 mins</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://blog.codemagic.io/uploads/CM_Android-dev-Flutter.9c02e273ebcd875d17b80037b2147c68cc0f5055dd3f1b9d663ebedec3d66ba7.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Mobile App Development</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/mobileappdevelopment')}}">View Course</a></button>
              </div>
              <small class="text-muted">64 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- test end --}}


		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png')"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text center">Contact Us</h2>
						<p class="lead white-text">Get In Touch With Us.</p>
						<a class="main-button icon-button" href="/contact">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->
<!-- /About -->
    @include('inc.footer')
    </body>
</html>