<div>
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

    <div class="space-y-2 mt-5" style="display: {{ $showPersonal ? 'block' : 'none' }}" >
        <form>
            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white w-full">
                <div class="">
                    <label for="first_name" class="block mb-2">First name</label>
                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="last_name" class="block mb-2">Last name</label>
                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div> 
                <div class="mb-6">
                    <label for="phone" class="block mb-2">Personal ID Number</label>
                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123456-78-0901" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" required>
                </div>
                <div  class="mb-6">
                    <label for="email" class="block mb-2">Email address</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2">Confirm Email address</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6" >
                    <label for="phone" class="block mb-2">Phone Number</label>
                    <div class="flex flex-row bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded block w-full">
                        <select id="phone" class="bg-gray-300 basis-1/4 w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5" required>
                            @for($i = 1; $i <= 12; $i++)
                                <option class="rounded" value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                            @endfor
                        </select>
                        <input type="tel" id="phone" class="bg-gray-300 basis-3/4 w-full block p-2.5" placeholder="12-345 6789" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>                    
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
                    <select id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-md rounded focus:ring-gray-900 focus:border-black-900 block w-full p-2.5 my-2" required>
                        @for($i = 1; $i <= 12; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2">Expiration Year</label>
                    <select id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-md rounded focus:ring-gray-900 focus:border-black-900 block w-full p-2.5 my-2" required>
                        @for($i = 2023; $i <= 2038; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
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
                {{-- <div>
                    <label for="country" class="block mb-2">Country</label>
                    <select id="country" name="country" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="" disabled selected>Select your country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div> --}}
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
                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="last_name" class="block mb-2">Last name</label>
                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div> 
                <div  class="mb-6">
                    <label for="email" class="block mb-2">Email address</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2">Confirm Email address</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6" >
                    <label for="phone" class="block mb-2">Phone Number</label>
                    <div class="flex flex-row bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded block w-full">
                        <select id="phone" class="bg-gray-300 basis-1/4 w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5" required>
                            @for($i = 1; $i <= 12; $i++)
                                <option class="rounded" value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                            @endfor
                        </select>
                        <input type="tel" id="phone" class="bg-gray-300 basis-3/4 w-full block p-2.5" placeholder="12-345 6789" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>                    
                </div>
            </div>

            <h1 class="text-2xl mt-5 w-full font-semibold">Company Information</h1>
            <div class="flex flex-col space-y-3 text-base font-semibold text-black dark:text-white w-full">
                <div class="">
                    <label for="first_name" class="block mb-2">Company name</label>
                    <input type="text" id="first_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="last_name" class="block mb-2">Company Registration Number</label>
                    <input type="text" id="last_name" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div> 
                <div  class="mb-6">
                    <label for="email" class="block mb-2">SST Registration Number (If Applicable)</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="W12-3456-78912345" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2">Company Address Line 1</label>
                    <input type="email" id="email" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2">Company Address Line 2</label>
                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" " required>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2">City</label>
                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2">State</label>
                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2">Post Code</label>
                    <input type="tel" id="phone" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{6}" required>
                </div>
                {{-- <div>
                    <label for="country" class="block mb-2">Country</label>
                    <select id="country" name="country" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="" disabled selected>Select your country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div> --}}
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
                {{-- <div>
                    <label for="country" class="block mb-2">Country</label>
                    <select id="country" name="country" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="" disabled selected>Select your country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div> --}}
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