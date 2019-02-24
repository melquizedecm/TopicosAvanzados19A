$('.toggle').click(function(){ //cuando haga click cumplira la funcion
    $('.formulario').animate({ //dentro de la funcion accedera al formulario
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    },"slow");
});