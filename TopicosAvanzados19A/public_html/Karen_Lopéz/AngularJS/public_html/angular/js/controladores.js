'use strict';

// controlador principal
app.controller('controladorPrincipal', ['$rootScope', '$scope', 'sesionesControl', 'mensajesFlash' , function($rootScope,$scope, sesionesControl, mensajesFlash){
    $rootScope.alerts = [];
    $scope.nombre = "";
    var usuarioInfo = sesionesControl.getList("usuario");
    if(usuarioInfo != null){
        $scope.nombre = usuarioInfo.nombre;
    }
    $scope.inf = "";

    $scope.closeAlert = function(index) {
      $scope.alerts.splice(index, 1);
      sesionesControl.unset("mensaje");
    };

    $scope.volver = function() {
        window.history.back();
    }

}]);

// controlador para la navegacion
app.controller('menuControlador', ['$scope', '$location','sesionesControl', function ($scope, $location, sesionesControl) {  
  $scope.navClass = function (page, isParent) {    
    var currentRoute = $location.path().substring(1) || 'home';
    if(isParent){        
        return currentRoute.indexOf(page) != -1 ? 'active' : '';
    }else{
        if(currentRoute.indexOf(page) != -1){
          return 'active'
        }else{
          return (currentRoute.indexOf(page.substring(0,page.length-1)) || currentRoute.indexOf(page.substring(0,page.length-2))) != -1 ? 'active' : ''; 
        }
    }
    
  };

  $scope.expand = function (page) {
    var currentRoute = $location.path().substring(1) || 'home';
    var expandeStyle = currentRoute.indexOf(page) != -1 ? 'block' : 'hidden';
    return expandeStyle;
  };  
  
  // Efecto slide en menu principal
  angular.element(document).ready(function () {    
    $('.sidebar-toggle-box .fa-bars').click(function (e) {            
            $(".leftside-navigation").niceScroll({
                cursorcolor: "#00a3e1",
                cursorborder: "0px solid #fff",
                cursorborderradius: "0px",
                cursorwidth: "3px"
            });
            $('#sidebar').toggleClass('hide-left-bar');
            if ($('#sidebar').hasClass('hide-left-bar')) {
                $(".leftside-navigation").getNiceScroll().hide();
            }
            $(".leftside-navigation").getNiceScroll().show();
            $('#main-content').toggleClass('merge-left');
            e.stopPropagation();
            if ($('#container').hasClass('open-right-panel')) {
                $('#container').removeClass('open-right-panel')
            }
            if ($('.right-sidebar').hasClass('open-right-bar')) {
                $('.right-sidebar').removeClass('open-right-bar')
            }

            if ($('.header').hasClass('merge-header')) {
                $('.header').removeClass('merge-header')
            }
    });

    /*==Left Navigation Accordion ==*/
    if ($.fn.dcAccordion) {
        $('#nav-accordion').dcAccordion({
            eventType: 'click',
            autoClose: true,
            saveState: true,
            disableLink: true,
            speed: 'slow',
            showCount: false,
            autoExpand: true,
            classExpand: 'dcjq-current-parent'
        });
    }
    /*==Slim Scroll ==*/
    if ($.fn.slimScroll) {
        $('.event-list').slimscroll({
            height: '305px',
            wheelStep: 20
        });
        $('.conversation-list').slimscroll({
            height: '360px',
            wheelStep: 35
        });
        $('.to-do-list').slimscroll({
            height: '300px',
            wheelStep: 35
        });
    }
    /*==Nice Scroll ==*/
    if ($.fn.niceScroll) {
        $(".leftside-navigation").niceScroll({
            cursorcolor: "#00a3e1",
            cursorborder: "0px solid #fff",
            cursorborderradius: "0px",
            cursorwidth: "3px"
        });

        $(".leftside-navigation").getNiceScroll().resize();
        if ($('#sidebar').hasClass('hide-left-bar')) {
            $(".leftside-navigation").getNiceScroll().hide();
        }
        $(".leftside-navigation").getNiceScroll().show();

        $(".right-stat-bar").niceScroll({
            cursorcolor: "#00a3e1",
            cursorborder: "0px solid #fff",
            cursorborderradius: "0px",
            cursorwidth: "3px"
        });
    }
    /*==Sidebar Toggle==*/
    $(".leftside-navigation .sub-menu > a").click(function () {
        var o = ($(this).offset());
        var diff = 80 - o.top;
        if (diff > 0)
            $(".leftside-navigation").scrollTo("-=" + Math.abs(diff), 500);
        else
            $(".leftside-navigation").scrollTo("+=" + Math.abs(diff), 500);
    });

    $('.toggle-right-box .fa-bars').click(function (e) {
        $('#container').toggleClass('open-right-panel');
        $('.right-sidebar').toggleClass('open-right-bar');
        $('.header').toggleClass('merge-header');

        e.stopPropagation();
    });

    $('.header,#main-content,#sidebar').click(function () {
        if ($('#container').hasClass('open-right-panel')) {
            $('#container').removeClass('open-right-panel')
        }
        if ($('.right-sidebar').hasClass('open-right-bar')) {
            $('.right-sidebar').removeClass('open-right-bar')
        }

        if ($('.header').hasClass('merge-header')) {
            $('.header').removeClass('merge-header')
        }
    });
    $('.minimal input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal',
        increaseArea: '20%'
    });
  });
}]);