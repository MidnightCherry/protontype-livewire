{{-- Do your work, then step back. --}}

<div class="flex h-screen relative">
    <!-- Main Content (70%) -->
    <div class="main-content w-8/12 bg-cover bg-center relative">
        <div class="items-center justify-center">
            <!-- Slider -->
            <div class="static toggle-content flex items-center justify-center h-screen">
                <!-- slider-component.blade.php -->
                <div class="slideshow-container w-full flex flex-row">
                    @foreach($sliders as $number => $slider)
                    @if($activeSlider === $number)
                    <div class=" {{ $activeSlider === $number ? 'fade-active' : 'fade' }} absolute inset-0">
                        <!-- Slides -->
                        @for ($slide = 1; $slide <= $totalSlides; $slide++) <div wire:transitition.duration.500ms wire:key="slider-{{ $number }}-slide-{{ $slide }}" class="slide {{ $slider['currentSlide'] === $slide ? 'slide-active' : '' }}">
                            <img src="{{ asset("images/proton_car_png/X90/slider{$number}/{$slide}.png") }}" alt="Slider {{ $number }} Image {{ $slide }}" width="100%">
                    </div>
                    @endfor

                    <!-- Navigation buttons -->
                    <a wire:click="changeSlide({{ $number }}, 'prev')" class="next z-10 fas fa-angle-right fa-3x"></a>
                    <a wire:click="changeSlide({{ $number }}, 'next')" class="prev z-10 fas fa-angle-left fa-3x"></a>
                </div>
                @endif
                @endforeach
            </div>

        </div>

    </div>
    <!-- Middle Footer -->
    <div class="">
        <div class="flex flex-row relative">
            <div data-id="modal-trigger-container" class="absolute z-10 inset-x-0 bottom-0 bg-gray-300 w-2/3 text-black border rounded mx-auto modal-trigger-container">
                <div class="flex justify-between px-3 py-6">
                    <div class="flex flex-col w-4/5 mx-2 text-center ">
                        <div class="">
                            <span class="finance-type finance-type--cash">RM {{ number_format($currentPrice) }}</span>
                            <span class="pricing-label pricing-label--null">Vehicle Price</span>
                        </div>
                    </div>
                    <span class="vertical-line"></span>
                    <div class="flex  flex-col w-4/5 mx-2 text-center">
                        <div class="">
                            <span class="finance-type--cash">RM {{ number_format($currentPrice + ($currentPrice*0.13)) }}</span>
                            <span class="pricing-label">After Est. Tax</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Side Content (30%) -->
<div class="side-content relative w-4/12 bg-gray-50">
    <!-- Main side menu -->
    <div class="static mt-20 mx-10 main-options" style="display: {{ $showMainOptions ? 'block' : 'none' }}">
        <div class="flex justify-center mt-34">
            <!-- Big Heading with Dual Color -->
            <h1 class="text-5xl font-extrabold text-center text-black mb-2">Proton</h1>
            <h1 class="text-7xl font-black text-center text-red-700 italic mb-2">X90</h1>
        </div>

        <div class="my-10 w-full">

            <!-- Smaller Heading Below Big Heading -->
            <h2 class="text-lg text-black font-semibold mb-4">Colours</h2>

            <!-- Horizontal Small Buttons (3 of them) -->
            <div class="flex justify-center space-x-2 mx-4 my-6">
                @foreach($buttons as $index => $info)
                <button wire:click="switchSlider({{ $index + 1 }})" class="toggle-button bg-{{ $info['bgColor'] }} hover:bg-{{ $info['bgColor'] }} text-{{ $info['textColor'] }} px-2 py-1 border-2 hover:border-2 hover:border-red-700 rounded focus:ring-2 focus:ring-red-300 rounded-full w-full h-full">
                    {{ $index + 1 }}
                </button>
                @endforeach
            </div>
            <div class="text-center space-x-5 -mt-4 mb-10">
                <span class="font-bold">{{ key($carcolours[$activeSlider - 1]) }} Paint Coat </span> <span>{{ current($carcolours[$activeSlider - 1]) }}</span>
            </div>
            {{-- <div class="flex justify-center space-x-2 mx-4 my-4">
                <button wire:click="resetSlide" class="toggle-button bg-white hover:bg-white text-white px-2 py-1 border border-slate-200 rounded">1</button>
                <button wire:click="resetSlide" class="toggle-button bg-gray-400 hover:bg-gray-400 text-gray-400 px-2 py-1 border border-slate-200 rounded">2</button>
                <button wire:click="resetSlide" class="toggle-button bg-gray-700 hover:bg-gray-700 text-gray-700 px-2 py-1 border border-slate-200 rounded">3</button>
                <button wire:click="resetSlide" class="toggle-button bg-blue-600 hover:bg-blue-600 text-blue-600 px-2 py-1 border border-slate-200 rounded">4</button>
                <button wire:click="resetSlide" class="toggle-button bg-yellow-600 hover:bg-yellow-600 text-yellow-600 px-2 py-1 border border-slate-200 rounded">5</button>
                <button wire:click="resetSlide" class="toggle-button bg-red-600 hover:bg-red-600 text-red-600 px-2 py-1 border border-slate-200 rounded">6</button>
                </div> --}}
        </div>

        <div class="my-10">
            <!-- Smaller Heading Below Big Heading -->
            <h2 class="text-lg text-black font-semibold mb-4">Variants</h2>

            <!-- Vertical Medium Buttons (3 of them) -->
            <div class="flex flex-col justify-between space-y-2 mb-4 mx-6 font-semibold text-sm">
                <div wire:click="setModel('model1')" class="flex flex-row justify-between bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 h-16 cursor-pointer">
                    <span class="my-auto h-auto w-24">1.5 TGDi BSG STANDARD</span>
                    <span></span>
                    <span class="my-auto">RM 123,456</span>
                </div>
                <div wire:click="setModel('model2')" class="flex flex-row justify-between bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 h-16 cursor-pointer">
                    <span class="my-auto h-auto w-24">1.5 TGDi BSG EXECUTIVE</span>
                    <span></span>
                    <span class="my-auto">RM 123,456</span>
                </div>
                <div wire:click="setModel('model3')" class="flex flex-row justify-between bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 h-16 cursor-pointer">
                    <span class="my-auto h-auto w-24">1.5 TGDi BSG PREMIUM</span>
                    <span></span>
                    <span class="my-auto">RM 123,456</span>
                </div>
                <div wire:click="setModel('model4')" class="flex flex-row justify-between bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 h-16 cursor-pointer">
                    <span class="my-auto h-auto w-24">1.5 TGDi BSG FLAGSHIP</span>
                    <span></span>
                    <span class="my-auto">RM 123,456</span>
                </div>

                {{-- <button id="model2" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button>
                    <button id="model3" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button>
                    <button id="model4" class=".model-button bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300">1.8 TGDi</button> --}}
            </div>
        </div>

        <div class="my-10">
            <!-- Smaller Heading Below Big Heading -->
            <h2 class="text-lg text-black font-semibold mb-4">Wheels</h2>

            <!-- Vertical Medium Buttons (3 of them) -->
            <div class="flex flex-row space-x-3 justify-center mx-5 my-4">
                <button class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded-full focus:outline-none focus:ring-4 focus:ring-red-300 w-20 h-20">18"</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded-full focus:outline-none focus:ring-4 focus:ring-red-300 w-20 h-20">19"</button>
            </div>

            <div class="text-center space-x-5">
                <span class="font-bold">18" Alloy Wheels </span> <span>Included</span>
            </div>
        </div>

        <div class="my-10">
            <!-- Smaller Heading Below Big Heading -->
            <h2 class="text-lg text-black font-semibold mb-4">Location</h2>

            <!-- Dropdown Menu -->
            <div class="relative flex flex-col space-y-2 mb-8 mx-6">
                <label for="locations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Location</label>
                <select id="locations" wire:model="setLocation" class="bg-gray-100 hover:bg-gray-200 text-black px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:border-2 rounded block w-full focus:outline-none focus:ring-4 focus:ring-red-300" name="locations">
                    <option value="model1">Peninsular</option>
                    <option value="model2">East Malaysia</option>
                    <option value="model3">Labuan</option>
                    <option value="model4">Langkawi</option>
                </select>
            </div>
        </div>

        <div class="my-20">
            <!-- Smaller Heading Below Big Heading -->
            <h2 class="text-xl px-3 text-black text-center font-bold mb-4">Order your Proton X90 Now</h2>

            <div class="flex flex-col space-y-2 mx-6">
                <span class="px-3 text-center font-medium">Est. First Deliveris: Early 2024</span>
                <button wire:click="togglePaymentOptions" class=".model-button bg-red-700 hover:bg-gray-200 text-white text-base font-medium px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:text-black hover:font-extrabold hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 ease-in-out duration-300" href="#personal_info">Proceed to Payment</button>
            </div>
        </div>

    </div>

    <!-- Second side menu -->
    <div class="flex flex-col mb-4 mt-10 mx-10 text-black">
        <div class="flex flex-col mb-4 payment-options" style="display: {{ $showPaymentOptions ? 'block' : 'none' }}">

            <div class="space-y-10" name="payment_info">
                <div class="flex justify-left mt-10 mb-4">
                    <a wire:click="togglePaymentOptions" class="fas fa-angle-left fa-xs cursor-pointer"> Edit design</a>
                </div>

                <div class="space-y-0.5">
                    <div class="flex justify-center mt-12">
                        <!-- Big Heading with Dual Color -->
                        <h1 class="text-5xl font-extrabold text-center text-black mb-4">Proton</h1>
                        <h1 class="text-6xl font-black text-center text-red-700 italic mb-4">X90</h1>

                    </div>
                    <!-- Vertical Medium Buttons (3 of them) -->
                    <div class="flex flex-col -mt-10 mb-4 text-center">
                        <h1>
                            <a href="#" target="_blank"><i class="fa fa-arrow-down -my-5" aria-hidden="true"></i>
                                Download PDF</a>
                        </h1>
                        <h3>Est. First Deliveris: Early 2024</h3>
                    </div>
                </div>

                <!-- Vertical Medium Buttons (3 of them) -->
                <div class="flex justify-between">
                    <div class="flex flex-col text-left space-y-0.5">
                        <h3>Proton X90 1.8TGDi</h3>
                        <h3>Pearl White Paint</h3>
                        <h3>18" Photon Wheels</h3>
                        <h3>Black Premium Interior</h3>
                        <h3 class="font-semibold">Vehicle Price</h3>
                    </div>
                    <div class="flex flex-col text-right space-y-0.5">
                        <h3>RM 123,800</h3>
                        <h3>Included</h3>
                        <h3>Included</h3>
                        <h3>Included</h3>
                        <h3 class="font-semibold">RM 123,800</h3>
                    </div>
                </div>

                <hr class="solid">

                <button class="mt-5">Show Details</button>

                <div class="btn-group-1 flex mt-5 justify-center align-center bg-gray-300 w-full h-12 border rounded">
                    <button id="btnID1" wire:click="toggleCashHire" class="btn1 animated-button mx-2 my-2">Cash</button>
                    <button id="btnID2" wire:click="toggleCashHire" class="btn2 animated-button mx-2 my-2">Hire Purchase</button>
                </div>

                <!-- Cash -->
                <div style="display: {{ $showCash ? 'block' : 'none' }}">
                    <div class="flex justify-between mt-3 mb-3">
                        <div class="flex flex-col text-left w-3/5 space-y-0.5">
                            <h3>Vehicle Price</h3>
                            <h3>Delivery & Administration Fee</h3>
                            <h3>Number Plate Fee</h3>
                            <h3>Order Fee</h3>
                        </div>
                        <div class="flex flex-col text-right w-2/5 space-y-0.5">
                            <h3>RM 123,800</h3>
                            <h3>RM 500</h3>
                            <h3>RM 200</h3>
                            <h3>RM 1000</h3>
                        </div>
                    </div>
                    <hr class="solid">
                    <div class="">
                        <div class="flex justify-between">
                            <div class="flex flex-col text-left">
                                <h3 class="font-semibold">Vehicle Price</h3>
                            </div>
                            <div class="flex flex-col text-right">
                                <h3 class="font-semibold">RM 123,800</h3>
                            </div>
                        </div>
                        <span>Excluding on-the-road registration fees</span>
                    </div>
                </div>
                <!-- Hire Purchase -->
                <div style="display: {{ $showHirePurchase ? 'block' : 'none' }}">
                    <div class="flex justify-between mt-3">
                        <div class="flex flex-col text-left w-3/5 space-y-0.5">
                            <h3 class="font-semibold">Est. loan payment</h3>
                        </div>
                        <div class="flex flex-col text-right w-2/5 space-y-0.5">
                            <h3 class="font-semibold">RM 3,654 /mo</h3>
                        </div>
                    </div>
                    <div class="space-y-1 mb-3">
                        <h3>RM 21,800(10%) down, 4.46% APR, 60 months</h3>
                        <h3>Excluding on-the-road registration fees</h3>
                        <h3 class="underline">Custom Payment<h3>
                    </div>
                </div>

                <div>
                    <div class="flex flex-row text-xl font-bold justify-between">
                        <h1>Due Today</h1>
                        <h1>RM 1000</h1>
                    </div>
                    <span class="text-gray-600 text-sm">Non-Refundable</span>
                </div>

                <div class="my-20 space-y-20">
                    <div class="flex flex-col space-y-2 my-20 mx-6">
                        <button wire:click="toggleBillingOptions" class=" bg-red-700 hover:bg-gray-200 text-white text-base font-medium px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:text-black hover:font-extrabold hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 ease-in-out duration-300" style="display: {{ $showBillingButton ? 'block' : 'none' }}" href="#personal_info">Order with Card</button>
                    </div>
                </div>

                <!-- Order Form -->
                <div class="flex flex-col mb-4 payment-options" style="display: {{ $showBillingOptions ? 'block' : 'none' }}">
                    <div name="personal_info" class="space-y-2">
                        <h1 class="text-2xl font-semibold w-full">Enter Personal Details</h1>
                        <div class="flex items-center mb-4">
                            <input checked id="default-radio-1" type="radio" wire:click="togglePersonalDetails" value="" name="default-radio" class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500">
                            <label for="default-radio-1" class="ml-2 text-md font-semibold text-gray-900 dark:text-gray-300">Personal</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" wire:click="togglePersonalDetails" value="" name="default-radio" class="w-6 h-6 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500">
                            <label for="default-radio-2" class="ml-2 text-md font-semibold text-gray-900 dark:text-gray-300">Business</label>
                        </div>
                    </div>

                    <div class="space-y-2 mt-5" style="display: {{ $showPersonal ? 'block' : 'none' }}">
                        <form>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white w-full">
                                <div class="">
                                    <label for="first_name" class="block mb-2">First name</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                                </div>
                                <div class="mb-6">
                                    <label for="last_name" class="block mb-2">Last name</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block mb-2">Personal ID Number</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Email address</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Confirm Email address</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                                </div>
                                <div class="">
                                    <label for="phone" class="block mb-2">Phone number</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>

                            </div>

                            <h1 class="text-2xl mt-5 w-full font-semibold">Card</h1>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white">
                                <div>
                                    <label for="first_name" class="block mb-2">Name on Card</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-2">Card Number</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">Expiration Month</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="01" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Expiration Year</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="2023" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">CVV</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                            </div>

                            <h1 class="text-2xl mt-5 w-full font-semibold">Billing Information</h1>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white">
                                <div>
                                    <label for="first_name" class="block mb-2">Address line 1</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-2">Address line 2</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">City</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">State</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Post Code</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">Country</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Malaysia" required>
                                </div>
                            </div>
                            <div class="flex items-start mb-6 mt-3">
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900">By continuing, I allow Proton to save my payment instrument information for future transactions pursuant to the <a href="#" class="text-blue-600 hover:underline">Payment Terms for Services</a>.</label>
                            </div>
                            <div>
                                <div class="flex flex-row text-xl font-bold justify-between">
                                    <h1>Due Today</h1>
                                    <h1>RM 1000</h1>
                                </div>
                                <span class="text-gray-600 text-sm">Non-Refundable</span>
                            </div>
                            <div class="my-20 space-y-20">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-300 focus:ring-3 focus:ring-blue-300" required>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900">By placing this order, you agree to the <a href="#" class="text-blue-600 hover:underline">Motor Vehicle Order Agreement</a>, <a href="#" class="text-blue-600 hover:underline">Terms of Use</a> and the <a href="#" class="text-blue-600 hover:underline">Privacy Notice</a>. You also allow us to save your credit card to pay for future services as described in the <a href="#" class="text-blue-600 hover:underline">payment terms</a>.</label>
                                </div>
                                <div class="flex flex-col space-y-2 my-20 mx-6">
                                    <button disabled type="submit" class=" bg-red-700 hover:bg-gray-200 text-white text-base font-medium px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:text-black hover:font-extrabold hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 ease-in-out duration-300">Place Order</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="space-y-2 mt-5" style="display: {{ $showBusiness ? 'block' : 'none' }}">
                        <form>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white w-full">
                                <div class="">
                                    <label for="first_name" class="block mb-2">First name</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                                </div>
                                <div class="mb-6">
                                    <label for="last_name" class="block mb-2">Last name</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Email address</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Confirm Email address</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                                </div>
                                <div class="">
                                    <label for="phone" class="block mb-2">Phone number</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                            </div>

                            <h1 class="text-2xl mt-5 w-full font-semibold">Company Information</h1>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white w-full">
                                <div class="">
                                    <label for="first_name" class="block mb-2">Company name</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                                </div>
                                <div class="mb-6">
                                    <label for="last_name" class="block mb-2">Company Registration Number</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">SST Registration Number (If Applicable)</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="W12-3456-78912345" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Company Address Line 1</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block mb-2">Company Address Line 2</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block mb-2">City</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block mb-2">State</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block mb-2">Post Code</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                            </div>

                            <h1 class="text-2xl mt-5 w-full font-semibold">Card</h1>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white">
                                <div>
                                    <label for="first_name" class="block mb-2">Name on Card</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-2">Card Number</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">Expiration Month</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="01" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Expiration Year</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="2023" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">CVV</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                            </div>

                            <h1 class="text-2xl mt-5 w-full font-semibold">Billing Information</h1>
                            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white">
                                <div>
                                    <div class="flex items-center h-5 my-5">
                                        <input id="remember" type="checkbox" value="" class="w-6 h-6 border border-gray-300 rounded bg-gray-300 focus:ring-3 focus:ring-blue-300" required>
                                        <label for="remember" class="ml-2 text-md font-semibold text-gray-900">Same as Company Address</label>
                                    </div>
                                </div>
                                <div>
                                    <label for="first_name" class="block mb-2">Address line 1</label>
                                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-2">Address line 2</label>
                                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">City</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">State</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block mb-2">Post Code</label>
                                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2">Country</label>
                                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Malaysia" required>
                                </div>
                            </div>
                            <div class="flex items-start mb-6 mt-3">
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900">By continuing, I allow Proton to save my payment instrument information for future transactions pursuant to the <a href="#" class="text-blue-600 hover:underline">Payment Terms for Services</a>.</label>
                            </div>
                            <div>
                                <div class="flex flex-row text-xl font-bold justify-between">
                                    <h1>Due Today</h1>
                                    <h1>RM 1000</h1>
                                </div>
                                <span class="text-gray-600 text-sm">Non-Refundable</span>
                            </div>
                            <div class="my-20 space-y-20">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-300 focus:ring-3 focus:ring-blue-300" required>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900">By placing this order, you agree to the <a href="#" class="text-blue-600 hover:underline">Motor Vehicle Order Agreement</a>, <a href="#" class="text-blue-600 hover:underline">Terms of Use</a> and the <a href="#" class="text-blue-600 hover:underline">Privacy Notice</a>. You also allow us to save your credit card to pay for future services as described in the <a href="#" class="text-blue-600 hover:underline">payment terms</a>.</label>
                                </div>
                                <div class="flex flex-col space-y-2 my-20 mx-6">
                                    <button disabled type="submit" class=" bg-red-700 hover:bg-gray-200 text-white text-base font-medium px-4 py-2 border-2 border-slate-400 hover:border-red-700 hover:text-black hover:font-extrabold hover:border-2 rounded focus:outline-none focus:ring-4 focus:ring-red-300 ease-in-out duration-300">Place Order</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

{{-- <div class="flex justify-center space-x-2 mx-4 my-4">
    <button wire:click="resetSlide" class="toggle-button bg-white hover:bg-white text-white px-2 py-1 border border-slate-200 rounded">1</button>
    <button wire:click="resetSlide" class="toggle-button bg-gray-400 hover:bg-gray-400 text-gray-400 px-2 py-1 border border-slate-200 rounded">2</button>
    <button wire:click="resetSlide" class="toggle-button bg-gray-700 hover:bg-gray-700 text-gray-700 px-2 py-1 border border-slate-200 rounded">3</button>
    <button wire:click="resetSlide" class="toggle-button bg-blue-600 hover:bg-blue-600 text-blue-600 px-2 py-1 border border-slate-200 rounded">4</button>
    <button wire:click="resetSlide" class="toggle-button bg-yellow-600 hover:bg-yellow-600 text-yellow-600 px-2 py-1 border border-slate-200 rounded">5</button>
    <button wire:click="resetSlide" class="toggle-button bg-red-600 hover:bg-red-600 text-red-600 px-2 py-1 border border-slate-200 rounded">6</button>
    </div> --}}


