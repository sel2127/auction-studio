const paymentMethodSelect = document.querySelector('#payment-method');
const creditCardDetails = document.querySelector('#credit-card-details');
const mobileTransferDetails = document.querySelector('#mobile-transfer-details');

paymentMethodSelect.addEventListener('change', () => {
    if (paymentMethodSelect.value === 'credit-card') {
        creditCardDetails.classList.remove('hidden');
        mobileTransferDetails.classList.add('hidden');
    } else if (paymentMethodSelect.value === 'mobile-transfer') {
        mobileTransferDetails.classList.remove('hidden');
        creditCardDetails.classList.add('hidden');
    } else {
        creditCardDetails.classList.add('hidden');
        mobileTransferDetails.classList.add('hidden');
    }
});