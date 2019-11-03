
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>Jobs</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        body .jobs-area{
            font-size:13px;
        }


        .main-menu-light ul .nav-item .dropdown-item {
            color:white !important
        }


        .single-job{
            padding: 10px;
            box-shadow: 0 3px 5px rgba(0,0,0,0.1);
            background:white;
        }
        .single-job h6{
            cursor:pointer;
        }
        .fa-heart{
            transition: 0.4s ease;
        }
        .fa-heart:hover{
            color:crimson;
        }
        .select2{
            width:228px !important;
            height:auto;
            margin-top:8px;
        }
        .searchkeywordinput{
            line-height:47px;
            background:white;
            border: 1px solid #aaa;
            color:black;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:0px;
        }



                /* Cosmetic only */
        .easyPaginateNav{
            margin:20px 0.25rem;
            text-align:center;
            width:100% !important;
        }
        .easyPaginateNav a {
            padding:5px 10px;
            border: 1px solid lightgray;
            color:seagreen;
            border-radius: 2px;
            margin-left: 2px;
        }
        .easyPaginateNav a:hover{
            background: seagreen;
            color:white
        }
        .easyPaginateNav a.current {
            font-weight:bold;
            background:seagreen;
            color:white
        }






        @media (max-width: 991.98px) and (min-width: 768px)
        {
            .select2 {
                width: 150px !important;
            }
        }
        @media (max-width: 767.98px) and (min-width: 576px)
        {
            .select2{
                width:100% !important;
            }
            .search-bg form input{
                padding: 0 20px;
            }
        }
        @media (max-width: 575.98px)
        {
            .search-bg form input{
                padding: 0 20px;
            }

            .select2 {
                width: 100% !important;
            }
        }
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')


    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8" id="">
                    <h6 class="text-secondary">All Jobs for company: &nbsp &nbsp"{{$job->company->name}}"</h6>
                </div>
            </div>
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
            <div class="row">
                <div class="col-lg-9 col-md-8" id="">
                    <div id="paginationdiv">
                        <div class="single-job border rounded p-3 d-flex border-warning">
                            @if($job->company->user_id != 0)
                                <div class="pr-2">
                                    <img src="{{asset($job->company->user->avatar)}}" alt="job" width="40px" height="40px" class="rounded-circle mt-2">
                                </div>
                            @else
                            <div class="pr-2">
                                    <img src="{{asset('assets/avatars/company.png')}}" alt="job" width="40px" height="40px" class="rounded-circle mt-2">
                                </div>
                            @endif
                            <div class="job-text flex-fill">
                                <h6 class=""><a href="{{route('jobs.show', $job->id)}}" class="text-secondary">{{str_limit($job->title, 25)}} <span class="badge badge-pill badge-success">{{$job->numberofjobs}}</span></a></h6>
                                <ul>
                                    <li Class="text-capitalize">
                                        {{str_limit($job->company->name, 25)}} | 
                                        @if(isset($job->joblocation[0]))
                                            @if(count($job->joblocation)>1)
                                                Multiple
                                            @else
                                                {{$job->joblocation[0]->location}}
                                            @endif
                                        @else
                                            Unavailable
                                        @endif
                                        | 
                                        <span class="text-danger">{{$job->closingdate}}</span>

                                        @if($job->gender == "male" or $job->gender == "female")
                                            <span class="float-right d-inline-block p-1 pr-3 pl-3 border border-secondary rounded">{{$job->gender}}</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @foreach($companyjobs as $job)
                        <div class="single-job border-bottom rounded p-3 d-flex">
                            @if($job->company->user_id != 0)
                                <div class="pr-2">
                                    <img src="{{asset($job->company->user->avatar)}}" alt="job" width="40px" height="40px" class="rounded-circle mt-2">
                                </div>
                            @else
                            <div class="pr-2">
                                    <img src="{{asset('assets/avatars/company.png')}}" alt="job" width="40px" height="40px" class="rounded-circle mt-2">
                                </div>
                            @endif
                            <div class="job-text flex-fill">
                                <h6 class=""><a href="{{route('jobs.show', $job->id)}}" class="text-secondary">{{str_limit($job->title, 25)}} <span class="badge badge-pill badge-success">{{$job->numberofjobs}}</span></a></h6>
                                <ul>
                                    <li Class="text-capitalize">
                                        {{str_limit($job->company->name, 25)}} | 
                                        @if(isset($job->joblocation[0]))
                                            @if(count($job->joblocation)>1)
                                                Multiple
                                            @else
                                                {{$job->joblocation[0]->location}}
                                            @endif
                                        @else
                                            Unavailable
                                        @endif
                                        | 
                                        <span class="text-danger">{{$job->closingdate}}</span>

                                        @if($job->gender == "male" or $job->gender == "female")
                                            <span class="float-right d-inline-block p-1 pr-3 pl-3 border border-secondary rounded">{{$job->gender}}</span>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 shadow-sm p-2 mt-5 mt-md-0 rounded" id="jobdetailsrightside" style="background:white">
                    <div id="rightsidead1" class="pt-5">
                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">Advertisement</legend>
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- 300*250 -->
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:100%;height:250px"
                                data-ad-client="ca-pub-8480911180475311"
                                data-ad-slot="1676292648"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>

                            
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- kar 300*600 -->
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:100%;height:600px"
                                data-ad-client="ca-pub-8480911180475311"
                                data-ad-slot="3148731385"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </fieldset>
                        
                    </div>
                    <fieldset class="fieldsets p-3 rounded">
                        <legend class="w-auto pl-3 pr-3">Facebook</legend>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarmondana&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
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
    </div>
    <!-- Jobs Area End -->


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.easyPaginate.js')}}"></script>
    <script>
        $(document).ready(function(){
            paginatethis();
        });

        function paginatethis(){
            $('#paginationdiv').easyPaginate({
                paginateElement: '.single-job',
                elementsPerPage: 10,
                effect: 'climb',
                prevButtonText: 'Previous',
                nextButtonText:'Next',
                firstButtonText:'&laquo;',
                lastButtonText:'»'
            });
        }

     
    </script>
    @include('layout.sessionmessage')
