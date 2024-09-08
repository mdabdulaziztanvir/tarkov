<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cdn/css/bootstrap.css?v=1.6">
    <link rel="stylesheet" href="../css/style.css?v=1.7">
    
    <link rel="stylesheet" href="hideout.css?v=1.6">
    <link rel="icon" type="image/png" href="../files/favicon.png?v=1.6"> 
    <title>Hideout Tracker</title>
  
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?v=1.6?client=ca-pub-5592192419335006"
     crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js?v=1.6) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9SGZFESTB8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9SGZFESTB8');
    </script>
</head>
<body>
<div id="blurBackground" ></div>
<?php include('../home/ads-blocker.php'); ?> 
<?php include('../home/allowAds.php'); ?> 
<div class="common-bg-image"></div>

<?php include('../home/ads.php'); ?> 
    <!-- all elements -->
    <div class="all_elements">
    <?php include('hideoutmenu.php'); ?> 
    <?php include('../home/mobilestream.php'); ?> 

    <div class="hideout_title text-center mt-5">
        <h1 class="lang-change-js" data-en="HIDEOUT REQUIREMENTS" data-fr="" >HIDEOUT REQUIREMENTS</h1>
        <h3 class="lang-change-js" data-en="Beta 0.13.8" data-fr="" >Beta 0.13.8</h3>
    </div>
    <div class="hideout__play__ground">
    <?php include('./grid-cols/hide-col-one.php'); ?> 
    <?php include('./grid-cols/hide-col-two.php'); ?> 
    <?php include('./grid-cols/hide-col-three.php'); ?> 
    <?php include('./grid-cols/hide-col-four.php'); ?> 
    </div>
    </div>
    <?php include('../home/livestream.php'); ?> 

    <?php include('../footer-bottom-text/hideout-tracker.php'); ?> 

    <?php include('../home/footer.php'); ?> 
    <!-- bootstrap js -->
    <script src="../cdn/js/bootstrap.js?v=1.6"></script>
    <script src="../js/lanChange.js"></script>
    <script src="hideout.js?v=1.6"></script>
</body>
</html>