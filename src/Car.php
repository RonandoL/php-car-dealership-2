<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $status;
        private $image;

        // Object Constructor: runs automatically when making Car object
          // an argument for each property, creates new cars with 1 line of code
        function __construct($make_model, $price, $miles, $image, $status="new")
        {
          $this->make_model = $make_model;
          $this->price = $price;
          $this->miles = $miles;
          $this->image = $image;
          $this->status = $status;
        }

        function getModel()
        {
            return $this->make_model;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getMiles()
        {
            return $this->miles;
        }

        function getStatus()
        {
            return $this->status;
        }

        function getImage()
        {
            return $this->image;
        }
    }

?>
