
    @include('layout.headingsectionwithoutimage')
    <title>Company Profile</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    <style>
        body {
            background: rgb(245,245,245);
        }






        .wrapper{
            text-align:center;
            position:absolute;
            top:-40px;
            left:0px;
            text-align:center;
            width:100%;
        }

        .tabs{
            font-size:10px;
            font-weight:600;
            padding:0px;
            list-style:none;
            background:white;
            display:inline-block;
            border-radius:50px;
            position:relative;



        }
        .navcontainer{
            background:white;
            display:inline-block;
            padding: 3px 5px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

        .tabs a{
            text-decoration:none;
            color: #777;
            text-transform:uppercase;
            padding:10px 20px;
            display:inline-block;
            position:relative;
            z-index:1;
            transition-duration:0.6s;
        }

        .tabs a.active{
            color:#fff;
        }

        .tabs a i{
            margin-right:5px;
        }

        .trumbowyg-editor{
            padding:20px !important;
        }

        .tabs .selector{
            height:100%;
            display:inline-block;
            position:absolute;
            left:0px;
            top:0px;
            z-index:1;
            border-radius:50px;
            transition-duration:0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            
            background:  #06ff14;
            background: -moz-linear-gradient(45deg, #06ff14 0%, #28a745 100%);
            background: -webkit-linear-gradient(45deg,  #06ff14 0%,#28a745 100%);
            background: linear-gradient(45deg,  #06ff14 0%,#28a745 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=' #06ff14', endColorstr='#28a745',GradientType=1 );
        }





        #maincontainer{
            background:white;
            border-radius:5px;
            padding-top:5px;
        }
        .topandbottomsections{
            padding:30px 10px;
        }

        .fieldsets{
            border: 1px solid rgb(220,220,220);
        }





        .profileedit-modal-content{
            background: lightgray;
            border-radius: 20px;
            padding: 100px 50px 100px 50px;
        }
        .profileedit-modal-content .modal-body *{
            border-radius: 20px !important;
            font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .profileedit-modal-body h1{
            font-size:2rem;
        }


        html{
            font-size:0.8rem !important;
        }
        @@media (min-width: 575.98px) { 
            html{
                font-size: 0.8rem !important;
            }
         }

        @@media (min-width: 767.98px) { 
            html{
                font-size: 0.9rem !important;
            }
         }

        @@media (min-width: 991.98px) { 
            html{
                font-size: 1rem !important;
            }
         }

        @@media (min-width: 1199.98px) { 
            html{
                font-size: 1.1rem !important;
            }
         }
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
 </head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-6">
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
    <section class="jobs-area section-padding pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 shadow-sm mt-5 rounded" id="maincontainer">
                    <div class="wrapper">
                        <div class="navcontainer">
                            <nav class="tabs nav" role="tablist">
                                <div class="selector"></div>
                                <a data-toggle="tab" id="generalinfobtn" onclick="changetab(0)" role="tab" href="#home" class="active nav-link">Profile</a>
                                <a data-toggle="tab" id="multiplebtn" onclick="changetab(1)" role="tab" href="#multiplesectiontab" class="nav-link">Jobs</a>
                                <a data-toggle="tab" id="detailsbtn" onclick="changetab(2)" role="tab" href="#profile" class="nav-link">Settings</a>
                            </nav>
                        </div>
                        
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="topandbottomsections text-center">
                                <img src="{{asset($company[0]->user->avatar)}}" width="120px" height="120px" class="rounded-circle" id="companyimg">                                
                            </div>
                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-info"></span>&nbsp&nbspProfile Description</h4></legend>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="text-success font-weight-normal pt-3">About Company</h6>
                                            <p id="aboutcompnay-p">{!!$company[0]->profile_description!!}&nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('about', '{{$company[0]->profile_description}}', 'aboutcompnay-p')">Edit</button></p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-question"></span>&nbsp&nbspGeneral Info</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Name</h6>
                                            <p id="companyname-p">{{$company[0]->name}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('name', '{{$company[0]->name}}', 'companyname-p')">Edit</button></p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Website</h6>
                                            <p id="companywebsite-p">{{$company[0]->website}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('website', '{{$company[0]->website}}', 'companywebsite-p')">Edit</button></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Type</h6>
                                            <p id="companytype-p">{{$company[0]->type}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('type', '{{$company[0]->type}}', 'companytype-p')">Edit</button></p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">City</h6>
                                            <p id="companycity-p">{{$company[0]->city}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('city', '{{$company[0]->city}}', 'companycity-p')">Edit</button></p>
                                        </div>
                                    </div>
                                </fieldset>
                                    
                            </div>
                            <div class="topandbottomsections">
                             
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-at"></span>&nbsp&nbspEmail Addresses</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Main Email</h6>
                                            <p id="mainemailingeneraltab">{{$company[0]->user->email}}</p>
                                        </div>
                                    </div>
                                    @if(isset($company[0]->companyemail[0]))
                                    <div class="row">
                                        @foreach($company[0]->companyemail as $email)
                                        <div class="col-6">
                                            <h4 class="text-success font-weight-normal pt-3">Email</h4>
                                            <p id="companyemail{{$email->id}}-p">{{$email->email}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('email', '{{$email->email}}', 'companyemail{{$email->id}}-p')">Edit</button></p>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-phone"></span>&nbsp&nbspPhone Numbers</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Main Phone Number</h6>
                                            <p id="companymainphone-p">{{$company[0]->phone}}&nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('mainphone', '{{$company[0]->phone}}', 'companymainphone-p')">Edit</button</p>
                                        </div>
                                    </div>
                                    @if(isset($company[0]->companyphone[0]))
                                    <div class="row">
                                        @foreach($company[0]->companyphone as $phone)
                                        <div class="col-6">
                                            <h4 class="text-success font-weight-normal mt-5">Phone</h4>
                                            <p id="companyphone{{$phone->id}}-p">{{$phone->phone}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('phone', '{{$phone->phone}}', 'companyphone{{$phone->id}}-p')">Edit</button></p>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </fieldset>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="multiplesectiontab" role="tabpanel" aria-labelledby="home-tab">
                            <div class="topandbottomsections">
                                <a href="{{route('jobs.create')}}" class="btn btn-success btn-sm pl-5 pr-5">Add Job</a>
                            </div>
                            <div class="topandbottomsections">
                                <h4 class="text-success font-weight-normal"><span class="fa fa-info"></span>&nbsp&nbspJobs List</h4>
                                <div class="mt-5">
                                    @if(isset($company[0]->jobs[0]))
                                        @foreach($company[0]->jobs as $job)
                                            <div class="job-text flex-fill">
                                                <h6 class="">
                                                    <a href="{{route('jobs.show', $job->id)}}" class="text-secondary">
                                                        {{str_limit($job->title, 25)}}
                                                    </a>
                                                    
                                                    <a class="float-right pr-1">
                                                        <span class="fa fa-edit" style="font-size:17px" onclick="companyprofileeditjob({{$job}})"></span>
                                                    </a>
                                                    <a class="float-right pr-1">
                                                        <span class="fa fa-trash" style="font-size:17px" onclick="companyprofiledeletejob({{$job->id}})"></span>
                                                    &nbsp&nbsp&nbsp&nbsp</a>
                                                    <a class="float-right pr-1">
                                                        <span class="fa fa-check" style="font-size:17px" onclick="deactivatejob({{$job->id}})"></span>
                                                    &nbsp&nbsp&nbsp&nbsp</a>
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
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                        @endforeach
                                    @else
                                        <h6>No available job that you have posted</h6>
                                        <a href="{{route('jobs.create')}}" class="btn btn-outline-success btn-sm pl-5 pr-5">Post a new Job</a>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="home-tab">

                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-at"></span>&nbsp&nbspChanging Username</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal">Main Email / Username</h6>
                                            <p id="username-p">{{$company[0]->user->email}}&nbsp&nbsp<button class="btn btn-outline-warning btn-sm pt-0 pb-0 pr-3 pl-3" onclick="loadeditmodel('username', '{{$company[0]->user->email}}', 'username-p')">Edit</button></p>
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
                    <div>
                </div>

                <div class="col-lg-3">
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
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#editcompanydatamodal" id="changenamemodelbtn">
</button>

<!-- Modal -->
<div class="modal fade" id="editcompanydatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modelbody">
        <form class="form" type="post" action="{{route('company.edit', $company[0]->id)}}" id="companydataform">
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
      <div class="modal-body profileedit-modal-body" id="modelbody">
        <form class="form" type="post" action="{{route('company.edit', $company[0]->id)}}" id="passwordchangemodalform">

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
<!--                     Model for Job Editing                            --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--                                                                      --->
<!--------------------------------------------------------------------------->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#companyprofilejobeditmodal" id="companyprofilmodeleditjobbtn">
        Edit Job
</button>

<!-- Modal -->
<div class="modal fade" id="companyprofilejobeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" id="companyprofilemodelbody">
        <form class="form" type="post" id="companyprofileeditjobform" action="{{route('companyprofilejobeditingsubmit')}}">
            <h1 class="text-center text-light display-1 font-weight-light" id="companyprofilemodeltitle"></h1>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group-icon mt-3">
                        <label>Job Title <span class="float-right">*</span></label>
                        <input type="text" id="jobtitle" name="title" placeholder="eg. Master Trainer" class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group-icon mt-3">
                        <label for="category">Category<span class="float-right">*</span></label>
                        <select id="category" name="category">
                            <option value="">Choose</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Starting Date <span class="float-right">*</span></label>
                        <input type="text" name="openingdate" placeholder="eg. 2020-01-01" id="openingdate"  class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Ending Date <span class="float-right">*</span></label>
                        <input type="text" name="closingdate" placeholder="eg. 2020-12-30" id="closingdate"  class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Gender <span class="float-right">*</span></label>
                        <select id="gender" name="gender">
                                <option value="">Choose</option>
                                <option value="any">Any</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Contract Type <span class="float-right">*</span></label>
                        <select id="contracttype" name="contracttype">
                            <option value="" selected="selected">Choose</option>
                            <option value="long term">Long Term</option>
                            <option value="short term" >Short Term</option>
                            <option value="permanent">Permanent</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Work Type <span class="float-right">*</span></label>
                        <select id="worktype" name="worktype">
                                <option value="" selected="selected">Choose</option>
                                <option value="full time" >Full Time</option>
                                <option value="part time">Part Time</option>
                                <option value="consultant">Consultant</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Travel Possiblity <span class="float-right">*</span></label>
                        <select id="travelpossibility" name="travelpossibility">
                            <option value="" >Choose</option>
                            <option value="1" selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Contract Duration <span class="float-right">*</span></label>
                        <input type="text" id="contractduration" name="contractduration" placeholder="eg. 1 year"  'Salary'" class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-icon mt-3">
                        <label>Extension Possibility <span class="float-right">*</span></label>
                        <select id="extensionpossibility" name="extensionpossibility">
                            <option value="">Choose</option>
                            <option value="1"  selected="selected">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group-icon mt-3">
                        <label>Salary <span class="float-right">*</span></label>
                        <input type="text" id="salary" name="salary" placeholder="eg. 35000-50000 or As per Company scale"  'Salary'" class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group-icon mt-3">
                        <label>Nationality <span class="float-right">*</span></label>
                        <input type="text" id="nationality" name="nationality" placeholder="eg. Afghan"  class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group-icon mt-3">
                        <label>Years of Experience <span class="float-right">*</span></label>
                        <input type="text" id="experienceyears" name="experienceyears" placeholder="eg. 2 years"  'Salary'" class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group-icon mt-3">
                        <label>Probation Duration <span class="float-right">*</span></label>
                        <input type="text" id="probation" name="probation" placeholder="eg. 2 months"  class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group-icon mt-3">
                        <label>Vacancy Number <span class="float-right">*</span></label>
                        <input type="text" id="vacancynumber" name="vacancynumber" placeholder="eg. VCN-547"   class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group-icon mt-3">
                        <label>Number of Jobs <span class="float-right">*</span></label>
                        <input type="number" id="numberofjobs" name="numberofjobs" placeholder="eg. 1"  class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group-icon mt-3">
                        <label>Application Form (Optional)</label>
                        <input type="file" id="applicationform" name="applicationform"   class="form-control mr-2" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label>Languages <span class="float-right">*</span></label>
                        <input type="text" value="" placeholder="eg. Dari" id="languages" name="languages">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label>Skills <span class="float-right">*</span></label>
                        <input type="text" value="" placeholder="eg. Ms Office Package" id="skills" name="skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label>Location(s)<span class="float-right">*</span></label>
                        <select id="locations" name="locations" multiple="multiple">
                            <option value="badakhshan">Badakhshan</option>
                            <option value="badghis" >Badghis</option>
                            <option value="baghlan">Baghlan</option>
                            <option value="balkh">Balkh</option>
                            <option value="bamyan">Bamyan</option>
                            <option value="daykundi">Daykundi</option>
                            <option value="farah">Farah</option>
                            <option value="faryab">Faryab</option>
                            <option value="ghazni">Ghazni</option>
                            <option value="ghor">Ghor</option>
                            <option value="helmand">Helmand</option>
                            <option value="herat">Herat</option>
                            <option value="jawzjan">Jawzjan</option>
                            <option value="kabul" selected="selected">Kabul</option>
                            <option value="kandahar">Kandahar</option>
                            <option value="kapisa">Kapisa</option>
                            <option value="khost">Khost</option>
                            <option value="kunar">Kunar</option>
                            <option value="kunduz">Kunduz</option>
                            <option value="laghman">Laghman</option>
                            <option value="logar">Logar</option>
                            <option value="nangarhar">Nangarhar</option>
                            <option value="nimroz">Nimroz</option>
                            <option value="nuristan">Nuristan</option>
                            <option value="uruzgan">Uruzgan</option>
                            <option value="parwan">Parwan</option>
                            <option value="paktia">Paktia</option>
                            <option value="paktika">Paktika</option>
                            <option value="panjshir">Panjshir</option>
                            <option value="samangan">Samangan</option>
                            <option value="sar-e-pul">Sar-e-Pul</option>
                            <option value="takhar">Takhar</option>
                            <option value="wardak">Wardak</option>
                            <option value="zabul">Zabul</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="input-group-icon mt-3">
                        <label>Submission Emails <span class="float-right">*</span></label>
                        <input type="text" value="" placeholder="eg. info@abc.com" id="emails" name="emails">                    
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-12">
                    <div class="input-group-icon mt-3">
                        <label>About Company <span class="float-right">*</span></label>
                        <textarea type="text" name="aboutcompany" id="aboutcompany" placeholder="Write about your company"   class="form-control mr-2" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-12">
                    <div class="input-group-icon mt-3">
                        <label>Tasks and Responsibilities <span class="float-right">*</span></label>
                        <textarea type="text" id="responsibilities" name="responsibilities" placeholder="Write what are the key tasks and duties the person performs in this job"   class="form-control mr-2" autocomplete="off" value="Responsibilities"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group-icon mt-3">
                        <label>Qualifications <span class="float-right">*</span></label>
                        <textarea type="text" id="requirements" name="requirements" placeholder="Write down the requirements and qualifications to be met by the applicants who seek to get the job"   class="form-control mr-2" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group-icon mt-3">
                        <label>Submission Guideline <span class="float-right">*</span></label>
                        <textarea type="text" id="guide" name="guide" placeholder="Submission Guideline" rows="5" class="form-control mr-2" autocomplete="off"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button-group-area mt-3 text-right">
                    </div>
                </div>
            </div>

            <div class="modelbuttons mt-3 text-right">
                <button type="button" class="btn btn-info" data-dismiss="modal" id="companyprofilemodelexitbutton">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@include('layout.footersection_admin')
<script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script>
        var tabs = $('.tabs');
        var selector = $('.tabs').find('a').length;
        //var selector = $(".tabs").find(".selector");
        var activeItem = tabs.find('.active');
        var activeWidth = activeItem.innerWidth();
        $(".selector").css({
        "left": activeItem.position.left + "px", 
        "width": activeWidth + "px"
        });

        $(".tabs").on("click","a",function(e){
        e.preventDefault();
        $('.tabs a').removeClass("active");
        $(this).addClass('active');
        var activeWidth = $(this).innerWidth();
        var itemPos = $(this).position();
        $(".selector").css({
            "left":itemPos.left + "px", 
            "width": activeWidth + "px"
        });
        });

        var tabarray = ['home', 'multiplesectiontab', 'profile'];
        function changetab(number){
            $('#myTabContent').children().removeClass('active');
            $('#'+tabarray[number]).addClass('active');
            $('#'+tabarray[number]).addClass('show');
        }

        $('#responsibilities, #guide, #aboutcompany, #requirements').trumbowyg();
        $('#languages, #skills, #emails, #locations').selectize({
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
        $('#category, #worktype, #travelpossibility, #extensionpossibility, #gender, #contracttype').select2();



        $('#openingdate, #closingdate').datepicker({
            format: 'yyyy-mm-dd'
        });




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

            if(name == 'about'){
                $('#modeltitle').after('<textarea class="form-control" id="modelinputfield" placeholder="Write about your company" required="" rows="5">'+datas+'</textarea>');
            }
            else if(name == "type"){
                $('#modeltitle').after('<select class="custom-select d-block w-100" id="modelinputfield" required="">'
                                            +'<option value="private">Private</option>'
                                            +'<option value="governmental">Governmental</option>'
                                            +'<option value="ngo">NGO</option>'
                                        +'</select>');
            }
            else if(name == "city"){
                $('#modeltitle').after('<select id="modelinputfield" name="city" class="custom-select d-block w-100" required="">'
                                            +'<option value="badakhshan">Badakhshan</option>'
                                            +'<option value="badghis" >Badghis</option>'
                                            +'<option value="baghlan">Baghlan</option>'
                                            +'<option value="balkh">Balkh</option>'
                                            +'<option value="bamyan">Bamyan</option>'
                                            +'<option value="daykundi">Daykundi</option>'
                                            +'<option value="farah">Farah</option>'
                                            +'<option value="faryab">Faryab</option>'
                                            +'<option value="ghazni">Ghazni</option>'
                                            +'<option value="ghor">Ghor</option>'
                                            +'<option value="helmand">Helmand</option>'
                                            +'<option value="herat">Herat</option>'
                                            +'<option value="jawzjan">Jawzjan</option>'
                                            +'<option value="kabul" selected="selected">Kabul</option>'
                                            +'<option value="kandahar">Kandahar</option>'
                                            +'<option value="kapisa">Kapisa</option>'
                                            +'<option value="khost">Khost</option>'
                                            +'<option value="kunar">Kunar</option>'
                                            +'<option value="kunduz">Kunduz</option>'
                                            +'<option value="laghman">Laghman</option>'
                                            +'<option value="logar">Logar</option>'
                                            +'<option value="nangarhar">Nangarhar</option>'
                                            +'<option value="nimroz">Nimroz</option>'
                                            +'<option value="nuristan">Nuristan</option>'
                                            +'<option value="uruzgan">Uruzgan</option>'
                                            +'<option value="parwan">Parwan</option>'
                                            +'<option value="paktia">Paktia</option>'
                                            +'<option value="paktika">Paktika</option>'
                                            +'<option value="panjshir">Panjshir</option>'
                                            +'<option value="samangan">Samangan</option>'
                                            +'<option value="sar-e-pul">Sar-e-Pul</option>'
                                            +'<option value="takhar">Takhar</option>'
                                            +'<option value="wardak">Wardak</option>'
                                            +'<option value="zabul">Zabul</option>'
                                        +'</select>')
            }
            else{
                $('#modeltitle').after('<input type="text" class="form-control" id="modelinputfield" placeholder="" value="'+datas+'" required="">');
            }
            
                
            $('.modelbuttons').append('<button type="button" class="btn btn-sm btn-success" onclick="submitcompanydataform(\''+name+'\',\''+datas+'\',\''+paragraphindicator+'\');" id="modelformsubmitbtn">Save changes</button>')
            $('#changenamemodelbtn').click();
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
            // alert('this is new '+dataas+' and this is old '+olddata+' and this is the name '+names);
            swal({
                title: "Are you sure?",
                text: "Are you Sure you want to proceed with the update??",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/companyeditdata') }}",
                                data: {_token: '{{csrf_token()}}', property:names, value:dataas, old:olddata},
                                success:function(data) {
                                    swal({
                                            title: names+"!",
                                            text: "was updated succesfully!",
                                            icon: "success",
                                    
                                        });
                                    
                                    $('#'+paragraph).text(data.databack);
                                    $('#'+paragraph).append('&nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel(\''+names+'\', \''+data.databack+'\', \''+paragraph+'\');">Edit</button>');

                                    if(names=="username"){
                                        $('#mainemailingeneraltab').text(data.databack);
                                    }
 
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
/***            Populating Job Editing From                ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/*************************************************************/
/*************************************************************/
        function companyprofileeditjob(id){
            $('#jobtitle').val(id.id);
            $('#category option[value="'+id.category_id+'"]').attr('selected', 'selected');
            var selectedcategory = $('#category option[value="'+id.category_id+'"]').text();
            $('#category').siblings('.select2').children().children().children('.select2-selection__rendered').text(selectedcategory).attr('title', selectedcategory);


            $('#openingdate').val(id.openingdate);
            $('#closingdate').val(id.closingdate);  
            $('#gender option[value="'+id.gender+'"]').attr('selected', 'selected');

            $('#contracttype option[value="'+id.contracttype+'"]').attr('selected', 'selected');


            $('#worktype option[value="'+id.worktype+'"]').attr('selected', 'selected');

            $('#travelpossibility option[value="'+id.travelpossibility+'"]').attr('selected', 'selected');
    


            $('#extensionpossibility option[value="'+id.extensionpossibility+'"]').attr('selected', 'selected');
 


            $('#contractduration').val(id.contractduration);
            $('#salary').val(id.salary);
            $('#nationality').val(id.nationality);
            $('#experienceyears').val(id.experienceyears);
            $('#probation').val(id.probation);
            $('#vacancynumber').val(id.vacancynumber);
            $('#numberofjobs').val(id.numberofjobs);

            $('#aboutcompany').val(id.aboutcompany);
            $('#aboutcompany').trumbowyg('html', id.aboutcompany);


            $('#requirements').val(id.qualifications);
            $('#requirements').trumbowyg('html', id.qualifications);

            $('#responsibilities').text(id.responsibilities);
            $('#responsibilities').trumbowyg('html', id.responsibilities);

            $('#guide').val(id.guide);
            $('#guide').trumbowyg('html', id.guide);

            // console.log(id.joblanguage[0].id);
            // for(i = 0; i<(id.joblanguage).length; i++){
            //     alert(id.joblanguage[i].id);
            // }

            $('#category, #worktype, #travelpossibility, #extensionpossibility, #gender, #contracttype').select2('empty');
            $('#category, #worktype, #travelpossibility, #extensionpossibility, #gender, #contracttype').select2();
            $('#companyprofilmodeleditjobbtn').click();
        }





/*************************************************************/
/*************************************************************/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                  Passwords Match                      ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/*************************************************************/
/*************************************************************/
        $('#passwordreenterfield').change(function(){
            if($(this).val()!=""){
                if($('#passwordfield').val() !=""){
                    if($('#passwordreenterfield').val() != $('#passwordfield').val()){
                        swal({
                            title: "Attention!",
                            text: "Your Passwords Dont Match, Please try again!",
                            icon: "warning",
                        });
                        $('#passwordreenterfield').val('');
                    }
                }
            }
           
        });

        $('#passwordfield').change(function(){
            if($(this).val()!=""){
                if($('#passwordreenterfield').val() !=""){
                    if($('#passwordreenterfield').val() != $('#passwordfield').val()){
                        swal({
                            title: "Attention!",
                            text: "Your Passwords Dont Match, Please try again!",
                            icon: "warning",
                        });
                        $('#passwordfield').val('');
                    }
                }
            }
        });



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
                                url: "{{ url('/changecompanypassword') }}",
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
        }




/*************************************************************/
/*************************************************************/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***            Submitting Job Editing From                ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/*************************************************************/
/*************************************************************/
        $('#companyprofileeditjobform').submit(function(e){
            e.preventDefault();

            var title = $('#jobtitle').val();
            var category = $('#category').val();
            var openingdate = $('#openingdate').val();
            var closingdate = $('#closingdate').val();
            var gender = $('#gender').val();
            var contracttype = $('#contracttype').val();
            var worktype = $('#worktype').val();
            var travelpossibility = $('#travelpossibility').val();
            var contractduration = $('#contractduration').val();
            var extensionpossibility = $('#extensionpossibility').val();
            var salary = $('#salary').val();
            var nationality = $('#nationality').val();
            var experienceyears = $('#experienceyears').val();
            var probation = $('#probation').val();
            var vacancynumber = $('#vacancynumber').val();
            var numberofjobs = $('#numberofjobs').val();
            var applicationform = $('#applicationform').val();
            var languages = $('#languages').val();
            var skills = $('#skills').val();
            var locations = $('#locations').val();
            var emails = $('#emails').val();
            var aboutcompany = $('#aboutcompany').val();
            var responsibilities = $('#responsibilities').val();
            var requirements = $('#requirements').val();
            var guide = $('#guide').val();

            var url = "{{url ('/companyprofilejobeditingsubmit')}}";

            $.ajax({
                type: "POST",
                url: url,
                data:{_token: '{{csrf_token()}}',title:title, category:category, openingdate:openingdate, closingdate:closingdate, gender:gender, contracttype:contracttype, worktype:worktype, travelpossibility:travelpossibility, contractduration:contractduration,  extensionpossibility:extensionpossibility,  salary:salary,  nationality:nationality,  nationality:nationality,  experienceyears:experienceyears,  probation:probation,  vacancynumber:vacancynumber,  numberofjobs:numberofjobs,  applicationform:applicationform,  applicationform:applicationform,  languages:languages,  skills:skills,  locations:locations,  emails:emails,  aboutcompany:aboutcompany,  responsibilities:responsibilities,  responsibilities:responsibilities,  requirements:requirements,  guide:guide},
                success: function(data){
                    swal({
                        title: "The Password!",
                        text: data.message,
                        icon: "success",
                
                    });
                },
                error:function(){
                    swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                }
            });
        });





/*************************************************************/
/*************************************************************/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***            Populating Job Deleting From               ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/*************************************************************/
/*************************************************************/
        function companyprofiledeletejob(id){
            swal({
                title: "Are you sure?",
                text: "Are you sure you want to delete this job??",
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
        }



/*************************************************************/
/*************************************************************/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***          Populating Job Deactivating From             ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/***                                                       ***/
/*************************************************************/
/*************************************************************/
        function deactivatejob(id){
            swal({
                title: "Are you sure?",
                text: "Are you sure you want to deactivate this job??",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/deactivatejob') }}",
                                data: {_token: '{{csrf_token()}}', jobid:id},
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
        }
    </script>
    @include('layout.sessionmessage')
