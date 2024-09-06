<div class="nav--background d-flex justify-content-between align-items-center my-2">
  <!--btn offcanvas -->
 <div class="d-flex gap-1 gap-md-4 align-items-center">
  <button class="btn navbar_button mt-2 mb-1 ms-2 ms-md-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <span class="menu_icon">&#9776;</span> 
  </button>
    <small class="Pages_name bg-dark px-2" >Woods</small>
  </div>

   <!-- btn instruction modal -->
   <div class="d-flex">
    <?php include('../home/donate-button.php'); ?> 


    <!-- btn instruction modal -->
    <button type="button" class="btn me-2 me-md-5 d-flex justify-content-center align-items-center instructions" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    How to use the page
    </button>
  </div>
  </div>

<!-- offcanvas start-->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title menu_version" id="offcanvasWithBothOptionsLabel">v15.0.0</h5>
      <hr>
      <button type="button" class="btn-close menu_button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="menu_bottom_border text-center "></div>
    <div class="offcanvas-body">
        <div class="nav_links d-flex flex-column gap-3 align-items-start ms-1">
          <a href="/" >Items Tracker</a>
          <a href="../hideout-tracker/">Hideout Tracker</a>
        <a href="../other-quests/">Other Quests</a>
        <a href="../ground-zero/">Ground Zero</a>

          <a href="../streets/">Street</a>
          <a href="../custom/">Customs</a>
          <a href="../shoreline/">Shoreline</a>
          <a href="../woods/" class="active">Woods</a>
          <a href="../lighthouse/">Lighthouse</a>
          <a href="../reserve/">Reserve</a>
          <a href="../factory/">Factory</a>
          <a href="../interchange/">Interchange</a>
          <a href="../labs/">Labs</a>
          <a href="../bitcoin/">Bitcoin</a> 
          <a href="../cases-barter/">Cases Barter</a>
          <a href="https://www.eft-ammo.com/" target="_blank" >Ammo Chart</a>
          
        </div>
    </div>
  </div>
  <!-- offcanvas end -->

   <!-- instruction modal start -->
   <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="staticBackdropLabel">How to use the page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-grid">
        <div class="english ">
            <h2 class="question fs-4">What is the purpose of this page ?</h2>
            <p class="answer">Help you to spot quickly where in the map the quest can be done.</p>
            <p class="answer">You will have a quick note about the quest and also if some keys are needed.</p>
            <!-- <p class="answer">* Means that ''Found in raid'' status is not required.</p> -->
            
            <h2 class="question fs-4">How do I use the Map Quest tool ?</h2>
            
            <p class="answer">You have all the Quest that required to go somewhere in the map with the keys needed and also, sometime, notes that can help you. I also marked the spawn with big colors to be able to see quickly where the other players can spawn around you.</p>

            <p class="answer">If needed you can click on the name of the quest to access a quick YouTube video guide.</p>
            <p class="answer">Click the ''symbol'' column of a quest to track them and change their colors.</p>

            <p class="answer">Hold the ‘’symbol’’ column to be able to reset it </p>
            <p class="answer">Blue = You unlocked the quest.</p>
            <p class="answer">Red = Reminder that you aim to do those quest in your next raid.</p>
            <p class="answer">Green = Quest done.</p>
            
            
          </div> 

          <div class="french">
          <h2 class="question fs-4">Quel est le but de cette page ?</h2>

            <p class="answer">Vous aider à voir rapidement à quel endroit dans la carte, la quête peut être complété.</p>
            <p class="answer">Vous aurez également accès rapidement aux notes et aussi aux clés nécessaires pour compléter les quêtes.</p>
            <!-- <p class="answer">* Means that ''Found in raid'' status is not required.</p> -->
            
            <h2 class="question fs-4">Comment utiliser l’outil de Quête par carte ?</h2>
            
            <p class="answer">Vous trouverez toutes les quêtes qui demandent d’aller à un endroit précis sur la carte. Vous aurez également les notes et clés nécessaires pour vous aider. J’ai également indiqué avec des pastilles de couleurs les ‘’spawn’’ des joueurs.</p>


            <p class="answer">Vous verrez donc rapidement, à quel endroit les autres joueurs peuvent être autour de vous.</p>
            <p class="answer">Au besoin, vous pouvez cliquer sur le nom de la quête pour accéder un vidéo de guide Youtube.</p>

            <p class="answer">Cliquez sur la colonne ''symbol'' d’une quête pour suivre celle-ci et changer la couleur.</p>

            <p class="answer">Bleu = Vous avez déverouillé la quête.</p>
            <p class="answer">Rouge = Pour vous souvenir que vous voulez faire ces quêtes au prochain ‘’raid’’.</p>
            <p class="answer">Vert = Quête terminé</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- instruction modal end -->

