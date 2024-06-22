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
    <section class="container p-4 pt-6 mx-auto md:p-3">
        <?php

        $detailProduct = query("select * from product where product_id = $productId ");

        foreach ($detailProduct as $product) { ?>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                <!-- Left Column: Product Image -->
                <div class="bg-white rounded shadow-md md:col-span-5">
                    <img src="assets/<?= $product->product_image ?>" alt="<?= $product->product_name ?>"
                        class="object-cover w-full h-full">
                </div>

                <!-- Middle Column: Product Details -->
                <div class="flex flex-col gap-4 p-6 bg-white rounded shadow-md md:col-span-4">
                    <h2 class="font-bold"><?= $product->product_name ?></h2>
                    <p class="text-xl font-semibold text-gray-600">Rp<?= formatNumber($product->product_price) ?></p>
                    <p class="text-gray-600 text-justify"><?= $product->product_desc ?></p>
                </div>

                <!-- Right Column: Quantity Controls -->
                <div class="flex flex-col items-center gap-4 p-3 bg-white rounded shadow-md md:col-span-3">
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
    </section>

    <section id="produk-lainnya" class="relative ">
      <div class="container flex flex-col gap-6 lg:gap-10 md:gap-8">
        <h2 class="font-semibold text-center">Produk Lainnya</h2>
        <div class="container swiper ">
          <div class=" product-content">
            <div class=" swiper-wrapper">
              <?php
              $result = mysqli_query($conn, "SELECT * FROM product WHERE product_id != $productId  ");
              $products = [];
              while ($row = mysqli_fetch_object($result)) {
                $products[] = $row;
              }
              foreach ($products as $product):
                ?>
                <div class="p-4 bg-white ourproduct swiper-slide ">
                  <div class="grid grid-cols-2 wrap gap-4">
                    <a href="product-detail.php?id=<?= $product->product_id ?>">
                    <img class="w-full h-full" src="assets/<?= $product->product_image ?>">
                    </a>
                    
                    <div class="flex flex-col self-center gap-6 wrapper">
                      <h5 class="font-semibold"><?= $product->product_name ?></h5>
                      <h6 class="line-clamp-3 text-justify"><?= $product->product_desc ?></h6>
                      <h5>Rp<?= formatNumber($product->product_price) ?></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>

        </div>
        <!-- mobile -->
        <div class="z-10 flex w-full gap-3 mx-auto place-content-center lg:hidden toggle">
          <i id="prev" class="p-4 bg-[#CC9B6D] text-white text-xl rounded-full ti ti-chevron-left"></i>
          <i id="next" class="p-4 bg-[#CC9B6D] text-white text-xl rounded-full ti ti-chevron-right"></i>
        </div>
      </div>
      </div>
      <!--.. If we need navigation buttons -->
      <div class="absolute lg:flex hidden z-10 justify-between w-full px-1 bottom-[35%] toggle">
        <!-- tablet to desktop -->
        <div class="relative flex items-center justify-between w-full gap-4 wrap">
          <i id="prev"
            class="absolute bg-[#CC9B6D] text-white left-0 p-4 text-lg transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-left bottom-1/2"></i>
          <i id="next"
            class="absolute bg-[#CC9B6D] text-white right-0 p-4 text-lg transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-right bottom-1/2"></i>
        </div>
      </div>
    </section>

    <?php include "layout/footer.php" ?>
    
</body>


</html>