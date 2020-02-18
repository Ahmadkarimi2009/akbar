
        @include('layout.headingforadminpages')
        <title>New Book</title>
        <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">

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
    <!-- Header Area End -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3 class="mb-30 title_color" id="titlesss">Adding a new Book</h3>
                        <form action="{{route('book.store')}}" method="post" id="registerform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>Book Name <span class="float-right">*</span></label>
                                        <input type="text" name="name" placeholder="eg. Apple Inc."   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>ISBN</label>
                                        <input type="number" name="isbn" placeholder="eg. 978-3-16-148410-0"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Category <span class="float-right">*</span></label>
                                        <select id="category" name="category">
                                            <option value="" selected="selected">Choose</option>
                                            @if(isset($categories[0]->category))
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->category}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Author <span class="float-right">*</span></label>
                                        <input type="author" name="author" placeholder="eg. Khaled Hussaini"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>Translator</label>
                                        <input type="text" name="translator" placeholder="eg. Khaled Hussaini" id="translator"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>Language <span class="float-right">*</span></label>
                                        <input type="text" name="language" placeholder="eg. English" id="language"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>Price</label>
                                        <input type="text" name="price" placeholder="Enter the price for the book" id="price"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group-icon mt-3">
                                        <label>Page Numbers <span class="float-right">*</span></label>
                                        <input type="text" name="pagenumbers" placeholder="eg. 378" id="pagenumbers"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Printing Year</label>
                                        <input type="number" name="printingdate" placeholder="like" id="printingdate"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Edition </label>
                                        <input type="text" name="edition" placeholder="like" id="edition"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Description</label>
                                        <textarea name="description" placeholder="Write a short description about the book from your own or copy a passage from the book" id="description"   required="" class="form-control mr-2" autocomplete="off" rows="10"></textarea>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Cover Page</label>
                                        <input type="file" name="coverpage" id="coverpage"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius" id="submitbtn">Save the Book</button>
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
    <script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('#category').select2();
        $('#description').trumbowyg();
    </script>

    @include('layout.sessionmessage')
