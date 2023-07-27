<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Make Offer</title>

    <link rel="stylesheet" href="{{ asset('css/offer.css') }}">
</head>

<body>
    @include('components.navbar')
    <div class="make-offer-container">
        <h1 class="make-offer-title">Make Offer</h1>

        <form action="#" method="POST" class="make-offer-form">
            @csrf
            <div class="form-group">
                <label for="offer-amount">Your Offer Amount (in ETB)</label>
                <input type="number" id="offer-amount" name="offer-amount" min="1" required>
            </div>

            <div class="form-group">
                <label for="payment-method">Payment Method</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="">Select Payment Method</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="mobile-transfer">Mobile Transfer</option>
                </select>
            </div>

            <div id="credit-card-details" class="payment-details hidden">
                <div class="form-group">
                    <label for="cc-number">Credit Card Number</label>
                    <input type="text" id="cc-number" name="cc-number" pattern="[0-9]{16}" required>
                </div>

                <div class="form-group">
                    <label for="cc-name">Name on Card</label>
                    <input type="text" id="cc-name" name="cc-name" required>
                </div>

                <div class="form-group">
                    <label for="cc-expiry">Expiry Date</label>
                    <input type="text" id="cc-expiry" name="cc-expiry" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" required>
                </div>

                <div class="form-group">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" id="cc-cvv" name="cc-cvv" pattern="[0-9]{3}" required>
                </div>
            </div>

            <div id="mobile-transfer-details" class="payment-details hidden">
                <div class="form-group">
                    <label for="mt-provider">Mobile Transfer Provider</label>
                    <input type="text" id="mt-provider" name="mt-provider" required>
                </div>

                <div class="form-group">
                    <label for="mt-phone">Phone Number</label>
                    <input type="text" id="mt-phone" name="mt-phone" pattern="[0-9]+" required>
                </div>
            </div>

            <button type="submit" id="make-offer-submit">Make Offer</button>
        </form>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    @include('components.footer')
</body>
</html>