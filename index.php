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
                <h1 class="text-secondary text-center">Products</h1>
            </div>

            <div class="col-4 offset-4 mt-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="product">Product</label>
                        <select name="product" id="product" class="form-control">
                            <option value="Laptop">Laptop</option>
                            <option value="Tv">TV</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Tshirt">T-shirt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" id="city" class="form-control">
                            <option value="cairo">Cairo</option>
                            <option value="alex">Alexandria</option>
                            <option value="beni suef">Beni Suef</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type=" submit" name="buy" class="btn btn-dark">Buy Now</button>
                        <button type="submit" name="cart" class="btn btn-dark">Add to Cart</button>
                    </div>
                </form>

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