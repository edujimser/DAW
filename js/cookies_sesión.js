
// La función setCookie la utilizamos para establecer una cookie en el navegador
//Recibimos tres argumentos
function setCookie(name, value, days) {

    //La función primero declara una variable expires y la inicializa a una cadena vacía
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    //La cadena se construye concatenando el nombre, el valor, la fecha de caducidad y la ruta de la cookie
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
    // path=/  significa que la cookie estará disponible para todas las páginas del dominio

    //Ejemplo de creación de cookie
    setCookie('session', '12345', 3);
    //Redirigir a la pagina home
    window.location.href = '/view.home.php';
    
};
