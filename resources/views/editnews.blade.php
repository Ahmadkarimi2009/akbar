
    @include('layout.headingforadminpages')
    <title>Editing Story</title>
    @include('layout.globalfontsize')
    </head>
<body>
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
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Edit Story</h3>
                            <div class="">
                                <h3 class="text-secondary">Title <span class="fa fa-pencil text-info" onclick="$('#modalforeditingtitlebtn').click()"></span></h3>
                                <span class="text-dark">{{$news->title}}</span>
                            </div>
                            <hr>
                            <div class="mt-5">
                                <h3 class="text-secondary">Introduction <span class="fa fa-pencil text-info" onclick="$('#modalforeditingintroductionbtn').click()"></span></h3>
                                <span class="text-dark">{!!$news->introduction!!} </span>                               
                            </div>
                            <hr>
                            <div class="mt-5">
                                <h3 class="text-secondary">Body <span class="fa fa-pencil text-info" onclick="$('#modalforeditingbodybtn').click()"></span></h3>
                                <span class="text-dark">{!!$news->body!!} </span>                               
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--------------------------------------------------------------------------->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                     Model for Editing News               --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--------------------------------------------------------------------------->            
    <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforeditingbody" id="modalforeditingbodybtn">
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalforeditingbody" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog profileedit-modal-dialog modal-lg" role="document">
            <div class="modal-content profileedit-modal-content p-5">
                <div class="modal-body profileedit-modal-body" id="modalbodyforeditingbody">
                    <form action="{{route('blog.update', $news->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <textarea name="body" class="w-100" id="textbody">
                            {{$news->body}}
                        </textarea>
                        <div class="modelbuttons mt-3 text-right" id="editbodymodalbtnsection">
                            <button type="button" class="btn btn-secondary btn-sm pl-5 pr-5" onclick>Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm pl-5 pr-5">Edit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--------------------------------------------------------------------------->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                     Model for Introduction                           --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--------------------------------------------------------------------------->
    <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforeditingintroduction" id="modalforeditingintroductionbtn">
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalforeditingintroduction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog profileedit-modal-dialog modal-lg" role="document">
            <div class="modal-content profileedit-modal-content">
                <div class="modal-introduction profileedit-modal-introduction p-5" id="modalintroductionforeditingintroduction">
                    <form action="{{route('blog.update', $news->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <textarea name="introduction" class="w-100" id="textintroduction">
                            {{$news->introduction}}
                        </textarea>
                        <div class="modelbuttons mt-3 text-right" id="editintroductionmodalbtnsection">
                            <button type="button" class="btn btn-secondary btn-sm pl-5 pr-5" onclick>Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm pl-5 pr-5">Edit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--------------------------------------------------------------------------->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                            Model for Title                           --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--                                                                      --->
    <!--------------------------------------------------------------------------->
    <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforeditingtitle" id="modalforeditingtitlebtn">
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalforeditingtitle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog profileedit-modal-dialog modal-lg" role="document">
            <div class="modal-content profileedit-modal-content">
                <div class="modal-title profileedit-modal-title p-5" id="modaltitleforeditingtitle">
                    <form action="{{route('blog.update', $news->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <input type="text" value="{{$news->title}}" class="form-control" name="title">
                        <div class="modelbuttons mt-3 text-right" id="edittitlemodalbtnsection">
                            <button type="button" class="btn btn-secondary btn-sm pl-5 pr-5" onclick>Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm pl-5 pr-5">Edit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footersection')
<script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/ckeditor/ckeditor.js')}}"></script>
    <script>

        ClassicEditor
		.create( document.querySelector( '#textbody' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );


        ClassicEditor
		.create( document.querySelector( '#textintroduction' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

    </script>
    @include('layout.sessionmessage')
