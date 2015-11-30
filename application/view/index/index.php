


<div class="container">
   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    <input type="hidden" id="subjectID" value=<?php echo $data['title'] ?>></input>
    
    <h4><?php echo strtoupper($data['title']) ?></h4> <h6 id="title_info" > </h6>
     <img id="ajaxload" src="/civilgis/public/img/loading.GIF" alt="Loading ... " height="15" width="200"  />
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <div id="map-canvas">
            
        </div>
        
        <div id="info-table">
          
        </div>
    
</div>




