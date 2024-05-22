document.addEventListener("DOMContentLoaded", function() {
    const inputFields = document.querySelectorAll('.input-field');
  
    inputFields.forEach(inputField => {
      inputField.addEventListener('focus', () => {
        inputField.previousElementSibling.style.opacity = '0';
      });
  
      inputField.addEventListener('blur', () => {
        if (inputField.value === "") {
          inputField.previousElementSibling.style.opacity = '1';
        }
      });
    });
  });
  