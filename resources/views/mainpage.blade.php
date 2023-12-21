<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="{{ URL::asset('build/libs/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/animation-aos.init.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('build/libs/aos/aos.css') }}" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;600;700&family=Poppins&family=Rethink+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,700&family=Noto+Sans+JP:wght@300;400;600;700&family=Oswald:wght@300;400;500;600;700&family=Poppins&family=Rethink+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // AOS.init({
        //     easing: 'ease-out-back',
        //     duration: 1000
        // });
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }

        .hero {
            background-image: url()
        }

        .title {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>
</head>

<body class="bg-stone-200">
    @include('nav')
    <section class="flex bg-stone-200">
        <div class="" style=""> {{-- START OF FIRST DIV --}}
            <img class="brightness-50 object-cover" src="{{ asset('images/hero.jpg') }}" alt="asdas">
            <div
                class="absolute max-lg:top-1/4 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-black bg-blend-darken max-md:top-1/4 ">
                <h1
                    class="text-white font-bold text-6xl title stroke-black max-sm:text-3xl max-md:text-5xl text-center">
                    Golden Crust
                    ペストリー</h1>
                <button
                    class=" my-6
                px-16 py-2 bg-slate-200 hover:bg-stone-400 border-2 border-slate-200 text-black text-lg hover:text-white transition
                max-md:px-12 max-md:text-sm max-md:  ">
                    EXPLORE
                </button>
                <div class="flex justify-center items-center gap-8 max-md:gap-3">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="bg-stone-600 rounded-full h-12 w-12  hover:brightness-50 transition max-md:h-6 max-md:w-6"
                            x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(10.66667,10.66667)">
                                    <path
                                        d="M16,4h-8c-2.209,0 -4,1.791 -4,4v8c0,2.209 1.791,4 4,4h8c2.209,0 4,-1.791 4,-4v-8c0,-2.209 -1.791,-4 -4,-4zM12,16c-2.209,0 -4,-1.791 -4,-4c0,-2.209 1.791,-4 4,-4c2.209,0 4,1.791 4,4c0,2.209 -1.791,4 -4,4z"
                                        opacity="0.3"></path>
                                    <path
                                        d="M16,3h-8c-2.757,0 -5,2.243 -5,5v8c0,2.757 2.243,5 5,5h8c2.757,0 5,-2.243 5,-5v-8c0,-2.757 -2.243,-5 -5,-5zM19,16c0,1.654 -1.346,3 -3,3h-8c-1.654,0 -3,-1.346 -3,-3v-8c0,-1.654 1.346,-3 3,-3h8c1.654,0 3,1.346 3,3z">
                                    </path>
                                    <path
                                        d="M12,7c-2.757,0 -5,2.243 -5,5c0,2.757 2.243,5 5,5c2.757,0 5,-2.243 5,-5c0,-2.757 -2.243,-5 -5,-5zM12,15c-1.654,0 -3,-1.346 -3,-3c0,-1.654 1.346,-3 3,-3c1.654,0 3,1.346 3,3c0,1.654 -1.346,3 -3,3zM17,6c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=""> <svg
                            class="bg-stone-600 rounded-full h-12 w-12 hover:brightness-50 transition max-md:h-6 max-md:w-6"
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z">
                                    </path>
                                </g>
                            </g>
                        </svg>

                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                            viewBox="0,0,256,256"
                            class="bg-stone-600 rounded-full h-12 w-12  hover:brightness-50 transition max-md:h-6 max-md:w-6">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(4,4)">
                                    <path
                                        d="M32,6c-14.359,0 -26,11.641 -26,26c0,14.359 11.641,26 26,26c14.359,0 26,-11.641 26,-26c0,-14.359 -11.641,-26 -26,-26zM44.927,26.226c0.012,0.271 0.017,0.543 0.017,0.816c0,8.34 -6.189,17.958 -17.51,17.958c-3.476,0 -6.711,-1.045 -9.435,-2.835c0.482,0.059 0.973,0.089 1.469,0.089c2.884,0 5.538,-1.009 7.644,-2.702c-2.693,-0.051 -4.966,-1.877 -5.749,-4.384c0.375,0.072 0.761,0.112 1.157,0.112c0.562,0 1.107,-0.077 1.622,-0.221c-2.816,-0.579 -4.937,-3.13 -4.937,-6.188c0,-0.027 0,-0.052 0,-0.079c0.83,0.472 1.779,0.756 2.788,0.789c-1.651,-1.131 -2.737,-3.063 -2.737,-5.252c0,-1.158 0.303,-2.242 0.832,-3.175c3.037,3.819 7.571,6.333 12.686,6.595c-0.104,-0.46 -0.159,-0.943 -0.159,-1.438c0,-3.485 2.755,-6.311 6.154,-6.311c1.77,0 3.369,0.767 4.492,1.994c1.403,-0.284 2.721,-0.809 3.909,-1.532c-0.459,1.474 -1.434,2.711 -2.706,3.492c1.246,-0.154 2.432,-0.492 3.536,-0.995c-0.825,1.265 -1.869,2.376 -3.073,3.267z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div> {{-- END OF FIRST DIV --}}
    </section>
    <section class="flex flex-col justify-between w-full"> {{-- FIRST OF SECOND DIV --}}
        <div class="flex w-full flex-wrap  items-start">
            <img class="h-[80vh] max-md:w-full object-scale-down max-lg:h-[40vh]"
                src="{{ asset('images/hero-landscape-1.jpg') }}" alt="">
            <div class="bg-slate-50 border-slate-400 flex flex-col flex-1 grow-1 gap-4 p-8 w-full max-md:w-full">
                <div class=" min-w-84 text-stone-600 border-bottom border-black">
                    <h1 class="font-bold text-6xl mb-6 max-lg:text-3xl max-md:text-xl ">Early meal: ブラウニー
                    </h1>
                    <h1 class="text-lg font-semibold max-lg:text-md max-md:text-sm">Embark on a culinary journey with
                        our Japanese Brownies – where
                        traditional craftsmanship meets irresistible sweetness. At our bakery, we fuse the artistry of
                        Japan's culinary heritage with the comforting richness of brownies, creating a harmonious blend
                        that transports you to the heart of Tokyo's vibrant streets.
                    </h1>
                    <h1 class="text-lg font-semibold my-8 max-xl:hidden">Each Japanese Brownie is a masterpiece,
                        meticulously crafted
                        to
                        capture the essence of umami and
                        exquisite flavors. Imagine the velvety texture of matcha-infused chocolate, the subtle notes of
                        red bean, and the delicate balance between indulgence and refinement.
                    </h1>
                    <h1 class="text-lg font-semibold max-xl:hidden"> Inspired by the elegance of Japanese
                        confectionery, our brownies
                        are not just desserts; they are
                        a celebration of precision and passion. Savor the allure of Japan in every bite, where tradition
                        meets innovation, and sweetness becomes an art form. Experience the sublime taste of our
                        Japanese Brownies – a delightful fusion that transcends borders and captivates the senses.
                    </h1>
                </div>
                <hr>
                <div class="flex gap-4">
                    <button
                        class="border-2 py-2 px-12 hover:border-slate-700 transition max-md:text-sm max-md:px-6">Read
                        more</button>
                    <button
                        class="border-2 py-2 px-12 hover:border-slate-700 transition max-md:text-sm max-md:px-6">See
                        product</button>
                </div>
            </div>

        </div>

    </section> {{-- END OF SECOND DIV --}}
</body>

</html>
