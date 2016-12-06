@extends('layouts.app')

@section('content')


        <!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <span class="avatar"><img src="img/jeff.jpg" style="width: 20%;" alt="" /></span>
            <h1>Jeff Masterson</h1>
            <p>Web Developer</p>
        </header>

        <footer>
            <ul class="icons">
                <li><a href="https://github.com/Jeffmasterson" class="fa-github">Github</a></li>
                <li><a href="#" class="fa-twitter">Twitter</a></li>
                <a href="contact"><h4>Contact Me</h4></a>
            </ul>
        </footer>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Jeff Masterson</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>

@endsection