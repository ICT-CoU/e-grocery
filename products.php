<!DOCTYPE html>
<html lang="en">

<head>
    <!-- icon font -->
    <script src="https://use.fontawesome.com/c0bbe922da.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-grocery - products</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Otomanopee+One&display=swap" rel="stylesheet">
<!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="nav">
                <div class="col col-md-3 logo">
                <a href="#"><span>e</span>-Grocery</a>
                </div>
                <div class="col col-md-9">
                    <ul class="nav-bar">
                        <li class="navbar__item"> <a href="index.php" class="navbar__item--link"> Home </a> </li>
                        <li class="navbar__item"> <a href="index.php#services" class="navbar__item--link"> Services </a> </li>
                        <li class="navbar__item"> <a href="index.php#about" class="navbar__item--link"> About</a> </li>
                        <li class="navbar__item"> <a href="#contact" class="navbar__item--link"> Contact </a> </li>
                        <li class="navbar__item" >
                            <a href="register.php" class="navbar__item--link" target="_blank" > Register </a>
                        </li>
                        <li class="navbar__item" >
                            <a href="admin" class="navbar__item--link" target="_blank"> Admin? </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- cart modal start -->
        <div class="cart" id="cart" data-toggle="modal" data-target="#cart-modal">
            <div class="cart-items" id="cart-items">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <br>
                <span>0 items</span>
            </div>
            <div class="cart-price" id="cart-price">
                <span>৳ 0</span>
            </div>
        </div>

    <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Selected Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
      <div class="modal-body">
      <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody id="modal-tbody">

        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- cart modal end -->

    <section class="products all-products" id="products">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="product-card">
                        <img src="./images/wheat.jpeg" alt="wheat" class="product-image">
                        <h5 class="product-name">Wheat</h5>
                        <h6 class=""><span class="product-price" id="product-price">$99</span>/kg</h6>
                        <p class="product-description">This is a product</p>
                        <a href="#products" class="btn btn-product" id="add-item">
                            Add to Bag <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </div>
                </div> -->

                <?php
                    // Include config file
                    require_once "./admin/config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM products";
                    if($result = mysqli_query($link, $sql)) {
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo '<div class="col-md-3">';

                                    echo '<div class="product-card">';

                                        echo '<img src="./admin/uploads/products/' . $row['image'] . '" alt="' . $row['image']. '" class="product-image">';

                                        echo '<h5 class="product-name" id="product-name">'. $row['name']. '</h5>';

                                        echo '<h6 class=""> <span class="product-price" id="product-price">&#2547; ' . $row['price']. '</span>/'. $row['unit'] .'</h6>';

                                        echo '<p class="product-description">'. $row['description'] .'</p>';

                                        echo '<a href="#products" class="btn btn-product" id="add-item">
                                        Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>';

                                    echo '</div>';

                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 offset-md-3">
                    <div>
                        <h3 class="heading-4 footer-heading">
                            Contact With Us
                        </h3>
                        <ul>
                            <li> <i class="fa fa-envelope"></i> e-shop@example.com</li>
                            <li><i class="fa fa-phone"></i> 01234567899 </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">

                    <div>
                        <h3 class="heading-4 footer-heading">
                            Social Links
                        </h3>
                        <ul>
                            <li><i class="fa fa-facebook"></i> Facebook</li>
                            <li><i class="fa fa-instagram"></i> Instragram</li>
                            <li><i class="fa fa-youtube"></i> Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="footer-line m-4"></div>

        <div class="copy-right text-center">
            All rights reserved &copy;<a href="https://github.com/saiful-70/" class="text-success" target="_blank">E-grocery's</a> team, 2021.
        </div>

        </div>

    </footer>

    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>