<div class="nav--background d-flex justify-content-between align-items-center my-2">

  



  <!--btn offcanvas -->
 <div class="d-flex gap-1 gap-md-4 align-items-center">
  <button class="btn navbar_button mt-2 mb-1 ms-2 ms-md-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <span class="menu_icon">&#9776;</span> 
  </button>
    <small class="Pages_name bg-dark px-2  lang-change-js" data-en="bitcoin" data-fr="" >bitcoin</small>
  </div> 
  <div class="d-flex gap-3">
    <!-- language change button -->
<?php include('../home/lanChange.php'); ?>
    <?php include('../home/donate-button.php'); ?> 
  <!-- btn instruction modal -->
    <button type="button" class="btn me-2 me-md-5 d-flex justify-content-center align-items-center instructions lang-change-js" data-en="How to use the page" data-fr="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
        <a class="lang-change-js" data-en="Items Tracker" data-fr="" href="/">Items Tracker</a>
          <a class="lang-change-js" data-en="Hideout Tracker" data-fr="" href="../hideout-tracker/">Hideout Tracker</a>
          <a class="lang-change-js" data-en="Other Quests" data-fr="" href="../other-quests/">Other Quests</a>
          <a class="lang-change-js" data-en="Ground Zero" data-fr="" href="../ground-zero/">Ground Zero</a>
          <a class="lang-change-js" data-en="Street" data-fr="" href="../streets/" >Street</a>
          <a class="lang-change-js" data-en="Customs" data-fr="" href="../custom/">Customs</a>
          <a class="lang-change-js" data-en="Shoreline" data-fr="" href="../shoreline/">Shoreline</a>
          <a class="lang-change-js" data-en="Woods" data-fr="" href="../woods/">Woods</a>
          <a class="lang-change-js" data-en="Lighthouse" data-fr="" href="../lighthouse/">Lighthouse</a>
          <a class="lang-change-js" data-en="Reserve" data-fr="" href="../reserve/">Reserve</a>
          <a class="lang-change-js" data-en="Factory" data-fr="" href="../factory/">Factory</a>
          <a class="lang-change-js" data-en="Interchange" data-fr="" href="../interchange/">Interchange</a>
          <a class="lang-change-js" data-en="Labs" data-fr="" href="../labs/">Labs</a>
          <a class="bitcoin lang-change-js" data-en="Bitcoin" data-fr="" href="../bitcoin/">Bitcoin</a>
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
          <h1 class="modal-title fs-4 lang-change-js" data-en="How to use the page" data-fr="" id="staticBackdropLabel">How to use the page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-grid">
          <div class="english">
            <h2 class="question fs-4">What is the purpose of this page ?</h2>
            <p class="answer">Help you to know if leveling your Bitcoin Farm is worth it depending of the date you are into a wipe.</p>
            <p class="answer">It will also tell you how many days you need to start having some profit from the farm.</p>
            <h2 class="question fs-4">How do I use the Bitcoin Profitability page ?</h2>
            <p class="answer">First column = Name of the items needed.</p>
            <p class="answer">1st space = Put the average price of the items you bought.</p>
            <p class="answer">2nd space = number of items you need for the upgrade.</p>
            <p class="answer">It will give you the total of rouble it takes per level.</p>
            <p class="answer">IMPORTANT column = You will know for 1 day how much money you will earn.</p>
            <p class="answer">BITCOIN case = worth in roubles for a BITCOIN.</p>

            <h2 class="question fs-4">On the right side of the page :</h2>
            <p class="answer">- You will know, per level, how many days it will take to get a profit</p>
            <p class="answer">- You can also put a ‘’built date’’ to know at what date you will get a profit. So knowing when the wipe will be approximately, you know if its worth it to upgrade your farm.</p>
            <p class="answer">- You have the Solor Power calculation for the LVL 3, its important to fill it for the LVL 3.</p>
          </div> 

          <div class="french">
            <h2 class="question fs-4">Quel est le but de cette page ?</h2>
            <p class="answer">Pour vous aider à savoir si la mise à niveau de votre ferme de Bitcoin en vaut la peine en fonction de la date que vous êtes rendu dans la ‘’wipe’’.</p>
            <p class="answer">Elle vous indiquera également combien de jours vous avez besoin pour commencer à tirer des bénéfices de la ferme.</p>
            <h2 class="question fs-4">Comment utiliser la page Bitcoin ?</h2>
            <p class="answer">Première colonne = Nom des objets nécessaires.</p>
            <p class="answer">1er espace = Mettez le prix moyen des articles que vous avez achetés.</p>
            <p class="answer">2ème espace = nombre d'éléments dont vous avez besoin pour la mise à niveau</p>
            <p class="answer">Cela vous donnera le total de roubles nécessaires par niveau.</p>
            <p class="answer">Colonne IMPORTANT = Vous saurez alors pendant 1 jour combien d'argent vous gagnerez.</p>
            <p class="answer">Case BITCOIN = valeur en roubles pour un BITCOIN.</p>

            <h2 class="question fs-4">Sur le côté droit de la page :</h2>
            <p class="answer">- Vous saurez, par niveau, combien de jours il faudra pour réaliser un profit</p>
            <p class="answer">- Vous pouvez également mettre une « date de construction » pour savoir à quelle date vous obtiendrez un bénéfice. Ainsi, sachant quand aura lieu approximativement la prochaine ‘’wipe’’, vous savez si cela vaut la peine de mettre à niveau votre ferme.</p>
            <p class="answer">- Vous avez le calcul du ‘’Solor Power’’ pour le LVL 3, il est important de le remplir pour le LVL 3.</p>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- instruction modal end -->



