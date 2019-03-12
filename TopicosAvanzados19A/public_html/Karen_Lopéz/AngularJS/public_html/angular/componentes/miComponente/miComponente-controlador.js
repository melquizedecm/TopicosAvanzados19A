// mi componente - controlador
app.controller("miComponenteControlador", ['$scope', 'miComponenteServicio', function($scope, miComponenteServicio){
    var promise = miComponenteServicio.obtieneLista();
    promise.then(function(data) {
        $scope.info = data.entradas;
      }, function(error) {
           $scope.loading = false;
    });
    
}]);
