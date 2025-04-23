
function login() {
    console.log("entro al js");
    var usuario = $("#usuario").val()||"";
    var pass = $("#pass").val()||"";

    if(usuario == '' || pass ==''){
        toastr.warning("Datos Incompletos", "Advertencia!", {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
        return false;
    }

	var formData = new FormData();
	formData.append("usuario", usuario);
	formData.append("pass", pass);

    $.ajax({
        url: "view/login_tienda/login.php", // URL que apunta al backend que procesará los datos
        type: "POST",
        data: formData,
        processData: false, // Importante para manejar datos binarios
        contentType: false, // Importante para enviar datos con FormData
        dataType: "json", // Esperamos una respuesta JSON
        success: function(data) {
            console.log("Respuesta del backend:", data);
            if (data.EVENTO === 'OK') {
                console.log("SI HAY TIENDA");
                window.location.href ="DetalleTienda";
            }else if (data.EVENTO === 'NO_EXISTE'){
                console.log("NO HAY TIENDA");
                    toastr.error("Usuario o Contraseña incorrecto.", "Error", {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    });
            } else {
                toastr.error(data.mensaje, "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5000,
                    closeButton: true,
                    progressBar: true
                });
            }
        },
        error: function(xhr, status, error) {
            console.log("error desc")
        }
    });
}