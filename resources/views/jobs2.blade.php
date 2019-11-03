
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <script data-ad-client="ca-pub-8480911180475311" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
            overflow:auto;
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
        .forcedispalynone{
            display:none !important;
        }
        body.wait *, body.wait
        {
            cursor: progress !important;
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

    <div class="page-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 id="jobSearchBigTitle">Job Search</h2>
                    <p class="lead">Now you can search jobs based on years of experience, education level and location</p>
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
                        <form action="#" class="d-md-flex justify-content-between">
                            <select id="locationsearch">
                                <option value="" selected="selected">Select Location</option>
                                <option value="badakhshan">Badakhshan</option>
                                <option value="badghis" >Badghis</option>
                                <option value="baghlan">Baghlan</option>
                                <option value="balkh">Balkh</option>
                                <option value="bamyan">Bamyan</option>
                                <option value="daykundi">Daykundi</option>
                                <option value="farah">Farah</option>
                                <option value="faryab">Faryab</option>
                                <option value="ghazni">Ghazni</option>
                                <option value="ghor">Ghor</option>
                                <option value="helmand">Helmand</option>
                                <option value="herat">Herat</option>
                                <option value="jawzjan">Jawzjan</option>
                                <option value="kabul">Kabul</option>
                                <option value="kandahar">Kandahar</option>
                                <option value="kapisa">Kapisa</option>
                                <option value="khost">Khost</option>
                                <option value="kunar">Kunar</option>
                                <option value="kunduz">Kunduz</option>
                                <option value="laghman">Laghman</option>
                                <option value="logar">Logar</option>
                                <option value="nangarhar">Nangarhar</option>
                                <option value="nimroz">Nimroz</option>
                                <option value="nuristan">Nuristan</option>
                                <option value="uruzgan">Uruzgan</option>
                                <option value="parwan">Parwan</option>
                                <option value="paktia">Paktia</option>
                                <option value="paktika">Paktika</option>
                                <option value="panjshir">Panjshir</option>
                                <option value="samangan">Samangan</option>
                                <option value="sar-e-pul">Sar-e-Pul</option>
                                <option value="takhar">Takhar</option>
                                <option value="wardak">Wardak</option>
                                <option value="zabul">Zabul</option>
                            </select>
                            <select id="categorysearch">=
                                <option value="" selected="selected">Choose Category</option>
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <input type="number" placeholder="Experience Years eg. 3" id="experiencesearch" class="single-input searchkeywordinput mt-2 border">
                            <button type="button" class="template-btn mt-2" style="background:#28a745" id="searchSubmitButton">find job</button>
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
                    <div id="paginationdiv" class="paginationdiv">
                    @foreach($jobs as $job)
                        <div class="single-job border-bottom rounded p-3 d-flex" id="jobcontainer{{$job->id}}">
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
                                <h6 class=""><a href="{{route('companyalljobs', $job->id)}}" class="text-secondary">{{str_limit($job->title, 25)}} &nbsp&nbsp<span class="badge badge-pill badge-success">{{$job->numberofjobs}}</span></a></h6>
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
    <div class="container" >
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
    <script src="{{asset('assets/js/jobs.js')}}"></script>
    <script>
        $('#searchSubmitButton').on('click', function(){
            $.ajax({
                type: 'POST',
                url: "{{ url('/searchjob') }}",
                data: {
                    _token : '{{ csrf_token() }}',
                    'experience' : $('#experiencesearch').val(),
                    'category' : $('#categorysearch').val(),
                    'location' : $('#locationsearch').val(),
                },
                // If the call was not successfull.
                error: function() {
                    alert('Filters could not be loaded');
                },
                // If the call was successfull.
                success: function(response){
                    console.log(response[0].id);
                    $('#paginationdiv').empty();
                    // Repopulating the table body with new data.
                    $.each(response, function(i, item) {
                        if (item.joblocation) {
                            var jobTitle = item.title.length > 25 ? $.trim(item.title).substring(0,25) + '...' : item.title;
                            var thisJobUrl = '{{route("companyalljobs", ":id")}}';
                            thisJobUrl = thisJobUrl.replace(':id', item.id);
                            var avatar = item.company.user_id ? '{{asset("assets/avatars/company.png")}}' : '{{asset("assets/avatars/company.png")}}';
                            // Getting the company name.
                            var company = item.company.name.length > 25 ? $.trim(item.company.name).substring(0,25) + '...' : item.company.name;
                            if (item.joblocation[0].location) {
                                var location = item.joblocation.length > 1 ? 'Multiple' : item.joblocation[0].location;
                            }
                            else {
                                var location = "Unavailable";
                            }
                            // Changign the format of the date when displayed.
                            $('#paginationdiv').append(''
                                +'<div class="single-job border-bottom rounded p-3 d-flex" id="jobcontainer' + item.id + '">'
                                    +'<div class="pr-2">'
                                        +'<img src="' + avatar + '" alt="job" width="40px" height="40px" class="rounded-circle mt-2">'
                                    +'</div>'
                                    +'<div class="job-text flex-fill">'
                                        + '<h6 class=""><a href="' + thisJobUrl + '" class="text-secondary">' + jobTitle + '&nbsp&nbsp <span class="badge badge-pill badge-success">'
                                        + item.numberofjobs + '</span></a></h6>'
                                        + '<ul>'
                                            + '<li Class="text-capitalize">'
                                                + company + ' | '
                                                    + location
                                                + ' | ' 
                                                + '<span class="text-danger">' + item.closingdate + '</span>'
                                            + '</li>'
                                        + '</ul>'
                                    + '</div>'
                                + '</div>');
                        }
                    });
                    $('.easyPaginateNav').remove();
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
