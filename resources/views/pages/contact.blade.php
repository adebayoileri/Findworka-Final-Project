@extends('layouts.app')

@section('content')
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png')"></div>
    <!-- /Backgound Image -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <ul class="hero-area-tree">
            <li><a href="/">Home</a></li>
            <li>Contact</li>
        </ul>
        <h1 class="white-text">Get In Touch</h1>

    </div>
</div>
</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

<!-- container -->
<div class="container">

<!-- row -->
<div class="row">

    <!-- contact form -->
    <div class="col-md-6">
        <div class="contact-form">
            <h4>Send A Message</h4>
            <form>
                <input class="input" type="text" name="name" placeholder="Name">
                <input class="input" type="email" name="email" placeholder="Email">
                <input class="input" type="text" name="subject" placeholder="Subject">
                <textarea class="input" name="message" placeholder="Enter your Message"></textarea>
                <button class="main-button icon-button pull-right">Send Message</button>
            </form>
        </div>
    </div>
    <!-- /contact form -->

    <!-- contact information -->
    <div class="col-md-5 col-md-offset-1">
        <h4>Contact Information</h4>
        <ul class="contact-details">
            <li><i class="fa fa-envelope"></i>admin@findworkaacademy</li>
            <li><i class="fa fa-phone"></i>234-123456789</li>
            <li><i class="fa fa-map-marker"></i>2 Connal Road Yaba lagos</li>
        </ul>
    </div>
    <!-- contact information -->

</div>
<!-- /row -->

</div>
<!-- /container -->

</div>
<!-- /Contact -->
@endsection
