$(document).ready(function() {
    $("form").on("submit", function(e) {
        e.preventDefault();

        console.log("Enviando petición AJAX...");

        let form = this;
        let formData = new FormData(form);

        $.ajax({
            url: "view/agregar_tienda/agregar.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(response) {
                console.log("Respuesta del servidor:", response);
                if (response.success) {
                    $(document).ready(function () {
                        toastr.success("Bienvenido al sistema", "Hola!", {
                            positionClass: "toast-top-right",
                            timeOut: 5000,
                            progressBar: true,
                            closeButton: true
                        });
                    }); 
                    form.reset();
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error en AJAX:", error);
                console.log("XHR:", xhr.responseText);
                alert("Error al contactar con el servidor.");
            }
        });
    });
});
