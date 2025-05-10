<br><br><br>

<div class="container-fluid" style="background-color: var(--blue);color:white;padding:10px"><h4> Edit/Delete Blog</h4></div>

<div class="blog-content">
<div class="container-fluid" style="margin-top:20px;">
<div class="row">


<?php
include("root/db.php");
              $sql ="SELECT * FROM  blog";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0){
                  while ($row=$result -> fetch_assoc())
              {
         
              ?>  
			    <div class="col-md-6" style="display: flex;
    justify-content: center;margin-bottom:10px;">
				<div class="card_b" >
					<div class="card__header" style="width: 350px;height:auoto;">
					  <img src="gallery/<?php echo $row ["image"]; ?>" alt="card__image" class="card__image" width="100%" height="auoto">
					</div>
					<div class="card__body">
					  <h4><?php echo $row ["title"]; ?></h4>
					  <small><?php echo $row ["date"]; ?></small>
					 
					</div>
					
					
					  <div class="button-div">
                     <div class="e"> <a href="blog_update.php?sa=<?php echo $row["id"];?>"  >Edit</a></div>  
                     <div class="d">   <a href="blog_delete.php?sa=<?php echo $row["id"];?>" >Delete</a></div>
                      
							
							
					  </div>
                      </div>
				</div>
				  
                      <!-- </div> -->
                  <?php
              }
            }
	
                ?>
</div>
</div>
</div>

                
				