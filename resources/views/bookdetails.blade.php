
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>Book Details</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        #bookdetailscontainer, #bookdetailrightside{
            background:white;
            border-radius:5px;
        }
        .eachattribute{
            border-top: 1px solid lightgray;
            font-size:15px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .eatchattributedata{
            color:#999;
            text-transform: capitalize;
        }
        .topandbottomsections{
            padding:30px;
        }
        .fa-heart{
            font-size:20px
        }
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')




    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 shadow-sm p-0" id="bookdetailscontainer">
                    <div class="topandbottomsections pb-0">
                        <div class="row ">
                            <div class="col-12">
                                <h4 class="text-success font-weight-bold">{{$book->name}}</h4>
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
                    <div class="topandbottomsections pt-2">
                        <div class="row">
                            <div class="col-6">
                                <span class="text-dark pt-3 d-inline-block">Author</span>
                                <span class="eatchattributedata">{{$book->author}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Translator</span>
                                <span class="eatchattributedata">{{$book->translator}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Langauge</span>
                                <span class="eatchattributedata">{{$book->language}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Edition</span>
                                <span class="eatchattributedata">{{$book->edition}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Priting date</span>
                                <span class="eatchattributedata">{{$book->printingdate}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Closing Date</span>
                                <span class="eatchattributedata text-danger">{{$book->price}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Downloaded Times</span>
                                <span class="eatchattributedata">{{$book->timesdownloaded}}</span>
                                <br>
                                <span class="text-dark pt-3 d-inline-block">Category</span>
                                <span class="eatchattributedata">{{$book->pagenumbers}}</span>
                            </div>
                            <div class="col-6"></div>
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
                    <div class="topandbottomsections">
                        <div class="row d-md-flex">
                            <div class="col-12 order-0">
                                <h4 class="text-success font-weight-normal">About {{$book->title}} books</h4>
                                <p>{!!$book->description!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="topandbottomsections">
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
                    <div class="topandbottomsections">
                        <div class="row d-md-flex">
                            <div class="col-6">
                                <img src="{{asset($book->coverpage)}}" alt="" class="w-100">
                                <a href="{{route('downloadbook', $book->id)}}" class="btn btn-block btn-success rounded-0 mt-1">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 shadow-sm mt-5 mt-md-0 p-3" id="bookdetailrightside">
                    @include('layout.ridesidelogin')
                    <div id="relatedjobscontainer" class="pt-5">
                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">You may also like</legend>
                            @if(isset($related[0]))
                                @php($counter = 1)
                                @foreach($related as $rel)
                                    <div class="eachrelatedjob pt-2 pb-2 border-bottom">
                                        <a href="{{route('book.show', $rel->id)}}" class="text-success">{{$rel->name}}</a>
                                    </div>
                                    @php($counter++)
                                    @if($counter >= 10)
                                        @break
                                    @endif
                                @endforeach
                            @else
                                <h6>No Related Books</h6>
                            @endif
                        </fieldset>
                    </div>
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
        </div>
    </section>
    <!-- Jobs Area End -->


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script>
        $('#locationsearch, #categorysearch').select2();

    </script>
@include('layout.sessionmessage')
