@extends('layouts.app')

@section('content')

    <!-- service-details-start -->
    <div class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="details-nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">FaaS Platform Standard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Change Plan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab"
                                        aria-controls="billing" aria-selected="false">Billing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab"
                                        aria-controls="support" aria-selected="false">Support</a>
                                </li>
                            </ul>
                        </nav>
                        <a href="#" class="download-brouser">Download broucher</a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="single-details">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="details-wrap">
                                    <div class="details-thumb">
                                        <img src="img/service/service-details.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Compatibility</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <h3>Speciality</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="details-wrap">
                                    <div class="details-thumb">
                                        <img src="img/service/service-details.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Compatibility</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <h3>Speciality</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="details-wrap">
                                    <div class="details-thumb">
                                        <img src="img/service/service-details.jpg" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Compatibility</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <h3>Speciality</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
                                <div class="details-wrap">
                                    <div class="details-info">
                                        <h3>Payment methods</h3>
                                        <p>Please enter your preferred payment method below. You can use a credit / debit card. 
                                        </p>
                                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name On Card'" placeholder="Enter Name On Card">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                    </div>
                                                    <!-- Used to display form errors. -->
                                                    <div id="card-errors" role="alert"></div>
                                                    <input type="hidden" name="plan" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="button button-contactForm boxed-btn">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="details-info">
                                        <h3>Billing details</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                                <div class="details-wrap">
                                    
                                    <div class="details-info">
                                        <h3>Contact Support</h3>
                                        <p>Have a question? Send us a note and someone from the Windsey & Associates team will be in touch soon.
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-details-end -->

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