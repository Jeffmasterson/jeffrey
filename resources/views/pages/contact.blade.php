@extends('layouts.front_page')

@section('content')


        <!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <a href="/"><span class="avatar"><img src="img/jeff.jpg" style="width: 15%;" alt="" /></span></a>

        <h2>Contact Me</h2>
        <form method="post" action="#">
            <div class="field">
                <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="field">
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="field">
                <textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
            </div>
            <div class="field">
                <input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
            </div>
            <div class="field">
                <label>But are you a robot?</label>
                <input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
                <input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">Send Message</a></li>
            </ul>
        </form>
        <hr />
        <a href="/">Home</a>
        |
        <a href="projects" target="_blank">Projects</a>
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