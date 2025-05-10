

<?php 

session_start();

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION["username"])) {
    header("Location:login/index.php"); // Redirect to the login page
    exit();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  
  include("root/db.php");
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../assets/css/blog.css">
        <!-- Custom CSS -->
        <link href="../assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" style="color:white">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll profile" style="--bs-scroll-height: 100px;">
             
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </a>
                <ul class="dropdown-menu profile-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login/logout_action.php">Log out</a></li>
                </ul>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
   

<div class="contents">
    <div class="side-menu">
        <ul>
        <li><a href="index.php"><i class="fa-solid fa-image"></i> Seo Clients</a></li>
            <li><a href="gallery_branding.php"><i class="fa-solid fa-image"></i> Website Clients</a></li>
            <li><a href="gallery_socialmedia.php"><i class="fa-solid fa-image"></i> Social Media Clients</a></li>
           
            <li style="background: #7aa5cb;"><a href="blog.php"><i class="fa-regular fa-file-lines"></i> Blog</a></li>
            

        </ul>
    </div>
    <div class="content">
    <div class="container-fluid tlt" ><h4> Create Blog</h4></div>
    <div class="blog-content">
				<div class="container">
				  <div class="card" style="margin: 0;padding:10px;box-shadow: inset 0px 0px 3px rgb(60 64 67 / 40%);
    background: #f3f3f3;">
          <h5>Meta Data</h5>
          <form action="blog_add_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">


                <div class="form-group">
             <label>page title</label>
              <input class="form-control" type="text" name="page_title">
                </div>

              <div class="form-group">
             <label>keywords</label>
              <input class="form-control" type="text" name="keyword">
                </div>


          <div class="form-group">
             <label>description</label>
              <input class="form-control" type="text" name="meta_description">
                </div>


        
					
					
				  </div>
			
				<!--............blog...............-->

        <div style="box-shadow: inset 0px 0px 3px rgb(60 64 67 / 40%);background: #f3f3f3; border-radius:10px; padding: 10px;padding:20px;    width: 775px;" id="page-wrapper">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                
               
                

              <div class="form-group">
              
              <label>Image </label><br>
              <input type="file" name="img1" class="validate[required]">
                                      </div>
              
          </div>

         <div class="form-group">
         <label>Title</label>
              <input class="form-control" type="text" name="title" required>
            
                </div>


               <div>
                <label>description</label>
              <input class="form-control" type="text" name="description">
               
                </div>

                <div>
                  <label >Name</label>
                  <input type="text" name="p_name" class="form-control">
                </div>
                <div>
                  <label >url</label>
                  <input type="text" name="url" class="form-control">
                </div>


                <div>
                  <label >date</label>
                  <input type="date" name="date" class="form-control">
                  
                </div>
                




                  </div>
         
            
                  

              </div>
            
      

          </div>
    

</div>
				  
				 
				 <!--...............blog..............-->
         <div class="container">
          <h3>Type your content...</h3>
         <textarea name="content" id="editor" ></textarea>
         <div style="margin:20px 0;">
         
                <button type="submit" class="btn btn-default btns" style="color: white;
    background: #0f2080;">Submit</button>
                </div>
                </div>
                  <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

</form>
				</div>

<?php include("blog_select.php"); ?>

        <div>

        </div>
				</div>




</div>


</body>
</html>
