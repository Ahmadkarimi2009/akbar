
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    @if(isset($scholarship))
      <meta property="og:url"           content="https://www.karmondana.com/scholarship/{{$scholarship->id}}" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="{{$scholarship->name}}" />
      <meta property="og:description"   content="{{$scholarship->name}}" />
      <meta property="og:image"         content="https://www.karmondana.com/assets/images/logofacebook.png" />
    @endif

    <title>Scholarship Details</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        #scholarshipdetailscontainer,
        #scholarshipdetailrightside{
            background:white;
            border-radius:5px;
        }
        .eachattribute{
            border-top: 1px solid lightgray;
            font-size:15px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .eatchattributedata{
            color:#999;
            text-transform: capitalize;
        }
        .topandbottomsections{
            padding:30px;
        }
        .fa-heart{
            font-size:20px
        }










        .resp-sharing-button__link,
.resp-sharing-button__icon {
  display: inline-block
}

.resp-sharing-button__link {
  text-decoration: none;
  color: #fff;
  margin: 0.1em
}

.resp-sharing-button {
  border-radius: 5px;
  transition: 25ms ease-out;
  padding: 0.1em 0.55em;
  font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
  font-size:12px;
}

.resp-sharing-button__icon svg {
  width: 1em;
  height: 1em;
  margin-right: 0.4em;
  vertical-align: top
}

.resp-sharing-button--small svg {
  margin: 0;
  vertical-align: middle
}

/* Non solid icons get a stroke */
.resp-sharing-button__icon {
  stroke: #fff;
  fill: none
}

/* Solid icons get a fill */
.resp-sharing-button__icon--solid,
.resp-sharing-button__icon--solidcircle {
  fill: #fff;
  stroke: none;
  vertical-align: sub;
}

.resp-sharing-button--twitter {
  background-color: #55acee
}

.resp-sharing-button--twitter:hover {
  background-color: #2795e9
}

.resp-sharing-button--pinterest {
  background-color: #bd081c
}

.resp-sharing-button--pinterest:hover {
  background-color: #8c0615
}

.resp-sharing-button--facebook {
  background-color: #3b5998
}

.resp-sharing-button--facebook:hover {
  background-color: #2d4373
}

.resp-sharing-button--tumblr {
  background-color: #35465C
}

.resp-sharing-button--tumblr:hover {
  background-color: #222d3c
}

.resp-sharing-button--reddit {
  background-color: #5f99cf
}

.resp-sharing-button--reddit:hover {
  background-color: #3a80c1
}

.resp-sharing-button--google {
  background-color: #dd4b39
}

.resp-sharing-button--google:hover {
  background-color: #c23321
}

.resp-sharing-button--linkedin {
  background-color: #0077b5
}

.resp-sharing-button--linkedin:hover {
  background-color: #046293
}

.resp-sharing-button--email {
  background-color: #777
}

.resp-sharing-button--email:hover {
  background-color: #5e5e5e
}

.resp-sharing-button--xing {
  background-color: #1a7576
}

.resp-sharing-button--xing:hover {
  background-color: #114c4c
}

.resp-sharing-button--whatsapp {
  background-color: #25D366
}

.resp-sharing-button--whatsapp:hover {
  background-color: #1da851
}

.resp-sharing-button--hackernews {
background-color: #FF6600
}
.resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

.resp-sharing-button--vk {
  background-color: #507299
}

.resp-sharing-button--vk:hover {
  background-color: #43648c
}

.resp-sharing-button--facebook {
  background-color: #3b5998;
  border-color: #3b5998;
}

.resp-sharing-button--facebook:hover,
.resp-sharing-button--facebook:active {
  background-color: #2d4373;
  border-color: #2d4373;
}

.resp-sharing-button--twitter {
  background-color: #55acee;
  border-color: #55acee;
}

.resp-sharing-button--twitter:hover,
.resp-sharing-button--twitter:active {
  background-color: #2795e9;
  border-color: #2795e9;
}

.resp-sharing-button--google {
  background-color: #dd4b39;
  border-color: #dd4b39;
}

.resp-sharing-button--google:hover,
.resp-sharing-button--google:active {
  background-color: #c23321;
  border-color: #c23321;
}

.resp-sharing-button--tumblr {
  background-color: #35465C;
  border-color: #35465C;
}

.resp-sharing-button--tumblr:hover,
.resp-sharing-button--tumblr:active {
  background-color: #222d3c;
  border-color: #222d3c;
}

.resp-sharing-button--email {
  background-color: #777777;
  border-color: #777777;
}

.resp-sharing-button--email:hover,
.resp-sharing-button--email:active {
  background-color: #5e5e5e;
  border-color: #5e5e5e;
}

.resp-sharing-button--pinterest {
  background-color: #bd081c;
  border-color: #bd081c;
}

.resp-sharing-button--pinterest:hover,
.resp-sharing-button--pinterest:active {
  background-color: #8c0615;
  border-color: #8c0615;
}

.resp-sharing-button--linkedin {
  background-color: #0077b5;
  border-color: #0077b5;
}

.resp-sharing-button--linkedin:hover,
.resp-sharing-button--linkedin:active {
  background-color: #046293;
  border-color: #046293;
}

.resp-sharing-button--whatsapp {
  background-color: #25D366;
  border-color: #25D366;
}

.resp-sharing-button--whatsapp:hover,
.resp-sharing-button--whatsapp:active {
  background-color: #1DA851;
  border-color: #1DA851;
}

.resp-sharing-button--telegram {
  background-color: #54A9EB;
}

.resp-sharing-button--telegram:hover {
  background-color: #4B97D1;
}


    </style>
    @include('layout.fieldsets')
    @include('layout.globalfontsize')
    @include('layout.headersectionwithoutimage')

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- karsq -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:100%;height:300px"
                        data-ad-client="ca-pub-8480911180475311"
                        data-ad-slot="6038209487"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 shadow-sm p-0" id="scholarshipdetailscontainer">
                  @if(isset($scholarship))
                    <div class="topandbottomsections">
                        <div class="row d-sm-flex">
                            <div class="align-self-center flex-fill">
                                <h4 class="text-success font-weight-bold">{{$scholarship->name}}</h4>
                                <span class="text-capitalize">{{$scholarship->country}}</span> / <span class="text-capitalize text-danger">{{$scholarship->closingdate}}</span>
                                <br>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- karsq -->
                                <ins class="adsbygoogle"
                                    style="display:inline-block;width:100%;height:300px"
                                    data-ad-client="ca-pub-8480911180475311"
                                    data-ad-slot="6038209487"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="topandbottomsections">
                        @if($scholarship->briefdescription !="N/A")
                            <h4 class="text-success font-weight-normal mt-5">Brief Description</h4>
                            <p>{!!$scholarship->briefdescription!!}</p>
                        @endif
                        @if($scholarship->about !="N/A")
                            <h4 class="text-success font-weight-normal">About University</h4>
                            <p>{!!$scholarship->about!!}</p>
                        @endif
                        @if(isset($scholarship->scholarshiptype[0]))
                        <h4 class="text-success font-weight-normal mt-5">Scholarship Type</h4>
                            @foreach($scholarship->scholarshiptype as $type)
                                {{$type->type}} <br>
                            @endforeach
                        @endif
                        <h4 class="text-success font-weight-normal mt-5">Fields of study</h4>
                        <p>{!!$scholarship->fields!!}</p>

                        @if(isset($scholarship->scholarshipdegree[0]))
                        <h4 class="text-success font-weight-normal mt-5">Degrees</h4>
                            @foreach($scholarship->scholarshipdegree as $degree)
                                {{$degree->degree}} <br>
                            @endforeach
                        @endif
                        <h4 class="text-success font-weight-normal mt-5">Scholarship Details</h4>
                        <div class="col-12">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- karsq -->
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:100%;height:300px"
                                data-ad-client="ca-pub-8480911180475311"
                                data-ad-slot="6038209487"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <p>{!!$scholarship->scholarshipdetails!!}</p>
                        <h4 class="text-success font-weight-normal mt-5">Who Can Apply</h4>
                        <p>{!!$scholarship->whocanapply!!}</p>
                        <h4 class="text-success font-weight-normal mt-5">Application Link</h4>
                        <div class="d-block">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- karsq -->
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:100%;height:300px"
                                data-ad-client="ca-pub-8480911180475311"
                                data-ad-slot="6038209487"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        
                        <a href="#"  onclick="event.preventDefault();document.getElementById('scholarshipoutside').submit();" class="btn btn-success pl-5 pr-5 btn-sm">Apply</a>
                        <form id="scholarshipoutside" action="{{ route('scholarshipoutside') }}" method="POST" style="display: none;">
                            <input type="text" value="{{$scholarship->link}}" name="link">
                            @csrf
                        </form>
                    </div>
                    <div class="mt-5 topandbottomsections mb-3"> Share &nbsp&nbsp
                      <!-- Load Facebook SDK for JavaScript -->
                      <div id="fb-root"></div>
                      <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                          fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));</script>

                      <!-- Your share button code -->
                      <div class="fb-share-button" 
                          data-href="https://www.karmondana.com/scholarship/{{$scholarship->id}}" 
                          data-layout="button_count">
                      </div>

                      <!-- Sharingbutton Twitter -->
                      <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text={{$scholarship->name}}&amp;url=https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_blank" rel="noopener" aria-label="Twitter">
                      <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg></div>Twitter</div>
                      </a>

                      <!-- Sharingbutton Google+ -->
                      <a class="resp-sharing-button__link" href="https://plus.google.com/share?url=https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_blank" rel="noopener" aria-label="Google+">
                      <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg></div>Google+</div>
                      </a>

                      <!-- Sharingbutton Tumblr -->
                      <a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title={{$scholarship->name}}&amp;caption={{$scholarship->name}}&amp;content=https://www.karmondana.com/scholarship/{{$scholarship->id}}&amp;canonicalUrl=https://www.karmondana.com/scholarship/{{$scholarship->id}}&amp;shareSource=tumblr_share_button" target="_blank" rel="noopener" aria-label="Tumblr">
                      <div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.5.5v5h5v4h-5V15c0 5 3.5 4.4 6 2.8v4.4c-6.7 3.2-12 0-12-4.2V9.5h-3V6.7c1-.3 2.2-.7 3-1.3.5-.5 1-1.2 1.4-2 .3-.7.6-1.7.7-3h3.8z"/></svg></div>Tumblr</div>
                      </a>

                      <!-- Sharingbutton E-Mail -->
                      <a class="resp-sharing-button__link" href="mailto:?subject={{$scholarship->name}}&amp;body=https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_self" rel="noopener" aria-label="E-Mail">
                      <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg></div>E-Mail</div>
                      </a>

                      <!-- Sharingbutton Pinterest -->
                      <a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=https://www.karmondana.com/scholarship/{{$scholarship->id}}&amp;media=https://www.karmondana.com/scholarship/{{$scholarship->id}}&amp;description={{$scholarship->name}}" target="_blank" rel="noopener" aria-label="Pinterest">
                      <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z"/></svg></div>Pinterest</div>
                      </a>

                      <!-- Sharingbutton LinkedIn -->
                      <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.karmondana.com/scholarship/{{$scholarship->id}}&amp;title={{$scholarship->name}}&amp;summary={{$scholarship->name}}&amp;source=https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_blank" rel="noopener" aria-label="LinkedIn">
                      <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z"/></svg></div>LinkedIn</div>
                      </a>

                      <!-- Sharingbutton WhatsApp -->
                      <a class="resp-sharing-button__link" href="whatsapp://send?text={{$scholarship->name}}%20https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_blank" rel="noopener" aria-label="WhatsApp">
                      <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg></div>WhatsApp</div>
                      </a>

                      <!-- Sharingbutton Telegram -->
                      <a class="resp-sharing-button__link" href="https://telegram.me/share/url?text={{$scholarship->name}}&amp;url=https://www.karmondana.com/scholarship/{{$scholarship->id}}" target="_blank" rel="noopener" aria-label="Telegram">
                      <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M.707 8.475C.275 8.64 0 9.508 0 9.508s.284.867.718 1.03l5.09 1.897 1.986 6.38a1.102 1.102 0 0 0 1.75.527l2.96-2.41a.405.405 0 0 1 .494-.013l5.34 3.87a1.1 1.1 0 0 0 1.046.135 1.1 1.1 0 0 0 .682-.803l3.91-18.795A1.102 1.102 0 0 0 22.5.075L.706 8.475z"/></svg></div>Telegram</div>
                      </a>
                    </div>
                  @else
                      <h5 class="p-5 text-center">Unfortunatley, the scholarship has been expired.</h5>
                      <img src="{{ asset('/assets/images/404job.jpg') }}" alt="" class="w-100">
                      <div class="text-center mt-4 mb-4">
                          <button class="btn btn-outline-success" onclick="window.history.back()">Go Back</button>
                          <a class="btn btn-outline-success" href="{{ route('scholarship.index') }}">Go to Scholarships List</a>
                      </div>
                  @endif
                </div>
                <div class="col-lg-3 col-md-4 shadow-sm p-3 mt-5 mt-md-0" id="scholarshipdetailrightside">
                    <div id="relatedjobscontainer" class="pt-0">
                        <fieldset class="fieldsets p-3 rounded">
                            <legend class="w-auto pl-3 pr-3">You may also like</legend>
                            @if(isset($related[0]))
                                @php($counter = 1)
                                @foreach($related as $rel)
                                    <div class="eachrelatedjob pt-2 pb-2 border-bottom">
                                        <a href="{{route('book.show', $rel->id)}}" class="text-success">{{$rel->name}}</a>
                                    </div>
                                    @php($counter++)
                                    @if($counter >= 10)
                                        @break
                                    @endif
                                @endforeach
                            @else
                                <h6>No Related Scholarships</h6>
                            @endif
                        </fieldset>
                    </div>
                    <div id="rightsidead1" class="">
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
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkarmondana&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- karsq -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:100%;height:300px"
                    data-ad-client="ca-pub-8480911180475311"
                    data-ad-slot="6038209487"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
    <!-- Jobs Area End -->


    @include('layout.footersection')
    <script src="{{asset('assets/js/vendor/sweetalert.min.js')}}"></script>
    <script>
        $('#locationsearch, #categorysearch').select2();
    </script>
    @include('layout.sessionmessage')
