</head>
<body>
    <!-- Header Area Starts -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="index.html"><img src="{{asset('assets/images/logogreen1r.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="custom-navbar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>  
                        <div class="main-menu main-menu-light">
                            <ul>
                                <li class="active "><a href="{{route('home2')}}">{{ trans('app.home')}}</a></li>
                                <li class=""><a href="{{route('jobs.index')}}">{{ trans('app.jobs')}}</a></li>
                                <li class=""><a href="{{route('book.index')}}">{{ trans('app.books')}}</a></li>
                                <li class=""><a href="{{route('blog.index')}}">{{ trans('app.news')}}</a></li>
                                <li class=""><a href="{{route('contact')}}">{{ trans('app.contact')}}</a></li>
                                <li class=""><a href="{{route('about')}}">{{ trans('app.about')}}</a></li>
                               
                      
                                @if(isset(Auth::user()->usertype))
                                    @if(Auth::user()->usertype == 3)
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" v-pre>
                                                <img src="{{asset(Auth::user()->avatar)}}" height="40px" class="rounded-circle mt-0" id="avatarinmenu">
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right logindropdowncontainer" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="#" class="dropdown-item"  onclick="event.preventDefault();document.getElementById('jobseekerprofilefrom').submit();">Profile</a>
                                                <form id="jobseekerprofilefrom" action="{{ route('jobseeker.show', Auth::user()->id) }}" method="get" style="display: none;">
                                                    <input type="number" value="{{Auth::user()->id}}" name="id">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @else
                                    <li class="nav-item">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Login <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right logindropdowncontainer main-menu main-menu-light" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('login')}}">
                                                Login
                                            </a>
                                            <a href="{{route('jobseeker.create')}}" class="dropdown-item" >Register JobSeeker</a>
                                            <a href="{{route('company.create')}}" class="dropdown-item" >Register Company</a>
                                        </div>
                                    </li>
                                    @endif
                                @else
                                    <li class="nav-item">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Login <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right logindropdowncontainer main-menu main-menu-light" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('login')}}">
                                                Login
                                            </a>
                                            <a href="{{route('jobseeker.create')}}" class="dropdown-item" >Register JobSeeker</a>
                                            <a href="{{route('company.create')}}" class="dropdown-item" >Register Company</a>
                                        </div>
                                    </li>
                                @endif
                                
                                <li class="nav-item dropdown">
                                    @if(session()->has('locale'))
                                        @if(session()->get('locale')=='en')
                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/usa.jpg')}}" alt=""></a>
                                        @else
                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/afghanistan.png')}}" alt=""></a>
                                        @endif
                                    @else
                                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/usa.jpg')}}" alt=""></a>
                                    @endif
                                    <div class="dropdown-menu logindropdowncontainer">
                                        <a class="dropdown-item text-left" href="{{route('lang', 'en')}}"><img src="{{asset('assets/images/usa.jpg')}}" alt=""> English</a>
                                        <a class="dropdown-item text-left" href="{{route('lang', 'pt')}}"><img src="{{asset('assets/images/afghanistan.png')}}" alt=""> Pashto</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Job Search</h2>
                        <p>There spirit beginning bearing the open at own every give appear in third you sawe two boys</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->