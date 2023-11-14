<?php

namespace App\Livewire;

use Livewire\Component;

class ModelPricing extends Component
{
    public $selectedModel = 'model1';
    public $selectedLocation = 0;
    public $currentPrice;
    public $currentLink;

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

    // Listen for 'setModel' event and call setModel method when event is caught
    //protected $listeners = ['setModel', 'setLocation',];

    protected $listeners = ['priceUpdated' => 'updateCurrentPrice'];

    public function updateCurrentPrice($value) {
        $this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation];
        $this->currentLink = $this->links[$this->selectedModel][$this->selectedLocation];
    }

    // public function setModel($model)
    // {
    //     $this->selectedModel = $model;
    //     // Additional logic to update prices and links...
    //     $this->updateContent();
    // }

    // public function setLocation($location)
    // {
    //     $this->selectedLocation = $location;
    //     // Additional logic for when location is updated...
    //     $this->updateContent();
    // }

    // private function updateContent()
    // {
    //     $this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation];
    //     $this->currentLink = $this->links[$this->selectedModel][$this->selectedLocation];
    // }

    public function render()
    {
        return view('livewire.model-pricing', [
            'currentPrice' => $this->currentPrice,
            'currentLink' => $this->currentLink,
        ]);
    }
}
