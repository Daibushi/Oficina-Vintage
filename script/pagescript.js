$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

$(document).ready(function(){
    $("#produto").hover(function(){
        $(this).animate('bounce', {times:2}, 200);
    });
});

function validateName() {

    var x = document.forms["cadastro"]["nome"].value;
    if (x == null || x == "") {
        alert("O campo nome deve ser preenchido!");
        return false;
    }
    var x = document.forms["cadastro"]["email"].value;
    if (x == null || x == "") {
        alert("O campo email deve ser preenchido!","Nome vazio");
        return false;
    }
    var x = document.forms["cadastro"]["cpf"].value;
    if (x == null || x == "") {
        alert("O campo cpf deve ser preenchido!","Nome vazio");
        return false;
    }
    var x = document.forms["cadastro"]["telefone"].value;
    if (x == null || x == "") {
        alert("O campo telefone deve ser preenchido!","Nome vazio");
        return false;
    }
    var x = document.forms["cadastro"]["endereco"].value;
    if (x == null || x == "") {
        alert("O campo endereço deve ser preenchido!","Nome vazio");
        return false;
    }
    var x = document.forms["cadastro"]["cidade"].value;
    if (x == null || x == "") {
        alert("O campo cidade deve ser preenchido!","Nome vazio");
        return false;
    }
    var x = document.forms["cadastro"]["cep"].value;
    if (x == null || x == "") {
        alert("O campo cep deve ser preenchido!","Nome vazio");
        return false;
    }

}
function validate() {
    
}