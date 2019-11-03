
    @include('layout.headingforadminpages')
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    <title>New Post</title>
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
                    <div class="col-9">
                        <h3 class="mb-30 title_color" id="titlesss">Adding a new Story</h3>
                        <form action="{{route('blog.store')}}" method="post" id="registerform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Title<span class="float-right">*</span></label>
                                        <input type="text" name="title"  placeholder="eg. Invitation to Tenders"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Introduction<span class="float-right">*</span></label>
                                        <textarea type="text" name="introduction" id="introduction" placeholder=""   required="" class="form-control mr-2" autocomplete="off" rows="10">Write a brief about this story
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Body<span class="float-right">*</span></label>
                                        <textarea type="text" name="body" id="body" placeholder=""   required="" class="form-control mr-2" autocomplete="off" rows="10">Describe the RFP here
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Conclusion<span class="float-right">*</span></label>
                                        <textarea type="text" name="conclusion" id="conclusion" placeholder=""   required="" class="form-control mr-2" autocomplete="off" rows="10">N/A
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-success rounded-0 mt-3" onclick="document.getElementById('image').click();" type="button"><i class="fa fa-photo"></i> &nbsp Featured Image</button>
                                    <input type="file" id="image" name="image" class="form-control-file" onchange="document.getElementById('logopicdisplay').src = window.URL.createObjectURL(this.files[0]);$('#student_pic_display_div').show();$('#student_pic_icon_display_div').hide()" style="display:none" required>
                                    <div class="form-group w-100 mt-3" id="student_pic_display_div" style="display:none">
                                        <div class="thumbnail">
                                            <img src="" alt="Chosen Image" id="logopicdisplay" style="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="form-group mt-3" id="student_pic_icon_display_div" style="">
                                        <div class="thumbnail w-100" style="border: 1px solid lightgray; text-align:center; padding: 15px;border-radius: 5px">
                                            <i class="fa fa-image" style="font-size:100px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius" id="submitbtn">Save the RFP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('#introduction, #body, #conclusion').trumbowyg();
    </script>
@include('layout.sessionmessage')
