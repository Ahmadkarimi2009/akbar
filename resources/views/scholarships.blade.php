
    @include('layout.headsection')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <title>Scholarships</title>
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
        body.wait *, body.wait
        {
            cursor: progress !important;
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
                    <h2>Scholarship Search</h2>
                    <p class="lead">Search scholarships based on the degree, types and location of the scholarships</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
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
                    <div class="col-lg-12">
                        <form action="#" class="" id="searchform">
                            <div class="row">
                                <div class="col-md-5">
                                    <select id="degreesearch" class="form-control form-control-lg w-100 mt-2 border">
                                        <option value="" selected="selected">Select Degree</option>
                                        <option value="Bachelors">Bachelors</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Ph.D">Ph.D</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select id="typesearch" class="form-control form-control-lg w-100 mt-2 border">
                                        <option value="" selected="selected">Select Type</option>
                                        <option value="fully funded">Fully Funded</option>
                                        <option value="partially funded">Partially Funded</option>
                                        <option value="fellow ship">Fellow Ship</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="form-control form-control-lg w-100 btn btn-success mt-2" id="searchSubmitButton">Search</button>
                                </div>
                            </div>
                        </form>
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
    </div>
    <!-- Search Area End -->


    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-9 col-md-8" id="">
                    <div id="paginationdiv">
                        @foreach($scholarships as $scholarship)
                            <div class="single-job row border-bottom rounded p-3 d-flex">
                                <div class="job-text flex-fill">
                                    <h6 class=""><a href="{{route('scholarship.show', $scholarship->id)}}" class="text-secondary">{{str_limit($scholarship->name, 35)}} </a></h6>
                                    <ul>
                                        <li Class="text-capitalize">
                                            <span data-toggle="tooltip" data-placement="top" title="Hosting Country">{{$scholarship->country}}</span> | 
                                            <span data-toggle="tooltip" data-placement="top" title="Number of Scholarships">{{$scholarship->openingdate}}</span> -
                                            <span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">{{$scholarship->closingdate}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 shadow-sm p-2 mt-5 mt-md-0 rounded" id="jobdetailsrightside" style="background:white">
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
        $('#typesearch, #degreesearch').select2();
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $(document).ready(function(){
            paginatethis();
        });

        function paginatethis(){
            $('#paginationdiv').easyPaginate({
                paginateElement: '.single-job',
                elementsPerPage: 15,
                effect: 'climb',
                prevButtonText: 'Previous',
                nextButtonText:'Next',
                firstButtonText:'&laquo;',
                lastButtonText:'»'
            });
        }

        $('#searchSubmitButton').on('click', function(){
            $.ajax({
                type: 'POST',
                url: "{{ url('/searchscholarship') }}",
                data: {
                    _token : '{{ csrf_token() }}',
                    'degree' : $('#degreesearch').val(),
                    'type' : $('#typesearch').val(),
                },
                // If the call was not successfull.
                error: function() {
                    alert('Filters could not be loaded');
                },
                // If the call was successfull.
                success: function(response){
                    console.log(response);
                    $('#paginationdiv').empty();
                    // Repopulating the table body with new data.
                    $.each(response, function(i, item) {
                        // Trancating the name if length is more then 35 chars.
                        var scholarName = item.name.length > 35 ? $.trim(item.name).substring(0,35) + '...' : item.name;
                        // Setting the URL first by creating a placeholder for the Id.
                        var thisJobUrl = '{{route("scholarship.show", ":id")}}';
                        // Changing the id placeholder with the actual id number.
                        thisJobUrl = thisJobUrl.replace(':id', item.id);
                        // Changign the format of the date when displayed.
                        $('#paginationdiv').append(''
                            + '<div class="single-job row border-bottom rounded p-3 d-flex">'
                                + '<div class="job-text flex-fill">'
                                    + '<h6 class=""><a href="' + thisJobUrl + '" class="text-secondary">' + scholarName + ' </a></h6>'
                                    + '<ul>'
                                        + '<li Class="text-capitalize">'
                                            + '<span data-toggle="tooltip" data-placement="top" title="Hosting Country">' + item.country +  '</span> | '
                                            + '<span data-toggle="tooltip" data-placement="top" title="Number of Scholarships">' + item.openingdate + '</span> -'
                                            + '<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">' + item.closingdate + '</span>'
                                        + '</li>'
                                    + '</ul>'
                                + '</div>'
                            + '</div>');
                    });
                    // Removing the previous pagination.
                    $('.easyPaginateNav').remove();
                    // Recreating the pagination for the retrieved data.
                    paginatethis();
                }
            });
        });
        // Code for showing ajax load in progress.
        $(document).ajaxStart(function ()
        {
            $('body').addClass('wait');
            $('#searchSubmitButton').prop('disabled', true);

        }).ajaxComplete(function () {

            $('body').removeClass('wait');
            $('#searchSubmitButton').prop('disabled', false);
            
        });
    </script>
@include('layout.sessionmessage')
