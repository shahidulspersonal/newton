<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Post</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/addproduct.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#"></a>
      <ul class="navbar-nav">
          <h1 class="navbar-brand" href="#">NSC</h1>
      </ul>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item text-white">
                  <a class="nav-link active" aria-current="page" href="index.php">Home </a>
              </li>
          </ul>
      </div>
  </nav>

<div class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
     <div class="a">
       <h3>Post a Product</h3>
     </div>

      <?php
      if (isset($message)) {
         echo '<div class="message">' . $message . '</div>';
      }
      ?>
      <input type="text" name="name" placeholder="Enter Product Name" class="box" required>
      <textarea name="details" placeholder="Enter Product Details" class="box" required></textarea>
      <select name="category" class="box" required>
        <option value="">Select Category</option>
        <option value="glass">Glass</option>
        <option value="scale">Scale</option>
        <option value="scientific">Scientific</option>
        <option value="chemicals">Chemicals</option>
      </select>
      <input type="file" name="image"><br>

      <input type="submit" name="submit" value="Post This Product" class="btn">
   </form>
</div>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'company') or die('Connection failed: ' . mysqli_connect_error());

if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $details = mysqli_real_escape_string($conn, $_POST['details']);
   $category = mysqli_real_escape_string($conn, $_POST['category']);

   // Uploading image
   $image = $_FILES['image']['name'];
   $tmpname = $_FILES['image']['tmp_name'];
   $uploc = 'uploaded_img/'.$image;

   $insert = "INSERT INTO `product` (name, details, category, image) VALUES ('$name', '$details', '$category', '$image')";

   if (mysqli_query($conn, $insert)) {
      move_uploaded_file($tmpname, $uploc);
      $message = "Product posted successfully!";
   } else {
      $message = "Failed to post the product. Please try again.";
   }
}

mysqli_close($conn);
?>
</body>
</html>
