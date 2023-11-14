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
        <div class="w3-top bg-black text-white z-20">
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
    
    
</body>
</html>
