app.factory("accesoServicio", ['$http', '$location', 'sesionesControl', 'mensajesFlash', 'urls', function($http, $location, sesionesControl, mensajesFlash, urls)
{
    var cacheSession = function(datos){
        sesionesControl.set("usuarioLogin", true);
        var usuario ={
          nombre: datos.usuario.nombre,
          color: datos.usuario.color
        };
        sesionesControl.setList("usuario",usuario);
    }
    var unCacheSession = function(){
        sesionesControl.unset("usuarioLogin");
        sesionesControl.unset("usuario");
    }

    return{
        login : function(usuario){
            var passwordEnc = "" + CryptoJS.SHA512(usuario.password);
            return $http({
                url: urls.servidor + 'login.php',
                method: "POST",
                data:  $.param({usuario:usuario.email, password:passwordEnc}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data){
                mensajesFlash.clear();
                cacheSession(data);
                sesionesControl.unset("mensaje");
                $location.path('/listado');
            }).error(function(data,status){
                if(status==400){
                    mensajesFlash.show(data.mensaje,"danger");
                }
            })
        },
        logout : function()
        {
            sesionesControl.clear();
            sesionesControl.setList("mensaje", {texto:"¡Hasta pronto!", tipo:"success"});
            $location.path("/login");
        }
    }
}]); 
