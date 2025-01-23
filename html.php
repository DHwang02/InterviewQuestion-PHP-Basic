<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Username Verification</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--jquery for AJAX Interaction -->
  <script src="verify_ajax.js"></script>
</head>
<body>
  <!-- Form Container -->
  <div class="form-container">
    <!--Username Label & Input Box -->
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" required>
    <!--Submit Button -->
    <button id="submitBtn">Submit</button>
    <!--Feedback Message -->
    <p id="message">Key in username and click submit</p>
  </div>
</body>
</html>