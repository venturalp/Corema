function validaVazio(campo){
    aux = (!(campo.val().trim() == ""));
    campo.removeClass("campo_valido", "campo_invalido");

    if (aux)
        campo.addClass("campo_valido");
    else
        campo.addClass("campo_invalido");

    return aux;
}

function validaEmail(campo){
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    aux = filtro.test(campo.val());

    if (aux)
        campo.addClass("campo_valido");
    else
        campo.addClass("campo_invalido");

    return aux;
}

function validaTelefone(campo){
    aux = (!(campo.cleanVal().trim() == ""));

    campo.removeClass("campo_valido", "campo_invalido");

    if (aux)
        campo.addClass("campo_valido");
    else
        campo.addClass("campo_invalido");
    return aux();
}
