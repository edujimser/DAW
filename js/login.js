
function ValidarContraseña (valor){


    var myregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; 
       if(myregex.test(valor)){
           alert(valor+" Confirmado!");
           return true;        
       }else{
          alert(valor+" NO es valido!");
           return false;        
       }   
     }
    
      function checkForm(form){
        if(form.username.value == "") {
          alert("Error : Debe indicar su Usuario!");
          form.username.focus();
          return false;
        }
        re = /^\w+$/;
        if(!re.test(form.username.value)) {
          alert("Error: El nombre de usuario debe contener únicamente letras o números!");
          form.username.focus();
          return false;
        }
        if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
          if(!checkPassword(form.pwd1.value)) {
            alert("La contraseña no es válida!");
            form.pwd1.focus();
            return false;
          }
        } else {
          alert("Error: las contraseñas no coinciden!");
          form.pwd1.focus();
          return false;
        }
        return true;
      }
    
    <form method="POST" action="/.../" onsubmit="checkForm(this); return false;">
    <p>Usuario: <input type="text" name="username"></p>
    <p>Contraseña: <input type="password" name="pwd1"></p>
    <p>Confirmar Contraseña: <input type="password" name="pwd2"></p>
    <p><input type="submit" value="verificar"></p>
    </form>