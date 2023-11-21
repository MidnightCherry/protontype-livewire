<?php

namespace App\Livewire;

use Livewire\Component;

class SliderComponent extends Component
{
    /*--------------------------------------------------Main Menu Content-----------------------------------------------------------*/
    public $sliders = [
        1 => [
            'color' => 'white',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
        2 => [
            'color' => 'silver',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
        3 => [
            'color' => 'gray',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
        4 => [
            'color' => 'brown',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
        5 => [
            'color' => 'red',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
        6 => [
            'color' => 'blue',
            'currentSlide' => 1,
            'totalSlides' => '4'
        ],
    ];

    public $totalSlides = 4;
    public $activeSlider = 1;

    public $buttons = [
        ['textColor' => 'white'],
        ['textColor' => 'gray-400'],
        ['textColor' => 'gray-700'],
        ['textColor' => 'stone-700'],
        ['textColor' => 'red-600'],
        ['textColor' => 'blue-600'],
    ];

    
    public $carcolours = [
        ['Snow White' => 'Included'],
        ['Armour Silver' => 'RM 3,000'],
        ['Jet Grey' => 'RM 3,000'],
        ['Cinnamon Brown' => 'RM 3,000'],
        ['Ruby Red' => 'RM 3,000'],
        ['Marine Blue' => 'RM 3,000'],
    ];

    public function mount()
    {
        $this->activeSlider = 1;
    }

    // public function changeColor($colorIndex)
    // {
    //     // if (array_key_exists($colorIndex, $this->sliders)) {
    //     //     // Update the color of the active slider using the correct array
    //     //     $this->sliders[$this->activeSlider]['color'] = $this->sliders[$colorIndex]['color'];
    //     // }
    //     if (array_key_exists($colorIndex, $this->sliders)) {
    //         // Update the color of the active slider using the correct array
    //         $this->sliders[$this->activeSlider]['color'] = $this->sliders[$colorIndex]['color'];
    //         $this->activeSlider = $colorIndex; // Update the active slider
    //     }
    // }

    // public function switchSlider($sliderNumber)
    // {
    //     $this->activeSlider = $sliderNumber;
    //     // Ensure the current slide stays consistent
    //     if ($sliderNumber != 0 && $this->activeSlider != $sliderNumber) {
    //         $currentSlide = $this->sliders[$sliderNumber]['currentSlide'];
    //         $this->sliders[$sliderNumber]['currentSlide'] = $currentSlide;
    //     }
    // }

    public function changeSlider($sliderNumber)
    {
        if ($sliderNumber != 0 && $this->activeSlider != $sliderNumber) {
            $currentSlide = $this->sliders[$this->activeSlider]['currentSlide'];
            $this->activeSlider = $sliderNumber;
            $this->sliders[$sliderNumber]['currentSlide'] = $currentSlide;
        }
    }

    public function changeSlide($sliderNumber, $direction)
    {
        // Existing logic for changing slides
        $currentSlide = &$this->sliders[$sliderNumber]['currentSlide'];
        $currentSlide = $direction === 'next' 
            ? ($currentSlide % $this->totalSlides) + 1 
            : ($currentSlide === 1 ? $this->totalSlides : $currentSlide - 1);
    }

    // public function changeSlide($sliderNumber, $direction)
    // {
    //     $currentSlide = &$this->sliders[$sliderNumber]['currentSlide'];
    //     $currentSlide = $direction === 'next' 
    //         ? ($currentSlide % $this->totalSlides) + 1 
    //         : ($currentSlide === 1 ? $this->totalSlides : $currentSlide - 1);
    // }
    /*--------------------------------------------------Side Menu Content-----------------------------------------------------------*/

    public $showMainOptions = true;
    public $showPaymentOptions = false;

    public function togglePaymentOptions()
    {
        $this->showPaymentOptions = !$this->showPaymentOptions;
        $this->showMainOptions = !$this->showMainOptions;
    }

    public $selectedModel = 'Standard';
    public $setLocation;
    public $selectedLocation = 0;
    public $selectColour;
    public $selectedWheelSize;
    public $currentPrice;
    public $basePrice;
    public $extraCost;
    public $currentModel;

    public $prices = [
        'Standard' => [86300, 88300, 82600, 81000],
        'Executive' => [93300, 95300, 83600, 87900],
        'Premium' => [101800, 103800, 97800, 96100],
        'Flagship' => [113300, 115300, 109100, 107400]
    ];

    public $wheels = [
        '18' => [0],
        '19' => [2000],
    ];
    
    public function setWheelSize($wheel)
    {
        $this->selectedWheelSize = $wheel;
    }

    public function setColour()
    {
        $currentPriceValue = $this->currentPrice;
        // Iterate through the prices array to find the key that matches the current price value
        foreach ($this->prices as $key => $value) {
            if ($value[$this->selectedModel][$this->selectedLocation] === $currentPriceValue) {
                // Set currentModel to the key found
                $this->currentModel = $key;
                break; // Stop the loop once the key is found
            }
        }
    }

    public function setModel($model)
    {
        $this->selectedModel = $model;
    }

    public function setLocation($location)
    {
        $this->selectedLocation = $location;
    }

    /*-----------------------------------------------Billing Options Content-----------------------------------------------------------*/

    public $showBillingOptions = false;
    public $showBillingButton = true;

    public function toggleBillingOptions()
    {
        $this->showBillingOptions = !$this->showBillingOptions;
        $this->showBillingButton = !$this->showBillingButton;
    }

    public $showPersonal = true;
    public $showBusiness = false;

    public function togglePersonalDetails()
    {
        $this->showPersonal = !$this->showPersonal;
        $this->showBusiness = !$this->showBusiness;
    }

    public $showCash = true;
    public $showHirePurchase = false;

    public function toggleCashHire()
    {
        $this->showCash = !$this->showCash;
        $this->showHirePurchase = !$this->showHirePurchase;
    }

    
    public $countries = [
        ['name' => 'United States', 'code' => '+1', 'short_code' => 'US'],
        ['name' => 'United Kingdom', 'code' => '+44', 'short_code' => 'GB'],
        ['name' => 'Germany', 'code' => '+44', 'short_code' => 'DE'],
        ['name' => 'France', 'code' => '+44', 'short_code' => 'FR'],
        ['name' => 'Netherland', 'code' => '+44', 'short_code' => 'GB'],
        // Add more countries as needed
    ];

    public $selectedCountry = ['name' => '', 'code' => '', 'short_code' => ''];

    // public $countries = [
    //     ['countryCode' => 'GB', 'value' => '44', 'text' => 'UK (+44)', 'selected' => true],
    //     ['countryCode' => 'US', 'value' => '1', 'text' => 'USA (+1)'],
    //     ['countryCode' => 'DZ', 'value' => '213', 'text' => 'Algeria (+213)'],
    //     ['countryCode' => 'AD', 'value' => '376', 'text' => 'Andorra (+376)'],
    //     // Add the rest of the countries in the same format
    //     // Remember to group countries within the 'Other countries' optgroup as needed
    // ];

    /*-----------------------------------------------Public Funtion Render-----------------------------------------------------------*/


    public function render()
    {
        $currentPrice = '';
        $currentModel = '';
        $currentSlider = $this->sliders[$this->activeSlider];        

        $this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation];
        return view('livewire.slider-component', [
            'currentPrice' => $currentPrice,
            'currentSlider' => $currentSlider,
            'currentModel' => $currentModel,
        ]);
    }

    // public function render()
    // {
    //     // Assuming $prices is an array containing the base prices for each model at each location
    //     $basePrice = $this->prices[$this->selectedModel][$this->selectedLocation];

    //     // Check if there's an extra cost for the selected wheel size
    //     //dd($extraCost = isset($this->wheels[$this->selectedWheelSize]) ? $this->wheels[$this->selectedWheelSize] : 0);
    //     $extraCost = 0;

    //     // Calculate the current price including the extra cost
    //     $currentPrice = $basePrice + $extraCost;

    //     return view('livewire.slider-component', [
    //         'currentPrice' => $currentPrice,
    //     ]);
    // }

}
