
    @include('layout.headingforadminpages')
    <title>New RFP</title>
    <style type="text/css">
        .single-input{
            padding: 5px 20px;
        }
    </style>
    @include('layout.globalfontsize')

</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <!-- Preloader End -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="logo-area">
                            <a href="{{route('home2')}}"><img src="{{asset('assets/images/logogreen1r.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30 title_color" id="titlesss">Adding a new RFP</h3>
                        <form action="{{route('rfp.store')}}" method="post" id="registerform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Title<span class="float-right">*</span></label>
                                        <input type="text" name="title" placeholder="eg. Invitation to Tenders"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Description<span class="float-right">*</span></label>
                                        <textarea type="text" name="description" placeholder=""   required="" class="form-control mr-2" autocomplete="off" rows="10">Describe the RFP here
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Company</label>
                                        <input type="text" name="company" placeholder="eg. Khaled Hussaini" id="translator"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Closing Date</label>
                                        <input type="date" name="closingdate" placeholder="eg. 2019-5-5" id="price"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Book File</label>
                                        <input type="file" name="file" id="file"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius" id="submitbtn">Save the RFP</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    @include('layout.footersection_admin')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">

    </script>
@include('layout.sessionmessage')
