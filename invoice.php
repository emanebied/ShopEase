<?php
if (!$_POST) {
    echo 'Error 405 Method Not Allowed';
    die;
}

define('VAT', 0.14);

switch ($_POST['product']) {
    case 'Laptop':
        $price = 15000;
        $discount = 0.2;
        break;
    case 'TV':
        $price = 10000;
        $discount = 0.05;
        break;
    case 'Mobile':
        $price = 12000;
        $discount = 0.1;
        break;
    default:
        $price = 250;
        $discount = 0;
        break;
}

switch ($_POST['city']) {
    case 'Cairo':
        $delivery = 0;
        break;
    case 'Alexandria':
        $delivery = 50;
        break;
    default:
        $delivery = 200;
        break;
}


$priceAfterVat = $price + ($price * VAT);
$discountPercentage = $discount * 100;
$discountValue = $priceAfterVat * $discount;
$priceAfterDiscount = $priceAfterVat - $discountValue;
$totalPrice = $priceAfterDiscount + $delivery;
?>

<!doctype html>
<html lang="en">

<head>
    <title>ShopEase</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center text-secondary">Invoice</h1>
            </div>
            <div class="col-4 offset-4 mt-4">
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>Name: <?php echo $_POST['name'] ?></li>
                        <li>Phone: <?php echo $_POST['phone'] ?></li>
                        <li>Product: <?php echo $_POST['product'] ?></li>
                        <li>City: <?php echo $_POST['city'] ?></li>
                        <li>Price: <?php echo $price . ' ' . '<strong>EGP</strong>' ?></li>
                        <li>Delivery Tax: <?php echo $delivery . ' ' . '<strong>EGP</strong>' ?></li>
                        <li>Vat: <?php echo VAT * 100 . ' ' . '<strong>%</strong>' ?></li>
                        <li>Price After Vat: <?php echo $priceAfterVat . ' ' . '<strong>EGP</strong>' ?></li>
                        <li>Discount percentage: <?php echo $discountPercentage . ' ' . '<strong>%</strong>' ?></li>
                        <li>Discount Value: <?php echo $discountValue . ' ' . '<strong>EGP</strong>' ?></li>
                        <li>Price After Discount: <?php echo $priceAfterDiscount . ' ' . '<strong>EGP</strong>' ?></li>
                        <li>Total Price : <?php echo $totalPrice . ' ' . '<strong>EGP</strong>' ?></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>