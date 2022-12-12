const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);


const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const telephone = document.getElementById('telephone');
const inicio = document.getElementById('inicio');
const final = document.getElementById('final');
const comment = document.getElementById('comment');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg'); //mensaje error
const submitBtn = document.getElementById('submit');
  
const validate = (e) => {
  e.preventDefault();
 
  if (nombre.value.length < 3) {
    errorElement.innerHTML = 'Tu nombre debe tener al menos 3 caracteres.';
    return false;
  } 
  
  if (!(email.value.includes('.') && (email.value.includes('@')))) {
    errorElement.innerHTML = 'Por favor, introduce una dirección de correo electrónico válida..';
    return false;
  } 

  if (!emailIsValid(email.value)) {
    errorElement.innerHTML = 'Por favor, introduce una dirección de correo electrónico válida.';
    return false;
  }

  if (!celIsValid(telephone.value)){
    errorElement.innerHTML = 'Por favor, introduce un numero de teléfono válido de 9 dígitos';
    return false;
  }

  if (comment.value.length < 15) {
    errorElement.innerHTML = 'Por favor escribe un mensaje más largo.';
    return false;
  }

  errorElement.innerHTML = '';
  successMsg.innerHTML = '¡Gracias! Nos pondrémos en contacto contigo lo antes posible.'; 

  e.preventDefault();
  setTimeout(function () {
    successMsg.innerHTML = '';
    document.getElementById('contact-form').reset();
  }, 1000);

  return true;

}

const emailIsValid = email => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

const celIsValid = telephone => {
  return /^\d{9,10}$/.test(telephone); // \d- Cualquier Digitos (0-9)
}

submitBtn.addEventListener('click', validate);