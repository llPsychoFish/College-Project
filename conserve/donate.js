// Payment method functionality
function setupPaymentMethods() {
    const cardDetails = document.getElementById('card-details');
    const mobileMoneyDetails = document.getElementById('mobile-money-details');
    const paymentMethods = document.querySelectorAll('input[name="method"]');

    // Hide both sections initially
    if (cardDetails) cardDetails.style.display = 'none';
    if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';

    // Add event listeners to payment method radio buttons
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            // Hide both sections first
            if (cardDetails) cardDetails.style.display = 'none';
            if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';

            // Show the selected section
            if (this.value === 'card' && cardDetails) {
                cardDetails.style.display = 'block';
                
                // Auto-prompt for demo details after a short delay
                setTimeout(() => {
                    if (confirm('Would you like to use demo card details for testing?')) {
                        fillDemoCardDetails();
                    }
                }, 300);
            } else if (this.value === 'mobilemoney' && mobileMoneyDetails) {
                mobileMoneyDetails.style.display = 'block';
            }
        });
    });

    // Show correct section on page load if already selected
    const checkedRadio = document.querySelector('input[name="method"]:checked');
    if (checkedRadio) {
        if (checkedRadio.value === 'card' && cardDetails) {
            cardDetails.style.display = 'block';
        } else if (checkedRadio.value === 'mobilemoney' && mobileMoneyDetails) {
            mobileMoneyDetails.style.display = 'block';
        }
    }
}

// Demo card fill functionality
function fillDemoCardDetails() {
    document.querySelector('input[name="card_number"]').value = '4532 1234 5678 9012';
    document.querySelector('input[name="expiry_date"]').value = '12/25';
    document.querySelector('input[name="cvv"]').value = '123';
    document.querySelector('input[name="cardholder_name"]').value = 'John Doe';
}

// Format card number input
function setupCardFormatting() {
    const cardNumberInput = document.querySelector('input[name="card_number"]');
    const expiryInput = document.querySelector('input[name="expiry_date"]');
    const cvvInput = document.querySelector('input[name="cvv"]');

    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
            let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
            e.target.value = formattedValue;
        });
    }

    if (expiryInput) {
        expiryInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
        });
    }

    if (cvvInput) {
        cvvInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
    }
}

// Initialize all functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    setupPaymentMethods();
    setupCardFormatting();
    
    // Demo card fill functionality
    const demoButton = document.getElementById('fill-demo-card');
    if (demoButton) {
        demoButton.addEventListener('click', fillDemoCardDetails);
    }
});

// Add smooth animations for form interactions
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to payment options
    const paymentOptions = document.querySelectorAll('input[type="radio"]');
    paymentOptions.forEach(option => {
        const parentDiv = option.closest('.payment-option') || option.parentElement;
        
        option.addEventListener('change', function() {
            // Remove active class from all options
            paymentOptions.forEach(opt => {
                const parent = opt.closest('.payment-option') || opt.parentElement;
                parent.classList.remove('active');
            });
            
            // Add active class to selected option
            if (this.checked) {
                parentDiv.classList.add('active');
            }
        });
    });
    
    // Add focus effects to input fields
    const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="number"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Hide all payment details sections initially
    var cardDetails = document.getElementById('card-details');
    var mobileMoneyDetails = document.getElementById('mobile-money-details');
    if (cardDetails) cardDetails.style.display = 'none';
    if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';

    // Listen for payment method changes
    var paymentRadios = document.querySelectorAll('input[name="method"]');
    paymentRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (cardDetails) cardDetails.style.display = 'none';
            if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';
            if (this.value === 'card' && cardDetails) {
                cardDetails.style.display = 'block';
            }
            if (this.value === 'mobilemoney' && mobileMoneyDetails) {
                mobileMoneyDetails.style.display = 'block';
            }
        });
    });

    // Show correct section on page load if already selected
    var checkedRadio = document.querySelector('input[name="method"]:checked');
    if (checkedRadio) {
        if (checkedRadio.value === 'card' && cardDetails) {
            cardDetails.style.display = 'block';
        }
        if (checkedRadio.value === 'mobilemoney' && mobileMoneyDetails) {
            mobileMoneyDetails.style.display = 'block';
        }
    }
});

function showStep2() {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
      }
      function showStep1() {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step1').style.display = 'block';
      }

function showCardDetails() {
    var cardDetails = document.getElementById('card-details');
    if (cardDetails) cardDetails.style.display = 'block';
    var mobileMoneyDetails = document.getElementById('mobile-money-details');
    if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';
}

function showMobileMoneyDetails() {
    var mobileMoneyDetails = document.getElementById('mobile-money-details');
    if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'block';
    var cardDetails = document.getElementById('card-details');
    if (cardDetails) cardDetails.style.display = 'none';
}

// Attach listeners
function setupPaymentListeners() {
    var paymentRadios = document.querySelectorAll('input[name="method"]');
    paymentRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === 'card') {
                showCardDetails();
            } else if (this.value === 'mobilemoney') {
                showMobileMoneyDetails();
            } else {
                // Hide both if another method is selected
                var cardDetails = document.getElementById('card-details');
                var mobileMoneyDetails = document.getElementById('mobile-money-details');
                if (cardDetails) cardDetails.style.display = 'none';
                if (mobileMoneyDetails) mobileMoneyDetails.style.display = 'none';
            }
        });
    });

    // Show correct section on page load if already selected
    var checkedRadio = document.querySelector('input[name="method"]:checked');
    if (checkedRadio) {
        if (checkedRadio.value === 'card') {
            showCardDetails();
        } else if (checkedRadio.value === 'mobilemoney') {
            showMobileMoneyDetails();
        }
    }
}

document.addEventListener('DOMContentLoaded', setupPaymentListeners);