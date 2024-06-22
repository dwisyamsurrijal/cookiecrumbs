<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<header id="mainHeader"
    class="fixed inset-x-0 lg:py-8 md:py-7 py-5 top-0 z-30 font-semibold text-amber-500 transition-all duration-[400ms] ease-in-out">
    <nav class="container flex items-center justify-between gap-12 text-sm md:text-sm lg:text-lg">
        <ul>
            <li class="flex items-center gap-1.5">
                CookieCrumbs
                <img src="assets/logoNav.png" class="md:w-[15%] w-[10%]" alt="">
            </li>
        </ul>
        <ul class="items-center hidden gap-12 uppercase md:flex">
            <li><a href="index.php">beranda</a></li>
            <li><a href="">produk</a></li>
            <li><a href="">about us</a></li>
            <li><a href="">why us</a></li>
        </ul>
        <ul class="flex items-center gap-6 uppercase">
            <li><button id="btn-login" >Login</button></li>
            <li>
                <a href="">
                    <i class="text-xl md:text-2xl ti ti-shopping-cart "></i>
                </a>
            </li>
            <button id="humbergerToggler" class="flex flex-col gap-1 md:hidden">
                <span
                    class="w-[23px] h-[3px] rounded-full bg-white transition-all origin-top-right ease-in-out duration-300"></span>
                <span class="w-[23px] h-[3px] rounded-full bg-white transition-all ease-in-out duration-300"></span>
                <span
                    class="w-[23px] h-[3px] rounded-full bg-white transition-all origin-bottom-right ease-in-out duration-300"></span>
            </button>

        </ul>
    </nav>
    <div id="mobileMenu" class="overflow-hidden transition-all ease-in-out duration-400 max-h-0">
        <ul class="md:hidden flex flex-col text-[#CC9B6D] gap-3.5 uppercase  text-sm mt-6 px-4">
            <li><a href="">beranda</a></li>
            <li><a href="">produk</a></li>
            <li><a href="">about us</a></li>
            <li><a href="">why us</a></li>
        </ul>
    </div>
</header>

<script src="js/nav.js"> </script>