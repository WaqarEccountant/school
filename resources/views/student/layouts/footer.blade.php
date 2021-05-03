
<footer class="w3l-footer-29-main" id="footer">

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
