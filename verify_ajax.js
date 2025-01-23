$(document).ready(function() {
  $('#submitBtn').click(function(e) { // Attach a click event handler to the Submit button.
    e.preventDefault(); // Prevents the default form submit action
    var username = $('#username').val().trim(); // Get the value entered in the username input field and trim any whitespace.

    if (username === '') {  // Check if the username field is empty.
      $('#message').text('Error: Username is required').css('color', 'red'); // If empty, show an error message in red.
    } else {
      $.ajax({ // If not empty, send an AJAX POST request to 'info.php'.
        url: 'info.php',
        type: 'POST',
        data: { username: username },
        success: function(response) { // Callback function if the AJAX request is successful.
          if (response === 'Verified') { // If the server response is 'Verified', show the message in green.
            $('#message').text(response).css('color', 'green'); 
          } else {  // Else, show a generic error message in red.
            $('#message').text('Error').css('color', 'red'); 
          }
        },
      });
    }
  });
});
