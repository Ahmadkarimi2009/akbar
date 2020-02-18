<!-- Footer Area Starts -->
<footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-xl-2 col-lg-2">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">Main Pages</h3>
                                <ul>
                                    <li class="mb-2"><a href="{{route('jobs.index')}}">Find Jobs</a></li>
                                    <li class="mb-2"><a href="{{route('scholarship.index')}}">Scholarships</a></li>
                                    <li class="mb-2"><a href="{{route('blog.index')}}">Story Reading</a></li>
                                    <li class="mb-2"><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li class="mb-2"><a href="{{route('about')}}">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">newsletter</h3>
                                <p class="mb-4">Get alerted about the new contents we share right away by providing us your email.</p>  
                                <form action="{{route('subscription')}}" method='post'>
                                    @csrf
                                    <input type="email" placeholder="Your email here" name="subscriptionemail" required>
                                    <button type="submit" class="template-btn">subscribe now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                            <div class="single-widge-home">
                                <h3 class="mb-4">Disclaimer</h3>
                                <div class="feed">
                                    Disclaimer Opportunities posted on Karmondana.com are taken from original and reliable sources. However user shall also verify information from the given link in each post as a source of information. We are working to make the opportunities information accessible to all and not affiliated with any scholarship providing agency. Users may use the information provided here at their own discretion. Read our Full Privacy Policy <a href="{{route('privacypolicy')}}" class="text-secondary">here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    © 2017-<?php echo date('Y'); ?> <a href="https://www.karmondana.com" class="text-success">Karmondana</a>  | Powered by <a href="https://www.viracloud.net" class="text-success">Viracloud</a> All rights reserved.

                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <span class="fa fa-location-arrow"></span> Pol-e-Sorkh, Kabul, Afghanistan

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.js')}}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
