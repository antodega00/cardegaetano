<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#top" class="navbar-brand">Carrozzeria De Gaetano</a>
        <div id="main-nav" class="collapse navbar-collapse">
            <ul class="menu-first nav navbar-nav" style="justify-content: center;">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="{{route('chisiamo')}}">Chi siamo</a></li>
                <li><a href="#foto">Foto</a></li>
                {{-- <li><a href="{{route('contatti')}}">Contact</a></li> --}}
                <li><a href="#contact">Contact</a></li>

            </ul>
        </div> <!-- /.main-menu -->
    </div>
</nav>
