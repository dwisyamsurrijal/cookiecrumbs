<?php

require "function.php";

$productId = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <title>Product Detail</title>
</head>

<body class="bg-[#f6f1e9] font-Poppins">
    <?php include "layout/navbar.php"; ?>
    <div id="allproduct" class="container p-4 pt-6 mx-auto md:p-3">
        <?php

        $detailProduct = query("select * from product where product_id = $productId ");

        foreach ($detailProduct as $product) { ?>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <!-- Left Column: Product Image -->
                <div class="bg-white rounded shadow-md md:col-span-2">
                    <img src="assets/<?= $product->product_image ?>" alt="<?= $product->product_name ?>"
                        class="object-cover w-full h-full">
                </div>

                <!-- Middle Column: Product Details -->
                <div class="flex flex-col gap-4 p-6 bg-white rounded shadow-md">
                    <h2 class="font-bold"><?= $product->product_name ?></h2>
                    <p class="text-xl font-semibold text-gray-600">Rp<?= formatNumber($product->product_price) ?></p>
                    <p class="text-gray-600"><?= $product->product_desc ?></p>
                </div>

                <!-- Right Column: Quantity Controls -->
                <div class="flex flex-col items-center gap-4 p-3 bg-white rounded shadow-md">
                    <h3 class="font-semibold">Atur jumlah pesanan</h3>
                    <div class="flex items-center gap-2">
                        <button class="px-4 py-2 font-semibold text-black">-</button>
                        <input type="text" value="1" class="w-12 text-center border rounded">
                        <button class="px-4 py-2 font-semibold text-black">+</button>
                    </div>
                    <button class="px-6 py-2 text-white rounded bg-amber-500">+Keranjang</button>
                    <button class="px-6 py-2 text-white rounded bg-amber-500">Beli Langsung</button>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>