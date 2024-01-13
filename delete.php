<?php
$conn = mysqli_connect('localhost', 'root', '', 'company') or die('connection failed');

if (isset($_GET['delete'])) {
   $productId = $_GET['delete'];

   // Delete the product from the database
   $deleteQuery = "DELETE FROM product WHERE id = '$productId'";
   $deleteResult = mysqli_query($conn, $deleteQuery);

   if ($deleteResult) {
      $message = "Product deleted successfully!";
   } else {
      $message = "Failed to delete the product. Please try again.";
   }
}

$select = mysqli_query($conn, "SELECT id, name, details, image FROM product ORDER BY name ASC") or die('query failed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product List</title>
   <!-- Add Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <style media="screen">
      body {
         background-color: #FAF9D0;
      }

      .card-img-top {
         width: 100%;
         height: auto;
      }

      .custom-card {
         margin-bottom: 20px;
      }
   </style>
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
   <div class="container-fluid mt-3">
      <h1 class="text-center">Product List</h1>
   </div>
   <div class="container-fluid pad">
      <div class="row">
         <?php
         if (isset($message)) {
            echo '<div class="col-12">';
            echo '<div class="alert alert-success" role="alert">';
            echo $message;
            echo '</div>';
            echo '</div>';
         }

         while($row = mysqli_fetch_assoc($select)){
            echo '<div class="col-lg-2 col-md-3 col-sm-4 col-6">';
            echo '<div class="card custom-card">';
            echo '<div class="container">';
            echo '<a href="reg.php"><img src="uploaded_img/'.$row['image'].'" alt="Product Image" class="card-img-top"></a>';
            echo '<div class="middle">';
            echo '<p>'.$row['details'].'</p>';
            echo '<div class="text">'.$row['name'].'</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h3 class="btn btn-primary">Price:***</h3>';
            echo '</div>';
            echo '<div class="card-footer">';
            echo '<a href="?delete='.$row['id'].'" class="btn btn-danger">Delete</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
         }

         mysqli_close($conn);
         ?>
      </div>
   </div>

   <!-- Add Bootstrap JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
