<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/logoWhite.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MATEGOODS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- Icons --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    {{-- Styles --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-[#000] font-Poppins font-regular">

    {{-- Navbar Section --}}
    <nav class="fixed top-0 z-50 w-full flex mx-auto justify-between items-center bg-black">
        <div class="px-3">
            <img class="w-[50px] cursor-pointer" src="../images/logoWhite.png" alt="">
        </div>
        <div>
            <ul class="md:flex hidden px-7 gap-6">
                <li>
                    <a class="link link-underline link-underline-black no-underline text-white" href="">Dashboard</a>
                </li>
                <li>
                    <a class="link link-underline link-underline-black no-underline text-white"
                        href="">Products</a>
                </li>
                <li>
                    <a class="link link-underline link-underline-black no-underline text-white"
                        href="">Contact</a>
                </li>
                <li>
                    <a class="link link-underline link-underline-black no-underline text-white" href="">About</a>
                </li>
            </ul>
        </div>
        <div id="tham" class="md:hidden block mx-5 tham tham-e-squeeze tham-w-6">
            <div class="tham-box">
                <div class="tham-inner bg-[#fff] hover:bg-[#050505]">
                </div>
            </div>
        </div>
    </nav>

    {{-- Mobile Menu Section --}}
    <div id="mobileMenu" class="mobileMenu hidden z-50 bg-[#000] fixed w-[19rem] top-0 h-full left-0">
        <ul class="container mx-auto">
            <li class="my-[-7.8%] px-5 cursor-pointer">
                <img class="w-[100px]" src="../images/MATEGOODS_FONT_WHITE.png" alt="">
            </li>
            <li class="py-3 px-5 cursor-pointer text-white hover:bg-white hover:text-black ease-in duration-200">
                <a href="">Dashboard</a>
            </li>
            <li class="py-3 px-5 cursor-pointer text-white hover:bg-white hover:text-black ease-in duration-200">
                <a href="">Products</a>
            </li>
            <li class="py-3 px-5 cursor-pointer text-white hover:bg-white hover:text-black ease-in duration-200">
                <a href="">Contact</a>
            </li>
            <li class="py-3 px-5 cursor-pointer text-white hover:bg-white hover:text-black ease-in duration-200">
                <a href="">About</a>
            </li>
        </ul>
    </div>

    {{-- Carousel Section --}}
    <div class="carousel w-full ">
        <div id="slide1" class="carousel-item relative w-full">
            <img src="../images/21.jpg" class="w-full mt-[3rem] xl:mt-[3rem]" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-[9rem] md:top-1/2">
                <a href="#slide4">
                    <box-icon class="fill-white opacity-75" animation="fade-left-hover" size="lg"
                        name='chevron-left'></box-icon><a href="#slide2" class=""><box-icon
                            class="fill-white opacity-75" animation="fade-right-hover" size="lg"
                            name='chevron-right'></box-icon>
                    </a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img src="../images/banner2.svg" class="w-full mt-[3rem] xl:mt-[3rem]" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-[9rem] md:top-1/2">
                <a href="#slide1" class="">
                    <box-icon class="fill-white opacity-75" animation="fade-left-hover" size="lg"
                        name='chevron-left'></box-icon><a href="#slide3" class=""><box-icon
                            class="fill-white opacity-75" size="lg" animation="fade-right-hover"
                            name='chevron-right'></box-icon>
                    </a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img src="../images/banner1.svg" class="w-full mt-[3rem] xl:mt-[3rem]" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-[9rem] md:top-1/2">
                <a href="#slide2" class="">
                    <box-icon class="fill-white opacity-75" size="lg" animation="fade-left-hover"
                        name='chevron-left'></box-icon><a href="#slide4" class=""><box-icon
                            class="fill-white opacity-75" size="lg" animation="fade-right-hover"
                            name='chevron-right'></box-icon>
                    </a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img src="../images/22.jpg" class="w-full mt-[3rem] xl:mt-[3rem]" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-[9rem] md:top-1/2">
                <a href="#slide3" class="">
                    <box-icon class="fill-white opacity-75" size="lg" animation="fade-left-hover"
                        name='chevron-left'></box-icon><a href="#slide1" class=""><box-icon
                            class="fill-white opacity-75" size="lg" animation="fade-right-hover"
                            name='chevron-right'></box-icon>
                    </a>
            </div>
        </div>
    </div>

    {{-- Hero Section --}}
    <div class="bg-black">
        <div class="py-5 xl:py-10 mx-5 flex-col lg:flex-row">
            <div>
                <h1 class="text-2xl text-white text-left font-bold">The Latest</h1>
                <hr class="mb-5">
                <img src="../images/21.jpg" class="w-auto mb-5 rounded-lg shadow-2xl" />
                <h2 class="text-3xl font-bold text-white">Box Office News!</h2>
                <p class="py-6 text-white">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-sm bg-[#fff] text-black rounded-2xl normal-case">Shop</button>
            </div>
        </div>
    </div>

    {{-- Product Section --}}
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 xl:py-10 py-5 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Featured Products</h2>
            <hr class="bg-black">

            <div class="mt-6 grid gap-x-6 gap-y-10 grid-cols-2 xl:grid-cols-4 md:grid-cols-3">
                <!-- Card 1 -->
                <div class="group relative">
                    <!-- Image -->
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men's Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <!-- Details -->
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-black">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-black">Black</p>
                        </div>
                        <p class="text-sm font-medium text-black">$35</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative">
                    <!-- Image -->
                    <div
                        class="aspect-h-1 aspect-w-2 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men's Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <!-- Details -->
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-black">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-black">Black</p>
                        </div>
                        <p class="text-sm font-medium text-black">$35</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative">
                    <!-- Image -->
                    <div
                        class="aspect-h-1 aspect-w-2 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men's Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <!-- Details -->
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-black">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-black">Black</p>
                        </div>
                        <p class="text-sm font-medium text-black">$35</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="group relative">
                    <!-- Image -->
                    <div
                        class="aspect-h-1 aspect-w-2 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men's Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <!-- Details -->
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-black">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-black">Black</p>
                        </div>
                        <p class="text-sm font-medium text-black">$35</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Footer Section --}}
    <footer class="footer footer-center p-10 bg-[#000] text-base-content rounded">
        <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </div>
        <div>
            <p>Copyright © 2023 - All right reserved by Mategoods</p>
        </div>
    </footer>
</body>

<script>
    const tham = document.querySelector(".tham");

    tham.addEventListener('click', () => {
        const mobileMenu = document.querySelector('.mobileMenu');

        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.toggle('hidden');
            tham.classList.toggle('tham-active');
        } else {
            tham.classList.toggle('tham-active');
            mobileMenu.classList.toggle('hidden');
        }
    });
</script>

</html>
