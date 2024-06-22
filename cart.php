<?php require "function.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/output.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <title>Tailwind CSS</title>
</head>

<body class="bg-[#f6f1e9] font-Poppins">
  <?php include "layout/navbar.php"; ?>
  <?php include "extend/login.php"; ?>
  <main class="mt-0">
    <section>
        <div class="container grid grid-cols-10 ">
            <div class="col-span-7 border-[1px] border-gray-300 rounded-lg p-6 relative">

            <div class="close absolute top-1 right-4 text-red-500">
                <a href="">X</a></div>
          
                    <div class="box-cart w-full flex gap-8 items-center justify-between">
                        <div class="wrap-box flex gap-12 items-center">
                            <div class="w-[200px] h-[150px] bg-black    ">

                            </div>
                            <div class="desc-item flex flex-col gap-2.5">
                                <h6>Hallo</h6>
                                <h6>Hallo</h6>
                            </div>
                        </div>
                        <div class="quanityDesc flex flex-col gap-2.5">
                        <h6>Hallo</h6>
                                <h6>Hallo</h6>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>
    
  </main>
  <?php include "layout/footer.php" ?>
</body>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>

</html>