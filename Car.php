<?php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;
        public $status;
        public $image;

        // Object Constructor: runs automatically when making Car object
          // an argument for each property, creates new cars with 1 line of code
        function __construct($make_model, $price, $miles, $status="new", $image)
        {
          $this->make_model = $make_model;
          $this->price = $price;
          $this->miles = $miles;
          $this->status = $status;
          $image->image = $image;
        }
    }

    $car1 = new Car("Ford F150", 25000, 0, NULL, "images/f150.jpg")

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dealership</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Dealership</h1>
        <p>Lorem ipsum dolor sit amet,</p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-sm-3">

  <!-- Form -->
          <form action="Car.php">
            <div class="form-group">
              <label for="">Max price you want to pay:</label>
              <input class="form-control" type="text" name="price" value="">
            </div>

            <button class="btn btn-info" type="submit" name="button">Gimme some sugar baby</button>
          </form>

        </div>  <!-- /col-sm-12 -->
      </div>  <!-- /Row -->

    </div>  <!-- /Container -->

  </body>
</html>
