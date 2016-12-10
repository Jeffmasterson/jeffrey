@extends('layouts.interior')

@section('content')

        
<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1>My Projects</h1>
        <h3>Just some of my most recent work</h3>
        <br>
        <a href="#portfolio" class="btn btn-dark btn-lg">See Projects</a>
    </div>
</header>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Services</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Our Work</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                <a href="#" class="btn btn-dark">View More Items</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action -->
{{--<aside class="call-to-action bg-primary">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 text-center">--}}
                {{--<h3>The buttons below are impossible to resist.</h3>--}}
                {{--<a href="#" class="btn btn-lg btn-light">Click Me!</a>--}}
                {{--<a href="#" class="btn btn-lg btn-dark">Look at Me!</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</aside>--}}

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Contact Me</strong>
                </h4>
                    <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:j.mastersonjr@gmail.com">j.mastersonjr@gmail.com</a>

                <br />
                <br />
                <ul class="list-inline">
                    <li><a href="https://github.com/Jeffmasterson" target="_blank" class="fa fa-github fa-fw fa-3x"></a></li>
                    <li><a href="https://twitter.com/JeffMonsterson" target="_blank" class="fa fa-twitter fa-fw fa-3x"></a></li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; <a href="/">Jeff</a> </p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>



@endsection