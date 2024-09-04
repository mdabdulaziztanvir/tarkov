<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cdn/css/bootstrap.css?v=1.6">
    <link rel="stylesheet" href="../css/style.css?v=1.7">
    
    <link rel="stylesheet" href="barter.css?v=1.6">
    <!-- <link rel="icon" type="image/png" href="../files/favicon.png?v=1.6">  -->
    <link rel="icon" type="image/png" href="../files/favicon.png?v=1.6"> 

    <title>Cases Barter</title>
    <!-- Google tag (gtag.js?v=1.6) -->
    
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
        <?php include('bartermenu.php'); ?> 
    <?php include('../home/mobilestream.php'); ?> 

        
        <div class="barter-grid">
            <?php include('./all-cases/weapons.php'); ?> 
            <?php include('./all-cases/thicc-weapons.php'); ?> 
        </div>
        <h4 class="ms-4 red_bold" >THICC ITEM CASE</h4>
        <div class="thicc-item-grid" >
            <?php include('./all-cases/thicc-item.php'); ?> 
        </div>
    </div>
    <?php include('../home/livestream.php'); ?> 

    <?php include('../footer-bottom-text/cases-barter.php'); ?> 

    <?php include('../home/footer.php'); ?> 

<!-- scripts -->
    <script src="../cdn/js/bootstrap.js?v=1.6"></script>
    <script src="barter.js?v=1.6"></script>
</body>
</html>