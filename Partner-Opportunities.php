<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Big 5 Esports</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Big 5 Esports">
    <meta name="author" content="Kyle Slater">
    <meta name="keywords" content="Big 5 Esports">

    <link rel="shortcut icon" href="assets/img/favicons/big5.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/favicon-152.png">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">

    <link href="assets/vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendor/slick/css/slick.css" rel="stylesheet">
    <link href="assets/vendor/nanoscroller/css/nanoscroller.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.css" rel="stylesheet">

    <link href="assets/css/style-partner.css" rel="stylesheet">
    <link href="assets/css/loader-4.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="preloader-is--active ">

    <div class="site-wrapper site-layout--default">


        <header id="header" class="site-header site-header--bottom">

            <div class="header-logo header-logo--img">
                <a href="index.html">
                    <img src="assets/img/Website-logo-2-200x200.png" srcset="assets/img/Website-logo-2-200x200.png"
                        alt="Big5Esports" style="width:150px">
                </a>
            </div>

            <nav class="main-nav">
                <ul class="main-nav__list">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">About us</a>
                        <ul class="main-nav__sub">
                            <li><a href="Introduction.html">Introduction</a></li>
                            <li><a href="Management-Team.html">Management Team</a></li>
                            <li><a href="Achievements.html">Achievements</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Teams</a>
                        <ul class="main-nav__sub">
                            <li><a href="League-of-Legends.html">League Of Legends</a></li>
                            <li><a href="Counter-Strike.html">Counter-Strike</a></li>
                            <li><a href="Fortnite.html">Fortnite</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Partnerships</a>
                        <ul class="main-nav__sub">
                            <li><a href="Partnerships.html">Current Partnerships</a></li>
                            <li>
                                <a href="Partnerships-History.html">Partnership History</a>
                            </li>
                            <li>
                                <a href="Partner-Opportunities.php">Partnership Opportunities</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Media</a>
                        <ul class="main-nav__sub">
                            <!--<li><a href="Content-Creators.html">Content Creators</a></li>-->
                            <li><a href="Wallpaper-Gallery.html">Wallpapers</a></li>
                            <li>
                                <a href="Content-Creator-Channels.html">Content Creators</a>
                            </li>
                            <li>
                                <a href="assets/Presskit/Big5-PressPack.rar">Press Kit</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Store.html">Store</a>
                    </li>
                    <li>
                        <a href="#">Socials</a>
                        <ul class="social-menu social-menu--header">
                            <li>
                                <a href="https://discord.gg/ZaseAhv6Qh"><span
                                        class="link-subtitle">Discord</span>Big5Esports</a>
                            </li>
                            <li>
                                <a href="https://twitch.tv/Big5_Live"><span
                                        class="link-subtitle">Twitch</span>Big5_Live</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Big5Esports"><span
                                        class="link-subtitle">Twitter</span>Big5Esports</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Big5Esports"><span
                                        class="link-subtitle">Facebook</span>Big5Esports</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/Big5Esports"><span
                                        class="link-subtitle">Instagram</span>Big5Esports</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/71679288"><span
                                        class="link-subtitle">LinkedIn</span>Big5Esports</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </nav>

        </header>
        <!-- Content
		================================================== -->
        <main class="site-content account-page" id="wrapper">
            <div class="account-navigation">
                <h2 class="h4 large-partnerhead">PARTNERSHIP OPPORTUNITIES</h2>
                <div class="hand-shake-icon"></div>
                <div class="card-title">

                    <?php 
                                        $Msg = "";
                                        if(isset($_GET['error']))
                                        {
                                            $Msg = " Please Fill in the Blanks ";
                                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                        }

                                        if(isset($_GET['success']))
                                        {
                                            $Msg = " Your Message Has Been Sent ";
                                            echo '<div class="alert alert-success" style="margin-bottom: -5%">'.$Msg.'</div>';
                                        }
                                    
                                    ?>
                </div>
                <h4 class="h6 small-head">GET IN TOUCH.</h2>
                    <form action="/assets/php/partnership-contact.php" method="post" class="form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="input-name" name="Fname"
                                        placeholder="Your Name*">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="input-address" name="Email"
                                        placeholder="Email Address*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group select-wrapper">
                                    <select name="Selectcountry" id="select-country">
                                        <option value="" disabled>Select Country*</option>
                                        <option value="+27" selected>South Africa</option>
                                        <option value="+1">USA</option>
                                        <option value="+1">Canada</option>
                                        <option value="+264">Namibia</option>
                                        <option value="+266">Lesotho</option>
                                        <option value="+33">France</option>
                                        <option value="+351">Portugal</option>
                                        <option value="+34">Spain</option>
                                        <option value="+39">Italy</option>
                                        <option value="+44">UK</option>
                                        <option value="+45">Denmark</option>
                                        <option value="+46">Sweden</option>
                                        <option value="+49">Germany</option>
                                        <option value="+55">Brazil</option>
                                        <option value="+61">AUS</option>
                                        <option value="+64">NZ</option>
                                        <option value="+7">Russia</option>
                                        <option value="+81">Japan</option>
                                        <option value="+86">China</option>
                                        <option value="+91">India</option>
                                        <option value="+90">Turkey</option>
                                        <option value="+971">UAE</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="input-address" name="Contact"
                                        placeholder="Contact Number*">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea cols="30" rows="5" class="form-control" id="input-comment" name="Msg"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary" name="btn-send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="account-content">
                <article class="post post--single">


                    <div class="post__header">
                        <div class="post__body">
                            <figure>
                                <img src="assets/img/partner-header-image.png" alt="">
                                <figcaption>CHANGING THE GAME ALONGSIDE THE BRANDS THAT ROAR WITH US!</figcaption>
                            </figure>

                        </div>

                        <h2 class="post__title h3">PARTNERSHIPS AND COLLABORATIONS</h2>
                        <div class="post__cats h5">
                            <span class="color-warning">ROAR WITH US!</span>
                        </div>

                    </div>
                    <div class="post__body">
                        <p>
                            At Big 5 Esports, we are not just about name-dropping the most incredible partnerships.
                            Instead, we continuously strive to find and adopt new and exciting ideas to work hand in
                            hand with our partner's brand. At Big 5, we want to carry our partner's name
                            alongside ours, with pride. We believe in collaboration and growing together, which means we
                            are open to working with you and your team whether your company is looking for long-term
                            partnerships, quick short-term brand campaigns,
                            or anything else in-between.
                        </p>
                        <p>
                            Our in-house creators and streaming team is innovative and well-versed in the digital sphere
                            of market activation. At Big 5, we are a family; we work together and harness the spirit of
                            Africas finest qualities; Loyalty, pride, strength, and an unwavering
                            ability to stay on top of our game. Our team offers bespoke insight into the industry and a
                            tailored package for your brand, from PR copy to a visual powerhouse of content; we strive
                            to make your name a household name within
                            the gaming community.
                        </p>

                        <p>
                            At Big 5, we care about the individuals that come together to make the team; brand
                            partnerships are no different. This is why we believe that every partnership should be
                            customized to each other's needs.At Big 5, we care about the individuals that come
                            together to make the team; brand partnerships are no different. This is why we believe that
                            every partnership should be customized to each other's needs.
                        </p>

                    </div>
                    <br>
                    <h4 style="text-align: center; margin-bottom: 5%; margin-top: 2%;">What is on the table.</h4>

                    <div class="row" style=" margin-bottom: 5%;">
                        <div class="col-md-6">
                            <ul class="list" style="text-align: center;">
                                <li>Service 1</li>
                                <li>Service 2</li>
                                <li>Service 3</li>
                                <li>Service 4</li>
                                <li>Service 5</li>
                                <li>Service 6</li>
                                <li>Service 7</li>
                                </ol>
                        </div>
                        <div class="col-md-6">
                            <ul class="list" style="text-align: center;">
                                <li>Service 8</li>
                                <li>Service 9</li>
                                <li>Service 10</li>
                                <li>Service 11</li>
                                <li>Service 12</li>
                                <li>Service 13</li>
                                <li>Service 14</li>
                            </ul>
                        </div>
                    </div>

                    <h5 style="text-align: center;">Brands we have worked with.</h5>
                    <div class="row partner-row">
                        <div class="column">
                            <img class="partner-images" src="assets/img/sponsors/primeself-partner.png" alt="primeself">
                        </div>
                        <div class="column">
                            <img class="partner-images" src="assets/img/sponsors/rocket-partner.png" alt="rocket">
                        </div>
                        <div class="column">
                            <img class="partner-images" src="assets/img/sponsors/nutritech-partner.png" alt="nutritech">
                        </div>
                    </div>
                </article>
            </div>
        </main>
    </div>

    <div class="preloader-overlay">
        <div id="js-preloader" class="preloader">
            <div class="preloader-inner fadeInUp">
                <div class="loader-wrapper" id="loader-1">
                    <img src="assets/img/Website-logo-2-200x200.png" class="Big5-preloader">
                    <div class="loader-wrapper" id="loader-4">

                        <div id="loader">#</div>
                        <div id="loader">R</div>
                        <div id="loader">O</div>
                        <div id="loader">A</div>
                        <div id="loader">R</div>
                        <div id="loader">F</div>
                        <div id="loader">R</div>
                        <div id="loader">O</div>
                        <div id="loader">M</div>
                        <div id="loader">A</div>
                        <div id="loader">F</div>
                        <div id="loader">R</div>
                        <div id="loader">I</div>
                        <div id="loader">C</div>
                        <div id="loader">A</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="df-custom-cursor-wrap">
        <div id="df-custom-cursor"></div>
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/core.js"></script>

    <script src="assets/js/init.js"></script>
    <script src="assets/js/custom.js"></script>




</body>

</html>