<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-bold"></i>.
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Pesquisar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin Panel</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="contact.html">Contact</a>--}}
{{--                    </li>--}}
                </ul>
                <form method="get" action="{{ route('search') }}" class="d-flex search-header">

                    @csrf

                    <input
                        class="form-control" type="search" placeholder="Pesquisar estudantes" aria-label="Search"
                        required
                        name="searchText"
                        value="{{ isset($sText) && $sText ? $sText : '' }}"
                    >
                    <button class="btn btn-style" type="submit">Search</button>
                </form>

{{--                <form action="#search" method="GET" >--}}
{{--                    <input >--}}
{{--                    --}}
{{--                </form>--}}
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->
