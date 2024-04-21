<nav class="collapsible-nav ml-auto" id="collapsible-nav">
    <a href="home" class="nav-link{{ Request::is('home') ? ' active' : '' }}">HOME</a>
    <a href="resume" class="nav-link{{ Request::is('resume') ? ' active' : '' }}">RESUME</a>
    <a href="#" class="nav-link{{ Request::is('join_project') ? ' active' : '' }}">JOIN PROJECT</a>
    <a href="contact" class="nav-link{{ Request::is('contact') ? ' active' : '' }}">CONTACT</a>
</nav>
<button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav" data-target="collapsible-nav"><img src="{{ asset('assets/images/hamburger.svg') }}" alt="hamburger"></button>
