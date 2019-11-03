
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/selectize.bootstrap3.css')}}">

    <title>Job Application</title>
    <style type="text/css">
        .single-input{
            padding: 5px 20px;
        }
    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')


    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3 class="mb-30 title_color" id="titlesss">Complete your application</h3>
                        <form action="{{route('jobapplicationsend')}}" method="post" id="registerform" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Your Email Address<span class="float-right">*</span></label>
                                        <input type="text" id="myemail" name="myemail" placeholder="eg. jawadrezayi@gmai.com"
                                        value="<?php
                                                echo $user->email;
                                                
                                            ?>" 
                                        required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>To (Email Adress)<span class="float-right">*</span></label>
                                        <input type="text" id="email" name="email" placeholder="eg. info@abc.com" value="{{$job->jobemail[0]->email}}"  required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Subject Line<span class="float-right">*</span></label>
                                        <input type="text" id="subject" name="subject" placeholder="Write the vacancy number" value="Application for {{$job->title}} ({{$job->vacancynumber}})"  required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Email Body <span class="float-right">*</span></label>
                                        <textarea type="text" name="description" placeholder="Write anything that you want to appear in your email body" id="description"   required="" class="form-control mr-2" autocomplete="off" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3 pb-2">
                                        <label>CV <span class="float-right">*</span></label>
                                        <input type="file" name="cv" id="cv" requied="" class="form-control mr-2" autocomplete="off">
                                        <input type="text" name="profilecv" id="profilecv" requied=""  value="{{asset('$user->jobseeker->cv')}}" class="form-control mr-2 d-none" autocomplete="off">
                                        <input type="text" name="jobtitle" id="jobtitle" requied=""  value="{{$job->title}}" class="form-control mr-2 d-none" autocomplete="off">
                                        <input type="text" name="cvindicator" value="yes" id="cvindicator" requied="" class="form-control mr-2 d-none" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="userdefaultcv">
                                            <label class="custom-control-label" for="userdefaultcv">Load from your profile</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius" id="submitbtn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
                        <div id="rightsidead1" class="pt-5">
                            <fieldset class="fieldsets p-3 rounded">
                                <legend class="w-auto pl-3 pr-3">Advertisement</legend>

                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- 300*250 -->
                                <ins class="adsbygoogle"
                                    style="display:inline-block;width:100%;height:250px"
                                    data-ad-client="ca-pub-8480911180475311"
                                    data-ad-slot="1676292648"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                                
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- kar 300*600 -->
                                <ins class="adsbygoogle"
                                    style="display:inline-block;width:100%;height:600px"
                                    data-ad-client="ca-pub-8480911180475311"
                                    data-ad-slot="3148731385"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </fieldset>
                            
                        </div>
                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">Facebook</legend>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarmondana&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/selectize.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('#city').select2();

        $('#userdefaultcv').on('change', function(){
            if($(this).is(':checked')){
                $('#cv').attr('disabled', 'disabled');
                $('#cvindicator').val("yes");
            }
            else{
                $('#cv').removeAttr('disabled');
                $('#cvindicator').val("no");

            }
        });
    </script>
@include('layout.sessionmessage')
