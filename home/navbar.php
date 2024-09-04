<div class="nav--background d-flex justify-content-between align-items-center my-2">
  <div class="d-flex gap-4 align-items-center">
    <?php include('menu.php'); ?> 
    <small class="Pages_name " >Items Tracker</small>
  </div>
 
 <!-- Modal -->
  <!-- Button trigger modal -->
  <div class="d-flex">
    
    <?php include('donate-button.php'); ?> 
      
    <button type="button" class="btn me-2 me-md-5 d-flex justify-content-center align-items-center instructions" id="monthlyModal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    How to use the page
    </button>

  </div>
  </div>
<div class="modal onceAMonth fade "  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4" id="staticBackdropLabel">How to use the page</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <video controls width="100%" preload="auto" autoplay muted loop class="item_pop_video" >
          <source src="files/video/itemPop.mov" type="video/mp4" >
        </video>
        <div class="instruction_image_item d-flex justify-content-center align-items-center">
        <img class="instruction_image_item_class"  src="files/instrucctionItemImage.png" alt="instruction image">
        </div>
      </div>
    </div>
  </div>
</div>




