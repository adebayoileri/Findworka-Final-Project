@extends('layouts.app')

@section('content')
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png')"></div>
    <!-- /Backgound Image -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <h1 class="white-text">Web Development</h1>

    </div>
</div>
</div>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Curriculum</div>
                    <div class="card-body">
                        <h4>Front End Development</h4>
                    <ul>
                        <li>  HTML5 & CSS</li>
                        <li>  CSS Framework: Bootstrap</li>
                        <li> JavaScript</li>
                        <li> Object Oriented Programming (OOP)</li>
                        <li> Introduction to React</li>
                        <li> Git and Commandline</li>
                        <li>Finally Build a complete website</li>
                    </ul>
                        <a role="button" class="btn btn-primary" href="">Apply Now</a>
                        <p></p>
                        <h4>Back End Development</h4>
                        <ol>
                        <li> PHP and Laravel </li>
                        <li> Introduction to MySql</li>
                        <li> JavaScript ES6</li>
                        <li> Object Oriented Programming (OOP)</li>
                        <li> Introduction to Node JS</li>
                        <li> Data Structure and Algorithms</li>
                        <li> Git and Commandline</li>
                        <li>Finally Build a complete website</li>
                        </ol>
                        <a role="button" class="main-button icon-button" href="">Apply Now</a>

                    </div>
            </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Course Description</div>
                    <div class="card-body">
                        <h4>Front End Development</h4>
                        Front-end web development involves learning how to develop websites and applications, interact with data and convert data to graphical interface for users to view using web technologies which run on the Open Web Platform or act as compilation input for non-web platform environments.
                        <p></p>
                        <h4>Back End Development</h4>
                        Back-end web development involves learning and understanding programming languages and server architecture, as well as a mix of databases, APIs, and operating systems that power an app’s front end.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
