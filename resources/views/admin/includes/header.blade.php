<header class="header" id="site-header" style="  background:
    radial-gradient(circle at 1.98% 3%,#223a5e,transparent 100%),
    radial-gradient(circle at 98.02% 98%,#223a5e,transparent 100%),
    radial-gradient(circle at 50% 50%,#668cc2,#223a5e 100%);">
    <div class="container">
            <div class="header-content-wrapper">
                <div class="logo">
                    <div class="">
                        <div class="">
                          <img src="{{ asset('logo.png') }}" alt="logo">
                        </div>
                    </div>
                </div>

                <nav id="primary-menu" class="primary-menu">
                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden;">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                    </a>
                    <ul class="primary-menu-menu" style="overflow: hidden;">
                      @foreach($categories as $category)
                        <li class="">
                            <a href="{{ route('category.single', ['id' => $category->id]) }}" style="color:white;">{{ $category->name}}</a>
                        </li>
                        @endforeach
                        @if (Route::has('login'))
                         @auth
                         <li>
                           <a href="{{ url('/admin/home') }}" style="color:white;">Options</a>

                         </li>
                         @else
                         <li>
                            <a href="{{ route('login') }}" style="color:white;">Login</a>
                         </li>
                         <li>
                            <a href="{{ route('register') }}" style="color:white;">Register</a>
                          </li>
                         @endauth
                       @endif
                       <li>
                          <a href="{{ route('about') }}" style="color:white;">About</a>
                        </li>
                    </ul>
                </nav>
                <ul class="nav-add">
                    <li class="search search_main" style="color: black; margin-top: 5px;">
                        <a href="#" class="js-open-search">
                            <i class="seoicon-loupe"></i>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
</header>
