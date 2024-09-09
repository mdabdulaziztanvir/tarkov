<div class="nav--background d-flex justify-content-between align-items-center my-2">

  <!--btn offcanvas -->
 <div class="d-flex gap-1 gap-md-4 align-items-center">
  <button class="btn navbar_button mt-2 mb-1 ms-2 ms-md-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <span class="menu_icon">&#9776;</span> 
  </button>
    <small class="Pages_name lang-change-js" data-en="Hideout Tracker" data-fr="" >Hideout Tracker</small>
  </div>

  <div class="d-flex gap-3">
    <!-- language change button -->
  <?php include('../home/lanChange.php'); ?> 
  <!-- donate button -->
  <?php include('../home/donate-button.php'); ?> 
  <!-- btn instruction modal -->
    <button type="button" class="btn me-2 me-md-5 d-flex justify-content-center align-items-center instructions lang-change-js" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-en="How to use the page" data-fr="">
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
          <a class="lang-change-js" data-en="Hideout Tracker" data-fr="" href="/">Item Tracker</a>
          <a class="active lang-change-js" data-en="Hideout Tracker" data-fr="" href="../hideout-tracker/" >Hideout Tracker</a>
          <a class="lang-change-js" data-en="Other Quests" data-fr="" href="../other-quests/">Other Quests</a>
          <a class="lang-change-js" data-en="Ground Zero" data-fr="" href="../ground-zero/">Ground Zero</a>
          <a class="lang-change-js" data-en="Street" data-fr="" href="../streets/">Street</a>
          <a class="lang-change-js" data-en="Customs" data-fr="" href="../custom/">Customs</a>
          <a class="lang-change-js" data-en="Shoreline" data-fr="" href="../shoreline/">Shoreline</a>
          <a class="lang-change-js" data-en="Woods" data-fr="" href="../woods/">Woods</a>
          <a class="lang-change-js" data-en="Lighthouse" data-fr="" href="../lighthouse/">Lighthouse</a>
          <a class="lang-change-js" data-en="Reserve" data-fr="" href="../reserve/">Reserve</a>
          <a class="lang-change-js" data-en="Factory" data-fr="" href="../factory/">Factory</a>
          <a class="lang-change-js" data-en="Interchange" data-fr="" href="../interchange/">Interchange</a>
          <a class="lang-change-js" data-en="Labs" data-fr="" href="../labs/">Labs</a>
          <a class="lang-change-js" data-en="Bitcoin" data-fr="" href="../bitcoin/">Bitcoin</a>
          <a class="lang-change-js" data-en="Cases Barter" data-fr="" href="../cases-barter/">Cases Barter</a>
          <a class="lang-change-js" data-en="Ammo Chart" data-fr="" href="https://www.eft-ammo.com/" target="_blank" >Ammo Chart</a>
        
        </div>
    </div>
  </div>
  <!-- offcanvas end -->

  <!-- instruction modal start -->
  <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4 lang-change-js" id="staticBackdropLabel" data-en="How to use the page" data-fr="">How to use the page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-grid">
          <div class="english">
            <h2 class="question fs-4">What is the purpose of this page ?</h2>
            <p class="answer">To be able to track quickly what hideout items you are missing, have in your stash or already gave to complete an upgrade in your hideout.</p>
            <p class="answer">So during a raid or after, you will know if you need an item or if you can just sell it.
            </p>
            <p class="answer hideout-imp-text">IMPORTANT this is the number of items you need when you are not owning ''Edge of Darkness'' game version</p>
            
            <h2 class="question fs-4">How do I use the Hideout Tracker ?</h2>
            <p class="answer">Click an item in the list to increment its quantity.</p>
            <p class="answer">Click and hold an item to reset it's progress.</p>

            <h2 class="question fs-4">What does the color mean ?</h2>
            <p class="answer">Red = you have some of the item total required in your stash.</p>
            <p class="answer">Blue = you have the total amount required for the item in your stash, you are waiting to unlock the upgrade.</p>
            <p class="answer">Green = you have completed the upgrades necessary with this item.</p>
          
            <h2 class="question fs-4">Is this list up-to-date ?</h2>
            <p class="answer">I will try to update it twice per wipe or until BSG release an official EFT API.</p>

            <h2 class="question fs-4">How is my progress being saved ?</h2>
            <p class="answer">Through your cookies and browser's local storage. If you reset your cache or cookies, it will reset your progression.</p>
            <p class="answer">A reset of your progression will be apply every ''wipe''</p>
          </div> 



          <div class="french">
            <h2 class="question fs-4">Quel est le but de cette page ?</h2>
            <p class="answer">Pour pouvoir suivre rapidement les objets de cachette qui vous manquent, que vous avez dans votre réserve ou que vous avez déjà donnés pour terminer une mise à niveau dans votre cachette.</p>
            <p class="answer">Ainsi pendant ou après un raid, vous saurez si vous avez besoin d’un objet ou si vous pouvez simplement le vendre.
            </p>
            <p class="answer hideout-imp-text">IMPORTANT ce sont les nombres d'objets que vous avez besoin lorsque vous ne possédez pas la version du jeu ''Edge of Darkness''</p>
            
            <h2 class="question fs-4">Comment utiliser le Hideout Tracker d'objets ?</h2>
            <p class="answer">Cliquez sur un objet dans la liste pour augmenter sa quantité.</p>
            <p class="answer">Cliquez et maintenez un objet pour réinitialiser sa progression.</p>

            <h2 class="question fs-4">Que signifient les couleurs ?</h2>
            <p class="answer">Rouge = vous avez une partie du total d'objet requis dans votre réserve.</p>
            <p class="answer">Bleu = vous avez le montant total requis pour l'objet dans votre réserve, vous attendez de débloquer l'augmentation de la cachette.</p>
            <p class="answer">Vert = vous avez terminé les aufgmentations qui nécessite cet objet.</p>
          
            <h2 class="question fs-4">Cette liste est-elle à jour ?</h2>
            <p class="answer">J'essaierai de le mettre à jour deux fois par ''wipe'' ou jusqu'à ce que BSG publie une API EFT officielle.</p>

            <h2 class="question fs-4">Comment ma progression est-elle enregistrée ?</h2>
            <p class="answer">Grâce aux cookies et au stockage local de votre navigateur. Si vous réinitialisez votre cache ou vos cookies, cela réinitialisera votre progression.</p>
            <p class="answer">Un reset de votre progression sera appliqué à chaque ''wipe''</p>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- instruction modal end -->



