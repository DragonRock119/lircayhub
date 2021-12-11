// Enter the words to be filtered in the line below:
var swear_words_arr=new Array("puta","mierda","fuck");

var swear_alert_arr=new Array;
var swear_alert_count=0;
function reset_alert_count()
{
 swear_alert_count=0;
}
function validate_text()
{
 reset_alert_count();
 var compare_text=document.form1.Mensaje.value;
 for(var i=0; i<swear_words_arr.length; i++)
 {
  for(var j=0; j<(compare_text.length); j++)
  {
   if(swear_words_arr[i]==compare_text.substring(j,(j+swear_words_arr[i].length)).toLowerCase())
   {
    swear_alert_arr[swear_alert_count]=compare_text.substring(j,(j+swear_words_arr[i].length));
    swear_alert_count++;
   }
  }
 }
 var alert_text="";
 for(var k=1; k<=swear_alert_count; k++)
 {
  alert_text+="\n" + "(" + k + ")  " + swear_alert_arr[k-1];
 }
 if(swear_alert_count>0)
 {
  alert("El formulario no pudo ser enviado por que se encontraron palabras inadecuadas:\n_______________________________\n" + alert_text + "\n_______________________________");
  document.form1.Mensaje.select();
 }
 else
 {
  document.form1.submit();
 }
}
function select_area()
{
 document.form1.Mensaje.select();
}
window.onload=reset_alert_count;

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    if(true) {
        validate_text();
      return;
    }
  }