app.factory("sesionesControl", function(){
    return{
        get: function(key){
            return sessionStorage.getItem(key);
        },
        set: function(key,val){
            return sessionStorage.setItem(key,val);
        },        
        getList: function(key){
            return JSON.parse(sessionStorage.getItem(key));
        },
        setList: function(key,list){
            return sessionStorage.setItem(key, JSON.stringify(list));
        },        
        unset: function(key){
            return sessionStorage.removeItem(key);
        },
        clear: function(){
            return sessionStorage.clear();
        }
    }
});

app.factory("mensajesFlash", ['$rootScope', '$window', function($rootScope, $window){
    return {
        show : function(mensaje, tipo){
            $rootScope.alerts.splice(0,$rootScope.alerts.length);
            $window.scrollTo(0,0);
            $rootScope.alerts.push({type: tipo, msg: mensaje, visto: true});            
        },        
        clear : function(index){
            $rootScope.mensaje = "";
            $rootScope.alerts.splice(index, 1);
        }
    }
}]);
