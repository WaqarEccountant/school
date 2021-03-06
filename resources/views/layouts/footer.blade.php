<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
                    <a class="footer-logo mb-md-3 mb-2" href="#url"><img src="{{asset("assets/images/logo-icon.png")}}" loading="lazy" alt=""/>Skill</a>
                    <p>We amplify important ideas in mathematics education to help teachers grow their practice and our profession. Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
                    <h6 class="footer-title-29">Explore More</h6>
                    <ul>
                        {{--                        <li><a href="gallery.html">Gallery</a></li>--}}
                        <li><a href="{{route('courses')}}">Courses</a></li>
                        {{--                        <li><a href="landing-single.html">Landing Page</a></li>--}}
                        <li><a href="{{route('register')}}">Apply Now</a></li>
                        <li><a href="{{route('contact')}}">Buy Course Online</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
                    <div class="properties">
                        <h6 class="footer-title-29">Recent Post</h6>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="{{asset("assets/images/g1.jpg")}}" loading="lazy" class="img-fluid rounded" alt="">
                            <p>How to get Programming language Cartification in 45 days.</p>
                        </a>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="{{asset("assets/images/g2.jpg")}}" loading="lazy" class="img-fluid rounded" alt="">
                            <p>Top class learning from anywhere Lorem ipsum dolor sit amet.</p>
                        </a>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="{{asset("assets/images/g3.jpg")}}" loading="lazy" class="img-fluid rounded" alt="">
                            <p>Improving lives through learning Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
                    <h6 class="footer-title-29">Quick Links</h6>
                    <ul>
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footers14-block" class="py-3">
        <div class="container">
            <div class="footers14-bottom text-center">
                <div class="social">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                </div>
                <div class="copyright mt-1">
                    <p>&copy; 2020 Skill. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
