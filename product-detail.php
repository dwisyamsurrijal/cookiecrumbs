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
      <div class="grid grid-cols-1 gap-12 md:grid-cols-12">
        <!-- Left Column: Product Image -->
        <div class="bg-white rounded shadow-md md:col-span-5">
          <img src="assets/<?= $product->product_image ?>" alt="<?= $product->product_name ?>"
            class="object-cover w-full h-full">
        </div>
        <!-- Middle Column: Product Details -->
        <div class="flex flex-col gap-4 justify-items md:col-span-4">
          <div class="flex flex-col gap-4 wrap justify-items ">
            <h2 class="font-bold"><?= $product->product_name ?></h2>
            <p class="text-xl font-semibold text-gray-600">Rp<?= formatNumber($product->product_price) ?></p>
            <p class="text-justify text-gray-600"><?= $product->product_desc ?></p>
          </div>
          <div class="flex gap-3 tab-event">
            <button class="text-white transition-all duration-500 ease-in-out bg-amber-500 px-4 py-1.5 rounded-lg ">
              <h6>Info Produk</h6>
            </button>
            <button
              class="transition-all duration-500 ease-in-out outline outline-1 outline-amber-500 hover:text-white text-amber-500  hover:bg-amber-500 px-4 py-1.5 rounded-lg ">
              <h6>Info Pengiriman</h6>
            </button>
          </div>
          <hr class="border-[0.5px] border-gray-300">
          <div class="flex gap-8 tab-event">
            <p class="text-justify text-gray-600"><?= $product->product_desc ?></p>
          </div>
        </div>
        <!-- Right Column: Quantity Controls -->
        <div class="sticky flex flex-col gap-4 p-4 bg-white rounded-lg shadow-md top-28 h-fit md:col-span-3">
          <h3 class="font-semibold text-center">Atur jumlah pesanan</h3>
          <div class="flex items-center justify-center gap-3 text-sm">
            <button class="px-4 py-2 font-semibold text-black rounded-lg outline outline-1">-</button>
            <input type="text" value="1" class="3xl:w-[20%] w-[15%] px-4 py-2 text-center border rounded-lg outline outline-1">
            <button class="px-4 py-2 font-semibold text-black rounded-lg outline outline-1">+</button>
          </div>
          <button class="px-6 py-2 text-white rounded bg-amber-500">+Keranjang</button>
          <button
            class="px-6 py-2 text-black transition duration-300 ease-in-out rounded hover:text-white outline-amber-500 outline outline-1 hover:outline-0 hover:bg-amber-500">Beli
            Langsung
          </button>
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
                <div class="grid grid-cols-6 gap-4 wrap">
                  <a class="col-span-2" href="product-detail.php?id=<?= $product->product_id ?>">
                    <img class="object-cover w-full h-full" src="assets/<?= $product->product_image ?>">
                  </a>
                  <div class="flex flex-col self-center col-span-4 gap-2 md:gap-4 wrapper">
                    <h5 class="font-semibold"><?= $product->product_name ?></h5>
                    <h6 class="text-justify line-clamp-3 "><?= $product->product_desc ?></h6>
                    <h5>Rp<?= formatNumber($product->product_price) ?></h5>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

      </div>
      <!-- mobile -->
      <div class="z-10 flex w-full gap-3 mx-auto place-content-center 2xl:hidden toggle">
        <i id="prev" class="p-4 bg-[#CC9B6D] text-white text-xl rounded-full ti ti-chevron-left"></i>
        <i id="next" class="p-4 bg-[#CC9B6D] text-white text-xl rounded-full ti ti-chevron-right"></i>
      </div>
    </div>
    </div>
    <!--.. If we need navigation buttons -->
    <div class="absolute xl:flex md:hidden z-10 justify-between w-full px-1 bottom-[35%] 3xl:px-12 toggle">
      <!-- tablet to desktop -->
      <div class="relative flex items-center justify-between w-full gap-4 wrap">
        <i id="prev"
          class="absolute bg-[#CC9B6D] text-white left-0 p-4 text-lg 3xl:text-3xl transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-left bottom-1/2"></i>
        <i id="next"
          class="absolute bg-[#CC9B6D] text-white right-0 p-4 text-lg 3xl:text-3xl transform translate-y-1/2  rounded-full lg:text-xl ti ti-chevron-right bottom-1/2"></i>
      </div>
    </div>
  </section>

  <?php include "layout/footer.php" ?>

</body>


</html>