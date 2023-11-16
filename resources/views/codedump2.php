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
        ['bgColor' => 'blue-600', 'textColor' => 'blue-600'],
        ['bgColor' => 'yellow-600', 'textColor' => 'yellow-600'],
        ['bgColor' => 'red-600', 'textColor' => 'red-600'],
    ];

    public $carcolours = [
        ['Snow White' => 'Included'],
        ['Armour Silver' => 'RM 3000'],
        ['Jet Grey' => 'RM 3000'],
        ['Cinnamon Brown' => 'RM 3000'],
        ['Ruby Red' => 'RM 3000'],
        ['Marine Blue' => 'RM 3000'],
    ];
    
    public $carslider = [
        'White',
        'Silver',
        'Grey',
        'Brown',
        'Red',
        'Blue',
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
    public $setLocation = 'model1';

    public function setModel($model)
    {
        $this->selectedModel = $model;
        $this->updateContent();
    }

    public function setLocation($location)
    {
        $this->selectedLocation = $location;
        $this->updateContent();
    }

    private function updateContent()
    {
        ddd($this->currentPrice = $this->prices[$this->selectedModel][$this->selectedLocation]);
        //ddd($this->currentLink = $this->links[$this->selectedModel][$this->selectedLocation]);
    }

    public function render()
    {
        return view('livewire.slider-component');
    }
}


<div x-data="{ showPaymentOptions: false }">
    <!-- Proceed to Payment Button -->
    <div x-show="!showPaymentOptions" :class="{'button-top-class': showPaymentOptions}">
        <!-- Button content here -->
    </div>

    <!-- Second Side Menu -->
    <div x-show="showPaymentOptions">
        <!-- Second side content here -->
    </div>
</div>


The form you provided contains fields for personal and business information, card details, and billing information. Based on this, a database schema can be structured as follows:

    Users Table:
    
    id: Primary Key.
    type: To differentiate between personal and business users (Personal, Business).
    first_name: String.
    last_name: String.
    email: String, unique.
    phone_number: String.
    created_at: Timestamp.
    updated_at: Timestamp.

    Business Information Table (only for business users):
    
    user_id: Foreign Key, referencing id in Users table.
    company_name: String.
    company_registration_number: String.
    sst_registration_number: String (optional).
    company_address_line_1: String.
    company_address_line_2: String (optional).
    city: String.
    state: String.
    post_code: String.
    country: String.

    Card Details Table:
    
    user_id: Foreign Key, referencing id in Users table.
    name_on_card: String.
    card_number: String, encrypted for security.
    expiration_month: Integer.
    expiration_year: Integer.
    cvv: Integer, encrypted for security.

    Billing Address Table:
    
    user_id: Foreign Key, referencing id in Users table.
    address_line_1: String.
    address_line_2: String (optional).
    city: String.
    state: String.
    post_code: String.
    country: String.

    Orders Table:
    
    id: Primary Key.
    user_id: Foreign Key, referencing id in Users table.
    total_amount: Decimal.
    due_date: Date.
    status: String (e.g., Pending, Paid).
    created_at: Timestamp.
    updated_at: Timestamp.
    
    Agreements Table:
    
    user_id: Foreign Key, referencing id in Users table.
    terms_of_service_agreed: Boolean.
    privacy_notice_agreed: Boolean.
    payment_terms_agreed: Boolean.

    This schema covers the information collected from the form, categorizing it into relevant tables for efficient data management and retrieval. The separation of user information, business details, card details, and billing addresses allows for flexibility in handling different types of users and transactions. Additionally, the Agreements Table keeps track of user consents and agreements, which is crucial for legal compliance.