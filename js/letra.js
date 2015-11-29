var min=15;
var max=30;



function increaseFontSize() {

   var p = document.getElementsByTagName('body');
   for(i=0;i<p.length;i++) {

      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {

         var s = 16;
      }
      if(s!=max) {
  		localStorage["tamañoActual"] = s + 1;
         s += 1;
      }
      p[i].style.fontSize = s+"px"

   }
    var q = document.getElementsByTagName('h1');
   for(i=0;i<q.length;i++) {

      if(q[i].style.fontSize) {
         var t = parseInt(q[i].style.fontSize.replace("px",""));
      } else {

         var t = 16;
      }
      if(t!=min) {
      	localStorage["tamañoActual"] = t + 1;
         t += 3;
      }
      q[i].style.fontSize = t+"px"

   }
}
function decreaseFontSize() {
   var p = document.getElementsByTagName('body');
   for(i=0;i<p.length;i++) {

      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {

         var s = 16;
      }
      if(s!=min) {
      	localStorage["tamañoActual"] = s - 1;
         s -= 1;
      }
      p[i].style.fontSize = s+"px"

   }
   var q = document.getElementsByTagName('h1');
   for(i=0;i<q.length;i++) {

      if(q[i].style.fontSize) {
         var t = parseInt(q[i].style.fontSize.replace("px",""));
      } else {

         var t = 16;
      }
      if(t!=min) {
      	localStorage["tamañoActual"] = t - 1;
         t -= 1;
      }
      q[i].style.fontSize = t+"px"

   }
}

function accesibilidad(){

	var p = document.getElementsByTagName('body');
	for(i=0;i<p.length;i++) {
      p[i].style.fontSize = localStorage["tamañoActual"]+"px";

   }
   var b = localStorage["tamañoActual"];
   b++;
   b++;
   b++;
   	var q = document.getElementsByTagName('h1');
	for(i=0;i<q.length;i++) {
		
      q[i].style.fontSize = b+"px";

   }
    if(localStorage["contraste"]=="true"){
   	accesibiliza();
   }

}


function accesibiliza(){
    var body = $("#cuerpo");// se ontiene el bodi de la página
    var class_name = "accesible"; // esta es la clase de css que se le va a asignar
    var bool = body.hasClass( "accesible" ); // se pregunta si tiene la clase, pasa saber si la pone o la quita
    if(bool){//ya la tiene. Remueve.
		body.removeClass(class_name); // remueve la clase
		localStorage["contraste"]=false;
    }
    else {//no tiene, agrega clase.
		body.addClass(class_name); // adiere la clase
		localStorage["contraste"]=true; 
    }
}