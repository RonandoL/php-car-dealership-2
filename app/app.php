
<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<form action='/view_cars'>
          <div class='form-group'>
            <label for=''>Max price you want to pay:</label>
            <input class='form-control' type='text' name='price' value=''>
          </div>

          <button class='btn btn-info' type='submit' name='button'>Gimme some sugar baby</button>
        </form>
        ";
    });

    $app->get("/view_cars", function() {
      $car1 = new Car("Ford F150", 25000, 0, "images/f150.jpg");
      $car2 = new Car("Mercedes", 56500, 0, "images/mercedes.jpg");
      $car3 = new Car("Lexus", 45000, 0, "images/lexus.jpg");
      $car4 = new Car("Porsche 911", 115000, 0, "images/porsche.jpg");
      $car5 = new Car("Ford", 32000, 55000, "images/ford.jpg", "used");
      $car6 = new Car("Toyota Celica", 32500, 23450, "images/toyota.jpg", "used");

      $cars = array($car1, $car2, $car3, $car4, $car5, $car6);

      $cars_matching_search = array();
      foreach ($cars as $car) {
        if ($car->getPrice() < $_GET["price"]) {
            array_push($cars_matching_search, $car);
        }
      }

    $output = "";
    foreach ($cars_matching_search as $car) {
      $output = $output .
      "<head><link rel='stylesheet' href='css/styles.css'></head>
      <li> <img src=" . $car->getImage() . "></img>
      <li>" . $car->getModel() . "</li>
      <ul>
          <li>$" . $car->getPrice() . "</li>
          <li> Miles: " . $car->getMiles() . "</li>
          <li>" . $car->getStatus() . "</li>
      </ul>";
    };
     return $output;
  });
    return $app;
?>
