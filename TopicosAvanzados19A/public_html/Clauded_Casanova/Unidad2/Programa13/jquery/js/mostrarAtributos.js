

/* ejemplo 4
 * 
 * en esta parte se le asigna valores a las variabes usuario y password
 */
var usuario="";
var password="";

$("#boton").click(function(){
   
    usuario= $("[type='text']").val();
    password= $("[type='password']").val();
    
    /*muestra el usario y el password en la parte de inspeccionar de la pagina*/
    console.log(usuario);
    console.log(password);
});
