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

    // public $countries = [
    //     'Afghanistan',
    //     'Albania',
    //     'Algeria',
    //     'Andorra',
    //     'Angola',
    //     'Antigua and Barbuda',
    //     'Argentina',
    //     'Armenia',
    //     'Australia',
    //     'Austria',
    //     'Azerbaijan',
    //     'The Bahamas',
    //     'Bahrain',
    //     'Bangladesh',
    //     'Barbados',
    //     'Belarus',
    //     'Belgium',
    //     'Belize',
    //     'Benin',
    //     'Bhutan',
    //     'Bolivia',
    //     'Bosnia and Herzegovina',
    //     'Botswana',
    //     'Brazil',
    //     'Brunei',
    //     'Bulgaria',
    //     'Burkina Faso',
    //     'Burundi',
    //     'Cabo Verde',
    //     'Cambodia',
    //     'Cameroon',
    //     'Canada',
    //     'Central African Republic',
    //     'Chad',
    //     'Chile',
    //     'China',
    //     'Colombia',
    //     'Comoros',
    //     'Congo, Democratic Republic of the',
    //     'Congo, Republic of the',
    //     'Costa Rica',
    //     'Côte d’Ivoire',
    //     'Croatia',
    //     'Cuba',
    //     'Cyprus',
    //     'Czech Republic',
    //     'Denmark',
    //     'Djibouti',
    //     'Dominica',
    //     'Dominican Republic',
    //     'East Timor (Timor-Leste)',
    //     'Ecuador',
    //     'Egypt',
    //     'El Salvador',
    //     'Equatorial Guinea',
    //     'Eritrea',
    //     'Estonia',
    //     'Eswatini',
    //     'Ethiopia',
    //     'Fiji',
    //     'Finland',
    //     'France',
    //     'Gabon',
    //     'The Gambia',
    //     'Georgia',
    //     'Germany',
    //     'Ghana',
    //     'Greece',
    //     'Grenada',
    //     'Guatemala',
    //     'Guinea',
    //     'Guinea-Bissau',
    //     'Guyana',
    //     'Haiti',
    //     'Honduras',
    //     'Hungary',
    //     'Iceland',
    //     'India',
    //     'Indonesia',
    //     'Iran',
    //     'Iraq',
    //     'Ireland',
    //     'Israel',
    //     'Italy',
    //     'Jamaica',
    //     'Japan',
    //     'Jordan',
    //     'Kazakhstan',
    //     'Kenya',
    //     'Kiribati',
    //     'Korea, North',
    //     'Korea, South',
    //     'Kosovo',
    //     'Kuwait',
    //     'Kyrgyzstan',
    //     'Laos',
    //     'Latvia',
    //     'Lebanon',
    //     'Lesotho',
    //     'Liberia',
    //     'Libya',
    //     'Liechtenstein',
    //     'Lithuania',
    //     'Luxembourg',
    //     'Madagascar',
    //     'Malawi',
    //     'Malaysia',
    //     'Maldives',
    //     'Mali',
    //     'Malta',
    //     'Marshall Islands',
    //     'Mauritania',
    //     'Mauritius',
    //     'Mexico',
    //     'Micronesia, Federated States of',
    //     'Moldova',
    //     'Monaco',
    //     'Mongolia',
    //     'Montenegro',
    //     'Morocco',
    //     'Mozambique',
    //     'Myanmar (Burma)',
    //     'Namibia',
    //     'Nauru',
    //     'Nepal',
    //     'Netherlands',
    //     'New Zealand',
    //     'Nicaragua',
    //     'Niger',
    //     'Nigeria',
    //     'North Macedonia',
    //     'Norway',
    //     'Oman',
    //     'Pakistan',
    //     'Palau',
    //     'Panama',
    //     'Papua New Guinea',
    //     'Paraguay',
    //     'Peru',
    //     'Philippines',
    //     'Poland',
    //     'Portugal',
    //     'Qatar',
    //     'Romania',
    //     'Russia',
    //     'Rwanda',
    //     'Saint Kitts and Nevis',
    //     'Saint Lucia',
    //     'Saint Vincent and the Grenadines',
    //     'Samoa',
    //     'San Marino',
    //     'Sao Tome and Principe',
    //     'Saudi Arabia',
    //     'Senegal',
    //     'Serbia',
    //     'Seychelles',
    //     'Sierra Leone',
    //     'Singapore',
    //     'Slovakia',
    //     'Slovenia',
    //     'Solomon Islands',
    //     'Somalia',
    //     'South Africa',
    //     'Spain',
    //     'Sri Lanka',
    //     'Sudan',
    //     'Sudan, South',
    //     'Suriname',
    //     'Sweden',
    //     'Switzerland',
    //     'Syria',
    //     'Taiwan',
    //     'Tajikistan',
    //     'Tanzania',
    //     'Thailand',
    //     'Togo',
    //     'Tonga',
    //     'Trinidad and Tobago',
    //     'Tunisia',
    //     'Turkey',
    //     'Turkmenistan',
    //     'Tuvalu',
    //     'Uganda',
    //     'Ukraine',
    //     'United Arab Emirates',
    //     'United Kingdom',
    //     'United States',
    //     'Uruguay',
    //     'Uzbekistan',
    //     'Vanuatu',
    //     'Vatican City',
    //     'Venezuela',
    //     'Vietnam',
    //     'Yemen',
    //     'Zambia',
    //     'Zimbabwe'
    // ];

    // public $phoneCodes = [
    //     '' => 'phone',
    //     '93' => 'Afghanistan +93',
    //     '358' => 'Aland Islands +358',
    //     '355' => 'Albania +355',
    //     '213' => 'Algeria +213',
    //     '1684' => 'American Samoa +1684',
    //     '376' => 'Andorra +376',
    //     '244' => 'Angola +244',
    //     '1264' => 'Anguilla +1264',
    //     '672' => 'Antarctica +672',
    //     '1268' => 'Antigua and Barbuda +1268',
    //     '54' => 'Argentina +54',
    //     '374' => 'Armenia +374',
    //     '297' => 'Aruba +297',
    //     '61' => 'Australia +61',
    //     '43' => 'Austria +43',
    //     '994' => 'Azerbaijan +994',
    //     '1242' => 'Bahamas +1242',
    //     '973' => 'Bahrain +973',
    //     '880' => 'Bangladesh +880',
    //     '1246' => 'Barbados +1246',
    //     '375' => 'Belarus +375',
    //     '32' => 'Belgium +32',
    //     '501' => 'Belize +501',
    //     // ... (remaining countries)
    //     '681' => 'Wallis and Futuna +681',
    //     '212' => 'Western Sahara +212',
    //     '967' => 'Yemen +967',
    //     '260' => 'Zambia +260',
    //     '263' => 'Zimbabwe +263',
    // ];

    public $countries = [
        ['name' => 'United States', 'code' => '+1', 'short_code' => 'US'],
        ['name' => 'United Kingdom', 'code' => '+44', 'short_code' => 'GB'],
        ['name' => 'Germany', 'code' => '+44', 'short_code' => 'DE'],
        ['name' => 'France', 'code' => '+44', 'short_code' => 'FR'],
        ['name' => 'Netherland', 'code' => '+44', 'short_code' => 'DU'],
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
    public function render()
    {
        return view('livewire.slider-component', [
            'currentPrice' => $this->currentPrice ?? $this->prices[$this->selectedModel][0],
        ]);
    }
}
