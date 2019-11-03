<!DOCTYPE html>

@if(session()->has('locale'))
    @if(session()->get('locale')=='en')
        <html lang="en">
    @else
        <html lang="pt" dir="rtl">
    @endif
@else
    <html lang="en">
@endif
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143925072-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-143925072-2');
    </script>
    <title>Home</title>
    <meta name="description" content="Find jobs, scholarships, RFPs and download books in Afghanistan"/>
    <meta name="copyright" content="Karmondana" />

    
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <style type="text/css">
        body{
            background: rgb(245,245,245);
        }
        .logindropdowncontainer{
            background: #28a745;
            text-align: right;
        }
        .dropdown-item:hover{
            background: #28a745;
        }

        .topnavbarwithoutuserinfo{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .header-area.single-page{
            background-image:none;
            background:inherit;
        }
        .main-menu-light ul li a {
            color:gray !important
        }
        .main-menu-light ul .nav-item .dropdown-item {
            color:white !important
        }
/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                          Forms                           */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/

        .select2-container .select2-selection--single{
            height:auto;
            padding:10px;
        }


        .select2{
            display:block !important;
            width: 100% !important;
            height: 28px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:auto;
            top:50%;
        }

        .input-group-icon *{
            border: none !important;
            padding:0px !important;
            font-size:13px;
            font-family:"Segoe UI", Arial, sans-serif;
            background:#f9f9ff;
        }
        .input-group-icon{
            border: 1px solid #f9f9ff;
            cursor:pointer !important;
            background:#f9f9ff;
        }
        .input-group-icon label{
            padding: 8px 0px 0px 8px !important;
            text-transform:uppercase;
            margin-bottom:0px;
            width:98%;
            color:green
        }
        .input-group-icon label span{
            color:red
        }
        .input-group-icon .select2, .input-group-icon input{
            padding: 0px 0px 0px 8px !important;
            height:28px !important
        }
        .input-group-icon textarea{
            padding: 0px 0px 0px 8px !important;
        }
        .input-group-icon .select2, .input-group-icon input:focus, .input-group-icon .select2, .input-group-icon textarea:focus{
            box-shadow:none !important;
            background:#f9f9ff;
        }

        .select2-dropdown{
            border:1px solid rgb(240,240,240);
        }


        .datepicker-days th{
            color:limegreen
        }




/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                     Tagging Inputs                       */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/
        .selectize-input, .selectize-control.single .selectize-input.input-active{
            background:#f9f9ff !important;
        }
        .selectize-input{
            padding-left:10px !important;
        }
        .selectize-input.focus{
            box-shadow:none !important;
        }
        .selectize-control.multi .selectize-input > div{
            padding: 3px 15px !important;
            background:#28a745 !important;
            color:white !important;
        }


        @media (max-width: 967.98px){
            .main-menu.main-menu-light ul{
                background: #28a745;
            }
            .logindropdowncontainer{
                text-align: left;
            }
        }

        @media (max-width: 991.98px){
            .topnavbarwithoutuserinfo{
                width: 100%;
            }
            .main-menu-light ul li a {
                color:white !important
            }
        }

        body {
            background: rgb(245,245,245);
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .homepagebigicons{
            height:100px;
            width:100px;
            padding-top: 20px;
            background: gray;
            font-size: 60px;
            border-radius: 50%;
            color:white
        }
        .slideshowimgs{
            width: 100% !important;
        }
        .homepagegrids{
            background:white;
        }


    h6 {
        font-size:2rem !important;
        line-height: 0.5rem;
    }
    html, h6 {
        font-size:0.8rem !important;
    }
    h6{
        font-weight: 700;
    }
    @@media (min-width: 575.98px) { 
        html {
            font-size: 0.8rem !important;
        }
    }

    @@media (min-width: 767.98px) { 
        html {
            font-size: 0.9rem !important;
        }
    }

    @@media (min-width: 991.98px) { 
        html {
            font-size: 1rem !important;
        }
    }

    @@media (min-width: 1199.98px) { 
        html {
            font-size: 1rem !important;
        }
    }
    </style>
</head>
<body>
    <!-- Header Area Starts -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="{{route('home2')}}"><img src="{{asset('assets/images/logogreen1r.png')}}" alt="logo"></a>
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
                                <li class=""><a href="{{route('scholarship.index')}}">{{ trans('app.scholarships')}}</a></li>
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
    </header>
    <!-- Header Area End -->
    
<div class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block img-fluid slideshowimgs" id="slideshowjobimage" src="{{asset("assets/images/job191.jpg")}}" alt="First slide">
            <div class="carousel-caption d-md-block">
                <a class="btn btn-success btn-lg pl-5 pr-5 text-uppercase" href="{{route('jobs.index')}}">Search for new Jobs</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid slideshowimgs" id="slideshowschoimage" src="{{asset("assets/images/scho192.jpg")}}" alt="Second slide">
            <div class="carousel-caption d-md-block">
                <a class="btn btn-success btn-lg pl-5 pr-5 text-uppercase" href="{{route('scholarship.index')}}">Search for new Scholarships</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid slideshowimgs" id="slideshowbookimage" src="{{asset("assets/images/blog191.jpg")}}" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <a class="btn btn-success btn-lg pl-5 pr-5 text-uppercase" href="{{route('blog.index')}}">Read Stories</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
<div class="container mt-5 text-center mb-5">
    <div class="row">
        <div class="col-12">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- karsq -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:100%;height:300px"
                data-ad-client="ca-pub-8480911180475311"
                data-ad-slot="6038209487"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row d-flex">
        <div class="col-lg-4 align-self-stretch mt-5">
            <div class="border p-3 rounded h-100 homepagegrids shadow-sm">
                <span class="fa fa-industry d-inline-block homepagebigicons mb-3" style="background:crimson"></span>
                <h4>Post Jobs</h4>
                <p class="text-justify"  id="compgridtext">{{str_limit("Companies and Organizations are hightly contributed by manpower and we are having the best of talents ans smarter human capital. Our services are free of cost for govermental and non governmental organizations. Now you can very easity sign up for free accound and post your vacant positions any time. It's one stop registeration and verifcation", 140)}} <button onclick="expandcomp()" class="" style="background:none; border:none; cursor:pointer">More</button></p>
                <p><a class="btn btn-success" href="{{route('company.create')}}" role="button">Register Company »</a></p>
            </div>            
        </div>
        <div class="col-lg-4 align-self-stretch mt-5">
            <div class="border p-3 rounded h-100 homepagegrids shadow-sm">
                <span class="fa fa-briefcase d-inline-block homepagebigicons mb-3" style="background:khaki"></span>
                <h4>Search Jobs</h4>
                <p class="text-justify"  id="jobgridtext">{{str_limit("Check your eligibility for jobs in one go. Mention your experience and education field we will suggest you which job to apply for. Create your account and apply directly from within the system in one go", 140)}} <button onclick="expandjob()" class="" style="background:none; border:none; cursor:pointer">More</button></p>
                <p><a class="btn btn-success" href="{{route('jobs.index')}}" role="button">Search Jobs »</a></p>
            </div>
        </div>
        <div class="col-lg-4 align-self-stretch mt-5">
            <div class="border p-3 rounded h-100 homepagegrids shadow-sm">
                <span class="fa fa-graduation-cap d-inline-block homepagebigicons mb-3" style="background:purple"></span>
                <h4>Search Scholarships</h4>
                <p class="text-justify" id="schogridtext">{{str_limit("Find the world of free education with us. It is very simple, just type your degree and favorite destination of journey, and apply for free and fully funded scholarships", 140)}} <button onclick="expandscho()" class="" style="background:none; border:none; cursor:pointer">More</button></p>
                <p><a class="btn btn-success" href="{{route('scholarship.index')}}" role="button">Search Scholarships »</a></p>
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row mt-3">
        <div class="col-12">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- karsq -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:100%;height:300px"
                data-ad-client="ca-pub-8480911180475311"
                data-ad-slot="6038209487"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>
<!-- START THE FEATURETTES -->
@include('layout.footersection')
<script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
<script>
    if($(window).width() < 767 ){
        $('#slideshowjobimage').attr('src', '{{asset("/assets/images/smalljobforslideshow.jpg")}}');
        $('#slideshowschoimage').attr('src', '{{asset("/assets/images/slideshowschosmall.jpg")}}');
        $('#slideshowbookimage').attr('src', '{{asset("/assets/images/slideshowblogsmall.jpg")}}');
    }
    else{
        $('#slideshowjobimage').attr('src', '{{asset("assets/images/job191.jpg")}}');
        $('#slideshowschoimage').attr('src', '{{asset("assets/images/scho192.jpg")}}');
        $('#slideshowbookimage').attr('src', '{{asset("assets/images/blog191.jpg")}}');
    }

    $(window).resize(function() {
        if($(window).width() < 767 ){
            $('#slideshowjobimage').attr('src', '{{asset("/assets/images/smalljobforslideshow.jpg")}}');
            $('#slideshowschoimage').attr('src', '{{asset("/assets/images/slideshowschosmall.jpg")}}');
            $('#slideshowbookimage').attr('src', '{{asset("/assets/images/slideshowblogsmall.jpg")}}');
        }
        else{
            $('#slideshowjobimage').attr('src', '{{asset("assets/images/job191.jpg")}}');
            $('#slideshowschoimage').attr('src', '{{asset("assets/images/scho192.jpg")}}');
            $('#slideshowbookimage').attr('src', '{{asset("assets/images/blog191.jpg")}}');
        }
    });

    var exscho = "Find the world of free education with us. It is very simple, just type your degree and favorite destination of journey, and apply for free and fully funded scholarships";
    var exjob = "Check your eligibility for jobs in one go. Mention your experience and education field we will suggest you which job to apply for. Create your account and apply directly from within the system in one go";
    var excomp = "Companies and Organizations are hightly contributed by manpower and we are having the best of talents ans smarter human capital. Our services are free of cost for govermental and non governmental organizations. Now you can very easity sign up for free accound and post your vacant positions any time. It's one stop registeration and verifcation";
    function expandscho(){
        $('#schogridtext').text(exscho);
    }
    function expandjob(){
        $('#jobgridtext').text(exjob);
    }
    function expandcomp(){
        $('#compgridtext').text(excomp);
    }
</script>
@include('layout.sessionmessage')
