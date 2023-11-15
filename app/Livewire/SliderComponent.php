<?php

namespace App\Livewire;

use Livewire\Component;

class SliderComponent extends Component
{
    public $sliders = [
        1 => ['currentSlide' => 1],
        2 => ['currentSlide' => 1],
    ];
    public $totalSlides = 4;
    public $activeSlider = 1;

    public $buttons = [
        ['bgColor' => 'white', 'textColor' => 'white'],
        ['bgColor' => 'gray-400', 'textColor' => 'gray-400'],
        ['bgColor' => 'gray-700', 'textColor' => 'gray-700'],
        ['bgColor' => 'stone-700', 'textColor' => 'stone-700'],
        ['bgColor' => 'red-600', 'textColor' => 'red-600'],
        ['bgColor' => 'blue-600', 'textColor' => 'blue-600'],
    ];

    public $carcolours = [
        ['Snow White' => 'Included'],
        ['Armour Silver' => 'RM 3,000'],
        ['Jet Grey' => 'RM 3,000'],
        ['Cinnamon Brown' => 'RM 3,000'],
        ['Ruby Red' => 'RM 3,000'],
        ['Marine Blue' => 'RM 3,000'],
    ];

    public function switchSlider($sliderNumber)
    {
        if ($sliderNumber != 0 && $this->activeSlider != $sliderNumber) {
            $currentSlide = $this->sliders[$this->activeSlider]['currentSlide'];
            $this->activeSlider = $sliderNumber;
            $this->sliders[$sliderNumber]['currentSlide'] = $currentSlide;
        }
    }

    public function goToSlide($sliderNumber, $slide)
    {
        $this->sliders[$sliderNumber]['currentSlide'] = $slide;
    }

    public function changeSlide($sliderNumber, $direction)
    {
        $currentSlide = &$this->sliders[$sliderNumber]['currentSlide'];
        $currentSlide = $direction === 'next' 
            ? ($currentSlide % $this->totalSlides) + 1 
            : ($currentSlide === 1 ? $this->totalSlides : $currentSlide - 1);
    }

    public $showMainOptions = true;
    public $showPaymentOptions = false;

    public function togglePaymentOptions()
    {
        $this->showPaymentOptions = !$this->showPaymentOptions;
        $this->showMainOptions = !$this->showMainOptions;
    }

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

    // public $selectedModel = 'Standard';
    // public $setLocation;
    // public $selectedLocation = 0;
    // public $currentPrice;

    // public $prices = [
    //     'Standard' => [86300, 88300, 82600, 81000],
    //     'Executive' => [93300, 95300, 83600, 87900],
    //     'Premium' => [101800, 103800, 97800, 96100],
    //     'Flagship' => [113300, 115300, 109100, 107400]
    // ];

    // public function setModel($model)
    // {
    //     $this->selectedModel = $model;
    //     $this->updateContent();
    // }

    // public function setLocation($location)
    // {
    //     $this->selectedLocation = $location;
    //     $this->updateContent();
    // }
    // private function updateContent()
    // {
    //     $this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation];
        
    // }

    // public function render()
    // {
    //     return view('livewire.slider-component');
    // }

    public $prices = [
        'Standard' => [86300, 88300, 82600, 81000],
        'Executive' => [93300, 95300, 83600, 87900],
        'Premium' => [101800, 103800, 97800, 96100],
        'Flagship' => [113300, 115300, 109100, 107400]
    ];

    public $selectedModel = 'Standard';
    public $selectedLocation = 0; 

    public function updateSelection($model, $location)
    {
        $this->selectedModel = $model;
        $this->selectedLocation = $location;
        $this->updateContent();
    }

    private function updateContent()
    {
        //$this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation];
        ddd($this->currentPrice);
        //ddd($this->selectedModel);
        //ddd($this->selectedLocation);
    }

    public function render()
    {
        return view('livewire.slider-component', [
            'currentPrice' => $this->currentPrice ?? $this->prices[$this->selectedModel][0],
        ]);
    }
}
