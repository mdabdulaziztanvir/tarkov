<div class="nav--background d-flex justify-content-between align-items-center my-2">

  <!--btn offcanvas -->
 <div class="d-flex gap-1 gap-md-4 align-items-center">
  <button class="btn navbar_button mt-2 mb-1 ms-2 ms-md-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <span class="menu_icon">&#9776;</span> 
  </button>
    <small class="Pages_name bg-dark px-2" >cases barter</small>
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
          <a href="/">Item Tracker</a>
          <a href="../hideout-tracker/" >Hideout Tracker</a>
        <a href="../other-quests/">Other Quests</a>
        <a href="../ground-zero/">Ground Zero</a>

          <a href="../streets/">Street</a>
          <a href="../custom/">Customs</a>
          <a href="../shoreline/">Shoreline</a>
          <a href="../woods/">Woods</a>
          <a href="../lighthouse/">Lighthouse</a>
          <a href="../reserve/">Reserve</a>
          <a href="../factory/">Factory</a>
          <a href="../interchange/">Interchange</a>
          <a href="../labs/">Labs</a>
          <a href="../bitcoin/">Bitcoin</a>
          <a href="../cases-barter/" class="active" >Cases Barter</a>
          <a href="https://www.eft-ammo.com/" target="_blank" >Ammo Chart</a>
          
        </div>
    </div>
  </div>
  <!-- offcanvas end -->

  <!-- instruction modal start -->
  <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="staticBackdropLabel">How to use the page</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-grid">
          <div class="english">
            <h2 class="question fs-4">What is the purpose of this page ?</h2>
            <p class="answer">Help you to know what barter is the cheapest for the different cases in the game.</p>
            
            <h2 class="question fs-4">How do I use the Cases Barter page ?</h2>
            <p class="answer">Insert the price you pay for the items.</p>
            <p class="answer">It will calculate the total it cost you in roubles.</p>
            <p class="answer">It will highlight in green the cheapest option.</p>

          </div> 

          <div class="french">
            <h2 class="question fs-4">Quel est le but de cette page ?</h2>
            <p class="answer">Vous aidez à savoir quel échange est le moins cher pour les différentes boites du jeu.</p>
            
            <h2 class="question fs-4">Comment utiliser la page d'échange de dossiers ?</h2>
            <p class="answer">Insérez le prix que vous payez pour les objets.</p>
            <p class="answer">Il calculera le total que cela vous coûtera en roubles.</p>
            <p class="answer">L’option la moins chère sera mise en évidence en vert.</p>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- instruction modal end -->



