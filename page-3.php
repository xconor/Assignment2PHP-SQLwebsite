<?php include 'includes/header.php';?>

<main class="container">
  <div class="starter-template text-center">
    <h1>Contact us</h1>
    <p class="lead">Use this form to get in touch with us.</p>
  </div>

  <form method="POST" name="contactform" action="contact-form-handler.php"> 
    <p>
      <label for='title'>Title:</label> <br>
      <select name="title" id="title">
        <option value="Mr">Mr.</option>
        <option value="Mrs">Mrs.</option>
        <option value="Ms">Ms.</option>
      </select>
    </p>
    <p>
      <label for='name'>Your Name:</label> <br>
      <input type="text" name="name" placeholder="Full Name">
    </p>
    <p>
      <label for='email'>Email Address:</label> <br>
      <input type="email" name="email" placeholder="e.g. d00261104@dkit.ie" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> <br>
    </p>
    <p>
      <label for='phone'>Phone Number:</label> <br>
      <input type="tel" name="phone" placeholder="Add Phone Number" pattern="[0-9]{10,}"> <br>
    </p>
    <p>
      <label for='subject'>Subject:</label> <br>
      <input type="text" name="subject">
    </p>
    <p>
      <label for='date'>Date:</label> <br>
      <input type="date" name="date">
    </p>
    <p>
      <label for='message'>Message:</label> <br>
      <textarea name="message"></textarea>
    </p>
    <input type="submit" value="Submit" placeholder="Add Your Message Here" required> <br>
  </form>

  <script>
    // Get the form element and add a submit event listener
    const form = document.querySelector('form[name="contactform"]');
    form.addEventListener('submit', function(event) {
      // Prevent the form from submitting
      event.preventDefault();

      // Get the form inputs
      const title = document.querySelector('#title').value;
      const name = document.querySelector('input[name="name"]').value;
      const email = document.querySelector('input[name="email"]').value;
      const phone = document.querySelector('input[name="phone"]').value;
      const subject = document.querySelector('input[name="subject"]').value;
      const date = document.querySelector('input[name="date"]').value;
      const message = document.querySelector('textarea[name="message"]').value;

      // Define regular expressions to validate the inputs
      const nameRegex = /^[a-zA-Z ]{2,30}$/;
      const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      const phoneRegex = /^[0-9]{10,}$/;
      const subjectRegex = /^[a-zA-Z0-9 ]{2,100}$/;
      const messageRegex = /^[a-zA-Z0-9 !@#$%^&*(),.?":{}|<>]{2,500}$/;

      // Define a flag variable to track if any validation errors occurred
  let hasErrors = false;

// Validate the inputs and display error messages if necessary
if (!nameRegex.test(name)) {
  hasErrors = true;
  document.querySelector('input[name="name"]').classList.add('is-invalid');
  document.querySelector('#nameError').textContent = 'Please enter a valid name (2-30 characters)';
} else {
  document.querySelector('input[name="name"]').classList.remove('is-invalid');
  document.querySelector('#nameError').textContent = '';
}

if (!emailRegex.test(email)) {
  hasErrors = true;
  document.querySelector('input[name="email"]').classList.add('is-invalid');
  document.querySelector('#emailError').textContent = 'Please enter a valid email address';
} else {
  document.querySelector('input[name="email"]').classList.remove('is-invalid');
  document.querySelector('#emailError').textContent = '';
}

if (phone && !phoneRegex.test(phone)) {
  hasErrors = true;
  document.querySelector('input[name="phone"]').classList.add('is-invalid');
  document.querySelector('#phoneError').textContent = 'Please enter a valid phone number (10 or more digits)';
} else {
  document.querySelector('input[name="phone"]').classList.remove('is-invalid');
  document.querySelector('#phoneError').textContent = '';
}

if (!subjectRegex.test(subject)) {
  hasErrors = true;
  document.querySelector('input[name="subject"]').classList.add('is-invalid');
  document.querySelector('#subjectError').textContent = 'Please enter a valid subject (2-100 characters)';
} else {
  document.querySelector('input[name="subject"]').classList.remove('is-invalid');
  document.querySelector('#subjectError').textContent = '';
}

if (!messageRegex.test(message)) {
  hasErrors = true;
  document.querySelector('textarea[name="message"]').classList.add('is-invalid');
  document.querySelector('#messageError').textContent = 'Please enter a valid message (2-500 characters)';
} else {
  document.querySelector('textarea[name="message"]').classList.remove('is-invalid');
  document.querySelector('#messageError').textContent = '';
}

// If there are no errors, submit the form
if (!hasErrors) {
  form.submit();
}
});

</script>
</main>
<?php include 'includes/footer.php';?>
