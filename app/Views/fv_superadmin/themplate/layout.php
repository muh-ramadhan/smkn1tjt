<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>SMKN 1 TJT</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/fonts/css/fontawesome-all.min.css">
    <link rel="manifest" href="<?= base_url(); ?>themplate/code/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>themplate/code/app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="#" class="header-title">SMKN 1 TJT</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-2">
            <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
            <a href="#"><i class="fa fa-star"></i><span>Features</span></a>
            <a href="#" class="active-nav"><i class="fa fa-heart"></i><span>Pages</span></a>
            <a href="#"><i class="fa fa-search"></i><span>Search</span></a>
            <a href="#"><i class="fa fa-cog"></i><span>Settings</span><em class="badge bg-green-dark">3</em></a>
        </div>

        <?= $this->renderSection('content') ?>
        <!-- end of page content-->

        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="420" data-menu-effect="menu-over">

            <h1 class="text-center font-700 font-26 mt-3 pt-2">Share SMKN 1 TJT</h1>
            <p class="boxed-text-xl under-heading">
                Share our page with the world, increase <br>
                your page exposure with the world.
            </p>
            <div class="divider divider-margins"></div>

            <div class="px-4">
                <div class="row text-center mb-0">
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToFacebook icon icon-l bg-facebook rounded-s shadow-l"><i class="fab fa-facebook-f font-22"></i><br></a>
                        <p class="font-11 opacity-70">Facebook</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToTwitter icon icon-l bg-twitter rounded-s shadow-l"><i class="fab fa-twitter font-22"></i><br></a>
                        <p class="font-11 opacity-70">Twitter</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToLinkedIn icon icon-l bg-linkedin rounded-s shadow-l"><i class="fab fa-linkedin-in font-22"></i><br></a>
                        <p class="font-11 opacity-70">LinkedIn</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToMail icon icon-l bg-mail rounded-s shadow-l"><i class="fa fa-envelope font-22"></i><br></a>
                        <p class="font-11 opacity-70">Email</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToWhatsApp icon icon-l bg-whatsapp rounded-s shadow-l"><i class="fab fa-whatsapp font-22"></i><br></a>
                        <p class="font-11 opacity-70">WhatsApp</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="shareToCopyLink icon icon-l bg-blue-dark rounded-s shadow-l">
                            <i class="fa fa-link not-copied font-22"></i>
                            <i class="fa fa-check copied disabled font-22"></i>
                            <br></a>
                        <p class="font-11 opacity-70">Copy URL</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="external-link shareToPinterest icon icon-l bg-pinterest rounded-s shadow-l"><i class="fab fa-pinterest-p font-22"></i><br></a>
                        <p class="font-11 opacity-70">Pinterest</p>
                    </div>
                    <div class="col-3 mb-n2">
                        <a href="#" class="close-menu icon icon-l bg-red-dark rounded-s shadow-l"><i class="fa fa-times font-22"></i><br></a>
                        <p class="font-11 opacity-70">Close</p>
                    </div>
                </div>
            </div>
            <div class="divider divider-margins mt-n1 mb-3"></div>
            <p class="text-center font-10 mb-0">Copyright <span class="copyright-year">2021</span> - SMKN 1 TJT. All rights reserved.</p>
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="510" data-menu-effect="menu-over">
            <div class="card header-card color-card shape-rounded" style="height:40%">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-bg preload-img" data-src="/themplate/code/images/pictures/20s.jpg"></div>
            </div>

            <div class="card bg-transparent mb-0">
                <h1 class="text-center color-white mt-4 font-35 font-800">SMKN 1 TJT</h1>
                <p class="text-center color-white font-12 mt-n1 pb-2 mb-3">Put a little color in your life</p>
            </div>

            <div class="card card-style">
                <div class="highlight-changer pt-3 pb-2">
                    <p class="text-center">
                        SMKN 1 TJT is packed with a beautiful color scheme.<br>Tap on your favorite! The page will adapt!
                    </p>
                    <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span class="color-blue-light">Default</span></a>
                    <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span class="color-red-light">Red</span></a>
                    <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>
                    <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink2-light">Pink</span></a>
                    <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span class="color-magenta-light">Purple</span></a>
                    <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>
                    <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>
                    <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>
                    <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-dark"></i><span class="color-green-light">Green</span></a>
                    <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span class="color-green-light">Grass</span></a>
                    <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-dark"></i><span class="color-yellow-dark">Sunny</span></a>
                    <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span class="color-yellow-light">Goldish</span></a>
                    <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span class="color-brown-light">Wood</span></a>
                    <a href="#" data-change-highlight="gray"><i class="fa fa-circle color-gray-dark"></i><span class="color-gray-light">Gray</span></a>
                    <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-dark"></i><span class="color-dark-light">Dark</span></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <a href="#" class="close-menu btn btn-full btn-margins rounded-sm shadow-l bg-highlight btn-m font-900 text-uppercase mb-0">Close color Menu</a>
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-active="nav-pages" data-menu-effect="menu-over">

            <div class="menu-header">
                <a href="#" data-toggle-theme class="border-right-0"><i class="fa font-12 color-yellow-dark fa-lightbulb"></i></a>
                <a href="#" data-menu="menu-highlights" class="border-right-0"><i class="fa font-12 color-green-dark fa-brush"></i></a>
                <a href="#" data-menu="menu-share" class="border-right-0"><i class="fa font-12 color-red-dark fa-share-alt"></i></a>
                <a href="#" class="border-right-0"><i class="fa font-12 color-blue-dark fa-cog"></i></a>
                <a href="#" class="close-menu border-right-0"><i class="fa font-12 color-red-dark fa-times"></i></a>
            </div>

            <div class="menu-logo text-center">
                <a href="#"><img class="rounded-circle bg-highlight" width="80" src="themplate/code/images/avatars/5s.png"></a>
                <h1 class="pt-3 font-800 font-28 text-uppercase">SMKN 1 TJT</h1>
                <p class="font-11 mt-n2">Put a little <span class="color-highlight">color</span> in your life.</p>
            </div>

            <div class="menu-items mb-4">
                <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
                <a id="nav-welcome" href="#">
                    <i data-feather="home" data-feather-line="1" data-feather-size="16" data-feather-color="blue-dark" data-feather-bg="blue-fade-light"></i>
                    <span>Beranda</span>
                    <em class="badge bg-highlight color-white">HOT</em>
                    <i class="fa fa-circle"></i>
                </a>
                <a href="#" data-submenu="sub-contact">
                    <i data-feather="mail" data-feather-line="1" data-feather-size="16" data-feather-color="blue-dark" data-feather-bg="blue-fade-light"></i>
                    <span>Contact</span>
                    <strong class="badge bg-highlight color-white"></strong>
                    <i class="fa fa-circle"></i>
                </a>
                <div id="sub-contact" class="submenu">
                    <a href="contact.html" id="nav-contact"><i class="fa fa-envelope color-blue2-dark font-16 opacity-30"></i><span>Email</span><i class="fa fa-circle"></i></a>
                    <a href="#"><i class="fa fa-phone color-green1-dark font-16 opacity-50"></i><span>Call Center</span><i class="fa fa-circle"></i></a>
                    <a href="#"><i class="fab fa-whatsapp color-whatsapp font-16 opacity-30"></i><span>WhatsApp</span><i class="fa fa-circle"></i></a>
                </div>
                <a id="nav-settings" href="#">
                    <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray-light" data-feather-bg="gray-fade-light"></i>
                    <span>Pengaturan</span>
                    <i class="fa fa-circle"></i>
                </a>
                <a href="#" class="close-menu">
                    <i data-feather="x" data-feather-line="3" data-feather-size="16" data-feather-color="red-dark" data-feather-bg="red-fade-dark"></i>
                    <span>Close</span>
                    <i class="fa fa-circle"></i>
                </a>
            </div>

            <div class="text-center">
                <a href="#" class="icon icon-xs mr-1 rounded-s bg-facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="icon icon-xs mr-1 rounded-s bg-twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon icon-xs mr-1 rounded-s bg-instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="icon icon-xs mr-1 rounded-s bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="icon icon-xs rounded-s bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                <p class="mb-0 pt-3 font-10 opacity-30">Copyright <span class="copyright-year"></span> SMKN 1 TJT. All rights reserved</p>
            </div>

        </div>

        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->
        <!-- Place all Action Elements and Menus Outside of the page-content class. Starting from here-->
        <!---------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------->


        <!------------->
        <!------------->
        <!--Menu Tour-->
        <!------------->
        <!------------->
        <!-- Tips Menu 1-->
        <div id="menu-tips-1" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="350" data-menu-width="340" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="smartphone" data-feather-line="1" data-feather-size="60" data-feather-color="gray-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">PWA Ready</h1>
                <p class="text-center mt-n3 mb-3 font-11 color-white">Just add it to your home screen and Enjoy!</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    SMKN 1 TJT is a Mobile Webite, but it is also a PWA! You can add it to your home screen and navigate it
                    like you would navigate an app.
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-2" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">1/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 2-->
        <div id="menu-tips-2" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="350" data-menu-width="340" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="moon" data-feather-line="1" data-feather-size="60" data-feather-color="gray-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Auto Dark Mode</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Just add detect-theme to your body class</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    With modern Mobile OS's, we can detect if your device is in dark mode and set the theme automatically. Just use the detect-theme class.
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-3" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">2/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 3-->
        <div id="menu-tips-3" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="350" data-menu-width="340" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="archive" data-feather-line="1" data-feather-size="60" data-feather-color="gray-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Hybrid App Compatible</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Turn SMKN 1 TJT in a Native Mobile Application</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    Using Cordova or PhoneGap you can compile SMKN 1 TJT into a Native Mobile Application! It's blazing fast and super easy to compile!
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-4" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">3/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 4-->
        <div id="menu-tips-4" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="350" data-menu-width="340" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="zap" data-feather-line="1" data-feather-size="60" data-feather-color="gray-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Really, Really Fast</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">Optimized to Perfection for your Needs</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    All scripts and style only are loaded only once! After that, there's no more need to worry about redownloading. It's optimized to perfection!
                </p>
            </div>
            <div class="row mb-0">
                <div class="col-6">
                    <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
                </div>
                <div class="col-6">
                    <a data-menu="menu-tips-5" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">4/5 - Next</a>
                </div>
            </div>
        </div>

        <!-- Tips Menu 5-->
        <div id="menu-tips-5" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="360" data-menu-width="340" data-menu-effect="menu-over">

            <div class="card header-card shape-rounded" data-card-height="200">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>

            <div class="mt-3 pt-1 pb-1">
                <h1 class="text-center">
                    <i data-feather="smile" data-feather-line="1" data-feather-size="60" data-feather-color="gray-dark" data-feather-bg="none"></i>
                </h1>
                <h1 class="text-center color-white font-22 font-700">Colors to Match your Style!</h1>
                <p class="text-center mt-n2 mb-3 font-11 color-white">We've added tons of colors just for you!</p>
            </div>
            <div class="card card-style">
                <p class="boxed-text-xl pt-3 mb-3">
                    SMKN 1 TJT is powered by a gorgeous color scheme that you can edit with ease and add your own custom feel to it! It's super simple! </p>
            </div>
            <a href="#" class="close-menu btn btn-m btn-margins rounded-sm btn-full shadow-l bg-highlight text-uppercase font-900">AWesome!</a>
        </div>

        <!------------------->
        <!------------------->
        <!--Menu Share List-->
        <!------------------->
        <!------------------->
        <div id="menu-share-list" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="310" data-menu-width="320" data-menu-effect="menu-over">
            <div class="list-group list-custom-small ps-1 pe-3">
                <a href="#" class="external-link shareToFacebook">
                    <i class="font-18 fab fa-facebook-square color-facebook"></i>
                    <span class="font-13">Facebook</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="external-link shareToTwitter">
                    <i class="font-18 fab fa-twitter-square color-twitter"></i>
                    <span class="font-13">Twitter</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="external-link shareToLinkedIn">
                    <i class="font-18 fab fa-linkedin color-linkedin"></i>
                    <span class="font-13">LinkedIn</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="external-link shareToGooglePlus">
                    <i class="font-18 fab fa-google-plus-square color-google"></i>
                    <span class="font-13">Google +</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="external-link shareToWhatsApp">
                    <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                    <span class="font-13">WhatsApp</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="external-link shareToMail border-0">
                    <i class="font-18 fa fa-envelope-square color-mail"></i>
                    <span class="font-13">Email</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>


        <!--------------------->
        <!--------------------->
        <!--Menu Share Thumbs-->
        <!--------------------->
        <!--------------------->
        <div id="menu-share-thumbs" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="420" data-menu-width="320">
            <h1 class="text-center font-700 mt-3 pt-2">Share the Love</h1>
            <p class="boxed-text-xl under-heading mb-4">
                Share our page with the world, increase <br>
                your page exposure with the world.
            </p>
            <div class="divider divider-margins"></div>

            <div class="row text-center me-3 ms-3 mb-0">
                <div class="col-4 mb-n2">
                    <a href="#" class="external-link shareToFacebook icon icon-l bg-facebook rounded-s shadow-l"><i class="fab fa-facebook-f font-22"></i><br></a>
                    <p class="font-11 opacity-70">Facebook</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="external-link shareToTwitter icon icon-l bg-twitter rounded-s shadow-l"><i class="fab fa-twitter font-22"></i><br></a>
                    <p class="font-11 opacity-70">Twitter</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="external-link shareToLinkedIn icon icon-l bg-linkedin rounded-s shadow-l"><i class="fab fa-linkedin-in font-22"></i><br></a>
                    <p class="font-11 opacity-70">LinkedIn</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="external-link shareToMail icon icon-l bg-mail rounded-s shadow-l"><i class="fa fa-envelope font-22"></i><br></a>
                    <p class="font-11 opacity-70">Email</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="external-link shareToWhatsApp icon icon-l bg-whatsapp rounded-s shadow-l"><i class="fab fa-whatsapp font-22"></i><br></a>
                    <p class="font-11 opacity-70">WhatsApp</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" class="close-menu icon icon-l bg-red-dark rounded-s shadow-l"><i class="fa fa-arrow-down font-22"></i><br></a>
                    <p class="font-11 opacity-70">Close</p>
                </div>
            </div>

            <div class="divider divider-margins mt-n1 mb-3"></div>
            <p class="text-center font-10 mb-0">Copyright <span class="copyright-year"></span> - SMKN 1 TJT. All rights reserved.</p>
        </div>

        <!------------->
        <!------------->
        <!--Menu Call-->
        <!------------->
        <!------------->
        <div id="menu-call" class="menu menu-box-modal rounded-m" data-menu-height="230" data-menu-width="310">
            <h1 class="text-center font-700 mt-3 pt-2">Call us Today</h1>
            <p class="boxed-text-xl">
                We're always here to help. Give us a Call Today. Just tap the button and get in
                touch with us.
            </p>
            <a href="tel:+1 234 567 890" class="external-link btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark">Call Now</a>
            <p class="color-theme text-center font-10 opacity-30 mt-2 mb-0 pb-0">Emergency Number Available 24/7. Call Now!</p>
        </div>

        <!-------------->
        <!-------------->
        <!--Menu Video-->
        <!-------------->
        <!-------------->
        <div id="menu-video" class="menu menu-box-modal rounded-m" data-menu-height="390" data-menu-width="330">
            <div class='responsive-iframe max-iframe'><iframe src='https://www.youtube.com/embed/c9MnSeYYtYY' frameborder='0' allowfullscreen></iframe></div>
            <h3 class="text-center font-700 mt-3">Video Embeds</h3>
            <p class="boxed-text-l">
                Embed any video from any media service. Just copy the iframe and we'll handle the rest.
            </p>
            <a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark">Awesome</a>
        </div>

        <!------------->
        <!------------->
        <!--Menu Maps-->
        <!------------->
        <!------------->
        <div id="menu-maps" class="menu menu-box-modal rounded-m" data-menu-height="390" data-menu-width="330">
            <div class='responsive-iframe max-iframe'><iframe src='https://www.google.com/maps/embed/v1/view?key=AIzaSyAM3nxDVrkjyKwdIZp8QOplmBKLRVI5S_Y&center=-33.8569,151.2152&zoom=16&maptype=satellite' frameborder='0' allowfullscreen></iframe></div>
            <h3 class="text-center font-700 mt-3">Maps Embeds</h3>
            <p class="boxed-text-l">
                Embed maps with great ease. Just copy the iframe and we'll handle the rest.
            </p>
            <a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark">Awesome</a>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Success-->
        <!---------------->
        <!---------------->
        <?php if (session()->getFlashdata('pesan')) {
            echo '<div id="menu-success-1" class="menu menu-box-modal rounded-m" data-menu-height="300" data-menu-width="310">';
            echo ' <h1 class="text-center mt-3 pt-1"><i class="fa fa-3x fa-check-circle color-green-dark shadow-xl rounded-circle"></i></h1>';
            echo '<h1 class="text-center mt-3 font-700">All"s Good</h1>';
            echo '<p class="boxed-text-l">';
            echo session()->getFlashdata('pesan');
            echo '</p>';
            echo '<a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green-light">Great</a>';
            echo '</div>';
        }; ?>

        <!---------------->
        <!---------------->
        <!--Menu Warning-->
        <!---------------->
        <!---------------->


        <!---------------->
        <!---------------->
        <!--Menu Confirm-->
        <!---------------->
        <!---------------->
        <div id="menu-confirm" class="menu menu-box-modal rounded-m" data-menu-height="200" data-menu-width="320">
            <h1 class="text-center font-700 mt-3 pb-1">Are you sure?</h1>
            <p class="boxed-text-l">
                You can even use these boxes for confirmations. Any element can trigger them.
            </p>
            <div class="row me-3 ms-3 mb-0">
                <div class="col-6">
                    <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green-dark">Accept</a>
                </div>
                <div class="col-6">
                    <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red-dark">REJECT</a>
                </div>
            </div>
        </div>

        <!--------------->
        <!--------------->
        <!--Menu Forgot-->
        <!--------------->
        <!--------------->
        <div id="menu-forgot" class="menu menu-box-modal rounded-m" data-menu-height="240" data-menu-width="320">
            <div class="me-3 ms-3 mt-3">
                <h2 class="font-700 mb-0 pt-1">Forgot Password?</h2>
                <p class="font-11 mb-1">
                    Let's get you back into your account. Enter your email to reset.
                </p>
                <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                    <i class="fa fa-at"></i>
                    <input type="email" class="form-control validate-email" id="form1a" placeholder="Name">
                    <label for="form1a" class="color-highlight font-11 font-500 mt-1">Name</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <a href="#" class="btn btn-full btn-m shadow-l rounded-s bg-highlight text-uppercase font-900 top-20">SEND RECOVERY EMAIL</a>
            </div>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Sign In-->
        <!---------------->
        <!---------------->
        <div id="menu-signin" class="menu menu-box-modal rounded-m" data-menu-height="320" data-menu-width="310">
            <div class="me-3 ms-3 mt-3">
                <h1 class="font-700 mb-0">Login</h1>
                <p class="font-11  mt-n1 mb-0">
                    Hello, stranger! Please enter your credentials below.
                </p>

                <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                    <i class="fa fa-user"></i>
                    <input type="name" class="form-control validate-name" id="form1aa" placeholder="Username">
                    <label for="form1aa" class="color-highlight mt-1 font-500 font-11">Username</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control validate-password" id="form1aab" placeholder="Password">
                    <label for="form1aab" class="color-highlight mt-1 font-500 font-11">Password</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="#" data-menu="menu-forgot" class="font-10">Forgot Password?</a>
                    </div>
                    <div class="col-6">
                        <a data-menu="menu-signup" href="#" class="float-end font-10">Create Account</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <a href="#" class="btn btn-full btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark mt-4">LOGIN</a>
            </div>
        </div>

        <!---------------->
        <!---------------->
        <!--Menu Sign Up-->
        <!---------------->
        <!---------------->
        <div id="menu-signup" class="menu menu-box-modal rounded-m" data-menu-height="370" data-menu-width="310">
            <div class="me-3 ms-3 mt-3">
                <h1 class="font-700 mb-0">Register</h1>
                <p class="font-11  mt-n1 mb-0">
                    Don't have an account? Register below.
                </p>

                <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                    <i class="fa fa-user"></i>
                    <input type="name" class="form-control validate-name" id="form1aad" placeholder="Username">
                    <label for="form1aad" class="color-highlight mt-1 font-500 font-11">Username</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                    <i class="fa fa-at"></i>
                    <input type="email" class="form-control validate-email" id="form1aac" placeholder="Email">
                    <label for="form1aac" class="color-highlight mt-1 font-500 font-11">Email</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control validate-password" id="form1aabe" placeholder="Password">
                    <label for="form1aabe" class="color-highlight mt-1 font-500 font-11">Password</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <p class="text-center pb-0 mb-n1 pt-1">
                    <a href="#" data-menu="menu-signin" class="text-center font-11 color-gray-dark">Already Registered? Sign In Here.</a>
                </p>
                <a href="#" class="btn btn-full btn-sm shadow-l rounded-s text-uppercase font-900 bg-blue-dark mt-4">Register</a>
            </div>
        </div>

        <!----------------->
        <!----------------->
        <!--Menu Language-->
        <!----------------->
        <!----------------->
        <div id="menu-language" class="menu menu-box-modal rounded-m" data-menu-height="330" data-menu-width="310">
            <div class="me-3 ms-3 mt-3">
                <h1 class="font-700 mb-n1">Select language</h1>
                <p class="font-11 mb-1">
                    You can direct to multiple languages of your page.
                </p>
                <div class="list-group list-custom-small">
                    <a href="#"><img class="me-3 mt-n1" width="20" src="images/flags/United-States.png"><span>English</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="me-3 mt-n1" width="20" src="images/flags/India.png"><span>Indian</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="me-3 mt-n1" width="20" src="images/flags/Germany.png"><span>German</span><i class="fa fa-angle-right"></i></a>
                    <a href="#"><img class="me-3 mt-n1" width="20" src="images/flags/Italy.png"><span>Italian</span><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="border-0"><img class="me-3 mt-n1" width="20" src="images/flags/Spain.png"><span>Spanish</span><i class="fa fa-angle-right"></i></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!------------------>
        <!------------------>
        <!--Menu Age Check-->
        <!------------------>
        <!------------------>
        <div id="menu-age" class="menu menu-box-modal rounded-m" data-menu-height="230" data-menu-width="340">
            <div class="me-3 ms-3 mt-3">
                <h1 class="font-700 font-18 mb-0">Verify your age</h1>
                <p class="font-11  mb-0">
                    This menu can be automatically activated on page load. The date format must be 31/12/1986. The system will do the rest.
                </p>

                <div class="row mb-0">
                    <div class="col-4">
                        <div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
                            <input type="number" min="1" max="31" class="form-control validate-number" id="date-birth-day" placeholder="Day" required>
                            <label for="date-birth-day" class="color-theme opacity-50 text-uppercase font-700 font-10 disabled">Last Name</label>
                            <i class="disabled invalid color-red-dark"></i>
                            <i class="disabled valid color-green-dark"></i>
                            <em>*</em>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
                            <input type="number" min="1" max="12" class="form-control validate-number" id="date-birth-month" placeholder="Month" required>
                            <label for="date-birth-month" class="color-theme opacity-50 text-uppercase font-700 font-10 disabled">Last Name</label>
                            <i class="disabled invalid color-red-dark"></i>
                            <i class="disabled valid color-green-dark"></i>
                            <em>*</em>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-style input-style-always-active no-borders no-icon validate-field mb-4">
                            <input type="number" min="2020" max="2021" class="form-control validate-number" id="date-birth-year" placeholder="Year" required>
                            <label for="date-birth-year" class="color-theme opacity-50 text-uppercase font-700 font-10 disabled">Last Name</label>
                            <i class="disabled invalid color-red-dark"></i>
                            <i class="disabled valid color-green-dark"></i>
                            <em>*</em>
                        </div>
                    </div>
                </div>
                <a href="#" class="check-age mb-3 btn btn-full btn-m shadow-l rounded-s bg-blue-dark mt-3 text-uppercase font-900">Verify Age</a>
            </div>
        </div>

        <div id="menu-age-okay" class="menu menu-box-modal rounded-m" data-menu-height="315" data-menu-width="320">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-green-dark"></i></h1>
            <h1 class="text-center text-uppercase font-900">Age Verified</h1>
            <p class="boxed-text-l mt-4">
                Thank you for confirming your age.<br> You can now continue browsing our page.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green-light">Great</a>
        </div>

        <div id="menu-age-fail" class="menu menu-box-modal rounded-m" data-menu-height="315" data-menu-width="320">
            <h1 class="text-center mt-4"><i class="fa fa-3x fa-times-circle color-red-dark"></i></h1>
            <h1 class="text-center text-uppercase font-900 font-20">Age verification Failed</h1>
            <p class="boxed-text-l mt-4 font-12">
                Sorry, you are not old enough to view this content.<br> Turn back now and visit safer pages.
            </p>
            <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-red-light">Go Back</a>
        </div>





    </div>
    <script type="text/javascript" src="<?= base_url(); ?>themplate/code/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>themplate/code/scripts/custom.js"></script>
</body>