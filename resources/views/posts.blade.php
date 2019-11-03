
    @include('layout.headsection')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>Blog</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        body .jobs-area{
            font-size:13px;
        }
        .main-menu-light ul li a {
            color:gray !important
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
            height:auto;
            margin-top:8px;
        }
        .searchkeywordinput{
            line-height:47px;
            background:white;
            border: 1px solid #aaa;
            color:black;
        }
        .searchkeywordinput{
            border-color:#aaa !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:0px;
        }
        .select2-container--default .select2-selection--single{
            border-color:#e3e2e2;
        }



        
                /* Cosmetic only */
                .easyPaginateNav{
            margin:20px 0.25rem;
            text-align:center;
            width:100%;
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
            .search-bg{
                margin-top:20px;
            }

            .select2 {
                width: 100% !important;
            }
        }
        @media (max-width: 991.98px){
            .main-menu-light ul li a {
                color:white !important
            }
        }
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')
    <div class="page-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>Stories</h2>
                    <p class="lead">Find and read interesting and beatiful stories and articles on various context here</p>
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
        </div>
    </div>
    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-9 col-md-8" id="">


                    <div id="paginationdiv">
                        @foreach($posts as $post)
                            <div class="single-job row border-bottom rounded p-3 mt-1 mr-md-1 ml-md-1">
                                <div class="col-md-3 mt-3">
                                    <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="w-100">
                                </div>
                                <div class="col-md-9 mt-3 pr-5">
                                    <h6>{{$post->title}}</h6>
                                    <p class="storybody" id="">{!! $post->introduction !!}</p>
                                    <a href="{{route('blog.show', $post)}}" class="btn btn-secondary btn-sm">Read More...</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 shadow-sm p-2 rounded mt-1" id="jobdetailsrightside" style="background:white">
                    <div id="rightsidead1" class="">
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
    </section>
    <!-- Jobs Area End -->


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.easyPaginate.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.easyPaginate.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#paginationdiv').easyPaginate({
                paginateElement: '.single-job',
                elementsPerPage: 10,
                effect: 'climb',
                prevButtonText: 'Previous',
                nextButtonText:'Next',
                firstButtonText:'&laquo;',
                lastButtonText:'»'
            });
        });
    </script>
@include('layout.sessionmessage')
