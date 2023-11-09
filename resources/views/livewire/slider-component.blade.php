{{-- Do your work, then step back. --}}

<div class="flex h-screen relative">
    <!-- Main Content (70%) -->
    <div class="w-3/4 bg-cover bg-center relative">
        <div class="items-center justify-center">
            <!-- Slider -->
            <div class="static toggle-content flex items-center justify-center h-screen">
                <!-- slider-component.blade.php -->              
                <div class="slideshow-container w-full flex flex-row">
                    @foreach($sliders as $number => $slider)
                        @if($activeSlider === $number)
                            <div class=" {{ $activeSlider === $number ? 'fade-active' : 'fade' }}">
                                <!-- Slides -->
                                @for ($slide = 1; $slide <= $totalSlides; $slide++)
                                    <div wire:key="slider-{{ $number }}-slide-{{ $slide }}" 
                                    class="slide {{ $slider['currentSlide'] === $slide ? 'slide-active' : '' }}">
                                        <img src="{{ asset("images/proton_car_png/X90/slider{$number}/{$slide}.png") }}" 
                                        alt="Slider {{ $number }} Image {{ $slide }}" width="100%">
                                    </div>
                                @endfor
                                
                                <!-- Navigation buttons -->
                                <a wire:click="changeSlide({{ $number }}, 'prev')" 
                                class="next z-10">&#10095;</a>
                                <a wire:click="changeSlide({{ $number }}, 'next')" 
                                class="prev z-10">&#10094;</a>
                            </div>
                        @endif
                    @endforeach
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
                @foreach($buttons as $index => $info)
                    <button wire:click="switchSlider({{ $index + 1 }})"
                            class="toggle-button bg-{{ $info['bgColor'] }} hover:bg-{{ $info['bgColor'] }} text-{{ $info['textColor'] }} px-2 py-1 border border-slate-200 rounded">
                        {{ $index + 1 }}
                    </button>
                @endforeach
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
                <option onclick="selectOption('Peninsular')">Peninsular</option>
                <option onclick="selectOption('East Malaysia')">East Malaysia</option>
                <option onclick="selectOption('Labuan')">Labuan</option>
                <option onclick="selectOption('Langkawi')">Langkawi</option>
                </select>
            </div>
        </div>
    </div>
</div>
