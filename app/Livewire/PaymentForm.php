<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;

class PaymentForm extends Component
{
    public $showBillingOptions = false;
    public $showPersonal = true;
    public $showBusiness = false;

    // Properties for personal details
    public $firstName;
    public $lastName;
    public $personalIdNumber;
    public $email;
    public $confirmEmail;
    public $phoneNumber;

    // Properties for business details
    public $companyName;
    public $companyRegistrationNumber;
    public $sstRegistrationNumber;
    public $companyAddressLine1;
    public $companyAddressLine2;
    public $city;
    public $state;
    public $postCode;
    public $country;

    // Properties for card details
    public $nameOnCard;
    public $cardNumber;
    public $expirationMonth;
    public $expirationYear;
    public $cvv;

    // Properties for billing address
    public $billingAddressLine1;
    public $billingAddressLine2;
    public $billingCity;
    public $billingState;
    public $billingPostCode;
    public $billingCountry;

    protected $rules = [
        // Define validation rules for various fields...
    ];

    public function togglePersonalDetails()
    {
        $this->showPersonal = !$this->showPersonal;
        $this->showBusiness = !$this->showBusiness;
    }

    public function submitForm()
    {
        $this->validate([
            'firstName' => 'required', // Add validation rules for all fields
            'lastName' => 'required',
            'personalIdNumber' => 'required',
            'email' => 'required|email',
            'confirmEmail' => 'required|same:email',
            'phoneNumber' => 'required',
            // ... include validation rules for all other fields
        ]);

        // Assuming you have a User model or an appropriate model for users
        $user = User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'personal_ID_Number' => $this->personalID,
            'email' => $this->email,
            'confirm_email' => $this->confirmEmail,
            'phone_number' => $this->phoneNumber,

            // ... other common user details
        ]);

        if ($this->showBusiness) {
            $user->businessInformation()->create([
                'company_name' => $this->companyName,
                'company_registration_number' => $this->companyRegistrationNumber,
                'sst_registration_number' => $this->sstRegistrationNumber,
                'company_address_line_1' => $this->companyAddressLine1,
                'company_address_line_2' => $this->companyAddressLine2,
                'city' => $this->businessCity,
                'state' => $this->businessState,
                'post_code' => $this->businessPostCode,
                'country' => $this->businessCountry,
            ]);
        }

        // Save card details to the Card Details Table (if applicable)
        $user->cardDetails()->create([
            'name_on_card' => $this->nameOnCard,
            'card_number' => encrypt($this->cardNumber), // Encrypt the card number for security
            'expiration_month' => $this->expirationMonth,
            'expiration_year' => $this->expirationYear,
            'cvv' => encrypt($this->cvv), // Encrypt the CVV for security
        ]);

        // Save billing address to the Billing Address Table (if applicable)
        $user->billingAddress()->create([
            'address_line_1' => $this->billingAddressLine1,
            'address_line_2' => $this->billingAddressLine2,
            'city' => $this->billingCity,
            'state' => $this->billingState,
            'post_code' => $this->billingPostCode,
            'country' => $this->billingCountry,
        ]);

        // Handle orders if necessary
        // Assuming you have an Orders model or table
        Order::create([
            'user_id' => $user->id,
            'total_amount' => $this->totalAmount, // Assuming you have this value
            'due_date' => now()->addDays(7), // Set a due date, adjust as needed
            'status' => 'Pending', // Set initial status
            // ... other order details
        ]);

        // Handle agreements
        $user->agreements()->create([
            'terms_of_service_agreed' => true, // Set based on form input
            'privacy_notice_agreed' => true, // Set based on form input
            'payment_terms_agreed' => true, // Set based on form input
        ]);

        // Redirect or perform other actions after successful submission
    }

    public $countries = [
        ['name' => 'United States', 'code' => '+1', 'short_code' => 'US'],
        ['name' => 'United Kingdom', 'code' => '+44', 'short_code' => 'GB'],
        ['name' => 'Germany', 'code' => '+44', 'short_code' => 'DE'],
        ['name' => 'France', 'code' => '+44', 'short_code' => 'FR'],
        ['name' => 'Netherland', 'code' => '+44', 'short_code' => 'DU'],
        // Add more countries as needed
    ];

    public $selectedCountry = ['name' => '', 'code' => '', 'short_code' => ''];
    

    public function render()
    {
        return view('livewire.payment-form');
    }
}

