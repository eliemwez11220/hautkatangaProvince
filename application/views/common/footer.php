<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div class="unique-color">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fa fa-facebook-f white-text mr-4 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-4 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-4 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-4 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-youtube white-text fa-2x"> </i>
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
        </div>
    </div>

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h5 class="text-uppercase mb-4 font-weight-bold">Faire bien vos affaires</h5>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="text-align: justify;">Le monde devient de plus en plus vaste mais grâce aux nouvelles
                    technologies de l'information et de communication, vous pouvez atteindre toute la planette
                    en quelques sécondes en passant par un site internet ou une application mobile disponible sur le net.
                    Si vous voulez booster votre carrière par la publicité de vos produits et services,
                    faire la promotion de vos activités professionnelles,
                    étendre ses révenues, bref avoir une visibilité sur internet, nous sommes une solution idéale
                    pour vous. Congo Agile peut vous concevir un site web ou une application dans un temps records
                    cela à un prix abordable conformement à votre catégorie d'entreprise ou d'association.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        © 2019 - <script>document.write(new Date().getFullYear());</script>
        <a href="https://www.hautkatanga.gouv.cd" target="_blank"> Gouvernement Provincial du Haut-Katanga </a> by
        <a href="https://www.congoagile.net" target="_blank"> CEO - Congo Agile </a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('resources/'); ?>front/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url('resources/'); ?>front/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('resources/'); ?>front/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('resources/'); ?>front/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
</script>
<!-- Time Counter -->
<script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("time-counter").innerHTML = days + "Jr " + hours + "Hr " +
            minutes + "Min " + seconds + "Sec ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time-counter").innerHTML = "EXPIRED";
        }
    }, 1000);
    $(document).ready(function() {
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);
    });
    $('#navbarDropdownMenuLinkmin').mdbDropSearch();

</script>
</body>

</html>