<?php

namespace App\Livewire;

use Livewire\Component;

class ModelPricing extends Component
{
    public $selectedModel = 'model1';
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
    public $currentPrice;
    public $currentLink;

    public function mount()
    {
        $this->updateContent();
    }

    public function updatedSelectedModel()
    {
        $this->updateContent();
    }

    private function updateContent()
    {
        $this->currentPrice = $this->prices[$this->selectedModel][0]; // Assuming default selection for simplicity
        $this->currentLink = $this->links[$this->selectedModel][0];
    }

    public function render()
    {
        return view('livewire.model-pricing');
    }
}
