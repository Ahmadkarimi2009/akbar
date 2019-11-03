
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>RFP</title>
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
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
        .searchkeywordinput{
            border-color:#aaa !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:0px;
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
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')
    <div class="page-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>RFPs Search</h2>
                    <p class="lead">Get the most recent announcements of RFPs from all sorts of companies in Afghanistan</p>
                </div>
            </div>
            <div class="row">
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


    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" class="searchform">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="titlesearch" id="searchbytitle" placeholder="Enter any title" class="form-control form-control-lg w-100 mt-2 border">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="titlesearch" id="searchbycompany" placeholder="Enter any company" class="form-control form-control-lg w-100 mt-2 border">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="form-control form-control-lg w-100 btn btn-success mt-2" onclick="searchrfp()">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
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
            <div class="row">
                <div class="col-md-8 col-lg-9" id="paginationdiv">
                @foreach($rfps as $rfp)
                    <div class="single-job row border-bottom rounded p-3 d-flex">
                        <div class="job-text flex-fill">
                            <h6 class=""><a href="{{route('rfp.show', $rfp->id)}}" class="text-secondary">{{str_limit($rfp->title, 25)}} </a></h6>
                            <ul>
                                <li Class="text-capitalize">
                                    <span data-toggle="tooltip" data-placement="top" title="Hosting Country">{{$rfp->company}}</span> |
                                    <span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">{{$rfp->closingdate}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="col-md-4 col-lg-3">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarmondana&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

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
       

        function searchrfp(){
            var gettitle = $('#searchbytitle').val();
            var getcompany = $('#searchbycompany').val();

            if(gettitle=="" && getcompany==""){
                swal({
                title: "Oops!",
                text: "You have to type at least a title or company name!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
            }
            else{
                $.ajax(
                    {
                        type:'POST',
                        url: "{{ url('/searchrfp') }}",
                        data: {_token: '{{csrf_token()}}', title:gettitle, company:getcompany},
                        success:function(data) {
                            $('#paginationdiv').empty();
                            $('.easyPaginateNav').remove();
                            if((data.message).length>0){
                                for(i = 0; i<(data.message).length; i++){
                                    $('#paginationdiv').append('<div class="single-job row border-bottom rounded p-3 d-flex">'
                                                                    +'<div class="job-text flex-fill">'
                                                                        +'<h6 class=""><a href="http://karmondana.com/rfp/'+data.message[i].id+'" class="text-secondary">'+data.message[i].title+'</a></h6>'
                                                                        +'<ul>'
                                                                            +'<li Class="text-capitalize">'
                                                                                +'<span data-toggle="tooltip" data-placement="top" title="Hosting Country">'+data.message[i].company+'</span> |'
                                                                                +'<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">'+data.message[i].closingdate+'</span>'
                                                                            +'</li>'
                                                                        +'</ul>'
                                                                    +'</div>'
                                                                +'</div>');
                                }
                                paginatethis();
                            }
                            else{
                                alert('No Record Matched');
                            }
                           
                        },
                        error:function(){
                            swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                        }

                    }
                );
            }
        }

        var jsonrfps = {!!json_encode($rfps) !!};
        $('#searchbytitle, #searchbycompany').on('keyup', function(){
            var gettitle = $('#searchbytitle').val();
            var getcompany = $('#searchbycompany').val();

            if(gettitle=="" && getcompany==""){
                $('#paginationdiv').empty();
                $('.easyPaginateNav').remove();

                for(i = 0; i<jsonrfps.length; i++){
                    $('#paginationdiv').append('<div class="single-job row border-bottom rounded p-3 d-flex">'
                                                    +'<div class="job-text flex-fill">'
                                                        +'<h6 class=""><a href="http://karmondana.com/rfp/'+jsonrfps[i].id+'" class="text-secondary">'+jsonrfps[i].title+'</a></h6>'
                                                        +'<ul>'
                                                            +'<li Class="text-capitalize">'
                                                                +'<span data-toggle="tooltip" data-placement="top" title="Hosting Country">'+jsonrfps[i].company+'</span> |'
                                                                +'<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">'+jsonrfps[i].closingdate+'</span>'
                                                            +'</li>'
                                                        +'</ul>'
                                                    +'</div>'
                                                +'</div>');
                }
                paginatethis();
            }
        })
    </script>
    @include('layout.sessionmessage')
