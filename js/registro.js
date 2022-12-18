let formulario = document.querySelector('form');
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
            pass.addEventListener('change', validarPass);
            pass.addEventListener('blur', validadorCanmpo);
            pass.addEventListener('focus', mensajeInformacioPass);
            email.addEventListener('blur', validadorCanmpo);
            telefono.addEventListener('blur', validadorCanmpo);
            CP.addEventListener('blur', validadorCanmpo);
            submit.addEventListener('click', activacionSnipper);
        }
    );
}



function validadorCanmpo(e){
    datosFormulario[e.target.id] = e.target.value;
    avtivarBoton();
};

function validarPass(e){
        password = e.target.value;
        console.log('quitando foco');
        console.log(e);
        //validar longitud contraseña
        if ( password.length < 8 ) {
            pass.classList.remove('valid')
            pass.classList.add('invalid');
        } else {
            pass.classList.remove('invalid')
            pass.classList.add('valid');
        }
        //validar letra
        if ( password.match(/[A-z]/) ) {
            pass.classList.remove('invalid')
            pass.classList.add('valid');
        } else {
            pass.classList.remove('valid')
            pass.classList.add('invalid');
        }
    
        //validar letra mayúscula
        if ( password.match(/[A-Z]/) ) {
            pass.classList.remove('invalid')
            pass.classList.add('valid');
        } else {
            pass.classList.remove('valid')
            pass.classList.add('invalid');
        }
    
        //validar numero
        if ( password.match(/\d/) ) {
            pass.classList.remove('invalid')
            pass.classList.add('valid');
        } else {
            pass.classList.remove('valid')
            pass.classList.add('invalid');
        }

        avtivarBoton();
}

function mensajeInformacioPass(){
    if (mensajeSeguridad === false) {
        Swal.fire({
            customClass: {
              confirmButton: 'swalBtnColor'
            },
            title: 'Por la seguridad del perrete!',
            text: 'Introduce min 8 carácteres formados por valores alfanuméricos con 2 mayúsculas',
            icon: 'warning'
          });
        
          mensajeSeguridad = true;
    };
    
};


function activacionSnipper(){
    let snipper = document.createElement('div');
    snipper.classList.add('spinner');

    let contendorSnniper = document.getElementById('contendor-snipper');
    contendorSnniper.appendChild(snipper);
}


// -------------------------------------------------------------------------------------------- //
//FUNCIONES 

function avtivarBoton(){
    console.log(datosFormulario);
    if( datosFormulario['nombre'] !== '' &&
        datosFormulario['apellido1'] !== '' &&
        datosFormulario['apellido2'] !== '' &&
        datosFormulario['nomUser'] !== '' &&
        datosFormulario['DNI'] !== '' &&
        datosFormulario['pass'] !== '' &&
        datosFormulario['email'] !== '' &&
        datosFormulario['telefono'] !== '' &&
        datosFormulario['CP'] !== '' && pass.classList.contains('valid')){
        submit.disabled = false;
    };
};


function elminarMensajeErrorDatoDuplicadoDB(){
    let idMensajeErrorDatoDuplicadoDB = document.getElementById('mensajeErrorDatoDuplicadoDB'); 

    if (idMensajeErrorDatoDuplicadoDB) {
        idMensajeErrorDatoDuplicadoDB.remove();
    };
};









