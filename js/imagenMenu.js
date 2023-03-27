let submit =  document.getElementById("submit");
let imagen = document.getElementById("imagen");






// -------------------------------------------------------------------------------------------- //
//EVENTLISTERS 
eventlisteners();

function eventlisteners(){
    window.addEventListener('DOMContentLoaded', () => {
        submit.disabled = true;

            //EVENT
            imagen.addEventListener('input', activarBoton);
        }
    );
};





// -------------------------------------------------------------------------------------------- //
//FUNCIONES 
function activarBoton(e){

  if (e.target.value !== '') {
      submit.disabled = false;
  }else{
      submit.disabled = true;
  }
};