
 <!DOCTYPE html>
<html lang="en">
<head>
    <script data-ad-client="ca-pub-8480911180475311" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <title>New Company</title>

    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style type="text/css">
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #38c172;
        }

        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
            background:white;
            box-shadow: 4px 4px 10px darkgray;
            margin-bottom:40px;
        }
        .dropdown-item:hover{
            background: #28a745;
        }

        .topnavbarwithoutuserinfo{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                          Forms                           */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/

        .select2-container .select2-selection--single{
            height:auto;
            padding:10px;
        }


        .select2{
            display:block !important;
            width: 100% !important;
            height: 28px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:auto;
            top:50%;
        }

        .input-group-icon *{
            border: none !important;
            padding:0px !important;
            font-size:13px;
            font-family:"Segoe UI", Arial, sans-serif;
            background:#f9f9ff;
        }
        .input-group-icon{
            border: 1px solid #f9f9ff;
            cursor:pointer !important;
            background:#f9f9ff;
        }
        .input-group-icon label{
            padding: 8px 0px 0px 8px !important;
            text-transform:uppercase;
            margin-bottom:0px;
            width:98%;
            color:green
        }
        .input-group-icon label span{
            color:red
        }
        .input-group-icon .select2, .input-group-icon input{
            padding: 0px 0px 0px 8px !important;
            height:28px !important
        }
        .input-group-icon textarea{
            padding: 0px 0px 0px 8px !important;
        }
        .input-group-icon .select2, .input-group-icon input:focus, .input-group-icon .select2, .input-group-icon textarea:focus{
            box-shadow:none !important;
            background:#f9f9ff;
        }

        .select2-dropdown{
            border:1px solid rgb(240,240,240);
        }


        .datepicker-days th{
            color:limegreen
        }




/************************************************************/
/************************************************************/
/************************************************************/
/*                                                          */
/*                                                          */
/*                     Tagging Inputs                       */
/*                                                          */
/*                                                          */
/************************************************************/
/************************************************************/
/************************************************************/
        .selectize-input, .selectize-control.single .selectize-input.input-active{
            background:#f9f9ff !important;
        }
        .selectize-input{
            padding-left:10px !important;
        }
        .selectize-input.focus{
            box-shadow:none !important;
        }
        .selectize-control.multi .selectize-input > div{
            padding: 3px 15px !important;
            background:#28a745 !important;
            color:white !important;
        }

        .fieldsets{
            border: 1px solid lightgreen;
        }
        legend{
            color:green;
        }
        @media (max-width: 967.98px){
            .main-menu.main-menu-light ul{
                background: #28a745;
            }
            .logindropdowncontainer{
                text-align: left;
            }
        }

        @media (max-width: 991.98px){
            .topnavbarwithoutuserinfo{
                width: 100%;
            }
        }

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





    <div class="container">
        <div class="row">
            <div class="col-12">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 728*90 -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:100%;height:90px"
                    data-ad-client="ca-pub-8480911180475311"
                    data-ad-slot="3512118492"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="row">
            <form class="form-signin"  method="POST" action="{{route('company.store')}}">
                @csrf
                <div class="logo-area mb-4 mt-5 text-center">
                    <a href="index.html"><img src="{{asset('assets/images/logogreen.png')}}" alt="logo" class="w-50"></a>
                </div>
                <fieldset class="fieldsets p-3 rounded">
                    <legend class="w-auto pl-3 pr-3"><h5>Company Registration</h5></legend>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group-icon mt-3">
                                <label>Company Name <span class="float-right">*</span></label>
                                <input type="text" name="name" placeholder="eg. Apple Inc."   required="" class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group-icon mt-3">
                                <label>Company Website</label>
                                <input type="text" name="website" placeholder="eg. www.apple.com"  class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group-icon mt-3">
                                <label>Phone Number <span class="float-right">*</span></label>
                                <input type="number" name="phone" placeholder="eg. 0799595959"   required="" class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group-icon mt-3">
                                <label>Company Type <span class="float-right">*</span></label>
                                <select id="companytypeback" name="type">
                                    <option value="0" selected="selected">Choose</option>
                                    <option value="Private">Private</option>
                                    <option value="Government">Government</option>
                                    <option value="NGO">NGO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group-icon mt-3">
                                <label>City <span class="float-right">*</span></label>
                                <select id="citychooseback" name="city">
                                    <option value="" selected="selected">Choose</option>
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
                        <div class="col-12">
                            <div class="input-group-icon mt-3">
                                <label>Email Address <span class="float-right">*</span></label>
                                <input type="email" name="email" placeholder="eg. info@ahg.com"   required="" class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group-icon mt-3">
                                <label>New Password <span class="float-right">*</span></label>
                                <input type="password" name="password" placeholder="New Password" id="passwordfield"   required="" class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group-icon mt-3">
                                <label>Repeat Password <span class="float-right">*</span></label>
                                <input type="password" name="repassword" placeholder="Repeat Password" id="passwordreenterfield"   required="" class="form-control mr-2" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-lg btn-success btn-block mt-3" type="submit">Register</button>
                    <a class="text-center d-block mt-3 text-info" href="{{route('jobseeker.create')}}">Sign up as a Job Seeker</a>

                </fieldset>
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 728*90 -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:100%;height:90px"
                    data-ad-client="ca-pub-8480911180475311"
                    data-ad-slot="3512118492"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
    

    <!-- Javascript -->
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
    $('#companytypeback, #citychooseback').select2();


        function changecompanytype(number){
            $('#companytypeback option').removeAttr('selected');
            $('#companytypeback option[value="'+number+'"]').attr('selected', 'selected').change();
        }
        function changecity(number){
            $('#citychooseback option').removeAttr('selected');
            $('#citychooseback option[value="'+number+'"]').attr('selected', 'selected').change();
        }


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
    </script>
    @include('layout.sessionmessage')
