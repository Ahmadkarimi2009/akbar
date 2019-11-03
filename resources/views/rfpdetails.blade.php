
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>RFP Details</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        #rfpdetailscontainer,
        #rfpdetailrightside{
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
                <div class="col-lg-9 shadow-sm m-3 p-0" id="rfpdetailscontainer">
                    <div class="topandbottomsections">
                        <div class="row d-sm-flex">
                            <div class="align-self-center flex-fill">
                                
                                <h4 class="text-success font-weight-bold">{{$rfp->title}}</h4>
                                <span class="text-capitalize">{{$rfp->country}}</span>
                                <br>
                                <span class="text-capitalize">{{$rfp->company}}</span>

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
                    <hr>
                    <div class="topandbottomsections">
                        <h4 class="text-success font-weight-normal">Description</h4>
                        <p>{!!$rfp->description!!}</p>
                        <hr>
                        <h4 class="text-success font-weight-normal mt-5">Closing Dte</h4>
                        <p>{{$rfp->closingdate}}</p>
                        <hr>
                        <h4 class="text-success font-weight-normal mt-5">Application Link</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 shadow-sm p-3 mt-5 mt-md-0" id="rfpdetailrightside">
                    <div id="relatedjobscontainer" class="pt-5">
                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">You may also like</legend>
                            @if(isset($related[0]))
                                @php($counter = 1)
                                @foreach($related as $rel)
                                    <div class="eachrelatedjob pt-2 pb-2 border-bottom">
                                        <a href="{{route('book.show', $rel->id)}}" class="text-success">{{$rel->title}}</a>
                                    </div>
                                    @php($counter++)
                                    @if($counter >= 10)
                                        @break
                                    @endif
                                @endforeach
                            @else
                                <h6>No Related RFPs</h6>
                            @endif
                        </fieldset>
                    </div>
                    <div id="rightsidead1" class="pt-5">
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
    <script>
        $('#locationsearch, #categorysearch').select2();

    </script>
    @include('layout.sessionmessage')
