@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
        </div>
        <div class="card">
            <form action="{{ action('ProfilesController@store') }}" method="post" id="payment-form">
                @csrf                    
                <div class="form-group">
                    <div class="card-header">
                        <label for="card-element">
                            Enter your credit card information
                        </label>
                    </div>
                    <div class="card-body">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                            </div>
                            <input name="name" id="card-holder-name" type="text" class="form-control" placeholder="Name on card" aria-label="" aria-describedby="basic-addon1">
                        </div>

                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                        <input type="hidden" name="plan" value="" />
                    </div>
                </div>
                <div class="card-footer">
                    <button id="card-button" class="btn btn-dark" type="submit" data-secret="{{ $intent->client_secret }}">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection

@section('scripts')

<script>

window.onload = function () {

console.log("aaa");
// Create a Stripe client.
var stripe = Stripe('{{ env("STRIPE_KEY") }}');

// Create an instance of Elements.
const elements = stripe.elements();

// Create an instance of the card Element.
const cardElement = elements.create('card');

// Add an instance of the card Element into the `card-element` <div>.
cardElement.mount('#card-element');

// Handle form submission.
// const form = document.getElementById('payment-form');
// form.addEventListener('submit', function(event) {
//   event.preventDefault();

//   stripe.createToken(card).then(function(result) {
//     if (result.error) {
//       var errorElement = document.getElementById('card-errors');
//       errorElement.textContent = result.error.message;
//     } else {
//       stripeTokenHandler(result.token);
//     }
//   });
// });

const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;

cardButton.addEventListener('click', async (e) => {
    e.preventDefault();
    const { setupIntent, error } = await stripe.handleCardSetup(
        clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        // Display "error.message" to the user...
        let errorElement = document.getElementById('card-errors');
        errorElement.textContent = error.message;
    } else {
        // The card has been verified successfully...
        console.log("bbb");
        stripeTokenHandler(setupIntent);
    }


    
});



const stripeTokenHandler = (token) => {
    // Insert the token ID into the form so it gets submitted to the server
    const form = document.getElementById('payment-form');
    const hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.payment_method);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}

}
</script>

@endsection