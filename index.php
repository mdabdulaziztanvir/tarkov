<!-- style.css and main.js are only v1.3 -->
<!-- 6 feb 2024 -->
<!-- style.css and main.js are only v1.4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./cdn/css/bootstrap.css?v=1.6">
    <!-- custom css files -->
    <link rel="stylesheet" href="./css/cols.css?v=1.0">
    <link rel="stylesheet" href="./css/style.css?v=1.9">

    
    <link rel="icon" type="image/png" href="./files/favicon.png?v=1.6"> 


    <title>Tarkov Items Tracker</title>
    <meta name="description" content="TarkovTracker made by acejimbo helps players progress in Escape From Tarkov with an Item Tracker, Map Tools, and a Bitcoin profitability calculator. ">

    <meta name="keywords" content=" Tarkov Items Tracker, Escape From Tarkov, EFT, TarkovTracker, Item Tracker, Map Tools, Bitcoin Calculator, custom, factory, interchange, labs, reserve, shoreline, streets, woods">
    
    <meta name="author" content="AceJimbo">
    <meta name="robots" content="index, follow">


    <!-- Open Graph Tags -->
    <meta property="og:title" content="Acejimbo Projects">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yourwebsite.com">
    <meta property="og:description" content="TarkovTracker helps players progress in Escape From Tarkov with an Item Tracker, Map Tools, and a Bitcoin profitability calculator.">

<!-- Example: Website Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Tarkov Item Tracker", //I changed the name from AceJimbo Project to this   ACEJIMBO
      "url": "https://tarkovtracker.ca",
      "logo": "https://www.yourwebsite.com/logo.jpg?v=1.6",
      "description": "TarkovTracker helps players progress in Escape From Tarkov with an Item Tracker, Map Tools, and a Bitcoin profitability calculator.",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "telephone": "+123456789",
        "email": "info@yourwebsite.com"
      },
      "sameAs": [
        "https://www.facebook.com/YourFacebookPage",
        "https://twitter.com/YourTwitterHandle",
        "https://www.linkedin.com/in/YourLinkedInProfile"
      ]
    }
    </script>
<!-- Google ads  -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5592192419335006"
     crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js?v=1.6) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9SGZFESTB8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9SGZFESTB8');
    </script>
    
<!-- <script src="https://kit.fontawesome.com/5b30757140.js?v=1.6" crossorigin="anonymous"></script> -->
<!-- 
commented
1.2css - cancel korechi
2.add js defer
3.fontawesome kit before body -->

</head>
<body id="detect">
    <div id="blurBackground" ></div>
<?php include('./home/ads-blocker.php'); ?> 
<?php include('./home/allowAds.php'); ?> 
<div class="common-bg-image inside_body"></div>

    <!-- main grid start -->
    <?php include('./home/ads.php'); ?> 
<div class="all_elements" >
    <?php include('./home/navbar.php'); ?> 
    <?php include('./home/mobilestream.php'); ?> 
    <div class="text-center mb-3">
        <span class="title_text lang-change-js " data-en="*FIR not required" data-fr="" >*FIR not required</span>
        <span class="title_text ms-3 lang-change-js " data-en="+Can be crafted" data-fr="" >+Can be crafted</span>
    </div>
        
    <div class="play__ground accordion" id="accordionExample">
        <!-- these are all columns -->
        <?php include('./home/colOne.php'); ?> 
        <?php include('./home/colTwo.php'); ?> 
        <?php include('./home/colThree.php'); ?> 
        <?php include('./home/colFour.php'); ?> 
        <?php include('./home/colFive.php'); ?> 
        <?php include('./home/colSix.php'); ?> 
        <?php include('./home/colSeven.php'); ?> 
        
        <?php include('./home/colEight.php'); ?> 

    </div>

    <!-- stream link here -->
    <?php include('./home/streamLinks.php'); ?> 

    <?php include('./footer-bottom-text/items-tracker.php'); ?> 
   

   <?php include('./home/footer.php'); ?> 


    </div>

    
    <!-- age ekhane chilo footer bottom/items tracker text and footer.php -->
    
 
    <script>
        window.addEventListener('load', function() {
            var script = document.createElement('script');
            script.src = 'https://kit.fontawesome.com/5b30757140.js?v=1.6';
            script.crossOrigin = 'anonymous';
            document.head.appendChild(script);
        });
    </script>
<!-- bootstrap js -->
    <script src="./cdn/js/bootstrap.js?v=1.6" defer></script>
    <!-- lanchange js -->
    <script src="./js/lanChange.js"></script>

    <!-- custom js -->
    <script src="./js/main.js?v=1.7" defer ></script>

    


  







</script>
</body>
</html>