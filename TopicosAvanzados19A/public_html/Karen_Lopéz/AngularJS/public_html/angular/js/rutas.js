// control de rutas
app.config(['$locationProvider','$routeProvider', function ($locationProvider, $routeProvider) {
  $routeProvider
    .when("/",{templateUrl: "componentes/acceso/acceso.tmpl.html", controller: "controladorPrincipal"})
    .when("/login",{templateUrl: "componentes/acceso/acceso.tmpl.html", controller: "controladorPrincipal"})
    .when("/listado",{controller: 'controladorPrincipal', templateUrl: 'componentes/miComponente/listado.tmpl.html'})
    .when("/404", {templateUrl: "componentes/comunes/404.tmpl.html", controller: "controladorPrincipal"})
    .otherwise({redirectTo: '/404'});
}]);