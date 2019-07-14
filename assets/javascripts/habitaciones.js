

    $.ajax({
    url: "assets/php/habitaciones.php",
    type: "POST",
    data: {action: 'consulta'},
    success: function(output) {
    	alert (output);
             // En caso de que se ejecute
            /*$('#TbHab > tbody').html(data);*/
       }
    });
   

