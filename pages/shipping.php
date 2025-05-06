<!DOCTYPE html>
<html>

<head>
  <title>E-commerce Contact and Ship Attributes</title>
  <link rel="stylesheet" href="../css/shipping.css">
</head>

<body>
  <div class="container">
    <div class="attribute-container">
        <form method="POST" action="payment.php" enctype="multipart/form-data">
          <h2>Contact & Ship To</h2>
          <div class="attribute-content">
            <div class="input-group">
              <label for="contact">Contact:</label>
              <input type="text" id="contact" name="contacts" placeholder="Enter your contact details">
              
              <a class="edit-button">Edit</a>
            </div>
            <hr width="95%" style="fill:#56b280">
            <div class="input-group">
              <label for="ship_to">Ship To:</label>
              <input type="text" id="ship_to" name="ships_add" placeholder="Enter your shipping address">
              <a class="edit-button">Edit</a>
            </div>
          </div>
          <!-- <input type="submit" value="submit" name="submit"> -->
    </div>

    <h2>Shipping Method</h2>
    <div class="shipping-method">
      <label>
        <input type="checkbox" name="standard-shipping"> Standard Shipping
      </label>
    </div>

    
    <div class="buttons">
      <button class="back-button">Back to Details</button>
      
      <input type="submit" value="Go to Payment" name="submit" class="payment-button"  onclick="location.href='./payment.html'">
    </div>
  </div>
</body>
</form>
</html>