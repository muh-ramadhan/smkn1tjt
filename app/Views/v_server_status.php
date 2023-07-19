<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="themplate/code/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="themplate/code/styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="themplate/code/fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="themplate/code/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="themplate/code/app/icons/icon-192x192.png">

</head>

<body class="theme-light" data-highlight="blue2">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

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

    <div class="page-content">

        <div class="page-title page-title-large">
            <h2 data-username="Enabled!" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="<?= base_url(); ?>/themplate/code/images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="250">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="themplate/code/images/pictures/20s.jpg"></div>
        </div>

		<div class="content">
			<div class="search-box  position-relative shadow-xl border-0 bg-white rounded-m">
				<i class="fa fa-search ms-n3"></i>
				<input type="text" class="border-0" placeholder="Apa yang anda fikirkan? " data-search>
			</div>
		</div>



        <div class="card card-style">

        
        <div class="content mb-2">
                <h4>Status Server</h4>
                <p>
                    Pantau status server SMKN 1 TJT secara langsung    .
                </p>
                <div class="list-group list-boxes">

                <?=
$IPPrivateNameServer_1 = "LOAD BALANCE    ";
$websites_1 = array("172.16.0.1");
$good_1 = "Received = 1";
$successValue_1;
//Comment If Using Much Array
foreach ($websites_1 as $url_1){
    unset($result_1);
    $successValue_1 = "OFFLINE";
    exec("ping -c 1 -n 1 " . $url_1, $result_1);
    foreach($result_1 as $line_1) {
        if (strpos($line_1,$good_1) == TRUE){
            $successValue_1 = "ONLINE";
        }
    }

if ($successValue_1 == "ONLINE") {
    //UP
    echo "<a href='#' class='border border-green-dark rounded-s shadow-xs'>
    <i class='fa font-20 fa-mobile color-blue-dark'></i>
    <span>".$IPPrivateNameServer_1."</span>
    <strong>Flexible, Fast and Very Powerful</strong>
    <u class='color-green-dark'>".$successValue_1."</u>
    <i class='fa fa-check-circle color-green-dark'></i>
    </a>";
} else {
    //DOWN
    echo "<a href='#' class='border border-red-dark rounded-s shadow-s'>
    <i class='fa font-20 fa-mobile color-red-dark'></i>
    <span>".$IPPrivateNameServer_1."</span>
    <strong>Flexible, Fast and Very Powerful</strong>
    <u class='color-red-dark'>".$successValue_1."</u>
    <i class='fa fa-times-circle color-red-light'></i>
    </a>";
}}
?>
                </div>
            </div>
        </div>

        <!-- footer and footer card-->
        <div class="footer" data-menu-load="<?= base_url(); ?>/themplate/code/menu-footer.html"></div>
    </div>
    <!-- end of page content-->


    <div id="menu-share"
         class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-load="themplate/code/menu-share.html"
         data-menu-height="420"
         data-menu-effect="menu-over">
    </div>

    <div id="menu-highlights"
         class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-load="themplate/code/menu-colors.html"
         data-menu-height="510"
         data-menu-effect="menu-over">
    </div>

    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="themplate/code/menu-main.html"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">
    </div>


</div>
<script type="text/javascript" src="<?= base_url(); ?>/themplate/code/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/themplate/code/scripts/custom.js"></script>
</body>
