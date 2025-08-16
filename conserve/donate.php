<?php
  include '../dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donate to Help Animals</title>
    <link rel="stylesheet" href="donate.css" type="text/css">
</head>
<body>
    <h2>Support Our Animal Cause 🐾</h2>
    <form id="donateForm" action="process_donation.php" method="POST">
      <div id="step1">
        <label>First Name:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Country:</label><br>
        <input type="text" name="country" required><br><br>

        <div class="controls">
          <button type="button" class="next-btn" onclick="showStep2()">Next</button>
        </div>
      </div>
      <div id="step2" style="display:none;">
        <label>Amount (USD):</label><br>
        <input type="number" name="amount" min="1" required><br><br>

        <label>Payment Method:</label><br>
        <div class="payment-methods">
            <div class="payment-option">
                <input type="radio" name="method" value="stripe" id="stripe" required>
                <label for="stripe" class="payment-button">
                    <span class="payment-icon">💰</span>
                    Stripe
                </label>
            </div>
            
            <div class="payment-option">
                <input type="radio" name="method" value="paypal" id="paypal" required>
                <label for="paypal" class="payment-button">
                    <span class="payment-icon">🅿️</span>
                    PayPal
                </label>
            </div>
            
            <div class="payment-option">
                <input type="radio" name="method" value="card" id="card" required>
                <label for="card" class="payment-button">
                    <span class="payment-icon">💳</span>
                    Credit/Debit Card
                </label>
            </div>

            <div class="payment-option">
                <input type="radio" name="method" value="mobilemoney" id="mobilemoney" required>
                <label for="mobilemoney" class="payment-button">
                    <span class="payment-icon">📱</span>
                    Mobile Money
                </label>
            </div>
        </div>
        
        <div id="card-details">
            <label>Card Number:</label><br>
            <input type="text" name="card_number" placeholder="1234 5678 9012 3456" maxlength="19"><br><br>
            
            <label>Expiry Date:</label><br>
            <input type="text" name="expiry_date" placeholder="MM/YY" maxlength="5"><br><br>
            
            <label>CVV:</label><br>
            <input type="text" name="cvv" placeholder="123" maxlength="4"><br><br>
            
            <label>Cardholder Name:</label><br>
            <input type="text" name="cardholder_name" placeholder="Name on card"><br><br>
        </div><br>

        <div id="mobile-money-details" style="display:none;">
            <label for="mmNetwork" class="mobilemoney-label">Mobile Money Network</label>
            <select name="mmNetwork" id="mmNetwork" class="mobilemoney">
                <option value="MTN">MTN</option>
                <option value="Telecel">Telecel</option>
                <option value="AirtelTigo">AirtelTigo</option>
            </select>
            <label for="mmNumber" class="mobilemoney-label">Mobile Money Number</label>
            <div class="mm-row">
                <select name="countryCode" id="countryCode" class="mobilemoney">
                    <option value="+233">+233</option>
                    <option value="+234">+234</option>
                </select>
                <input type="tel" id="mmNumber" name="mmNumber" pattern="\d{9}" placeholder="Enter number" class="mobilemoney">
            </div>
        </div>

        <div class="controls">
          <button type="button" class="back-btn" onclick="showStep1()">Back</button>
          <button type="submit">Donate</button>
        </div>
      </div>
    </form>

    <script src="donate.js"></script>
</body>
</html>
