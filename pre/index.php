<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://use.fontawesome.com/c0bbe922da.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="nav">
                <div class="col col-md-3">
                    <span>E-Grocery</span>
                </div>
                <div class="col col-md-9">
                    <ul class="navbar">
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> Home </a> </li>
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> Products </a> </li>
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> About </a> </li>
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> Service </a> </li>
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> Contact </a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <header class="header">
            <h1 class="heading-primary">
                BUY FRUITS, VEGETABLSE, GROCERY-ITEM
            </h1>
    </header>

    <section class="products">
        <div class="container">
            <div class="row">

                <?php
                    // Include config file
                    require_once "./admin/config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM products";
                    if($result = mysqli_query($link, $sql)) {
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo '<div class="col-sm-3 mr-5 mt5">';
                                    echo '<div class="card">';
                                        echo '<img src="./admin/uploads/' . $row['image'] . '" alt="' . $row['image']. '" class="products-image">';
                                        echo '<div class="card-body">';
                                            echo '<h5 class="card-title">'. $row['name']. '</h5>';
                                            echo '<p class="card-text">'. $row['description'] .'</p>';
                                            echo '<p class="card-text text-bold">'. $row['price'].'/= per '. $row['unit'].'</p>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>