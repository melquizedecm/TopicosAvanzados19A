// controlador de acceso
app.controller("accesoControlador", ['$scope', 'accesoServicio', function($scope, accesoServicio){
    $scope.usuario = { email : "", password : "" };
    accesoServicio.mensaje = "";
    $scope.login = function(){
      $scope.loading = true;
      var promise = accesoServicio.login($scope.usuario);
      promise.then(function(data) {
        $scope.loading = false;
      }, function(error) {
         $scope.usuario.password = "";
         $scope.loading = false;
      });
    }  

    $scope.logout = function(){
      accesoServicio.logout();
    };
}]);
