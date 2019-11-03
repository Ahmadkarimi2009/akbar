
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
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="">
                    <section class="contact-form section-padding3">
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
                            <div class="row mt-5 mb-5">
                                <div class="col-lg-3 mb-5 mb-lg-0">
                                    <div class="d-flex">
                                        <div class="into-icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="info-text">
                                            <h4 class="text-uppercase">Pol-e-Sorkh, Kabul</h4>
                                            <p>Afghanistan</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="into-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="info-text">
                                            <h4>(+93) 708433878</h4>
                                            <p>Sat to Thu 8am to 6pm</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="into-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="info-text">
                                            <h4>info@karmondana.com</h4>
                                            <p>Send us your query anytime!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <form action="#">
                                        <div class="left">
                                            <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="">
                                            <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="">
                                            <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required="">
                                        </div>
                                        <div class="right">
                                            <textarea name="message" cols="20" rows="7" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
                                        </div>
                                        <button type="submit" class="template-btn">subscribe now</button>
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
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.easyPaginate.js')}}"></script>

    @include('layout.sessionmessage')
