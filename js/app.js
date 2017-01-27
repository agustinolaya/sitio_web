function login(usuario, passwd){
    $.post("login.php", {txtUsuario:usuario, txtPassword:passwd}, function(data){
        return data;
    }, 'json');
}

$(document).ready(function(){
    $('#login-button').click(function(event) {
    event.preventDefault();
    var usuario = $('#txtUsuario').val();
    var passwd = $('#txtPassword').val();
    login(usuario, passwd);
    });
});