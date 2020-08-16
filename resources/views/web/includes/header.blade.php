<!-- header -->
        <header class="py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1>
                        <a class="navbar-brand"><img height="40px" width="40px" src="{{ $web_source }}/images/wusob_logo.png" /></a>
                    </h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-4 m-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            {{--  <li class="nav-item">
                                <a class="nav-link" href="#">Tech-Job Connect</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tech Training</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Advertisements</a>
                            </li>  --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                            </li>
                            {{--  <li class="nav-item">
                                <a class="nav-link" href="#">Our Archives</a>
                            </li>  --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactUs') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
