// variables
var palabra0=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var boton=document.getElementById("boton");
var arraypalabras=["baloncesto", "futbol", "tenis", "boxeo", "padel"];
// letra aleatoria
var letraAleatoria=Math.floor(Math.random()*(arraypalabras.length));
var adivinar = arraypalabras[letraAleatoria];


console.log(arraypalabras);
console.log(adivinar);


var salirBucle=false;
var acertado=false;
Cambiamos la letra por un numero en la cadena --empieza por 0--
for (var i = 0; i < adivinar.length; i++) {
   if (adivinar.charAt(i)==letrausuario) {
     palabra0[i]=adivinar.charAt(i);
     acertado=true;
     aciertos++;
     console.log(aciertos);
   }
  }

  // Funcion de Comprobacion de letra introducida
  function comprobarletra()() {
      var acierto=false;
      var palabras="";
      palabras = letraUsuario.value;
        if (isNaN(palabras)) {
          for (var i = 0; i < adivinar.length; i++) {
            if (adivinar.charAt(i)==palabras) {
              palabra0[i]=adivinar.charAt(i);
              acierto=true;
              aciertos++;
          }
          caja2.value=palabra0;
          if (aciertos>=adivinar.length) {
                cuadro2.value="Escribe una palabra "+adivinar
                boton=document.getElementById("boton");
          } else if (intentos>=5) {
                cuadro2.value="Error";
                boton=document.getElementById("boton");
          }
              letraUsuario.value="";
          }
          if (acierto==true) {
                cuadro.value="Correcto";
          } else {
                cuadro.value="Error";
                intentos++;
                cuadro3.value=cuadro3.value+palabras+"-";
          }
           console.log(palabra0);
           console.log(intentos);
        }  else {
              cuadro.value="Introduce una letra valida";

        }
    }
