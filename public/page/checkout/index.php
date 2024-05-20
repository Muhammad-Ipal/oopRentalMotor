<?php
session_start();

if (!isset($_SESSION["selected_product"])) {
  if (!isset($_POST['product_id']))
    header("Location: ../home/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="../.././css/output.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');
  </style>
</head>

<body class="font-urbanist">
  <button aria-label="Previous slide" id="keen-slider-previous" class="absolute p-3 text-white transition rounded-full bg-purpleColor hover:bg-purple-500 left-5 top-5">
    <a href="../home/">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
  </button>

  <?php
  $products = [
    "vespa-gts" => [
      "brand" => "Vespa",
      "type" => "Vespa GTS 150",
      "cc" => "150",
      "color" => "Gray",
      "daily_price" => "125000",
      "img" => "../../assets/img/vesmetgray.png"
    ],
    "zx6r" => [
      "brand" => "Kawasaki",
      "type" => "ZX 6R",
      "cc" => "636",
      "color" => "Green",
      "daily_price" => "200000",
      "img" => "../../assets/img/zx6.png"
    ],
    "klx250" => [
      "brand" => "Kawasaki",
      "type" => "KLX 250",
      "cc" => "250",
      "color" => "Green",
      "daily_price" => "100000",
      "img" => "../../assets/img/klx.png"
    ],
    "nmax" => [
      "brand" => "Honda",
      "type" => "New NMAX 155",
      "cc" => "155",
      "color" => "Green",
      "daily_price" => "70000",
      "img" => "../../assets/img/nmax.png"
    ]
  ];

  class RentalMotor
  {
    public $brand,
      $type,
      $cc,
      $color,
      $daily_price,
      $img,
      $tax = 10000;

    public function __construct($data)
    {
      $this->brand = $data['brand'];
      $this->type = $data['type'];
      $this->cc = $data['cc'];
      $this->color = $data['color'];
      $this->daily_price = $data['daily_price'];
      $this->img = $data['img'];
    }

    public function Count()
    {
      global $day;
      $total = $this->daily_price * $day + $this->tax;
      if (isset($_SESSION['login'])) {
        $total = ($this->daily_price * 0.95) + ($this->daily_price * ($day - 1)) + $this->tax;
      }
      return $total;
    }

    public function Struk()
    {
      return number_format($this->Count());
    }
  }

  if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    if (array_key_exists($product_id, $products)) {
      $selected_product = $products[$product_id];
      $_SESSION['selected_product'] = $selected_product;
    }
  }
  $transaction = new RentalMotor($_SESSION['selected_product']);

  if (isset($_POST['checkout'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $location = $_POST['location'];


    if ($day < 1 || empty($date) || empty($name)) {
      echo "<script>alert('Please fill all the fields!')</script>";
      include './checkout.php';
    } else {
      include './struk.php';
    }
  } else {
    include './checkout.php';
  }
  ?>
</body>

</html>