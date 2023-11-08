{{-- Do your work, then step back. --}}

<div class="flex h-screen relative">
    <!-- Main Content (70%) -->
    <div class="w-3/4 bg-cover bg-center relative">
        <div class="absolute inset-0 items-center justify-center">

            <!-- Slider 1 -->
            <div class="static toggle-content flex items-center justify-center h-screen">

                <!-- Slideshow container -->
                <div x-data="{slide: {{ $slide }}, totalSlides: {{ $totalSlides }} }" class="slideshow-container w-4/5 flex flex-row">
                    <!-- Full-width images with number and caption text -->
                    @for($slide = 1; $slide <= $totalSlides; $slide++)
                        <div x-show="slide === {{ $slide }}" class="mySlides">
                            <div class="numbertext">{{ $slide }} / {{ $totalSlides }}</div>
                            <h1>slide: {{ $slide }}</h1><br/>
                            <h1>totalslide: {{ $totalSlides }}</h1><br/>
                            {{-- <h1>i: {{ $i }}</h1><br/> --}}
                            <img x-bind:src="'{{ asset('images/proton_car_png/X90/x90_Side_' . $slide . '_Red.png') }}'" style="width:100%">
                        </div>
                    @endfor
                </div>

                <!-- Next and previous buttons -->
                {{-- <a wire:click="nextSlide" class="next absolute top-1/2 right-10 transform -translate-y-1/2 cursor-pointer">&#10095;</a>
                <a wire:click="previousSlide" class="prev absolute top-1/2 left-10 transform -translate-y-1/2 cursor-pointer">&#10094;</a> --}}
                <div class="flex flex-col h-screen relative mt-20">
                    <button wire:click="nextSlide">Increment</button>
                    <button wire:click="previousSlide">Decrement</button>
                </div>

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
        </div>
    </div>
</div>
  






{{-- <div class="flex h-screen relative">
    <h1>Counter: {{ $count }}</h1>
    <button wire:click="increment">Increment</button>
    <button wire:click="decrement">Decrement</button>
</div> --}}

{{-- <script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('nextSlide', () => {
            nextSlide();
        });

        @this.on('previousSlide', () => {
            previousSlide();
        });
    });
</script>

<script>
    document.addEventListener('livewire:initialized', () => {
       @this.on('post-created', (event) => {
           //
       });
    });
</script> --}}


{{-- <script>
    function selectOption(option) {
        document.getElementById('selected-option').innerText = option;
        toggleDropdown();
    }

    function toggleDropdown(event) {
        const details = event.target.closest('details');
        if (details) {
            details.open = !details.open;
        }
    }
</script> --}}
