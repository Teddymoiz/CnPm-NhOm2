<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Vật Liệu Xây Dựng</title>
    <style>
    /* CSS styles */
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Basic styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    header {
        background: #333;
        color: #fff;
        padding-top: 10px;
        min-height: 70px;
        border-bottom: #1b1b1b 3px solid;
    }

    header a {
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
    }

    header ul {
        margin: 0;
        padding: 0;
    }

    header li {
        list-style: none;
        display: inline;
        margin-left: 15px;
        font-size: 16px;
    }

    header nav ul li {
        float: left;
        display: inline;
    }

    header nav a:hover {
        background: #434343;
        color: #fff;
    }

    .products {
        padding: 20px 0;
    }

    .product-item {
        float: left;
        width: 25%;
        padding: 0 20px;
        margin-bottom: 40px;
        text-align: center;
    }

    .product-item img {
        width: 100%;
        height: auto;
    }

    .product-item h4 {
        margin-top: 10px;
    }

    footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>Shop Vật Liệu Xây Dựng</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="cart.php">Giỏ hàng</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="products">
        <div class="container">
            <h2>Sản phẩm</h2>
            <div class="product-list">
                <?php
                // Danh sách các sản phẩm
                $products = array(
                    array(
                        'name' => 'Cát xây dựng',
                        'price' => 100000,
                        'image' => 'sand.jpg'
                    ),
                    array(
                        'name' => 'Gạch xây',
                        'price' => 5000,
                        'image' => 'brick.jpg'
                    ),
                    array(
                        'name' => 'Cement',
                        'price' => 200000,
                        'image' => 'cement.jpg'
                    )
                );

                // Hiển thị từng sản phẩm
                foreach ($products as $product) {
                    echo '<div class="product-item">';
                    echo '<img src="images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h4>' . $product['name'] . '</h4>';
                    echo '<p>Giá: ' . number_format($product['price'], 0, ',', '.') . ' VNĐ</p>';
                    echo '<a href="#">Thêm vào giỏ hàng</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Shop Vật Liệu Xây Dựng. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>