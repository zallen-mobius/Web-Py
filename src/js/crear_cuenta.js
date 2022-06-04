
$("#usuario").keyup(function(){              
    var ta = $("#usuario");
    letras = ta.val().replace(/ /g, "");
    ta.val(letras)
});