<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container-fluid text-center">
        <img src="pizza.jpeg" width="390px">
    </div>

    <div class="row mx-auto mt-4">
        <div class="col-3">
            <img src="phd2.jpeg" width="75px" height="75px">
        </div>
        <div class="col-3">
            <img src="phd2.jpeg" width="75px" height="75px">
        </div>
        <div class="col-3">
            <img src="phd2.jpeg" width=75px" height="75px">
        </div>
        <div class="col-3">
            <img src="phd2.jpeg" width="75px" height="75px">
        </div>
    </div>
    <div class="container mt-3">
    <div class="row">
        <h5 class="col-6 text-danger ml-3">Pepperoni Pizza</h5>
        <h6 class="col-4  text-danger ml-5">
            <img src="icons8-star-48.png" width="20px" height="20px"> 4.5(50+)
        </h6>
    </div>
    </div>
    <div class="container mt-1 ml-3">
        <h2 class="text-warning">
            $10.00
        </h2>
        <h6 class="text-white mt-3">
            A traditional Neapolitan pizza topped with tomato sauce, fresh mozzarella cheese basil leaves, and drizzled with olive oil.
        </h6>
        <h3 class="text-danger">
            Size
        </h3>
    </div>
    <div class="container mt-1 ml-3">
         <button type="button" class="btn btn-light">S</button>
         <button type="button" class="btn btn-light ml-2">M</button>
         <h3 class="text-danger mt-3">
            Ingredients
         </h3>
    </div>
    <div class="container mt-2 ml-3">
        <button type="button" class="btn btn-light"><img src="icons8-mushroom-16.png" width="75px" height="75px"></button>
        <button type="button" class="btn btn-light ml-3"><img src="icons8-tomato-94.png" width="75px" height="75px" ></button>
        <button type="button" class="btn btn-light ml-3"><img src="icons8-onion-100.png" width="75px" height="75px" ></button>
    </div>

    <div class="container mt-2 ml-3">
        <button type="button" class="btn btn-secondary"><img src="icons8-shopping-cart-50.png" width="50px" height="50px"></button>
        <button type="button" class="btn btn-secondary ml-5 pl-5 pr-5 pt-3 pb-3">Order Now</button>
    </div>
</body>
