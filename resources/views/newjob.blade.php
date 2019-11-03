
    @include('layout.headingforadminpages')
    <link rel="stylesheet" href="{{asset('assets/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    
    <title>New Job</title>
    <style type="text/css">
        .single-input{
            padding: 5px 20px;
        }
        #gender{
            width:100%;
            height: 50px;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
            background-color:#28a745;
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
                    <div class="col-lg-9 col-md-8">
                        <form action="{{route('jobs.store')}}" method="post" id="newjobform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="input-group-icon mt-3">
                                                <label>Job Title <span class="float-right">*</span></label>
                                                <input type="text" name="title" required="" placeholder="eg. Master Trainer" class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group-icon mt-3">
                                                <label for="category">Category<span class="float-right">*</span></label>
                                                <select id="category" name="category">
                                                    <option value="" selected="selected" required="">Choose</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @if(Auth::user()->usertype=='1' or Auth::user()->usertype=='4')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Company <span class="float-right" required="">*</span></label>
                                                <input type="text" name="company" placeholder="eg. Apple" id="company"  class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Starting Date <span class="float-right" required="">*</span></label>
                                                <input type="text" name="openingdate" placeholder="eg. 2020-01-01" id="openingdate"  class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Ending Date <span class="float-right" required="">*</span></label>
                                                <input type="text" name="closingdate" placeholder="eg. 2020-12-30" id="closingdate"  class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Gender <span class="float-right">*</span></label>
                                                <select id="gender" name="gender" required="">
                                                        <option value="">Choose</option>
                                                        <option value="any" selected="selected">Any</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Contract Type <span class="float-right">*</span></label>
                                                <select id="contracttype" name="contracttype" required="">
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
                                                <label>Work Type</label>
                                                <select id="worktype" name="worktype">
                                                        <option value="" selected="selected">Choose</option>
                                                        <option value="full time" >Full Time</option>
                                                        <option value="part time">Part Time</option>
                                                        <option value="fixed Term">Fixed Term</option>
                                                        <option value="consultant">Consultant</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Contract Duration <span class="float-right">*</span></label>
                                                <input type="text" name="contractduration" placeholder="eg. 1 year"  required="" class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Salary</label>
                                                <input type="text" name="salary" placeholder="eg. 35000-50000 or As per Company scale" class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Nationality</label>
                                                <input type="text" name="nationality" placeholder="eg. Afghan"  class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Years of Experience <span class="float-right">*</span></label>
                                                <input type="text" name="experienceyears" placeholder="eg. 2 years"  class="form-control mr-2" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Vacancy Number <span class="float-right">*</span></label>
                                                <input type="text" name="vacancynumber" placeholder="eg. VCN-547"   class="form-control mr-2" autocomplete="off" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Number of Jobs </label>
                                                <input type="number" name="numberofjobs" placeholder="eg. 1"  class="form-control mr-2" autocomplete="off" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group-icon mt-3">
                                                <label>Application Form (Optional)</label>
                                                <input type="file" name="applicationform" class="form-control mr-2" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Languages</label>
                                                <input type="text" value="" placeholder="eg. Dari" id="input-tags-lang" name="languages">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Skills</label>
                                                <input type="text" value="" placeholder="eg. Ms Office Package" id="input-tags-skill" name="skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Location(s)<span class="float-right">*</span></label>
                                                <select id="locations" name="locations[]" multiple required="">
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
                                                @if(isset(Auth::user()->company->companyemail[0]))
                                                    <input type="text" value="{{Auth::user()->email}}@foreach(Auth::user()->company->companyemail as $companymails),{{$companymails->email}} @endforeach" placeholder="eg. info@apple.com or hr@afghankarobar.com" id="input-tags-email" name="emails" required="">
                                                @else
                                                <input type="text" value="{{Auth::user()->email}}" placeholder="eg. info@apple.com or hr@afghankarobar.com" id="input-tags-email" name="emails" required="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-icon mt-3">
                                                <label>About Company <span class="float-right">*</span></label>
                                                <textarea required="" name="aboutcompany" id="aboutcompany" placeholder="Write about your company"   class="form-control mr-2" autocomplete="off" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @if(Auth::user()->usertype=="2")
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="aboutcompanycheckbox">
                                                    <label class="custom-control-label" for="aboutcompanycheckbox">Load from company profile</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Job Description <span class="float-right">*</span></label>
                                                <textarea required="" id="responsibilities" name="responsibilities" placeholder="Write the description of the job and what the employee is supposed to do"   class="form-control mr-2" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Qualifications <span class="float-right">*</span></label>
                                                <textarea required="" id="requirements" name="requirements" placeholder="Write down the requirements and qualifications to be met by the applicants who seek to get the job"   class="form-control mr-2" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-icon mt-3">
                                                <label>Submission Guideline <span class="float-right">*</span></label>
                                                <textarea required="" id="guide" name="guide" placeholder="Submission Guideline" rows="5" class="form-control mr-2" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="button-group-area mt-3 text-right">
                                                <button type="submit" class="genric-btn primary radius mr-0" id="submitbtn">Post the Job</button>
                                                <button type="submit" class="genric-btn primary radius d-none" id="submitbtnhidden">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 mt-sm-30 element-wrap">
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/selectize.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script type="text/javascript">
    $('#category, #gender, #contracttype, #worktype, #travelpossibility').select2();
    $('#openingdate, #closingdate').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#input-tags-lang, #input-tags-skill, #input-tags-email, #locations').selectize({
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    $('#responsibilities, #guide, #aboutcompany, #requirements').trumbowyg();



    @if(Auth::user()->usertype=="2")
    $('#aboutcompanycheckbox').on('change', function(){
        if($(this).is(':checked')){
            $('#aboutcompany').prev('.trumbowyg-editor').text('Hello');
        }
        else{
            $('#aboutcompany').prev('.trumbowyg-editor').text('');
        }
    });
    @endif
    </script>
@include('layout.sessionmessage')