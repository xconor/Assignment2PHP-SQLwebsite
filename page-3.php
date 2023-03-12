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

</main><!-- /.container -->
<?php include 'includes/footer.php';?>
