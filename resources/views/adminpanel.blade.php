
    @include('layout.headingforadminpages')
    <title>Admin Panel</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    <style>
        body {
            background: rgb(245,245,245);
        }

        .adminpanelnavitem{
            color:gray;
            transition: 0.4s ease-out;
        }
        .adminpanelnavitem:hover{
            color:green;
        }

        .adminpanelnavdiv .active{
            background:green;
            color:white;
        }
   



        /************************************************************/
        /************************************************************/
        /************************************************************/
        /*                                                          */
        /*                                                          */
        /*                Start of Style for Books                  */
        /*                                                          */
        /*                                                          */
        /************************************************************/
        /************************************************************/
        /************************************************************/
        .eachbookcontainer{
            padding:5px;
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
        /************************************************************/
        /************************************************************/
        /************************************************************/
        /*                                                          */
        /*                                                          */
        /*                  End of Style for Books                  */
        /*                                                          */
        /*                                                          */
        /************************************************************/
        /************************************************************/
        /************************************************************/



        .topandbottomsections{
            padding:30px 10px;
        }
        .eachattribute{
            border-top: 1px solid lightgray;
            padding-top: 10px;
        }

        .forcedispalynone{
            display:none !important;
        }

    </style>
    @include('layout.globalfontsize')
    @include('layout.fieldsets')
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

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 shadow-sm mt-5 rounded pt-3 pb-3" id="maincontainer" style="background:white">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex flex-wrap nav nav-tabs adminpanelnavdiv" id="nav-tab" role="tablist">
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem active" id="tabnavsetting" data-toggle="tab" href="#navcontentsetting" role="tab">Setting</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavjob" data-toggle="tab" href="#navcontentjob" role="tab">Jobs</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavscholarship" data-toggle="tab" href="#navcontentscholarship" role="tab">Scholarships</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavrfp" data-toggle="tab" href="#navcontentrfp" role="tab">RFP</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavbook" data-toggle="tab" href="#navcontentbook" role="tab">Book</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavstories" data-toggle="tab" href="#navcontentstories" role="tab">Blog</a>

                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavjobcategory" data-toggle="tab" href="#navcontentjobcategory" role="tab">Job Category</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavbookcategory" data-toggle="tab" href="#navcontentbookcategory" role="tab">Book Category</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavsubscription" data-toggle="tab" href="#navcontentsubscription" role="tab">Subscription</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavusers" data-toggle="tab" href="#navcontentusers" role="tab">Job Seeker</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavcompanies" data-toggle="tab" href="#navcontentcompany" role="tab">Company</a>
                            <a class="d-inline-block pt-1 pb-1 pl-4 pr-3 adminpanelnavitem" id="tabnavadmins" data-toggle="tab" href="#navcontentadmin" role="tab">Admins</a>

                        </div>
                        <hr>
                        <div class="tab-content adminpaneltabcontent" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="navcontentsetting" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="topandbottomsections text-center">
                                    <img src="{{Auth::user()->avatar}}" width="120px" height="120px" class="rounded-circle" id="avatarimg">                                
                                </div>
                                <div class="topandbottomsections">
                                    <fieldset class="fieldsets p-3 rounded">
                                        <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-at"></span>&nbsp&nbspChanging Username</h4></legend>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6 class="text-success font-weight-normal">Main Email / Username</h6>
                                                <p id="username-p">{{Auth::user()->email}}&nbsp&nbsp<button class="btn btn-outline-warning btn-sm pt-0 pb-0 pr-3 pl-3" onclick="loadeditmodel('username', '{{Auth::user()->email}}', 'username-p')">Edit</button></p>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="topandbottomsections">
                                    <fieldset class="fieldsets p-3 rounded">
                                        <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-lock"></span>&nbsp&nbspChanging Password</h4></legend>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-outline-warning btn-sm pt-0 pb-0  pr-3 pl-3" onclick="$('#modalforpasswordchangebtn').click()">Change Your Password</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navcontentjob" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="Search Jobs" id="jobsearchinput">
                                    </div>
                                    <div class="col-3">
                                        <a href="{{route('jobs.create')}}" class="btn btn-success form-control">Add Job</a>
                                    </div>
                                </div>
                                <div class="" id="joblistcontainer">
                                @if(isset($jobs[0]))
                                    @foreach($jobs as $job)
                                        <div class="single-job border-bottom rounded p-3 d-flex" id="jobrow{{$job->id}}">
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
                                                    <h6 class="">
                                                        <a href="{{route('jobs.show', $job->id)}}" class="text-secondary">{{str_limit($job->title, 25)}} 
                                                            <span class="badge badge-pill badge-success">{{$job->numberofjobs}}</span>
                                                        </a>
                                                        <span class="float-right fa fa-trash text-danger d-inline-block" onclick="deletejob({{$job->id}})"></span>
                                                        <span class="float-right fa fa-eye text-info d-inline-block pr-3" onclick="$(this).parent().parent().parent().siblings('.jobviewsdetails').toggle();"></span>
                                                    </h6>
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
                                                            | <span class="text-success">{{$job->timeviewed}} Views</span>

                                                            @if($job->gender == "male" or $job->gender == "female")
                                                                <span class="float-right d-inline-block p-1 pr-3 pl-3 border border-secondary rounded">{{$job->gender}}</span>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div id="jobview{{$job->id}}" class="jobviewsdetails pt-5 pb-3 mr-2 ml-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Job Title: </strong>{{$job->title}} <span class="fa fa-pencil text-info" onclick="editjobmodal('title','{{$job->title}}')"></span></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Company: </strong>{{$job->company->name}} <span class="fa fa-pencil text-info" onclick="editjobmodal('company','{{$job->company->name}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Opening Date: </strong>{{$job->openingdate}} <span class="fa fa-pencil text-info" onclick="editjobmodal('openingdate','{{$job->openingdate}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Closing Date: </strong>{{$job->closingdate}} <span class="fa fa-pencil text-info" onclick="editjobmodal('closingdate','{{$job->closingdate}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Vacancy Number: </strong>{{$job->vacancynumber}} <span class="fa fa-pencil text-info" onclick="editjobmodal('vacancynumber','{{$job->vacancynumber}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Category: </strong>{{$job->jobcategory->name}} <span class="fa fa-pencil text-info" onclick="editjobmodal('category','{{$job->jobcategory->name}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Gender: </strong>{{$job->gender}} <span class="fa fa-pencil text-info" onclick="editjobmodal('gender','{{$job->gender}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Nationality: </strong>{{$job->nationality}} <span class="fa fa-pencil text-info" onclick="editjobmodal('nationality','{{$job->nationality}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Salary: </strong>{{$job->salary}} <span class="fa fa-pencil text-info" onclick="editjobmodal('salary','{{$job->salary}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Number of Jobs: </strong>{{$job->numberofjobs}} <span class="fa fa-pencil text-info" onclick="editjobmodal('numberofjobs','{{$job->numberofjobs}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Contract Type: </strong>{{$job->contracttype}} <span class="fa fa-pencil text-info" onclick="editjobmodal('contracttype','{{$job->contracttype}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Contract Type: </strong>{{$job->contractduration}} <span class="fa fa-pencil text-info" onclick="editjobmodal('contractduration','{{$job->contractduration}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Work Type: </strong>{{$job->worktype}} <span class="fa fa-pencil text-info" onclick="editjobmodal('worktype','{{$job->worktype}}')"></p>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row pl-3 eachattribute">
                                                        <p class=""><strong>Work Experience: </strong>{{$job->experienceyears}} <span class="fa fa-pencil text-info" onclick="editjobmodal('experienceyears','{{$job->experienceyears}}')"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border-top pt-2">
                                                <div class="col-12">
                                                    <strong>About Company:</strong> {!!$job->aboutcompany!!} <span class="fa fa-pencil text-info" onclick="editjobmodal('aboutcompany','{{$job->aboutcompany}}')">
                                                </div>
                                            </div>
                                            <div class="row pt-4">
                                                <div class="col-12">
                                                    <strong>Job Description:</strong> {!!$job->responsibilities!!} <span class="fa fa-pencil text-info" onclick="editjobmodal('jobdescription','{{$job->jobdescription}}')">
                                                </div>
                                            </div>
                                            @if(isset($job->jobskill[0]))
                                                <strong>Skills:</strong>
                                                @foreach($job->jobskill as $skill)
                                                    {{$skill->skill}} , 
                                                @endforeach
                                                <span class="fa fa-pencil text-info" onclick="editjobmodal()">
                                            @endif
                                            @if(isset($job->joblanguage[0]))
                                                <strong>Languages:</strong>
                                                @foreach($job->joblanguage as $lang)
                                                    {{$lang->language}} ,  
                                                @endforeach
                                                <span class="fa fa-pencil text-info" onclick="editjobmodal(,{{$job->title}})">
                                            @endif
                                            <div class="row pt-4">
                                                <div class="col-12">
                                                    <strong>Tast & Responsibilities:</strong> {!!$job->responsibilities!!} <span class="fa fa-pencil text-info" onclick="editjobmodal(,{{$job->title}})">
                                                </div>
                                            </div>
                                            <div class="row pt-4">
                                                <div class="col-12">
                                                    <strong>Submission Guidlines:</strong> {!!$job->guide!!} <span class="fa fa-pencil text-info" onclick="editjobmodal(,{{$job->title}})">
                                                </div>
                                            </div>
                                            <div class="row pt-4">
                                                <div class="col-12">
                                                    <strong>Emails:</strong>
                                                    @if(isset($job->jobemail[0]))
                                                        @foreach($job->jobemail as $email)
                                                            <span class="pr-2">{{$email->email}},  <span class="fa fa-pencil text-info" onclick="editjobmodal(,{{$job->title}})"></span>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <h6>No available job that you have posted</h6>
                                    <a href="{{route('jobs.create')}}" class="btn btn-outline-success btn-sm pl-5 pr-5">Post a new Job</a>
                                @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navcontentscholarship" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="Search Scholarships" id="scholarshipsearchinput">
                                    </div>
                                    <div class="col-3">
                                        <a href="{{route('scholarship.create')}}" class="btn btn-success form-control">Add Scholarship</a>
                                    </div>
                                </div>
                                @if(isset($schos[0]))
                                    @foreach($schos as $scholarship)
                                        <div class="single-job border-bottom rounded p-3 d-flex" id="scholarshiprow{{$scholarship->id}}">
                                            <div class="job-text flex-fill">
                                                <h6 class="">
                                                    <a href="{{route('scholarship.show', $scholarship->id)}}" class="text-secondary">{{str_limit($scholarship->name, 25)}} </a>
                                                    <span class="float-right fa fa-trash text-danger" onclick="deletescholarship({{$scholarship->id}})"></span>
                                                </h6>
                                                <ul>
                                                    <li Class="text-capitalize">
                                                        <span data-toggle="tooltip" data-placement="top" title="Hosting Country">{{$scholarship->country}}</span> |
                                                        <span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">{{$scholarship->closingdate}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h6>No Scholarships are available now</h6>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="navcontentrfp" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="search RFPs" id="rfpsearchinput">
                                    </div>
                                    <div class="col-3">
                                        <a href="{{route('rfp.create')}}" class="btn btn-success form-control">Add RFP</a>
                                    </div>
                                </div>
                                @if(isset($rfps[0]))
                                    @foreach($rfps as $rfp)
                                        <div class="single-job border-bottom rounded p-3 d-flex" id="rfprow{{$rfp->id}}">
                                            <div class="job-text flex-fill">
                                                <h6 class="">
                                                    <a href="{{route('rfp.show', $rfp->id)}}" class="text-secondary">{{str_limit($rfp->title, 25)}} </a>
                                                    <span class="float-right fa fa-trash text-danger" onclick="deleterfp({{$rfp->id}})"></span>
                                                </h6>
                                                <ul>
                                                    <li Class="text-capitalize">
                                                        <span data-toggle="tooltip" data-placement="top" title="Hosting Country">{{$rfp->company}}</span> |
                                                        <span class="text-danger" data-toggle="tooltip" data-placement="top" title="Deadline">{{$rfp->closingdate}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h6>No RFPs are available now</h6>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="navcontentbook" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="search Books" id="booksearchinput">
                                    </div>
                                    <div class="col-3">
                                        <a href="{{route('book.create')}}" class="btn btn-success form-control">Add Book</a>
                                    </div>
                                </div>
                                <div class="row pl-1 pr-1">
                                    @if(isset($books[0]))
                                        @foreach($books as $book)
                                            <div class="eachbookcontainer col-6 col-md-3 col-lg-2" id="bookrow{{$book->id}}">
                                                <div class="p-1 sepreatebymargin shadow-sm">
                                                    <div class="divformargins">
                                                        <div class="imgheight">
                                                            <img src="{{$book->coverpage}}" alt="" class="w-100 h-100" onclick="document.getElementById('showlinkforbook{{$book->id}}').click()">
                                                        </div>
                                                    </div>
                                                    <div class="booknamesdiv pt-2">
                                                        <h5>
                                                            <strong>{{$book->name}}</strong>
                                                        </h5>
                                                        <p class="timesdownloaded"><span class="text-success">{{$book->timesdownloaded}}</span> Downloads</p>
                                                    </div>
                                                    <a class="d-none" href="{{route('book.show', $book)}}" id="showlinkforbook{{$book->id}}"></a>
                                                    <a href="#" onclick="deletebook({{$book->id}})"><span class="fa fa-trash text-danger"></span></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h6>No Books are available now</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navcontentstories" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="search Stories" id="storiessearchinput">
                                    </div>
                                    <div class="col-3">
                                        <a href="{{route('blog.create')}}" class="btn btn-success form-control">Add Story</a>
                                    </div>
                                </div>
                                @if(isset($posts[0]))
                                    @foreach($posts as $post)
                                    <div class="single-job row border-bottom rounded p-3 mt-1 mr-md-1 ml-md-1">
                                        <div class="col-md-3 mt-3">
                                            <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="w-100">
                                        </div>
                                        <div class="col-md-9 mt-3 pr-5">
                                            <h6>{{$post->title}} 
                                                <span class="float-right fa fa-trash text-danger d-inline-block ml-2" onclick="deletenews({{$post->id}})"></span>
                                                <a href="{{route('blog.edit', $post->id)}}">
                                                    <span class="float-right fa fa-edit text-info d-inline-block"></span>
                                                </a>
                                            </h6> 
                                            <p class="storybody" id="">{!! $post->body !!}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <h6>No stories are available now</h6>
                                @endif
                            </div>


                            <div class="tab-pane fade" id="navcontentjobcategory" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{route('jobcategory.create')}}" class="btn btn-success btn-block">Add Job Category</a>
                                    </div>
                                </div>
                                @if(isset($jobcategory[0]))
                                    <div class="row d-flex flex-wrap">
                                        @foreach($jobcategory as $jobc)
                                            <div id="jobcategoryrow{{$jobc->id}}" class="p-5 m-1 shadow-sm">
                                                <h6>{{$jobc->name}}
                                                    <span class="float-right fa fa-trash text-danger pl-3" onclick="deletejobcategory({{$jobc->id}})"></span>
                                                </h6>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h6>No Job Categories are available now</h6>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="navcontentbookcategory" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{route('bookcategory.create')}}" class="btn btn-success btn-block">Add Book Category</a>
                                    </div>
                                </div>
                                @if(isset($bookcategory[0]))
                                    <div class="row d-flex flex-wrap">
                                        @foreach($bookcategory as $bookc)
                                            <div id="bookcategoryrow{{$bookc->id}}" class="p-5 m-1 shadow-sm">
                                                <h6>{{$bookc->category}}
                                                    <span class="float-right fa fa-trash text-danger pl-3" onclick="deletebookcategory({{$bookc->id}})"></span>
                                                </h6>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h6>No Book Categories are available now</h6>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="navcontentsubscription" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="Search Subscribers" id="subscriptionsearchinput">
                                    </div>
                                </div>
                                <div id="subscriptionscontainer">
                                    @if(isset($subscription[0]))
                                        @foreach($subscription as $subs)
                                        <div class="row" id="subscriberrow{{$subs->id}}">
                                            <div class="col-12">
                                                <div class="border-bottom pt-3 pb-3 pl-3">{{$subs->email}}
                                                    <span class="float-right pr-3">
                                                        <span class="fa fa-trash text-danger" onclick="deletesubscriber({{$subs->id}})"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <h6>No Subscribers are available now</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navcontentusers" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control w-100 mb-2" placeholder="Search Job Sekker" id="usersearchinput">
                                    </div>
                                </div>
                                <div id="userscontainer">
                                    <table class="table">
                                        <thead>
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>Email</th>
                                        </thead>
                                    @if(isset($users[0]))
                                        @foreach($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->jobseeker->lastname}}</td>
                                                <td>{{$user->jobseeker->phone}}</td>
                                                <td>{{$user->jobseeker->city}}</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    @else
                                        <h6>No Job Seeker are available now</h6>
                                    @endif
                                    </table>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="navcontentcompany" role="tabpanel" aria-labelledby="nav-contact-tab">
                                @if(isset($companies[0]))
                                    <div class="row d-flex flex-wrap">
                                        @foreach($companies as $company)
                                            <div id="companyrow{{$company->id}}" class="p-5 m-1 shadow-sm">
                                                <h6>{{$company->name}}
                                                    <span class="float-right fa fa-trash text-danger pl-3" onclick="deletecompany({{$company->id}})"></span>
                                                </h6>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h6>No Companies are available now</h6>
                                @endif
                            </div>

                            <div class="tab-pane fade" id="navcontentadmin" role="tabpanel" aria-labelledby="nav-contact-tab">
                                @if(isset($admins[0]))
                                    <div class="row d-flex flex-wrap">
                                        @foreach($admins as $admin)
                                            <div id="adminrow{{$admin->id}}" class="p-5 m-1 shadow-sm">
                                                <h6>{{$admin->name}}
                                                    <span class="float-right fa fa-trash text-danger pl-3" onclick="deleteadmin({{$admin->id}})"></span>
                                                </h6>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h6>No Admins are available now</h6>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->




<!--------------------------------------------------------------------------->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                     Model for Info Change                            --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--------------------------------------------------------------------------->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#editadmindatamodel" id="adminpaneldataeditmodelbtn">
</button>

<!-- Modal -->
<div class="modal fade" id="editadmindatamodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modelbodyfordata">
        <form class="form" type="post" action="{{route('adminedit', Auth::user()->id)}}" id="companydataform">
            <h1 class="text-center text-light display-1 font-weight-light" id="modeltitle"></h1>
            


            <div class="modelbuttons mt-3 text-right">
                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal" id="editmodeldismissbtn">Cancel</button>
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
<!--                     Model for Password Change                        --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--------------------------------------------------------------------------->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforpasswordchange" id="modalforpasswordchangebtn">
</button>

<!-- Modal -->
<div class="modal fade" id="modalforpasswordchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modelbodyforpassword">
        <form class="form" type="post" action="{{route('changeadminpassword', Auth::user()->id)}}" id="passwordchangemodalform">

            <input type="password" id="currentpasswordfield" placeholder="Current Password" class="form-control mt-2" autocomplete="off">
            <input type="password" id="passwordfield" placeholder="New Password" class="form-control mt-2" autocomplete="off">
            <input type="password" id="passwordreenterfield" placeholder="Re-type New Password" class="form-control mt-2" autocomplete="off">


            <div class="modelbuttons mt-3 text-right">
                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal" id="passwordchangemodalcancelbtn">Cancel</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="passwordchangemodalsubmitbtn" onclick="submitchangpasswordform()">Save Password</button>
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
<!--                     Model for Editing Jobs                           --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--------------------------------------------------------------------------->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforeditingjobs" id="modalforeditingjobsbtn">
</button>

<!-- Modal -->
<div class="modal fade" id="modalforeditingjobs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modalbodyforeditingjobs">
        <form class="form" type="post" action="{{route('editjobs', Auth::user()->id)}}" id="editjobsform">

        </form>
        <div class="modelbuttons mt-3 text-right" id="editjobsmodalbtnsection">
            
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
<!--                     Model for Editing News                           --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--------------------------------------------------------------------------->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#modalforeditingnews" id="modalforeditingnewsbtn">
</button>

<!-- Modal -->
<div class="modal fade" id="modalforeditingnews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modalbodyforeditingnews">
        <form class="form" type="post" action="{{route('editpost', Auth::user()->id)}}" id="editnewsform">

        </form>
        <div class="modelbuttons mt-3 text-right" id="editnewsmodalbtnsection">
            
        </div>
      </div>
    </div>
  </div>
</div>




@include('layout.footersection_admin')
<script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
<script>
        var jsonjobs = {!!json_encode($jobs) !!};
        $('#jobsearchinput').on('keyup', function(){
            $('.single-job').removeClass('forcedispalynone');

            if($(this).val()!=""){
                var typed = $('#jobsearchinput').val();
                $('.single-job .text-secondary').each(function(){
                    if(!($(this).text().toLowerCase().indexOf(typed)>=0)){
                        $(this).parents('.single-job').addClass('forcedispalynone'); 
                    }
                });
            }
        });


        $('.jobviewsdetails').hide();



            /*************************************************************/
            /*************************************************************/
            /***                                                       ***/
            /***                                                       ***/
            /***                                                       ***/
            /***                                                       ***/
            /***            Loading Company Editng Model               ***/
            /***                                                       ***/
            /***                                                       ***/
            /***                                                       ***/
            /***                                                       ***/
            /***                                                       ***/
            /*************************************************************/
            /*************************************************************/
            function loadeditmodel(name, datas, paragraphindicator){
                $('#modelinputfield').remove();
                $('#modelformsubmitbtn').remove();

                $('#modeltitle').after('<input type="text" class="form-control" id="modelinputfield" placeholder="" value="'+datas+'" required="">');
                
                    
                $('.modelbuttons').append('<button type="button" class="btn btn-sm btn-success" onclick="submitcompanydataform(\''+name+'\',\''+datas+'\',\''+paragraphindicator+'\');" id="modelformsubmitbtn">Save changes</button>')
                $('#adminpaneldataeditmodelbtn').click();
            }

            
        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***           Submitting Company Info Update              ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function submitcompanydataform(names, olddata, paragraph){
                var dataas = $('#modelinputfield').val();
                swal({
                    title: "Are you sure?",
                    text: "Are you Sure you want to update the username??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/adminedit') }}",
                                    data: {_token: '{{csrf_token()}}', property:names, value:dataas, old:olddata},
                                    success:function(data) {
                                        swal({
                                                title: names+"!",
                                                text: "was updated succesfully!",
                                                icon: "success",
                                        
                                            });
                                        
                                        $('#'+paragraph).text(data.databack);
                                        $('#'+paragraph).append('&nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel(\''+names+'\', \''+data.databack+'\', \''+paragraph+'\');">Edit</button>');

                                

                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }

                                }
                            );
                        }
                        
                    });
                }


                

        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                Passwords Change Ajax                  ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function submitchangpasswordform(){
                var current = $('#currentpasswordfield').val();
                var newpass = $('#passwordfield').val();
                swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to update your password??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/changeadminpassword') }}",
                                    data: {_token: '{{csrf_token()}}', currentpassword:current, newpassword:newpass},
                                    success:function(data) {
                                        swal({
                                                title: "The Password!",
                                                text: data.message,
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
                    $('#currentpasswordfield').val('');
                    $('#passwordfield').val('');
                    $('#passwordreenterfield').val('');
            }


        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                Subscriber Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletesubscriber(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this subscriber??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletesubscriber') }}",
                                    data: {_token: '{{csrf_token()}}', sid:id},
                                    success:function(data) {
                                        $('#subscriberrow'+id).remove();
                                        swal({
                                                title: "The Subscriber!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }



        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                      Jobs Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletejob(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Job??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletejob') }}",
                                    data: {_token: '{{csrf_token()}}', jid:id},
                                    success:function(data) {
                                        $('#jobrow'+id).remove();
                                        swal({
                                                title: "The Job!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }


        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***               Scholarship Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletescholarship(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Scholarship??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletescholarship') }}",
                                    data: {_token: '{{csrf_token()}}', sid:id},
                                    success:function(data) {
                                        $('#scholarshiprow'+id).remove();
                                        swal({
                                                title: "The Scholarship!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }
        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                     Users Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deleteuser(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this User??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deleteuser') }}",
                                    data: {_token: '{{csrf_token()}}', uid:id},
                                    success:function(data) {
                                        $('#userrow'+id).remove();
                                        swal({
                                                title: "The User!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }

        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                     RFP   Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deleterfp(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this RFP??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deleterfp') }}",
                                    data: {_token: '{{csrf_token()}}', rid:id},
                                    success:function(data) {
                                        $('#rfprow'+id).remove();
                                        swal({
                                                title: "The RFP!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }


        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                     News Deletion                    ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletenews(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Story??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletenews') }}",
                                    data: {_token: '{{csrf_token()}}', nid:id},
                                    success:function(data) {
                                        $('#storiesrow'+id).remove();
                                        swal({
                                                title: "The Story!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }

        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                  Job Category Deletion                ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletejobcategory(jcid){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Job Category??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletejobcategory') }}",
                                    data: {_token: '{{csrf_token()}}', id:jcid},
                                    success:function(data) {
                                        $('#jobcategoryrow'+jcid).remove();
                                        swal({
                                                title: "The Job Category!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }


        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                 Book Category Deletion                ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletebookcategory(bcid){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Book Category??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletebookcategory') }}",
                                    data: {_token: '{{csrf_token()}}', id:bcid},
                                    success:function(data) {
                                        $('#bookcategoryrow'+bcid).remove();
                                        swal({
                                                title: "The ook Category!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }

        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                       Company Deletion                ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
            function deletecompany(cid){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Company??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletecompany') }}",
                                    data: {_token: '{{csrf_token()}}', id:cid},
                                    success:function(data) {
                                        $('#companyrow'+cid).remove();
                                        swal({
                                                title: "The Company!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }
            
            
        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                    Admin Deletion                     ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
        function deleteadmin(aid){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Admin??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deleteadmin') }}",
                                    data: {_token: '{{csrf_token()}}', id:aid},
                                    success:function(data) {
                                        $('#adminrow'+aid).remove();
                                        swal({
                                                title: "The Admin!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }


        /*************************************************************/
        /*************************************************************/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                     Book Deletion                     ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /***                                                       ***/
        /*************************************************************/
        /*************************************************************/
        function deletebook(id){
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this Book??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                            $.ajax(
                                {
                                    type:'POST',
                                    url: "{{ url('/deletebook') }}",
                                    data: {_token: '{{csrf_token()}}', bid:id},
                                    success:function(data) {
                                        $('#adminrow'+id).remove();
                                        swal({
                                                title: "The Book!",
                                                text: "was deleted successfully!",
                                                icon: "success",
                                        
                                            });
                                    },
                                    error:function(){
                                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                                    }
                                }
                            );
                        }
                    });
            }




    function editjobmodal(name, value){
        $('#editjobsform').empty();
        $('#editjobsmodalbtnsection').empty();
        if(name=="title" || name=="vacancynumber" || name=="nationality" || name=="contractduration"){
            $('#editjobsform').append('<input type="text" name="'+name+'" value="'+value+'" class="form-control" placeholder="'+name+'" id="singletextfield">');
            $('#editjobsmodalbtnsection').append('<button class="btn btn-success float-right" type="button" onclick="submiteditjob(\''+name+'\')">Save</button>');
            $('#modalforeditingjobsbtn').click();
        }
    }
    /*************************************************************/
    /*************************************************************/
    /***                                                       ***/
    /***                                                       ***/
    /***                                                       ***/
    /***                                                       ***/
    /***                     Job Editing                      ***/
    /***                                                       ***/
    /***                                                       ***/
    /***                                                       ***/
    /***                                                       ***/
    /***                                                       ***/
    /*************************************************************/
    /*************************************************************/
        function submiteditjob(name){
            // swal({
            //     title: "Are you sure?",
            //     text: "You want to delete this Book??",
            //     icon: "warning",
            //     buttons: true,
            //     dangerMode: true,
            //     })
            //     .then((willDelete) => {
            //     if (willDelete) {
            //             $.ajax(
            //                 {
            //                     type:'POST',
            //                     url: "{{ url('/deletebook') }}",
            //                     data: {_token: '{{csrf_token()}}', bid:id},
            //                     success:function(data) {
            //                         $('#adminrow'+id).remove();
            //                         swal({
            //                                 title: "The Book!",
            //                                 text: "was deleted successfully!",
            //                                 icon: "success",
                                    
            //                             });
            //                     },
            //                     error:function(){
            //                         swal("Oops!", "Unfortunately the attempt was not successful!", "error");
            //                     }
            //                 }
            //             );
            //         }
            //     });
            alert(name);
        }


        $('.storybody').each(function(){
            var text = $(this).next().text().substr(0, 175);
            $(this).nextAll('p').remove();
            $(this).after('<p>'+text+'</p>');

        });
</script>
    @include('layout.sessionmessage')
