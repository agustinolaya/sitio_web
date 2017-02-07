function login(usuario, passwd) {
    $.post("login.php", { txtUsuario:usuario, txtPassword:passwd }, function(response) {
        var acceso = response.data.login;
        if (acceso == true) {
            var usuario = response.data.usuario;
            sessionStorage.userid = usuario.id;
            sessionStorage.username = usuario.username;
            sessionStorage.nombre = usuario.nombre;
            sessionStorage.apellidos = usuario.apellidos;
            sessionStorage.email = usuario.email;
            console.log(usuario);
        } else if (acceso == false) {
            $('login-form-msg').html('Usuario o contraseña incorrecta');
            $('login-form-msg').removeClass('oculto');
            $('#txtPassword').val('');
            console.warn('Acceso incorrecto');
        } else {
            $('login-form-msg').html('Error en la conexión a la base de datos');
            $('login-form-msg').removeClass('oculto');
            console.error('Error en la consulta');
        }
    });
}

$(document).ready(function(){

    $.post("login.php", function(response) {
        //Verificar sesión
        if(typeof(response.data.token) != 'undefined'){
            window.location.href='perfil.html';
        }
    });

    $('#login-button').click(function(event) {
    event.preventDefault();
    var usuario = $('#txtUsuario').val();
    var passwd = $('#txtPassword').val();
        if (usuario == '') {
            // quitar la clse oculto del div de error de txtusuario
            $('#txtUsuario+div').removeClass('oculto');
        } else {
            $('#txtUsuario+div').addClass('oculto');
        }
        if (passwd == '') {
            // quitar la clse oculto del div de error de txtusuario
            $('#txtPassword+div').removeClass('oculto');
        } else {
            $('#txtPassword+div').addClass('oculto');
        }
    if(usuario != '' && passwd != ''){
        login(usuario, passwd);
        }
    });
});