<div class="nav--background d-flex justify-content-between align-items-center my-2">

  <!--btn offcanvas -->
 <div class="d-flex gap-1 gap-md-4 align-items-center">
  <button class="btn navbar_button mt-2 mb-1 ms-2 ms-md-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <span class="menu_icon">&#9776;</span> 
  </button>
    <small class="Pages_name lang-change-js" data-en="streets" data-fr="" >streets</small>
  </div>

  <!-- btn instruction modal -->
  <div class="d-flex gap-3">
    <!-- language change button -->
<?php include('../../home/lanChange.php'); ?>
    <?php include('../../home/donate-button.php'); ?> 


    <!-- btn instruction modal -->
    <button type="button" class="btn me-2 me-md-5 d-flex justify-content-center align-items-center instructions lang-change-js " data-en="How to use the page" data-fr="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    How to use the page
    </button>
  </div>
  </div>

<!-- offcanvas start-->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title menu_version" id="offcanvasWithBothOptionsLabel">v14.0.0</h5>
      <hr>
      <button type="button" class="btn-close menu_button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="menu_bottom_border text-center "></div>
    <div class="offcanvas-body">
        <div class="nav_links d-flex flex-column gap-3 align-items-start ms-1">
          <a class="lang-change-js" data-en="Item Tracker" data-fr="" href="/">Item Tracker</a>
          <a class="lang-change-js" data-en="Hideout Tracker" data-fr="" href="../../hideout-tracker/">Hideout Tracker</a>
          <a class="lang-change-js" data-en="Other Quests" data-fr="" href="../../other-quests/">Other Quests</a>
          <a class="lang-change-js" data-en="Ground Zero" data-fr="" href="../../ground-zero/">Ground Zero</a>
          <a class="active lang-change-js" data-en="Street" data-fr="" href="../../streets/" >Street</a>
          <a class="lang-change-js" data-en="Customs" data-fr="" href="../../custom/">Customs</a>
          <a class="lang-change-js" data-en="Shoreline" data-fr="" href="../../shoreline/">Shoreline</a>
          <a class="lang-change-js" data-en="Woods" data-fr="" href="../../woods/">Woods</a>
          <a class="lang-change-js" data-en="Lighthouse" data-fr="" href="../../lighthouse/">Lighthouse</a>
          <a class="lang-change-js" data-en="Reserve" data-fr="" href="../../reserve/">Reserve</a>
          <a class="lang-change-js" data-en="Factory" data-fr="" href="../../factory/" >Factory</a>
          <a class="lang-change-js" data-en="Interchange" data-fr="" href="../../interchange/">Interchange</a>
          <a class="lang-change-js" data-en="Labs" data-fr="" href="../../labs/">Labs</a>
          <a class="lang-change-js" data-en="Bitcoin" data-fr="" href="../../bitcoin/">Bitcoin</a>
          <a class="lang-change-js" data-en="Cases Barter" data-fr="" href="../../cases-barter/">Cases Barter</a>

           
        </div>
    </div>
  </div>
  <!-- offcanvas end -->

  <!-- instruction modal start -->
  <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4 lang-change-js " data-en="How to use the page" data-fr="" id="staticBackdropLabel">How to use the page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-grid">
        <div class="english ">
            <h2 class="question fs-4">What is the purpose of this page ?</h2>
            <p class="answer">To be able to have a quick idea of what keys are important for a certain map.</p>
            <p class="answer">I put the most valuable keys there with the Wiki's help.</p>
            <h2 class="question fs-4">How do I use the Keys pages ?</h2>
            <p class="answer">You will see if a key has a ''Quest Name'' attach to it.</p>
            <p class="answer">You will also see what is behind the door so you can know quickly if its worth it to keep the key or sell it.</p>
            <h2 class="question fs-4">Is this list up-to-date ?</h2>
            <p class="answer">I will try to update it twice per wipe or when BSG release new keys.</p>
          </div> 

          <div class="french">
          <h2 class="question fs-4">Quel est le but de cette page ?</h2>
            <p class="answer">Pouvoir avoir une idée rapide des clés qui sont importantes pour les différentes cartes.</p>
            <p class="answer">J’y ai mis les clés les plus importantes avec l'aide du Wiki.</p>
            <h2 class="question fs-4">Comment puis-je utiliser les pages clés ?</h2>
            <p class="answer">Vous verrez si une clé a un ''Nom de quête'' attaché à elle.</p>
            <p class="answer">Vous verrez également ce qu’il y a derrière la porte afin que vous puissiez savoir rapidement si cela vaut la peine de garder la clé ou de la vendre.</p>
            <h2 class="question fs-4">Cette liste est-elle à jour ?</h2>
            <p class="answer">Je vais essayer de le mettre à jour deux fois par ''wipe'' ou lorsque BSG ajoutera de nouvelles clés.</p>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- instruction modal end -->



