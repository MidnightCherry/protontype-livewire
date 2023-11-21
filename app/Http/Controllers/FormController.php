<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Log;
// use App\Livewire\PaymentForm;
// use App\Models\User;
// use App\Models\BusinessInformation;
// use App\Models\Order;
// use App\Models\Agreement;
// use App\Models\CardDetail;
// use App\Models\BillingAddress;
// use DB;

class FormController extends Controller
{

    public function create()
    {
        //return view('livewire.payment-form');
        return 'test hellow';
    }

    // public function store()
    // {
    //     dd(request()->all());
    // }


    // public function store(Request $request)
    // {
    //     // Begin transaction to ensure atomicity
    //     DB::beginTransaction();

    //     try {
    //         $user = User::create($request->only(['first_name', 'last_name', 'email', 'phone_number']));
            
    //         // Assuming User model has a relationship with BusinessInformation
    //         // Business Information
    //         if ($request->has('company_name')) { // Assuming a check to identify if it's a business form
    //             $businessInfo = BusinessInformation::create([
    //                 'user_id' => $user->id,
    //                 'company_name' => $request->company_name,
    //                 'registration_number' => $request->registration_number,
    //                 'address' => $request->business_address,
    //             ]);
    //         }

    //         // Order Information
    //         if ($request->has('product_id')) {
    //             $order = Order::create([
    //                 'user_id' => $user->id,
    //                 'product_id' => $request->product_id,
    //                 'quantity' => $request->quantity,
    //                 'total_price' => $request->total_price,
    //             ]);
    //         }

            
    //         // Agreement
    //         if ($request->has('agreement_type')) {
    //             $agreement = Agreement::create([
    //                 'user_id' => $user->id,
    //                 'type' => $request->agreement_type,
    //                 'content' => $request->agreement_content,
    //                 'signed_date' => now(),
    //             ]);
    //         }


    //         // Card Details
    //         $cardDetail = CardDetail::create([
    //             'user_id' => $user->id,
    //             'card_number' => $request->card_number,
    //             'expiration_date' => $request->card_expiration_date,
    //             'cvv' => $request->card_cvv, // Remember to handle this securely
    //         ]);

    //         // Billing Address
    //         $billingAddress = BillingAddress::create([
    //             'user_id' => $user->id,
    //             'address_line1' => $request->billing_address1,
    //             'address_line2' => $request->billing_address2,
    //             'city' => $request->billing_city,
    //             'state' => $request->billing_state,
    //             'zipcode' => $request->billing_zipcode,
    //         ]);
            
    //         DB::commit();
    //         return response()->json(['success' => 'Form submitted successfully']);
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         // Log the exception
    //         Log::error("Form submission failed: " . $e->getMessage());
    //         return response()->json(['error' => 'Form submission failed', 'message' => $e->getMessage()]);
    //     }
    // }
}
