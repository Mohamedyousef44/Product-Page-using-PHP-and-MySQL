<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/style.css">
        <link rel="icon" href="./public/favicon.ico">
        <title>glasses store</title>
    </head>

    <body>

            <div class="container-fluid cus-height d-flex justify-content-center align-items-center">

                <div class="row">

                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <img src="./public/images/<?php echo $product['photo']?>" class="cus-img">
                    </div>

                    <div class="col-12 offset-0 offset-md-1 col-md-5  d-flex flex-column justify-content-evenly ">

                        <div>

                            <h2 class="  mb-3"><?php echo $product['product_name'] ?></h2>
                            <h3 class="mb-3 border-top  border-2 border-dark w-50">ID : <?php echo $product['id'] ?></h3>
                            <h3 class="mb-3  border-2 border-dark w-50">Code : <?php echo $product['product_code'] ?></h3>
                            <h4 class="mb-3 text-danger-emphasis"><?php echo $product['list_price'] ?> $</h4>

                        </div>
                        
                        <h5 class="lh-lg cus-text">The classic Wayfarer The Ray-Ban Original Wayfarer is the most famous model in the history of sunglasses. Since 1952, when the classic Wayfarer model was launched in the market, it has enjoyed great popularity among stars, musicians, artists and lovers of impeccable style. The sunglasses have always been a real cult object.</h5>
                        <div class="w-100 d-flex justify-content-between align-items-center fs-5 fw-bold">
                            <label >Quantity</label>
                            <input type="number" min="1" max="<?php echo $product['units_in_stock'] ?>" value="1" class="col-1 cus-input " >
                        </div>
                        <button class="btn btn-dark w-100 mt-2 fs-5 fw-bold">Add to Cart</button>

                    </div>

                </div>

            </div>    

    </body>

</html>