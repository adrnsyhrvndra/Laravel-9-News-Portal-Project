import { Validator, enLang as en } from '@upjs/facile-validator';

// Select the container element that contains the fields
const form = document.querySelector('form');
console.log(form);

// Create an instance of Validator for the container element
const v = new Validator(form, {
  lang: en,
});

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Call validate method to start validation
  v.validate();
});


// Handle error-free validation
v.on('validation:success', () => {
  alert('Nice! The form was validated without any errors');
});

// Handle failed validation
v.on('validation:failed', () => {
  alert('Oops! There are some errors in the form.');
});
