{{-- Be like water. --}}

{{-- <div class="flex flex-row">
    <div class="columns-2">
        <button wire:click="setModel('model1')">Model 1</button>
        <button wire:click="setModel('model2')">Model 2</button>
    </div>    

    <div class="columns-3">
        <h1>RM {{ number_format($currentPrice) }}</h1>
    </div>
    
    <div class="columns-1">
        <h4>
            <a href="{{ $currentLink }}" target="_blank">Download Pricing PDF</a>
        </h4>
    </div>    
</div> --}}

<div class="flex flex-row relative" data-id="">
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
    <div class=""></div>
</div>
