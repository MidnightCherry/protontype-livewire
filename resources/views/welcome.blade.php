<!DOCTYPE html>
<html>
<head>
    <title>ProtonType - 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    

    <style>
        html {
        height: 100%;
        }

        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .flex-grow {
            flex-grow: 1;
        }
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
        background-image: url('/w3images/parallax1.jpg');
        min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
        background-image: url("/w3images/parallax2.jpg");
        min-height: 400px;
        }

        /* Third image (Contact) */
        .bgimg-3 {
        background-image: url("/w3images/parallax3.jpg");
        min-height: 400px;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
        }
    </style>
    
</head>
<body class="flex flex-col min-h-screen">
    <div class="flex-grow">
        <!-- Navbar (sit on top) -->
        <div class="w3-top bg-black text-white">
            <div class="w3-bar" id="myNavbar">
                <a href="#home" class="w3-bar-item w3-button">Logo</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Login</a>
                <a href="#home" class="w3-bar-item w3-button w3-hide-small w3-right">Home</a>
            </div>
        </div>
            <!-- Main Content (70%) -->
            <livewire:slider-component />
            @livewireScripts
    </div>
    <!-- Middle Footer -->
    <div id="#this-is-price" class="bg-gray-400 absolute inset-x-1/4 bottom-0 h-16 w-1/3 justify-center item-center content-center rounded -mb-1">
        <h1 class="text-white text-center my-5">This is middle footer</h1>
        
    </div>

    {{-- <script>
        jQuery(document).ready(function($) {
        // Hide all elements except the first one
        $('.toggle-content:not(:first)').hide();
        var fadeDuration = 500;

        $('.toggle-button').on('click', function() {
            //get index for next btn
            var index = $('.toggle-button').index(this);

            // Fade out all visible elements with the specified duration
            $('.toggle-content:visible').fadeOut(fadeDuration);
            // Fade in the corresponding element with the specified duration
            $('.toggle-content').eq(index).fadeIn(fadeDuration);
        });
    }); 
    </script>--}}
    <script>
        $(document).ready(function(){
            var initialPrices = [
                86300, 88300, 82600, 81000
            ];
            var model2Prices = [
                93300, 95300, 83600, 87900
            ];
            var model3Prices = [
                101800, 103800, 97800, 96100
            ];
            var model4Prices = [113300, 115300, 109100, 107400];
            //var targetHeading = $('.elementor-widget-container').find('h1');
            var targetHeading = $('#this-is-price').find('h1');

            $(".model-button").click(function(){
                var selectedIndex = $(".dropdown-location").prop('selectedIndex');
                var indexIsValid = selectedIndex >= 0 && selectedIndex < initialPrices.length;
                var price = indexIsValid ? initialPrices[selectedIndex] : initialPrices[0]; // Default to initial price

                if ($(this).attr("id") === "model2" && indexIsValid) {
                    price = model2Prices[selectedIndex];
                    } else if ($(this).attr("id") === "model3" && indexIsValid) {
                        price = model3Prices[selectedIndex];
                    } else if ($(this).attr("id") === "model4" && indexIsValid) {
                        price = model4Prices[selectedIndex];
                }

                targetHeading.text("RM " + price.toLocaleString());
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            var initialLinks = [
                "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-standard.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-standard.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-standard.pdf",
                "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-standard.pdf"
            ];
            var model2Links = [
                "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-executive.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-executive.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-executive.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-executive.pdf"
            ];
            var model3Links = [
                "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-premium.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-premium.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-premium.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-premium.pdf"
            ];
            var model4Links = [
                "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-flagship.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-flagship.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-flagship.pdf", 
                "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-flagship.pdf"
            ];
            var targetParagraph = $('.elementor-widget-container').find('h4');

            $(".model-button").click(function(){
                var selectedIndex = $(".dropdown-location").prop('selectedIndex');
                var indexIsValid = selectedIndex >= 0 && selectedIndex < initialLinks.length;
                var link = indexIsValid ? initialLinks[selectedIndex] : initialLinks[0]; // Default to initial link

                if ($(this).attr("id") === "model2" && indexIsValid) {
                    link = model2Links[selectedIndex];
                } else if ($(this).attr("id") === "model3" && indexIsValid) {
                    link = model3Links[selectedIndex];
                } else if ($(this).attr("id") === "model4" && indexIsValid) {
                    link = model4Links[selectedIndex];
                }

                targetParagraph.find('a').attr('href', link).attr('target', '_blank');
            });
        });
    </script>
    
</body>
</html>
