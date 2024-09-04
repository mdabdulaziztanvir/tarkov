<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cdn/css/bootstrap.css?v=1.6">
    <link rel="stylesheet" href="../css/style.css?v=1.7">
    
    <link rel="stylesheet" href="labs.css?v=1.6">
    <link rel="icon" type="image/png" href="../files/favicon.png?v=1.6"> 
    <title>Labs</title>
    
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
<div loading="lazy" class="labs-bg-image"></div>

<?php include('../home/ads.php'); ?> 
<!-- all elements -->
<div class="all_elements">
<?php include('labsmenu.php'); ?> 

    <!-- navbar -->
    <div class="container-fluid  ">
        <div class="row ">
            <!-- fist col -->
            <div class="col-md-12 col-lg-9 col-xs col-sm-12 ">
            <div class="position-sticky top-0"> 

                <img loading="lazy" src="./items/labs.png?v=1.6" class=" img-fluid rounded" alt="lab image">
                <div class="text-end my-2">
                    <a href="./keys/">
                    <button class="key_button" >Keys</button>
                    </a>
                </div>

            </div>
            </div>
            <!-- 2nd col -->
            <div class="col-md-12 col-lg-3 col-xs col-sm-12  sec_col_pad">
            <small class="not_needed_title bg-dark note_color" >[<span class="orange_bg" > ORANGE </span> = NOT needed for KAPPA]</small>
            <br>
            <small class="not_needed_title bg-dark note_color" >[<span class="blue_bg" > BLUE </span> = Lightkeeper's Quests, Not needed for Kappa]</small>
                <div class="factory_table">
                    <table class="table table-dark table-bordered text-center">
                        <thead>
                            <tr>
                            <th>Quest</th>
                            <th>Symbol</th>
                            <th>Keys</th>
                            <th>NOTES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="" ><a href="https://www.youtube.com/watch?v=dbJ32nZSWZs&t=58s&ab_channel=Affliktid" target="_blank">TerraGroup Employee</a></td>
                                <td class="labs_symbol_color">A</td>
                                <td>Blue marking</td>
                                <td>USB stick plug into the PC</td>
                            </tr>
                            <tr>
                                <td class="quest_not_needed_blue" > <a href="https://www.youtube.com/watch?v=J15QzLm6maI&ab_channel=Prognonsisnegatv" target="_blank">Following the Bread Crumbs</a></td>
                                <td class="labs_symbol_color">B</td>
                                <td></td>
                                <td>Watch the video</td>
                            </tr>
                            <tr>
                                <td class="" >Exits</a></td>
                                <td class="labs_symbol_color">Sector B</td>
                                <td>Hangar Switch</td>
                                <td>Hangar Door </td>
                            </tr>
                            <tr>
                                <td class="" >Exits</a></td>
                                <td class="labs_symbol_color">Sector G</td>
                                <td>Cargo switch</td>
                                <td>Elevator 2nd floor </td>
                            </tr>
                          
                            <tr>
                                <td class="" >Exits</a></td>
                                <td class="labs_symbol_color">Sector O</td>
                                <td>Medblock under Servers</td>
                                <td>Elevator below Black Room </td>
                            </tr>
                            <tr>
                                <td class="" >Exits</a></td>
                                <td class="labs_symbol_color">Sector R</td>
                                <td>Switch Basement close to big pipe</td>
                                <td>Basement Elevator</td>
                            </tr>
                            <tr>
                                <td class="" >Exits</a></td>
                                <td class="labs_symbol_color">Sector Y</td>
                                <td>Parking Switch</td>
                                <td>Parking Door </td>
                            </tr>
                            <tr>
                                <td><a href="https://www.youtube.com/watch?v=YG0Obipa2x4" target="_blank">Beneath the Street</td>
                                <td class="street_symbol_color">C</td> 
                                <td></td>
                                <td>click on the mission's name to look the video to see the spot before I update the map !</td>
                            </tr>
                            <tr>
                                <td><a href="https://www.youtube.com/watch?v=XzMmgsmDoAA" target="_blank">Sightseeing</a></td>
                                <td class="woods_symbol_color" ></td>
                                <td></td>
                                <td>Bring an MS2000, click on the mission's name to look the video to see the spot before I update the map !</td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <!-- <div class="text-start my-2">
                    <a href="./keys/">
                    <button class="btn btn-primary px-5 py-1" >Keys</button>
                    </a>
                </div> -->
                </div>
                <div class=" d-flex justify-content-center">
                    <a href="https://www.twitch.tv/acejimbo">
                        <img loading="lazy" src="../files/acejimbo logo.png?v=1.6" class="acejimbo_logo rounded rounded-2" alt="acejimbo logo">
                    </a>  
                </div>
            </div>
        </div>
        <?php include('../home/mobilestream.php'); ?>
    <?php include('../home/livestream.php'); ?> 

    </div>
    </div>

    <?php include('../footer-bottom-text/labs-maps.php'); ?> 

    <?php include('../home/footer.php'); ?> 

    <!-- bootstrap js -->
    <script src="../cdn/js/bootstrap.js?v=1.6"></script>
    <!-- js -->
    <script src="lab.js?v=1.6"></script>
    <script>
        // **** Symbol Functionalities
        const labsSymbolColors = document.getElementsByClassName("labs_symbol_color");

        for (let i = 0; i < labsSymbolColors.length; i++) {
            const labsSymbolColor = labsSymbolColors[i];

            let labsClickCount = 0;

            const labsSavedClickCount = localStorage.getItem(`labsClickCount${i}`);
        if (labsSavedClickCount !== null) {
            labsClickCount = parseInt(labsSavedClickCount, 10);
        }

        const labsSavedBackgroundColor = localStorage.getItem(`labsBgColor${i}`);
        if (labsSavedBackgroundColor !== null) {
            labsSymbolColor.style.backgroundColor = labsSavedBackgroundColor;
        }


        let labsPressTimer;
        labsSymbolColor.addEventListener("mousedown", () => {
            labsPressTimer = window.setTimeout(() => {
            // Reset the data
            labsClickCount = -1;
            localStorage.removeItem(`labsClickCount${i}`);
            localStorage.removeItem(`labsBgColor${i}`);
            }, 550);
        });
        labsSymbolColor.addEventListener("mouseup", () => {
            clearTimeout(labsPressTimer);
        });
            labsSymbolColor.addEventListener("click", () => {
                labsClickCount++;
    
                if ( labsClickCount === 0 ){
                    labsSymbolColor.style.backgroundColor = "#212529";
                } else if( labsClickCount === 1 ){
                    labsSymbolColor.style.backgroundColor = "blue";
                }  else if(labsClickCount === 2)  {
                    labsSymbolColor.style.backgroundColor = "red";
                } else {
                    labsSymbolColor.style.backgroundColor = "green";
                }


            localStorage.setItem(`labsClickCount${i}`, labsClickCount);
            localStorage.setItem(`labsBgColor${i}`, labsSymbolColor.style.backgroundColor);

            });
        };

         // ** flash color start
         const labsLastFlashDate = localStorage.getItem('labsLastFlashDate');

        let labsAllDataSaved = true;
        const labsTargetColor = "rgb(33, 37, 41)";
        for (let k = 0; k < labsSymbolColors.length; k++) {
            const labsSavedClick = localStorage.getItem(`labsClickCount${k}`);
            
            const labsSavedColor = localStorage.getItem(`labsBgColor${k}`);
            if ( !labsLastFlashDate || labsSavedClick === 0 || labsSavedColor === labsTargetColor) {   
                labsAllDataSaved = false;   
                break;
            }
        }

        if ((!labsLastFlashDate || (new Date() - new Date(labsLastFlashDate)) >= 24 * 60 * 60 * 1000) && !labsAllDataSaved) {
            const labsFlashSymbolColors = document.getElementsByClassName("labs_symbol_color");
            const labsColors = ["blue", "red", "green"];
            let labsColorIndex = 0;

            function labsFlashColors() {
                for (let l = 0; l < labsFlashSymbolColors.length; l++) {
                    const labsFlashSymbolColor = labsFlashSymbolColors[l];
                    const labsOriginalColor = labsFlashSymbolColor.style.backgroundColor;
                    labsFlashSymbolColor.style.backgroundColor = labsColors[labsColorIndex];
                    labsColorIndex = (labsColorIndex + 1) % labsColors.length;
                    setTimeout(() => {
                        labsFlashSymbolColor.style.backgroundColor = labsOriginalColor;
                    }, 1000);
                }
            }

            localStorage.setItem('labsLastFlashDate', new Date());
            labsFlashColors();
        }
        //**  flash color end
    </script>
</body>
</html>