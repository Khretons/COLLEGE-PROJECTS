<?php
include("config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 524288000; // 500MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 500MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: uploadvideo.php');
   exit;
} 
?>

<!doctype html> 
<html> 
  <head>
     <title>Upload Video</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
      table {
         border-collapse: collapse;
         width: 75%;
         color: #588c7e;
         font-family: monospace;
         font-size: 18px;
         text-align: left;
         margin-bottom: 20px;
      }
      th {
         background-color: #588c7e;
         color: white;
         text-align: center;
      }
      tr:nth-child(even) {background-color: #f2f2f2}
</style>
  </head>
  <body>

   <!-- Upload response -->

   <div class="container">
		<div class="box">
      <?php
      $conn = mysqli_connect("localhost", "root", "", "petshop_cms");
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id, name, location FROM videos";
      $result = $conn->query($sql);

			if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Location</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
               <td><?=$rows['id']?></td>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['location']; ?></td>
			      <td style="text-align:center">
                     <a href="updatevid.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	   <a href="crud_video/delete.php?id=<?=$rows['id']?>"
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>

      <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='but_upload'>
      </form>
      
      <?php 
      if(isset($_SESSION['message'])){
         echo $_SESSION['message'];
         unset($_SESSION['message']);
      }
      ?>
		</div>
	</div>

    

  </body>
</html>