<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a diverse array of premium laboratory equipment at Newton Scientific Company Ltd, your reliable wholesaler in Bangladesh. Delve into our extensive collection of state-of-the-art scientific instruments and tools, meticulously sourced from trusted suppliers. Enhance your research endeavors with expert guidance and elevate your experiments with our exclusive selection of high-quality lab essentials.">


    <meta name="keywords" content="Newton Scientific Company Ltd.,Evergreen Scientific Company Ltd.,  scientific instruments, research tools, lab essentials, reliable sourcing,Chemicals,balance,scale,Scale, biker,beker,sodium hidrogen,potatium niterate, expert guidance.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


<style media="screen">
@media screen and (max-width: 640px) {
         .hidden-mobile {
             display: none;
         }

         .lg\:flex {
             display: flex !important;
         }
     }
</style>


    <title>Newton Scientific Co.</title>
    <link rel="icon" href="images/fab.png">
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style media="screen">

       .card-img-top {
          width: 100%;
          height: 200px;
       }

       .custom-card {
          margin-bottom: 20px;
       }
       .text{
         text-align: center;
         font-weight: bold;
       }

       .notice{
         font-weight: bold;
       }

       .marquee-container {
              overflow: hidden;
              white-space: nowrap;
          }

          .marquee-content {
              display: inline-block;
              animation: marqueeAnimation 15s linear infinite;
          }

          .marquee-content:hover {
              animation-play-state: paused;
          }

          @keyframes marqueeAnimation {
              from {
                  transform: translateX(40%);
              }

              to {
                  transform: translateX(-40%);
              }
          }



    </style>
</head>

<body class="font-sans">

<?php include 'nav.php'; ?>
    </div>
    <div class="container mx-auto p-4 margin auto " >
      <h2 class="text-center mt-8 ">Our Products</h2>
      <br>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4  ">
          <?php
                       $conn = mysqli_connect('localhost', 'root', '', 'company') or die('connection failed');

                       $select = mysqli_query($conn, "SELECT name, details, image FROM product ORDER BY name ASC") or die('query failed');

                       while($row = mysqli_fetch_assoc($select)){
                          echo '<div class="col-lg-2 col-md-3 col-sm-4 col-6 bg-blue-200 rounded border-green-700 border-spacing-2">';
                          echo '<div class="card custom-card">';
                          echo '<div class="container">';
                          echo '<img src="uploaded_img/'.$row['image'].'" alt="Product Image" class="card-img-top"></a>';
                          echo '<div class="middle">';
                          echo '<div class="text">'.$row['name'].'</div>';
                          echo '<p>'.$row['details'].'</p>';
                          echo '</div>';
                          echo '</div>';
                          echo '<div class="card-body">';
                          echo '<h3 class="btn btn-primary">For price contact us...</h3>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                       }

                       mysqli_close($conn);
                    ?>
        </div>
    </div>
    <script src="//code.tidio.co/lwti145od7qa7ywsah1mwzznor3txctr.js" async></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
