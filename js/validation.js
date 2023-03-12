// Name validation
function nameValidation() {
    'use strict';
    var nameInput = document.getElementById('name');
    var nameValue = nameInput.value.trim();
    if (nameValue === '') {
      document.getElementById('nameError').innerHTML = 'Please enter your name.';
      nameInput.focus();
      document.getElementById('nameError').style.color = '#FF0000';
    } else {
      document.getElementById('nameError').innerHTML = 'Valid name.';
      document.getElementById('nameError').style.color = '#00AF33';
    }
  }
  
  // Email validation
  function emailValidation() {
    'use strict';
    var emailInput = document.getElementById('email');
    var emailValue = emailInput.value.trim();
    var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (emailValue === '') {
      document.getElementById('emailError').innerHTML = 'Please enter your email.';
      emailInput.focus();
      document.getElementById('emailError').style.color = '#FF0000';
    } else if (!emailValue.match(mailFormat)) {
      document.getElementById('emailError').innerHTML = 'Please enter a valid email address.';
      emailInput.focus();
      document.getElementById('emailError').style.color = '#FF0000';
    } else {
      document.getElementById('emailError').innerHTML = 'Valid email address.';
      document.getElementById('emailError').style.color = '#00AF33';
    }
  }
  
  // Message validation
  function messageValidation() {
    'use strict';
    var messageInput = document.getElementById('message');
    var messageValue = messageInput.value.trim();
    if (messageValue === '') {
      document.getElementById('messageError').innerHTML = 'Please enter your message.';
      messageInput.focus();
      document.getElementById('messageError').style.color = '#FF0000';
    } else {
      document.getElementById('messageError').innerHTML = 'Valid message.';
      document.getElementById('messageError').style.color = '#00AF33';
    }
  }
  
  // Submit validation 
  function validateForm() {
    'use strict';
    nameValidation();
    emailValidation();
    messageValidation();
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');
    if (nameInput.value.trim() !== '' && emailInput.value.trim() !== '' && messageInput.value.trim() !== '') {
      return true;
    } else {
      return false;
    }
  }
  