<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
    <link rel="icon" href="./public/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>glasses store</title>
</head>
<body>

    <div class="container d-flex flex-column justify-content-evenly align-items-center">

        <div class="d-flex flex-row justify-content-evenly align-items-center mb-3 w-100">

            <h2 class="col-4">Products</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" class="position-relative col-6 d-flex flex-row justify-content-evenly align-items-center">

                <input type="search" class="w-100 cus-input rounded-pill " name="search" placeholder="Product Name" >
                <button class="position-absolute rounded-pill end-0 top-0 btn btn-dark "><i class="bi bi-search text-light fs-6"></i></button>

            </form>
            

        </div>

        <div class="row w-100  d-flex flex-row justify-content-evenly align-content-between align-items-center gap-2">

            <!-- we will loop on it using php to whow the products -->
            <?php
            if($msg == 'Not found'){ ?>

                 <h3 class="col-6 my-4 text-center">Not Found</h3>
                 <a href="<?php echo $_SERVER['PHP_SELF']?>" class="col-6 text-center fs-4 text-decoration-none text-danger">Back Home <i class="bi bi-house-door-fill"></i></a>

          <?php }else{

                for($x = 0 ; $x<count($items) ; $x++){?>

                    <div class="col-12 col-md-5 h30 border border-1 d-flex flex-column justify-content-around align-items-center  my-3 rounded">

                        <img src="./public/images/<?php echo $items[$x]['photo']?>" class="cus-img">

                        <div class=" d-flex flex-row justify-content-between align-items-center col-12 text-light">
                            <h4>ID <span class="bubble rounded"> <?php echo $items[$x]['id'] ?> </span></h4> 
                            <h4>Name <span class="bubble rounded"> <?php echo $items[$x]['product_name']?> </span></h4>
                        </div>

                        <div class=" d-flex flex-row justify-content-between align-items-center col-12 text-light">

                        <h4>Price <span class="bubble rounded">  <?php echo $items[$x]['list_price']?> $</span></h4> 
                        <h4>In Stock <span class="bubble rounded">  <?php echo $items[$x]['units_in_stock']?></span></h4>

                        </div>
                         
                        <a href = "<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $items[$x]['id'] ?>" class="btn btn-warning mb-2 fs-5 fw-bold w-100" >view</a>
    
                    </div>
    
                    <?php  }
                
                }?>
        
        </div>

        <!-- this is for pagination buttons -->
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

            <div class="btn-group me-2" role="group" aria-label="First group">

                <?php 

                if($msg == 'Not found'){
                    $pagesNums = 0 ;
                }
                
                for($x = 0 ; $x<$pagesNums ; $x++){?>

                <a href = "<?php echo $_SERVER['PHP_SELF']?>?next=<?php echo $x * __RECORDS_PER_PAGE__ ?>" class="btn btn-dark border border-2 "><?php echo $x+1 ?></a>

                <?php } ?>

            </div>

        </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

