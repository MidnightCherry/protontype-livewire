<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
//use App\Models\Order;

class PaymentForm extends Component
{
    public $showBillingOptions = false;
    public $showPersonal = true;
    public $showBusiness = false;

    // Properties for personal details
    #[Validate('required')] 
    public $userType = '';
    public $firstName = '';
    public $lastName = '';
    public $personalIdNumber = '';
    public $email = '';
    public $confirmEmail = '';
    public $phoneNumber = '';
    
    
    // Properties for business details
    public $companyName = '';
    public $companyRegistrationNumber = '';
    public $sstRegistrationNumber = '';
    public $companyAddressLine1 = '';
    public $companyAddressLine2 = '';
    public $city = '';
    public $state = '';
    public $postCode = '';
    public $country = '';

    // Properties for card details
    public $nameOnCard = '';
    public $cardNumber = '';
    public $expirationMonth = '';
    public $expirationYear = '';
    public $cvv = '';

    // Properties for billing address
    public $billingAddressLine1 = '';
    public $billingAddressLine2 = '';
    public $billingCity = '';
    public $billingState = '';
    public $billingPostCode = '';
    public $billingCountry = '';

    // Properties for order details
    public $totalAmount = '';

    public $countries = [
        ['name' => 'United States', 'code' => '+1', 'short_code' => 'US'],
        ['name' => 'United Kingdom', 'code' => '+44', 'short_code' => 'GB'],
        ['name' => 'Germany', 'code' => '+44', 'short_code' => 'DE'],
        ['name' => 'France', 'code' => '+44', 'short_code' => 'FR'],
        ['name' => 'Netherland', 'code' => '+44', 'short_code' => 'DU'],
        // Add more countries as needed
    ];

    public $selectedCountry = ['name' => '', 'code' => '', 'short_code' => ''];

    public function togglePersonalDetails()
    {
        $this->showPersonal = !$this->showPersonal;
        $this->showBusiness = !$this->showBusiness;
    }

    public function submitForm() 
    {
        $validatedData = $this->validate([
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'confirmEmail' => 'required|same:email',
            'personal_ID_number' => 'required',
            'phoneNumber' => 'required|numeric',

            'companyName' => 'required_if:showBusiness,true',
            'companyRegistrationNumber' => 'required_if:showBusiness,true|alpha_num',

            'cardNumber' => 'required|numeric',
            'expirationMonth' => 'required|digits:2',
            'expirationYear' => 'required|digits:4',
            'cvv' => 'required|digits:3',

            'billingAddressLine1' => 'required',
            'billingAddressLine2' => 'required',
            'billingCity' => 'required|alpha',
            'billingState' => 'required|alpha',
            'billingPostCode' => 'required|numeric',
            'billingCountry' => 'required',
        ]);

        //User::create($validatedData);
        $user = User::create([
            'type' => $this->userType,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'personal_ID_Number' => $this->personalIdNumber,
            'email' => $this->email,
            'confirm_email' => $this->confirmEmail,
            'phone_number' => $this->phoneNumber,

        ]);

        if ($this->showBusiness) {
            $user->businessInformation()->create([
                'company_name' => $this->companyName,
                'company_registration_number' => $this->companyRegistrationNumber,
                'sst_registration_number' => $this->sstRegistrationNumber,
                'company_address_line_1' => $this->companyAddressLine1,
                'company_address_line_2' => $this->companyAddressLine2,
                'city' => $this->billingCity,
                'state' => $this->billingState,
                'post_code' => $this->billingPostCode,
                'country' => $this->billingCountry,
            ]);
        }

        // Save card details to the Card Details Table (if applicable)
        $user->cardDetails()->create([
            'name_on_card' => $this->nameOnCard,
            'card_number' => Crypt::encryptString($this->cardNumber),
            'expiration_month' => $this->expirationMonth,
            'expiration_year' => $this->expirationYear,
            'cvv' => Crypt::encryptString($this->cvv),
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

        // Assuming you have an Orders model or table
        Order::create([
            'user_id' => $user->id,
            'total_amount' => $this->totalAmount, 
            'due_date' => now()->addDays(7), 
            'status' => 'Pending', 
        ]);

        // Handle agreements
        $user->agreements()->create([
            'terms_of_service_agreed' => true, 
            'privacy_notice_agreed' => true, 
            'payment_terms_agreed' => true,
        ]);

        return redirect()->route('thank-you');

        /*--Flash a success message--*/ 
        //session()->flash('message', 'Order successfully placed.');
        // Then redirect
        //return redirect()->route('order-summary');

        /*--Emit an event that can be listened to by other Livewire components or JavaScript--*/ 
        //$this->emit('orderPlaced');
        // Redirect or perform other actions
        //return redirect()->route('order-summary');
        /*document.addEventListener('livewire:load', function () {
            Livewire.on('orderPlaced', () => {
                // JavaScript actions, like showing a modal
                alert('Thank you for your order!');
            });
        });*/
        
        /*--Conditional Rendering in Blade--*/
        /*public $formSubmitted = false;
        public function submitForm()
        {
            // ... form handling logic

            // Toggle form submission status
            $this->formSubmitted = true;
        }

        // In your Blade view
        @if($formSubmitted)
            <div>Thank you for your order!</div>
        @else
            <!-- Show form -->
        @endif*/

        /*--Reset all properties to their default values--*/ 
        //$this->reset();
        // Optionally flash a message
        //session()->flash('message', 'Form submitted successfully.');
    }
    

    public function render()
    {
        return view('livewire.payment-form');
    }
}

