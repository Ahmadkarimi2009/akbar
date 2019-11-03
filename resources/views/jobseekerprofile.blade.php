
    @include('layout.headingsectionwithoutimage')
    <title>Jobseeker Profile</title>
    
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

    </style>
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')






    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 shadow-sm mt-5 rounded" id="maincontainer">
                    <div class="wrapper">
                        <div class="navcontainer">
                            <nav class="tabs nav" role="tablist">
                                <div class="selector"></div>
                                <a data-toggle="tab" id="generalinfobtn" onclick="changetab(0)" role="tab" href="#home" class="active nav-link">Profile</a>
                                <a data-toggle="tab" id="multiplebtn" onclick="changetab(1)" role="tab" href="#multiplesectiontab" class="nav-link">Jobs Saved</a>
                                <a data-toggle="tab" id="detailsbtn" onclick="changetab(2)" role="tab" href="#profile" class="nav-link">Settings</a>
                            </nav>
                        </div>
                        
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="topandbottomsections text-center">
                                <img src="{{asset($seeker->user->avatar)}}" width="120px" height="120px" class="rounded-circle" id="seekerImg">                                
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-outline-success rounded-0" onclick="document.getElementById('profilePic').click();" type="button">
                                        <i class="fa fa-photo"></i> &nbsp Picture
                                    </button>

                                    <button type="button" class="btn btn-outline-success rounded-0 d-none">Save</button>
                                    <form action="" id="jobSeekerProfilePicForm" method="post" enctype="multipart/form-data">
                                        <input type="file" id="profilePic" name="profilePic" class="form-control-file" onchange="document.getElementById('seekerImg').src = window.URL.createObjectURL(this.files[0]);" style="display:none" required>
                                        @csrf
                                        <button type="submit" class="btn btn-info rounded-0" id="saveImageButton" style="display:none">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-question"></span>&nbsp&nbspGeneral Info</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Name</h6>
                                            <p id="seekername-p">{{$seeker->user->name}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('name', '{{$seeker->user->name}}', 'seekername-p')">Edit</button></p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Last Name</h6>
                                            <p id="seekerwebsite-p">{{$seeker->lastname}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('lastname', '{{$seeker->lastname}}', 'seekerwebsite-p')">Edit</button></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">City</h6>
                                            <p id="seekercity-p">{{$seeker->city}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('city', '{{$seeker->city}}', 'seekercity-p')">Edit</button></p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Address</h6>
                                            <p id="seekeraddress-p">{{$seeker->address}} &nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('address', '{{$seeker->address}}', 'seekeraddress-p')">Edit</button></p>
                                        </div>
                                    </div>
                                </fieldset>
                                    
                            </div>
                            <div class="topandbottomsections">
                             
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-file"></span>&nbsp&nbspCV</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#">Download Current CV</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="topandbottomsections">
                                <fieldset class="fieldsets p-3 rounded">
                                    <legend class="w-auto pl-3 pr-3"><h4 class="text-success font-weight-normal d-inline-block"><span class="fa fa-phone"></span>&nbsp&nbspPhone Numbers</h4></legend>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="text-success font-weight-normal pt-3">Main Phone Number</h6>
                                            <p id="seekermainphone-p">{{$seeker->phone}}&nbsp&nbsp<button class="btn btn-outline-info btn-sm pt-0 pb-0" onclick="loadeditmodel('phone', '{{$seeker->phone}}', 'seekermainphone-p')">Edit</button</p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="multiplesectiontab" role="tabpanel" aria-labelledby="home-tab">
                            <div class="topandbottomsections">
                                <h4 class="text-success font-weight-normal"><span class="fa fa-info"></span>&nbsp&nbspJobs List</h4>
                                <div class="mt-5">
                                   
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
                                            <p id="username-p">{{$seeker->user->email}}&nbsp&nbsp<button class="btn btn-outline-warning btn-sm pt-0 pb-0 pr-3 pl-3" onclick="loadeditmodel('username', '{{$seeker->user->email}}', 'username-p')">Edit</button></p>
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
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#editseekerdatamodal" id="changenamemodelbtn">
</button>

<!-- Modal -->
<div class="modal fade" id="editseekerdatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog profileedit-modal-dialog" role="document">
    <div class="modal-content profileedit-modal-content">
      <div class="modal-body profileedit-modal-body" id="modelbody">
        <form class="form" type="post" action="{{route('jobseeker.update', $seeker->id)}}" id="seekerdataform">
            <h1 class="text-center text-light display-1 font-weight-light" id="modeltitle"></h1>
            


            <div class="modelbuttonsforinfochange mt-3 text-right">
                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal" id="editmodeldismissbtn">Cancel</button>
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
        <form class="form" type="post" action="{{route('jobseeker.edit', $seeker->id)}}" id="passwordchangemodalform">

            <input type="password" id="currentpasswordfield" placeholder="Current Password" class="form-control mt-2" autocomplete="off">
            <input type="password" id="passwordfield" placeholder="New Password" class="form-control mt-2" autocomplete="off">
            <input type="password" id="passwordreenterfield" placeholder="Re-type New Password" class="form-control mt-2" autocomplete="off">


            <div class="modelbuttons mt-3 text-right">
                <button type="button" class="btn btn-sm btn-info" data-dismiss="modal" id="passwordchangemodalcancelbtn">Cancel</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" id="passwordchangemodalsubmitbtn" onclick="submitchangpasswordform()">Save Password</button>
            </div>
            
      </div>
    </div>
  </div>
</div>






@include('layout.footersection')
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

  
        function loadeditmodel(name, datas, paragraphindicator){
            $('#modelinputfield').remove();
            $('#modelformsubmitbtn').remove();

            if(name == 'about'){
                $('#modeltitle').after('<textarea class="form-control" id="modelinputfield" placeholder="Write about your seeker" required="" rows="5">'+datas+'</textarea>');
            }
            else if(name == "gender"){
                $('#modeltitle').after('<select class="custom-select d-block w-100" id="modelinputfield" required="">'
                                            +'<option value="">Choose</option>'
                                            +'<option value="male">Male</option>'
                                            +'<option value="female">Female</option>'
                                            +'<option value="other">Other</option>'
                                        +'</select>');
            }
            else if(name == "city"){
                $('#modeltitle').after('<select class="custom-select d-block w-100" id="modelinputfield" required="">'
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
                                            +'<option value="kabul">Kabul</option>'
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
                                        +'</select>');
            }
           
            else{
                $('#modeltitle').after('<input type="text" class="form-control" id="modelinputfield" placeholder="" value="'+datas+'" required="">');
            }
            
                
            $('.modelbuttonsforinfochange').append('<button type="button" class="btn btn-sm btn-success" onclick="jobseekerinfoupdate(\''+name+'\',\''+datas+'\',\''+paragraphindicator+'\');" id="modelformsubmitbtn">Save changes</button>')
            $('#changenamemodelbtn').click();
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
                                url: "{{ url('/changeseekerpassword') }}",
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

        function jobseekerinfoupdate(names, olddata, paragraph){
            var dataas = $('#modelinputfield').val();
            swal({
                title: "Are you sure?",
                text: "Are you Sure you want to change your profile pic??",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/jobseekerchangepic') }}",
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

        $('#profilePic').change(function(){
            if ($('#profilePic').val() != "") {
                $('#saveImageButton').css('display', 'inline');
            }
        });
        $('.ects').on('submit', function(e) {
            e.preventDefault();
            // var dataas = $('#modelinputfield').val();
            $.ajax(
                {
                    url: "/ects/"+subjectId+"/submit",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(data) {
                        window.location.href = "/profil";

                    },
                    error:function(){
                        swal("Oops!", "Unfortunately the attempt was not successful!", "error");
                    }

                }
            );
                    
        });
    </script>
    @include('layout.sessionmessage')
