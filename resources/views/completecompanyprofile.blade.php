
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">

    <title>Company Profile Completion</title>
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
                        <h3 class="mb-30 title_color" id="titlesss">Complete you profile</h3>
                        <form action="{{route('company.update', $id)}}" method="post" id="registerform" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="put">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Main phone number<span class="float-right">*</span></label>
                                        <input type="number" name="phone" placeholder="eg. 79090090"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Profile Description<span class="float-right">*</span></label>
                                        <textarea type="text" name="description" placeholder="" id="description"   required="" class="form-control mr-2" autocomplete="off" rows="10">Describe your company background here
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group-icon mt-3">
                                        <label>Location(s)<span class="float-right">*</span></label>
                                        <select id="city" name="city" required="">
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
                                            <option value="kabul">Kabul</option>
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
                                        <label>Address</label>
                                        <input type="text" name="address" placeholder="eg. 5th street, Wazkir Akbar Khan..." id="address"   required="" class="form-control mr-2" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-success rounded-0 mt-3" onclick="document.getElementById('logopic').click();" type="button"><i class="fa fa-photo"></i> &nbsp Logo</button>
                                    <input type="file" id="logopic" name="logopic" class="form-control-file" onchange="document.getElementById('logopicdisplay').src = window.URL.createObjectURL(this.files[0]);$('#student_pic_display_div').show();$('#student_pic_icon_display_div').hide()" style="display:none" required>
                                    <div class="form-group w-100 mt-3" id="student_pic_display_div" style="display:none">
                                        <div class="thumbnail">
                                            <img src="" alt="Chosen Image" id="logopicdisplay" style="width: 150px; height: 150px; border-radius: 50%">
                                        </div>
                                    </div>
                                    <div class="form-group mt-3" id="student_pic_icon_display_div" style="">
                                        <div class="thumbnail" style="border: 1px solid lightgray; text-align:center; padding: 15px;border-radius: 5px; width: 150px; height: 150px; border-radius: 50%">
                                            <i class="fa fa-user" style="font-size:100px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group-area mt-40">
                                <button type="submit" class="genric-btn primary radius" id="submitbtn">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
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
        </div>
    </div>
    


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('#city').select2();
    </script>
@include('layout.sessionmessage')
