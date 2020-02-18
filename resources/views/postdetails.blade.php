
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://karmondana.com/blog/{{$post->id}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$post->title}}" />
    <meta property="og:description"   content="{{$post->title}}" />
    <meta property="og:image"         content="https://www.karmondana.com/assets/images/logogreenfacebook.png" />

    <title>Story Details</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        #scholarshipdetailscontainer,
        #scholarshipdetailrightside{
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
        .col-lg-9 img{
            width:100%;
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
                <div class="col-lg-9 col-md-8 shadow-sm p-0" id="scholarshipdetailscontainer">
                    <div class="row">
                        <div class="topandbottomsections">
                            <img src="{{asset($post->image)}}" alt="" class="w-100 rounded">
                        </div>
                    </div>
                    <div class="topandbottomsections">
                        <h4 class="text-success font-weight-normal">{{$post->title}}</h4>
                        <div class="mt-2">
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
                        <p>{!!$post->body!!}</p>
                        @if($post->conclusion !="N/A")
                            <p>{!!$post->conclusion!!}</p>
                        @endif
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

                    <div class="topandbottomsections"> Share &nbsp&nbsp
                          <!-- Load Facebook SDK for JavaScript -->
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <!-- Your share button code -->
                            <div class="fb-share-button" 
                                data-href="https://www.karmondana.com/blog/{{$post->id}}" 
                                data-layout="button_count">
                            </div>
                        </div>
                </div>
                <div class="col-lg-3 col-md-4 shadow-sm p-3 mt-md-0" id="scholarshipdetailrightside">
                    <div id="rightsidead1" class="pt-0">
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
    <script>
    </script>
    @include('layout.sessionmessage')
