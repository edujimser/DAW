let email =  document.getElementById("email");
let pass =  document.getElementById("pass");


let datosFormulario = {
    email : '',
    pass : '',
};



// -------------------------------------------------------------------------------------------- //
//EVENTLISTERS 
eventlisteners();
function eventlisteners(){
    window.addEventListener('DOMContentLoaded', () => {
        submit.disabled = true;

            //EVENT
            email.addEventListener('blur', validadorCanmpo);
            pass.addEventListener('blur', validadorCanmpo);
        }
    );
};



function validadorCanmpo(e){
  console.log(e.target.value);
  datosFormulario[e.target.id] = e.target.value;
  avtivarBoton();
};


// -------------------------------------------------------------------------------------------- //
//FUNCIONES 
function avtivarBoton(){
  console.log(datosFormulario);
  if( datosFormulario['email'] !== '' &&
      datosFormulario['pass'] !== ''){
      submit.disabled = false;
  }else{
    submit.disabled = true;
  };
};