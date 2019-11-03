    @include('layout.headingsectionwithoutimage')
    <title>Books</title>
    <style type="text/css">
        body{
            background:rgb(245,245,245)
        }
        .eachbookcontainer{
            padding:5px;
        }

        .main-menu-light ul .nav-item .dropdown-item {
            color:white !important
        }

        .divformargins{
            
            background:seagreen;
            width:100%;
            padding-top:140%;
            position:relative;
        }
        .sepreatebymargin{
            background:white;
            border-radius: 3px;
        }
        .sepreatebymargin:hover{
            cursor:pointer;
            opacity:0.8
        }
        .imgheight{
                position:absolute;
                top:0;
                right:0;
                bottom:0;
                left:0;
                width:100%;
        }
        .btnscontainer button{
            flex:50%;
            padding:0;
            padding: 5px 0px;
            text-align:center;
            border:none;
            background:white;
            color:green
        }
        .timesdownloaded{
            font-size:0.7rem;
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
                    <h2>Search Books</h2>
                    <p class="lead">Search Books From out extensive online library and download any book for free</p>
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
                                    <input type="text" name="titlesearch" id="searchByTitle" placeholder="Enter any title" class="form-control form-control-lg w-100 mt-2 mb-0 border">
                                </div>
                                <div class="col-md-5">
                                    <select id="searchByCategory" class="form-control form-control-lg w-100 mt-2 border">
                                        <option value="" selected="selected">Select Category</option>
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category}}</option>
                                        @endforeach
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
    
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="row" id="paginationdiv">
                            @foreach($books as $book)
                            <div class=" eachbookcontainer col-6 col-md-4 col-lg-3">
                                <div class="p-1 sepreatebymargin shadow-sm" onclick="document.getElementById('showlinkforbook{{$book->id}}').click()">
                                    <div class="divformargins">
                                        <div class="imgheight">
                                            <img src="{{asset($book->coverpage)}}" alt="" class="w-100 h-100">
                                        </div>
                                    </div>
                                    <div class="booknamesdiv pt-2">
                                        <h5><strong>
                                            <?php
                                                if(strlen($book->name)<=20) {
                                                    echo $book->name;
                                                }
                                                else {
                                                    $y=substr($book->name,0,20) . '...';
                                                    echo $y;
                                                }
                                            ?>
                                        </strong></h5>
                                        <p class="timesdownloaded"><span class="text-success">{{$book->timesdownloaded}}</span> Downloads</p>
                                    </div>
                                    <a class="d-none" href="{{route('book.show', $book)}}" id="showlinkforbook{{$book->id}}"></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        <div id="rightsidead1" class="">
                            <fieldset class="fieldsets p-3 rounded">
                                <legend class="w-auto pl-3 pr-3">Advertisement</legend>
                            </fieldset>
                        </div>

                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">Facebook</legend>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarmondana&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </fieldset>
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
    


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.easyPaginate.js')}}"></script>
    <script type="text/javascript">
        $('#category').select2();

        $(document).ready(function(){
            paginatethis();
        });

        function paginatethis(){
            $('#paginationdiv').easyPaginate({
                paginateElement: '.eachbookcontainer',
                elementsPerPage: 9,
                effect: 'default',
                prevButtonText: 'Previous',
                nextButtonText:'Next',
                firstButtonText:'&laquo;',
                lastButtonText:'»'
            });
        }


        $('#searchSubmitButton').on('click', function(){
            $.ajax({
                type: 'POST',
                url: "{{ url('/searchbook') }}",
                data: {
                    _token : '{{ csrf_token() }}',
                    'category' : $('#searchByCategory').val(),
                    'title' : $('#searchByTitle').val(),
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
                        var bookTitle = item.name.length > 20 ? $.trim(item.name).substring(0,15) + '...' : item.name;
                        // Changign the format of the date when displayed.
                        $('#paginationdiv').append(''
                            + '<div class=" eachbookcontainer col-6 col-md-4 col-lg-3">'
                                + '<div class="p-1 sepreatebymargin shadow-sm">'
                                    + '<div class="divformargins">'
                                        + '<div class="imgheight">'
                                            + '<img src="{{asset("'+item.timesdownloaded+'")}}" alt="" class="w-100 h-100">'
                                        + '</div>'
                                    + '</div>'
                                    + '<div class="booknamesdiv pt-2">'
                                        + '<h5><strong> '+ bookTitle + '</strong></h5>'
                                        + '<p class="timesdownloaded"><span class="text-success">' + item.timesdownloaded+ '</span> Downloads</p>'
                                    + '</div>'
                                    + '<a class="d-none" href="{{route('book.show', $book)}}"></a>'
                                + '</div>'
                            + '</div>');
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