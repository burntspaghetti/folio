<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpaceshipEarth</title>

    <link rel="shortcut icon" href="http://png.findicons.com/files/icons/701/devcom_network/128/globe_vista.png">
    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-grayscale-1.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startbootstrap-grayscale-1.0.3/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-globe"></i>  <span class="light">Nick</span> Bertanzetti
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#technologies">Tech</a>
                </li>
                <li>
                    <a class="page-scroll" href="#projects">Projects</a>
                </li>
                {{--<li>--}}
                    {{--<a class="page-scroll" href="#about">Info</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="page-scroll" href="#education">Education</a>--}}
                {{--</li>--}}
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                {{--<li>--}}
                    {{--<a class="page-scroll" href="#download">Download</a>--}}
                {{--</li>--}}


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
{{--<header class="intro" style="background: url(images/earth.jpg); background-size:cover; background-repeat:no-repeat;">--}}
<header class="intro">
    <section id="home" class="container content-section text-center">
    <div class="intro-body">
        <div class="container">
            <div class="row" align="center">
                    <h1>Better, Faster, Cheaper.</h1>
                    <p>Automation and Full Stack Web Development </p>
                <p><i class="fa fa-linux" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Yes, I am a space penguin." id="blah"></i></p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
            </div>
        </div>
    </div>
    </section>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2></h2>
            <p>
                "We are on our ever swifter way to becoming an omni-integrated, majorly literate, unified Spaceship Earth society. The new human networks' emergence represents the natural evolutionary expansion into the just completed, thirty-years-in-its-buildings world-embracing, physical communications network. The new reorienting of human networking constitutes the heart-and-mind-pumped flow of life and intellect into the world arteries."
            </p>
            <p>-Buckminster Fuller, <a href="http://en.wikipedia.org/wiki/Critical_Path_%28book%29" target="_blank">Critical Path</a>, 1981</p>
        </div>
    </div>
    <a href="#technologies" class="btn btn-circle page-scroll">
        <i class="fa fa-angle-double-down animated"></i>
    </a>
</section>


<section id="earth" class="container content-section text-center">
    <div class="row" style="background: url(images/earth.jpg) center center; background-size: auto 100%; padding-bottom: 100%;">
        <div class="col-lg-8 col-lg-offset-2">

        </div>
    </div>
</section>



<section id="technologies" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Tech</h2>

            <h1><i class="fa fa-keyboard-o"></i></h1>

            <p>
                <b>Languages: </b>PHP, SQL, JavaScript, HTML, CSS, C#*, C++*
            </p>
            <p>
                <b>Frameworks: </b>Laravel, jQuery, Bootstrap, ASP.NET MVC4*
            </p>
            <p>
                <b>Databases: </b>Oracle, MySQL, Microsoft SSMS 2010/2012*
            </p>
            <p>
                <b>Servers: </b>Apache, Nginx
            </p>
            <p>
                <b>OS: </b>Linux (Ubuntu, OpenSUSE), Microsoft 7/8
            </p>
            <p>
                <b>IDE: </b>PHP Storm, Visual Studios 2010/2012*
            </p>
            <p>
                <b>Tools: </b>Git, JIRA, Vagrant, Bower, Composer, Sublime Text
            </p>
            <p>
                <b>Methodologies: </b>Agile Scrum, Waterfall
            </p>
            * Technologies used in <a href="http://uanews.ua.edu/2013/07/ua-mis-program-ranked-fourth-among-public-institutions/" target="_blank">university MIS projects </a>
        </div>
    </div>
    <a href="#projects" class="btn btn-circle page-scroll">
        <i class="fa fa-angle-double-down animated"></i>
    </a>
</section>

{{--<section id="tech" class="container content-section text-center">--}}
    {{--<div class="row" style="background: url(images/trim-technology.jpg) no-repeat center center; background-size: 100% auto; padding-bottom: 100%;">--}}
        {{--<div class="col-lg-8 col-lg-offset-2">--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="projects" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Projects</h2>
            <h2><i class="fa fa-folder-open-o"></i></h2>

            <h1 class="page-header"></h1>
            <h4>Immunization Automation</h4>
            <h2><i class="fa fa-heartbeat"></i></h2>
            <p>
                <b>Client: The University of Alabama Student Health Center</b>
                <br>
                2015
                <br>
                Designed, developed, tested, and deployed mobile friendly web solution to automate student immunization record collection and verification process, eliminating 78,000+ hours of aggregate process completion time per year.
            </p>
            <h1 class="page-header"></h1>
            <br>

            <h4>Admissions Algorithms</h4>
            <h2><i class="fa fa-calculator"></i></h2>
            <p>
                <b>Client: The University of Alabama College of Nursing</b>
                <br>
                2015
                <br>
                Developed and maintained ranking algorithms to automate college admissions process.
            </p>
            <h1 class="page-header"></h1>
            <br>
            <h4>Authorization Web Service</h4>
            <h2><i class="fa fa-lock"></i></h2>
            <p>
                <b>Client: Philo TV, The University of Alabama</b>
                <br>
                2014
                <br>
                Developed encrypted authorization and authentication web service to protect student information while enabling delivery of third party media services.
            </p>
            <h1 class="page-header"></h1>
            <br>
            <h4>Software Market Analysis</h4>
            <h2><i class="fa fa-line-chart"></i></h2>
            <p>
                <b>Client: University of Alabama Career Center</b>
                <br>
                2014
                <br>
                Analyzed current state of e-recruiting systems and developed software recommendation based on market research, stakeholder requirements, and vendor demos.
            </p>
            <h1 class="page-header"></h1>
            <br>
            <h4>Report Composer</h4>
            <h2><i class="fa fa-bar-chart"></i></h2>
            <p>
                <b>Client: Randall-Reilly</b>
                <br>
                2013
                <br>
                Designed and developed Google Analytics report customization tool which helped to improve customer service efficiency by cutting total process completion time of up to 2 weeks down to minutes.
            </p>
            <h1 class="page-header"></h1>
                <br>
            <h4>Legacy BPI Analysis</h4>
            <h2><i class="fa fa-random"></i></h2>
            <p>
                <b>Client: Protective Life Insurance Company</b>
                <br>
                2013
                <br>
                Mapped and analyzed current state workflows for legacy claims systems, identifying pain points and manual processes to be automated in the future state.
            </p>
            <h1 class="page-header"></h1>
                <br>
        </div>
    </div>
    <a href="#contact" class="btn btn-circle page-scroll">
        <i class="fa fa-angle-double-down animated"></i>
    </a>
</section>



<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact</h2>
            <h2><i class="fa fa-envelope-o"></i></h2>
            <p>Let's team up.</p>
            <p>What can we do together?</p>
            <p><a href="mailto:nsbertanzetti@gmail.com">nsbertanzetti@gmail.com</a>
            </p>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://www.linkedin.com/pub/nick-bertanzetti/47/574/277" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw" title="LinkedIn"></i> <span class="network-name"></span></a>
                </li>
                <li>
                    <a href="https://github.com/burntspaghetti" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name"></span></a>
                </li>
                <li>
                    <a href="http://stackoverflow.com/users/3895839/thesingularity" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-stack-overflow"></i> <span class="network-name"></span></a>
                </li>

            </ul>
            {{--{{ Form::open(array('action' => 'HomeController@form', 'class' => 'clearfix', 'style' => 'padding:1em 3em;')) }}--}}


            {{--<div class="form-group">--}}
                {{--<label for="contactForm">Say Hello:</label>--}}

                {{--<textarea style="border: 1px solid #42dca3; background: #333; color:#42dca3" class="form-control" id="contactForm" rows="3"></textarea>--}}
            {{--</div>--}}
            {{--<button class="btn btn-default" type="submit">Submit</button>--}}


            {{--{{ Form::close() }}--}}
        </div>
    </div>
</section>



<!-- Map Section -->


<!-- Footer -->
<footer>
    <div class="container text-center">
        <p></p>
        Don't worry, be happy
        <i class="fa fa-smile-o"></i>
    </div>
</footer>

<!-- jQuery -->
<script src="startbootstrap-grayscale-1.0.3/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="startbootstrap-grayscale-1.0.3/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="startbootstrap-grayscale-1.0.3/js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom Theme JavaScript -->
<script src="startbootstrap-grayscale-1.0.3/js/grayscale.js"></script>


</body>

</html>
