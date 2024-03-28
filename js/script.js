function loginUser() {
    // Mocking login process, you should replace this with your actual login logic
    var email = document.getElementById('mail').value;
    var password = document.getElementById('pw').value;
  
    // Assuming a successful login if both fields are filled
    if (email && password) {
      // Redirect to the dashboard after successful login
      window.location.href = 'dashboard.html'; // Change 'dashboard.html' to your actual dashboard page
      return false; // Prevent form submission
    } else {
      // Handling invalid login (you can customize this part)
      alert('Invalid email or password');
      return false; // Prevent form submission
    }
  }
  