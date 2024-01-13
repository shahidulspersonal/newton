<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Product Categories</title>
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
</head>

<body>
<?php include 'nav.php'; ?>
    <div class="container mx-auto p-4 margin-auto">
        <h2 class="text-center mt-8">Our Chemical Products</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'company') or die('connection failed');

            // Modify the query to filter by category (e.g., "glass")
            $select = mysqli_query($conn, "SELECT name, details, image FROM product WHERE category = 'chemicals' ORDER BY name ASC") or die('query failed');

            while ($row = mysqli_fetch_assoc($select)) {
                echo '<div class="col-lg-2 col-md-3 col-sm-4 col-6 bg-blue-200 rounded border-green-700 border-spacing-2">';
                echo '<div class="card custom-card">';
                echo '<div class="container">';
                echo '<img src="uploaded_img/' . $row['image'] . '" alt="Product Image" class="card-img-top"></a>';
                echo '<div class="middle">';
                echo '<div class="text">' . $row['name'] . '</div>';
                echo '<p>' . $row['details'] . '</p>';
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
<?php include 'footer.php'; ?>
</body>

</html>
