    <!-- Slider 1 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- slider-component.blade.php -->
        <div class="slideshow-container w-4/5 flex flex-row">
            @for ($slider = 1; $slider <= $totalSliders; $slider++) <div class="slider-container" style="display: {{ $currentSlider === $slider ? 'block' : 'none' }}">
                @for ($slide = 1; $slide <= $totalSlides; $slide++) <div class="slide" style="display: {{ $currentSlide === $slide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'. $slide .'_White.png') }}" alt="Slider {{ $slider }} Slide {{ $slide }}">

        </div>
        @endfor
    </div>
    @endfor
    {{-- <div class="side-content">
                @for ($i = 1; $i <= $totalSlides; $i++)
                    <button wire:click="goToSlide({{ $i }})">{{ $i }}</button>
    @endfor
    </div> --}}
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>

    </div>

    <!-- Slider 2 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_White.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- Slider 3 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_Blue.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- Slider 4 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_Grey.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- Slider 2 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <!-- Full-width images with number and caption text -->
            <template x-for="i in totalSlides" :key="i">
                <div x-show="slide === i" class="mySlides">
                    {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                    <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_White.png') }}`" style="width:100%">
                    <!--<div class="text">Caption Text</div>-->
                </div>
            </template>
        </div>

        <!-- Next and previous buttons -->
        <a wire:click="$emit('nextSlide')" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
        <a wire:click="$emit('previousSlide')" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>

    </div>

    <!-- Slider 3 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <!-- Full-width images with number and caption text -->
            <template x-for="i in totalSlides" :key="i">
                <div x-show="slide === i" class="mySlides transition-opacity">
                    {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                    <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Blue.png') }}`" style="width:100%">
                    <!--<div class="text">Caption Text</div>-->
                </div>
            </template>
        </div>

        <!-- Next and previous buttons -->
        <a wire:click="$emit('nextSlide')" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
        <a wire:click="$emit('previousSlide')" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>

    </div>

    <!-- Slider 4 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <!-- Full-width images with number and caption text -->
            <template x-for="i in totalSlides" :key="i">
                <div x-show="slide === i" class="mySlides" x-transition.opacity>
                    {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                    <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Grey.png') }}`" style="width:100%">
                    <!--<div class="text">Caption Text</div>-->
                </div>
            </template>
        </div>

        <!-- Next and previous buttons -->
        <a wire:click="$emit('nextSlide')" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
        <a wire:click="$emit('previousSlide')" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>

    </div>



    <div x-data="{slide: {{ $slide }}, totalSlides: {{ $totalSlides }}}" class="flex h-screen relative">
        <!-- Main Content (70%) -->
        <div class="w-3/4 bg-cover bg-center relative">
            <div class="absolute inset-0 items-center justify-center">

                <!-- Slider 1 -->
                <div class="static toggle-content flex items-center justify-center h-screen">

                    <!-- Slideshow container -->
                    <div class="slideshow-container w-4/5 flex flex-row">
                        <!-- Full-width images with number and caption text -->
                        <template x-for="i in totalSlides" :key="i">
                            <div x-show="slide === i" class="mySlides">
                                {{-- <div class="numbertext" x-text="`${i} / ${totalSlides}`"></div> --}}
                                <img x-bind:src="`{{ asset('images/proton_car_png/X90/x90_Side_${i}_Red.png') }}`" style="width:100%">
                                <!--<div class="text">Caption Text</div>-->
                            </div>
                        </template>
                    </div>

                    <!-- Next and previous buttons -->
                    <a wire:click="nextSlide" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                    <a wire:click="previousSlide" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>

                </div>
            </div>
        </div>

        <!-- Side Content (30%) -->
        <div class="relative w-1/4 bg-gray-50">
            <div class="static mt-20 mx-10 ">
                <div class="flex justify-center">
                    <!-- Big Heading with Dual Color -->
                    <h1 class="text-4xl font-extrabold text-center text-black mb-4">Proton</h1>
                    <h1 class="text-5xl font-black text-center text-red-700 italic mb-4">X90</h1>
                </div>


                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Colours</h2>

                <!-- Horizontal Small Buttons (3 of them) -->
                <div class="flex justify-center space-x-2 mx-4 my-4">
                    <button x-on:click="slide = 1" class="toggle-button bg-white hover:bg-white text-white px-2 py-1 border border-slate-200 rounded">1</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-gray-400 hover:bg-gray-400 text-gray-400 px-2 py-1 border border-slate-200 rounded">2</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-gray-700 hover:bg-gray-700 text-gray-700 px-2 py-1 border border-slate-200 rounded">3</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-blue-600 hover:bg-blue-600 text-blue-600 px-2 py-1 border border-slate-200 rounded">4</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-yellow-600 hover:bg-yellow-600 text-yellow-600 px-2 py-1 border border-slate-200 rounded">5</button>
                    <button x-on:click="slide = 1" class="toggle-button bg-red-600 hover:bg-red-600 text-red-600 px-2 py-1 border border-slate-200 rounded">6</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Variants</h2>

                <!-- Vertical Medium Buttons (3 of them) -->
                <div class="flex flex-col space-y-2 mb-4">
                    <button id="model2" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button>
                    <button id="model3" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button>
                    <button id="model4" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Wheels</h2>

                <!-- Vertical Medium Buttons (3 of them) -->
                <div class="flex flex-col space-y-2 mb-4">
                    <button class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">18"</button>
                    <button class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">17"</button>
                </div>

                <!-- Smaller Heading Below Big Heading -->
                <h2 class="text-lg text-black font-semibold mb-4">Location</h2>

                <!-- Dropdown Menu -->
                <div class="relative">
                    <label for="locations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Location</label>
                    <select id="locations" class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded block w-full focus:outline-none focus:ring-4 focus:ring-red-300">
                        {{-- <select id="locations" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
                        <option onclick="selectOption('Peninsular')">Peninsular</option>
                        <option onclick="selectOption('East Malaysia')">East Malaysia</option>
                        <option onclick="selectOption('Labuan')">Labuan</option>
                        <option onclick="selectOption('Langkawi')">Langkawi</option>
                    </select>
                </div>
                {{-- <button class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded block w-full">Dropdown</button>
                            <!-- Dropdown Content (hidden by default) -->
                            <div class="absolute mt-2 w-32 bg-white border border-gray-300 py-2 z-10 hidden">
                                <!-- Dropdown Items go here -->
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 1</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 2</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Item 3</a>
                            </div> --}}
            </div>
        </div>
    </div>
    </div>


    <!-- Assuming you're using Alpine.js with Laravel Blade -->

    <!-- Slider Component -->
    <div x-data="slider()" x-init="initialize()">
        <!-- Main content where the slides will be displayed -->
        <div class="main-content">
            <template x-for="slide in totalSlides" :key="slide">
                <img x-show="currentSlide === slide" :src="`/path/to/images/image${slide}.jpg`" style="display: none;" />
            </template>
        </div>

        <!-- Side content with navigation buttons -->
        <div class="side-content">
            <button x-on:click="moveSlide('previous')">Previous</button>
            <button x-on:click="moveSlide('next')">Next</button>

            <!-- Small buttons for direct navigation -->
            <template x-for="slide in totalSlides" :key="slide">
                <button x-on:click="jumpToSlide(slide)" x-text="slide"></button>
            </template>
        </div>
    </div>

    <script>
        function slider() {
            return {
                currentSlide: 1,
                totalSlides: 4,
                initialize() {
                    this.showCurrentSlide();
                },
                moveSlide(direction) {
                    if (direction === 'previous') {
                        this.currentSlide = this.currentSlide === 1 ? this.totalSlides : this.currentSlide - 1;
                    } else if (direction === 'next') {
                        this.currentSlide = this.currentSlide === this.totalSlides ? 1 : this.currentSlide + 1;
                    }
                    this.showCurrentSlide();
                },
                jumpToSlide(slide) {
                    this.currentSlide = 1; // Reset to first slide (based on your pseudocode)
                    this.showCurrentSlide();
                },
                showCurrentSlide() {
                    this.$refs.slides.forEach((slide, index) => {
                        slide.style.display = index + 1 === this.currentSlide ? 'block' : 'none';
                    });
                }
            }
        }
    </script>

    <style>
        /* Your CSS styles here */
        .main-content img {
            /* Style for your slides */
        }

        .side-content button {
            /* Style for your buttons */
        }
    </style>


    <!-- slider-component.blade.php -->

    <div>
        <div class="slider-container">
            @foreach ($currentSlide as $index => $slide)
            <div class="slide" style="display: {{ $index === $currentSlide ? 'block' : 'none' }}">
                <img src="{{ asset('images/slide' . $index . '.jpg') }}">
            </div>
            @endforeach
        </div>

        <div class="navigation">
            <button wire:click="goToPrevious">Previous</button>
            <button wire:click="goToNext">Next</button>
        </div>

        <div class="side-content">
            @for ($i = 1; $i <= $totalSlides; $i++) <button wire:click="goToSlide({{ $i }})">{{ $i }}</button>
                @endfor
        </div>
    </div>

    <style>
        .slider-container {
            /* Styles for your slider container */
        }

        .slide {
            /* Styles for each slide */
        }

        .navigation button {
            /* Styles for navigation buttons */
        }

        .side-content button {
            /* Styles for side content buttons */
        }
    </style>


    <!-- Slider 2 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_White.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- Slider 3 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_Blue.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- Slider 4 -->
    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- Slideshow container -->
        <div class="slideshow-container w-4/5 flex flex-row">
            <div class="slider-container">
                @for ($i = 1; $i <= $totalSlides; $i++) <div class="slide" style="display: {{ $i === $currentSlide ? 'block' : 'none' }}">
                    <img src="{{ asset('images/proton_car_png/X90/x90_Side_'.$i.'_Grey.png') }}" alt="Slide {{ $i }}" style="width:100%">
            </div>
            @endfor
        </div>
    </div>

    <!-- Next and previous buttons -->
    <a wire:click="goToPrevious" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
    <a wire:click="goToNext" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a>
    </div>

    <!-- slider-component.blade.php -->

    // SliderComponent.php

    namespace App\Http\Livewire;

    use Livewire\Component;

    class SliderComponent extends Component
    {
    public $currentSlide = 1;
    public $totalSlides = 4;
    public $currentSlider = 1;
    public $totalSliders = 3;

    public function goToPreviousSlide()
    {
    if ($this->currentSlide === 1) {
    $this->currentSlide = $this->totalSlides;
    } else {
    $this->currentSlide--;
    }
    }

    public function goToNextSlide()
    {
    if ($this->currentSlide === $this->totalSlides) {
    $this->currentSlide = 1;
    } else {
    $this->currentSlide++;
    }
    }

    public function goToSlide($slide)
    {
    $this->currentSlide = $slide;
    }

    public function showSlider($slider)
    {
    $this->currentSlider = $slider;
    $this->currentSlide = 1; // Resetting to the first slide for the selected slider
    }

    public function render()
    {
    return view('livewire.slider-component');
    }
    }


    <div>
        @for ($slider = 1; $slider <= $totalSliders; $slider++) <div class="slider-container" style="display: {{ $currentSlider === $slider ? 'block' : 'none' }}">
            @for ($slide = 1; $slide <= $totalSlides; $slide++) <div class="slide" style="display: {{ $currentSlide === $slide ? 'block' : 'none' }}">
                <img src="{{ asset('images/slider' . $slider . '/slide' . $slide . '.jpg') }}" alt="Slider {{ $slider }} Slide {{ $slide }}">
    </div>
    @endfor
    </div>
    @endfor

    <div class="navigation">
        <button wire:click="goToPreviousSlide">Previous</button>
        <button wire:click="goToNextSlide">Next</button>
    </div>

    <div class="side-content">
        @for ($slider = 1; $slider <= $totalSliders; $slider++) <button wire:click="showSlider({{ $slider }})">Slider {{ $slider }}</button>
            @endfor
    </div>
    </div>


    <div class="static toggle-content flex items-center justify-center h-screen">

        <!-- slider-component.blade.php -->
        <div class="slideshow-container w-4/5 h-full relative">
            @foreach($sliders as $number => $slider)
            @if($activeSlider === $number)
            <div class="{{ $activeSlider === $number ? 'fade-active' : 'fade' }} absolute inset-0">
                <!-- Slides -->
                @for ($slide = 1; $slide <= $totalSlides; $slide++) <div wire:key="slider-{{ $number }}-slide-{{ $slide }}" class="slide {{ $slider['currentSlide'] === $slide ? 'slide-active' : '' }}">
                    <img src="{{ asset("images/proton_car_png/X90/slider{$number}/{$slide}.png") }}" alt="Slider {{ $number }} Image {{ $slide }}">
            </div>
            @endfor

            <!-- Navigation buttons -->
            <a wire:click="changeSlide({{ $number }}, 'prev')" class="next z-10">&#10095;</a>
            <a wire:click="changeSlide({{ $number }}, 'next')" class="prev z-10">&#10094;</a>
        </div>
        @endif
        @endforeach
    </div>

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
        $(document).ready(function() {
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

            $(".model-button").click(function() {
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
        $(document).ready(function() {
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

            $(".model-button").click(function() {
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

<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Component;

class ModelPricing extends Component
{
    public $selectedModel = 'model1';
    public $selectedLocation = 0;

    public $prices = [
        'model1' => [86300, 88300, 82600, 81000],
        'model2' => [93300, 95300, 83600, 87900],
        'model3' => [101800, 103800, 97800, 96100],
        'model4' => [113300, 115300, 109100, 107400],
    ];

    public $links = [
        'model1' => [
            "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-standard.pdf", 
            // Other links...
        ],
        // Other models...
    ];

    public function setModel($model)
    {
        $this->selectedModel = $model;
    }

    public function render()
    {
        return view('livewire.model-pricing', [
            'currentPrice' => $this->prices[$this->selectedModel][$this->selectedLocation],
            'currentLink' => $this->links[$this->selectedModel][$this->selectedLocation],
        ]);
    }
}

<div class="relative flex flex-col space-y-2 mb-4">
    <label for="locations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Location</label>
    <select wire:change="$emit('setLocation', $event.target.value)" class="dropdown-location" class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded block w-full focus:outline-none focus:ring-4 focus:ring-red-300">
    {{-- <select id="locations" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
    <option onclick="selectOption('Peninsular')">Peninsular</option>
    <option onclick="selectOption('East Malaysia')">East Malaysia</option>
    <option onclick="selectOption('Labuan')">Labuan</option>
    <option onclick="selectOption('Langkawi')">Langkawi</option>
    </select>
</div>


<?php

namespace App\Livewire;

use Livewire\Component;

class ModelPricing extends Component
{
    public $selectedModel = 'model1';
    public $selectedLocation = 0;

    public $prices = [
        'model1' => [86300, 88300, 82600, 81000],
        'model2' => [93300, 95300, 83600, 87900],
        'model3' => [101800, 103800, 97800, 96100],
        'model4' => [113300, 115300, 109100, 107400]
    ];
    public $links = [
        'model1' => [
            "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-standard.pdf",
            "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-standard.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-standard.pdf",
            "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-standard.pdf",
        ],
        'model2' => [
            "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-executive.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-executive.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-executive.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-executive.pdf"
        ],
        'model3' => [
            "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-premium.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-premium.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-premium.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-premium.pdf"
        ],
        'model4' => [
            "https://www.proton.com/assets/ps2022/x90/pdf/pm-x90-flagship.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/em-x90-flagship.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/labuan-x90-flagship.pdf", 
            "https://www.proton.com/assets/ps2022/x90/pdf/langkawi-x90-flagship.pdf"
        ]
    ];

    // public $currentPrice;
    // public $currentLink;

    // public function mount()
    // {
    //     $this->updateContent();
    // }

    // public function updatedSelectedModel()
    // {
    //     $this->updateContent();
    // }

    // private function updateContent()
    // {
    //     $this->currentPrice = $this->prices[$this->selectedModel][0]; // Assuming default selection for simplicity
    //     $this->currentLink = $this->links[$this->selectedModel][0];
    // }

    // public function render()
    // {
    //     return view('livewire.model-pricing');
    // }

    public function setModel($model)
    {
        $this->selectedModel = $model;
    }

    public function render()
    {
        return view('livewire.model-pricing', [
            'currentPrice' => $this->prices[$this->selectedModel][$this->selectedLocation],
            'currentLink' => $this->links[$this->selectedModel][$this->selectedLocation],
        ]);
    }
}


<style>
/* Custom CSS for the sliding animation effect */
.animated-button {
  transition: background-color 0.3s, transform 0.3s;
}

.selected {
  background-color: #ffffff; /* or any color you want for selected state */
  transform: translateY(-2px); /* slight raise effect */
}
</style>

<div class="flex mt-5 justify-center items-center bg-gray-300 w-full h-12 border rounded overflow-hidden">
    <button onclick="toggleButton(this)" class="mx-4 my-1 focus:bg-gray-50 w-4/5 h-4/5 border border-gray-300 rounded animated-button selected">Cash</button>
    <button onclick="toggleButton(this)" class="mx-4 my-1 focus:bg-gray-50 w-4/5 h-4/5 border border-gray-300 rounded animated-button">Hire Purchase</button>
</div>

<script>
// JavaScript to toggle selected state between buttons
function toggleButton(selectedButton) {
  // Remove 'selected' class from all buttons
  document.querySelectorAll('.animated-button').forEach(button => {
    button.classList.remove('selected');
  });
  // Add 'selected' class to the clicked button
  selectedButton.classList.add('selected');
}
</script>

// Initial state
    if ($this->showMainOptions === true && $this->showPaymentOptions === false && $this->showBillingOptions === false) {
        echo "Displaying Main Options";
    } 
    // 2nd state
    elseif ($this->showMainOptions === false && $this->showPaymentOptions === true && $this->showBillingOptions === false) {
        echo "Displaying Payment Options";
    } 
    // Last state
    elseif ($this->showMainOptions === false && $this->showPaymentOptions === true && $this->showBillingOptions === true) {
        echo "Displaying Billing Options";
    } 