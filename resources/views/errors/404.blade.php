<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vana Force</title>
    <!-- bootstrap 5 css cdn   -->
    <link rel="stylesheet" href="{{ env('MAIN_APP_URL') }}assets/bootstrap/bootstrap-min.css">

    <!-- bootstrap 5 css cdn   -->
    <!-- Slick Slider Cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <!-- Slick Slider Cdn  -->
    <!-- FontAwsome Cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwsome Cdn  -->
    <!-- Google Font cdn  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Google Font cdn  -->
    <!-- Custom css  -->
    <link rel="stylesheet" href="{{ env('MAIN_APP_URL') }}assets/css/style.css">
    <!-- Custom css  -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />


    @yield('style')

    <style>
        /* Custom styles for the Google Translate widget */
        #google_translate_element {
            display: inline-block;
            margin-top: 20px;
            /* Add your custom styles here */
        }

        .goog-te-combo {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            /* Add your custom styles here */
        }

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        body {
            top: 0 !important;
        }

        #google_translate_element a {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Header Start  -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="main-logo">
                        <a href="{{ route('home') }}"><img src="{{ env('MAIN_APP_URL') }}assets/images/Logo.png"
                                alt="Logo"></a>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" style="height: 52px;" placeholder="Search"
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div
                        style="display: flex; flex-direction: row; align-items: center; justify-content: space-between">
                        {{-- <div class="btnss"> --}}
                        @if (\Auth::check())
                            <a href="{{ route('profile.edit') }}" class="golbal-btn"><span><i
                                        class="fa-regular fa-circle-user"></i></span></a>
                            @if (\Auth::user()->role == 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="golbal-btn"><span>
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </span></a>
                            @endif
                        @else
                            <a href="{{ route('register') }}" class="golbal-btn">Subscribe</a>

                            <a href="{{ route('login') }}" class="golbal-btn2">Login</a>
                        @endif
                        {{-- </div> --}}
                        <div class="d-flex align-items-baseline">
                            <div id="google_translate_element"></div>
                            <div>
                                <select class="form-control" name="curreny" id="change_curreny">
                                    @if (\Session::has('currency'))
                                        <option disabled selected value="{{ \Session::get('currency') }}">
                                            {{ \Session::get('currency') }}</option>
                                    @else
                                        <option selected value="USD">USD</option>
                                    @endif
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="JPY">JPY</option>
                                    <option value="GBP">GBP</option>
                                    <option value="AUD">AUD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CNY">CNY</option>
                                    <option value="HKD">HKD</option>
                                    <option value="NZD">NZD</option>
                                    <option value="SEK">SEK</option>
                                    <option value="KRW">KRW</option>
                                    <option value="SGD">SGD</option>
                                    <option value="NOK">NOK</option>
                                    <option value="MXN">MXN</option>
                                    <option value="INR">INR</option>
                                    <option value="RUB">RUB</option>
                                    <option value="ZAR">ZAR</option>
                                    <option value="TRY">TRY</option>
                                    <option value="BRL">BRL</option>
                                    <option value="TWD">TWD</option>
                                    <option value="DKK">DKK</option>
                                    <option value="PLN">PLN</option>
                                    <option value="THB">THB</option>
                                    <option value="IDR">IDR</option>
                                    <option value="HUF">HUF</option>
                                    <option value="CZK">CZK</option>
                                    <option value="ILS">ILS</option>
                                    <option value="CLP">CLP</option>
                                    <option value="PHP">PHP</option>
                                    <option value="AED">AED</option>
                                    <option value="COP">COP</option>
                                    <option value="SAR">SAR</option>
                                    <option value="MYR">MYR</option>
                                    <option value="RON">RON</option>
                                    <option value="PEN">PEN</option>
                                    <option value="VND">VND</option>
                                    <option value="PKR">PKR</option>
                                    <option value="EGP">EGP</option>
                                    <option value="BDT">BDT</option>
                                    <option value="QAR">QAR</option>
                                    <option value="LKR">LKR</option>
                                    <option value="OMR">OMR</option>
                                    <option value="KWD">KWD</option>
                                    <option value="HRK">HRK</option>
                                    <option value="BHD">BHD</option>
                                    <option value="JOD">JOD</option>
                                    <option value="BGN">BGN</option>
                                    <option value="ISK">ISK</option>
                                    <option value="MKD">MKD</option>
                                    <option value="ARS">ARS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End  -->

<div class="container py-5">
    <div class="w-100 my-5">
        <h1 class="text-center">Page Not Found <span style="color: rgb(6, 68, 184); text-decoration: underline">404</span></h1>
        <a href="{{ route('home') }}" class="btn btn-primary my-2 d-flex" style="margin: auto; width: max-content;">Go To Homepage</a>
    </div>
</div>
    <!-- Footer Start  -->
    <footer class="footer">
        <div class="main-foot">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/images/Logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-list">
                            <h6 class="footer-heading">About Us</h6>
                            <p>Hi, I’m Vana, and I’m here to make your fantasies come true. I’m passionate about
                                creating content that empowers you to explore your desires. </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-list">
                            <h6 class="footer-heading">Navigate</h6>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">messaging</a></li>
                                <li><a href="photos-videos.html">pics/vIDEOS</a></li>
                                <li><a href="store.html">store</a></li>
                                <li><a href="post.html">posts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-list">
                            <h6 class="footer-heading">Links</h6>
                            <ul>
                                <li><a href="#">Fansly.com</a></li>
                                <li><a href="#">Xsitebunny.com</a></li>
                                <li><a href="#">clip4sale.com</a></li>
                                <li><a href="#">slushy.com</a></li>
                                <li><a href="#">iwantclips.com</a></li>
                                <li><a href="#">chaturbale.com</a></li>
                                <li><a href="#">cansada.com</a></li>
                                <li><a href="#">xvideos.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-list">
                            <h6 class="footer-heading">Socail Media</h6>
                            <ul>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot1.png"
                                            alt=""> play boy </a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot3.png"
                                            alt=""> loyal fans</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot4.png"
                                            alt=""> only fans</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot5.png"
                                            alt=""> Snapchat</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot6.png"
                                            alt=""> Instagram</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot7.png"
                                            alt=""> Twitter</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot8.png"
                                            alt=""> Tiktok</a></li>
                                <li><a href="#"><img src="{{ env('MAIN_APP_URL') }}assets/images/foot9.png"
                                            alt=""> manyvids</a></li>
                                <!-- <li><a href="#"><img src="assets/images/foot9.png" alt=""> xvideos.com</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-list">
                            <h6 class="footer-heading">Contact</h6>
                            <ul>
                                <li><a href="mailto:vanaforcexxx@gmail.com"><i class="fa-solid fa-envelope"></i>
                                        vanaforcexxx@gmail.com </a></li>
                                <li><a href="tel:000-111-222"><i class="fa-solid fa-phone"></i> 000-111-222</a></li>
                                <li><a href="#"><i class="fa-solid fa-location-dot"></i> Lorem Ispum</a></li>
                                <!-- <li><a href="#"><img src="assets/images/foot9.png" alt=""> xvideos.com</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-last">
            <p>Copyright © 2024 <span> Vanaforce </span> - All Rights Reserved</p>
        </div>
    </footer>
    <!-- Footer End  -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        document.addEventListener('DOMContentLoaded', function() {
            function hideGoogleTranslateToolbar() {
                // Hide the first div with class 'skiptranslate'
                var firstDivAfterBody = document.getElementsByClassName('skiptranslate')[0];
                // console.log(firstDivAfterBody);
                if (firstDivAfterBody) {
                    firstDivAfterBody.style.display = 'none';
                }

                // Ensure the dropdown within #google_translate_element is visible
                var googleTranslateDropdown = document.querySelector('#google_translate_element .skiptranslate');
                if (googleTranslateDropdown) {
                    googleTranslateDropdown.style.display = 'block';
                }
            }

            // Run the function immediately after the page loads
            setTimeout(hideGoogleTranslateToolbar, 2000);

            // Run the function every 5 seconds
            setInterval(hideGoogleTranslateToolbar, 5000);
        });
    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Jquery Cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Jquery Cdn  -->
    <!-- bootstrap 5 js cdn   -->
    <script src="{{ env('MAIN_APP_URL') }}assets/bootstrap/bootstrap-min.js"></script>
    <!-- bootstrap 5 js cdn   -->
    <!-- Slick Slider Cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <!-- Slick Slider Cdn  -->
    <!-- Custom JS  -->
    <script src="assets/js/custom.js"></script>
    <!-- Custom JS  -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {


            @if (session('success'))
                toastr.success('{{ session('success') }}');
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}');
            @endif

            @if (session('warning'))
                toastr.warning('{{ session('warning') }}');
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.warning('{{ $error }}');
                @endforeach
            @endif

            toastr.options = {
                "positionClass": "toast-bottom-right",
            };

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        // Bind Fancybox and use the stored postId when the Fancybox is ready
        Fancybox.bind('[data-fancybox="gallery"]', {});
    </script>

    <script>
        function replaceAllImages() {
            console.log("Replaced");
            const images = document.querySelectorAll('img');
            images.forEach(function(img) {
                img.src = 'assets/images/placeholder.webp';
            });

            // Replace background images
            const elementsWithBackgrounds = Array.from(document.querySelectorAll('*')).filter(el => {
                return window.getComputedStyle(el).backgroundImage !== 'none';
            });

            elementsWithBackgrounds.forEach(function(el) {
                const currentBackground = window.getComputedStyle(el).backgroundImage;
                const newBackground = 'url("assets/images/placeholder.webp")';

                // Check if the background image is not already the placeholder
                if (!currentBackground.includes(newBackground)) {
                    el.style.backgroundImage = newBackground;
                }
            });
        }

        // Call the function whenever you need to replace the images
        // document.addEventListener("DOMContentLoaded", function() {
        //     replaceAllImages();
        // });

        // setInterval(() => {
        //     replaceAllImages();
        // }, 5000);
    </script>
    @yield('scripts')
</body>

</html>
