
    @include('layout.headingsectionwithoutimage')
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <title>About</title>
    <style>
        body {
            background: rgb(245,245,245);
        }
        #maincontainer{
            background:white
        }
        #jobdetailscontainer, #jobdetailsrightside{
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
    
    #rightsidelogincontainer{
        box-shadow: 0px 0px 5px lightgray inset;
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
                    <ins class="adsbygoogle"
                        style="display:block; text-align:center;"
                        data-ad-layout="in-article"
                        data-ad-format="fluid"
                        data-ad-client="ca-pub-8480911180475311"
                        data-ad-slot="7304325162"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 shadow-sm rounded pt-3" id="maincontainer">
                    <h3>About Us</h3>
                    <p class="lead">
                    We are  a group of  young   professionals from various backgrounds who have come together to create a hassle free plat form to our society where every one will be able to  find information regarding universities, education, free scholarships, fellowships, internships, and job vacancies in one click , writing cv drafting cover letter,recommendation letter etc.

                        Karmondana.com is the first website where people can directly apply for jobs, scholarships and other programs we have taken away the  mediators, employer and employees can interact and get the job.
                        It has never been so easy to enjoy all the related information under one platform but it was the result of hard work and creative thoughts of our team.

                        We can briefly demonstrate our service in the following headings.
                        Job Announcement: 
                        Companies and organizations can post their job vacancies online through our website and they can see receiving great job application of the candidates.

                        Scholarship Announcement:
                        Universities around the world can share their scholarship schemes online in our website once their announcement is approved by our quality check team they can start receiving applications.

                        Blogs Reading:
                        We do share the success stories of the world renowned personalities where they have achieved everything from nothing and has done significantly great things for the society     

                        We hope you to enjoy our service and contact us if there would be any problem.
                        info@karmondana.com
                    </p>

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

                <div class="col-lg-3">
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
    @include('layout.footersection')
    <!-- Jobs Area End -->
    @include('layout.sessionmessage')
