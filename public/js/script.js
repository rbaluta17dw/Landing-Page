// Get the modal
var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("modalStart");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function howManyInArray(array, value){
  var count = 0;
  for (var i = 0; i < array.length; i++) {
    if (array[i] == value) {
      count++;
    }
  }
  return count;
}

function validate() {
  var email = document.forms["login"]["email"].value;
  var element = document.getElementById('disabled');
  var where = 0;
  if (email != null) {
    if (email.includes('@')) {
      if (howManyInArray(email, '@') == 1) {
        where = email.indexOf('@');
        if (where != 0) {
          var dominio = email.split('@');
          if (dominio[1].length >= 3) {
            if (dominio[1].includes('.')) {
              where = dominio[1].indexOf('.');
              whereLast = dominio[1].lastIndexOf('.');
              if (where != 0 && whereLast != (dominio[1].length-1)){
                var extension = dominio[1].split('.');
                if (extension[1].length >= 2 || extension[1].length <= 5) {
                  element.classList.remove("disabled");
                  document.getElementById('emailValidate').innerHTML = "";
                }else {
                  document.getElementById('emailValidate').innerHTML = "El email tiene que tener una extension entre 2 y 5 caracteres";
                  element.classList.add("disabled");
                }
              }else {
                document.getElementById('emailValidate').innerHTML = "El dominio no puede tener un '.' como primer o ultimo caracter";
                element.classList.add("disabled");
              }
            }else {
              document.getElementById('emailValidate').innerHTML = "El email tiene que tener un '.'";
              element.classList.add("disabled");
            }
          }else {
            document.getElementById('emailValidate').innerHTML = "El dominio tiene que tener al menos 3 caracteres";
            element.classList.add("disabled");
          }
        }else {
          document.getElementById('emailValidate').innerHTML = "El email no puede tener una '@' como primer ni ultimo valor";
          element.classList.add("disabled");
        }
      }else {
        document.getElementById('emailValidate').innerHTML = "El email no puede tener mas de una '@'";
        element.classList.add("disabled");
      }
    }else {
      document.getElementById('emailValidate').innerHTML = "El email debe tener una '@'";
      element.classList.add("disabled");
    }
  }else {
    document.getElementById('emailValidate').innerHTML = "No puede ser nulo";
    element.classList.add("disabled");
  }
}
