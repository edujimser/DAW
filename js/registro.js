let formulario = document.getElementById("formulario-registro");
let nombre =  document.getElementById("nombre");
let apellido1 =  document.getElementById("apellido1");
let apellido2 =  document.getElementById("apellido2");
let nomUser =  document.getElementById("nomUser");
let DNI =  document.getElementById("DNI");
let pass =  document.getElementById("pass");
let email =  document.getElementById("email");
let telefono =  document.getElementById("telefono");
let CP =  document.getElementById("CP");
let submit = document.getElementById("submit");
let mensajeSeguridad = false;

let datosFormulario = {
    nombre : '',
    apellido1 : '',
    apellido2 : '',
    nomUser : '',
    DNI : '',
    pass : '',
    email : '',
    telefono : '',
    CP : ''
};



// -------------------------------------------------------------------------------------------- //
//EVENTLISTERS 
eventlisteners();
function eventlisteners(){
    window.addEventListener('DOMContentLoaded', () => {
        submit.disabled = true;

            //EVENT
            nombre.addEventListener('blur', validadorCanmpo);
            apellido1.addEventListener('blur', validadorCanmpo);
            apellido2.addEventListener('blur', validadorCanmpo);
            nomUser.addEventListener('blur', validadorCanmpo);
            DNI.addEventListener('blur', validadorCanmpo);
            pass.addEventListener('blur', validadorCanmpo);
            pass.addEventListener('focus', mensajeInformacioPass);
            email.addEventListener('blur', validadorCanmpo);
            telefono.addEventListener('blur', validadorCanmpo);
            CP.addEventListener('blur', validadorCanmpo);
        }
    );
}



function validadorCanmpo(e){
    datosFormulario[e.target.id] = e.target.value;
    
    avtivarBoton();
};

function mensajeInformacioPass(){
    if (mensajeSeguridad === false) {
        Swal.fire({
            customClass: {
              confirmButton: 'swalBtnColor'
            },
            title: 'Por la seguridad de tú futuro perrete!',
            text: 'Introduce min 8 carácteres formados por valores alfanuméricos y signos (@, -, _ ...)',
            icon: 'warning'
          });
        
          mensajeSeguridad = true;
    };
    
};



// -------------------------------------------------------------------------------------------- //
//FUNCIONES 

function avtivarBoton(){
    if( datosFormulario['nombre'] !== '' &&
        datosFormulario['apellido1'] !== '' &&
        datosFormulario['apellido2'] !== '' &&
        datosFormulario['nomUser'] !== '' &&
        datosFormulario['DNI'] !== '' &&
        datosFormulario['pass'] !== '' &&
        datosFormulario['email'] !== '' &&
        datosFormulario['telefono'] !== '' &&
        datosFormulario['CP'] !== ''){
        submit.disabled = false;
    };
};


function elminarMensajeErrorDatoDuplicadoDB(){
    let idMensajeErrorDatoDuplicadoDB = document.getElementById('mensajeErrorDatoDuplicadoDB'); 

    if (idMensajeErrorDatoDuplicadoDB) {
        idMensajeErrorDatoDuplicadoDB.remove();
    };
};

//FUNCION SPINNER MENSAJE 

function showSpinner(message) {
    // Crear el elemento spinner
    const spinner = document.createElement('div');
    spinner.classList.add('spinner');
  
    // Crear el elemento mensaje del spinner
    const spinnerMessage = document.createElement('div');
    spinnerMessage.classList.add('spinner-message');
    spinnerMessage.textContent = message;
  
    // Añade el mensaje al elemento spinner
    spinner.appendChild(spinnerMessage);
  
    //  Añade el spinner al cuerpo del documento
    document.body.appendChild(spinner);

    document.getElementById('myButton').addEventListener('click', function() {
        showSpinner('Usuario registrado');
      });
  };



