$( function() {
    // Aquí va todo lo del form
    
    $("#contact-form").bind("submit",function(){
        // Capturamnos el boton de envío
        var btnEnviar = $("#contact-form-btn");
        var formData = new FormData(this);
        
        
         if(isFormValid()){
             $("#errorMessage").addClass("d-none");
         }
         else{
            $("#errorMessage").removeClass("d-none");
            return false;
         }
         

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            beforeSend: function(){
                btnEnviar.val("Enviando...");
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
                btnEnviar.val("Enviar");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
                if(data.success){
                    showAlert(true, 'Recibimos tu información', 'Hemos recibido tu información, trataremos de responderte lo antes posible. Gracias.');
                    $("#contact-form").trigger("reset");
                }
                else{
                    showAlert(false, 'Algo salió mal', data.message);
                }
            },
            error: function(data){
                showAlert(false, 'Algo salió mal', 'No pudimos recibir la información, por favor, vuelve a intentar más tarde.');
            }
        });
        return false;
    });

    //showAlert(true, 'Hola, Marco', 'Se está ejecutando contacto.js. En ese archivo escríbete la magia pa que jale este formulario. También ahí está el ejemplo pa ejecutar esta alerta. <br><br> Si un input tiene error de que está vació, etc, solo agrega la clase input-error y css hará el resto. El input NOMBRE la tiene activa pa demostración nomás. <br><br> Ahí disculpa mi fea documentación :)');

    $("#contacto-asunto-dropdown").on("change", function(){
        var cotizacionOptionID =1;
        var selectedOption = $("option:selected", this);
        var selectedoptionID = selectedOption.data("option-id");

        if(selectedoptionID == cotizacionOptionID){
            $(".only-cotizacion").removeClass("hidden");
        }
        else{
            $(".only-cotizacion").addClass("hidden");
        }
    });
});

function showAlert(success, title, message) {
    var alert = $('#alert');
    var alertTitle = $('#titleAlert');
    var alertMessage = $('#messageAlert');
    alertTitle.text(title);
    alertMessage.html(message);
    if ( success ) {
        alert.addClass('success');
    } else {
        alert.addClass('error');
    }
    alert.css('display', 'flex');
}

function closeAlert() {
    $('#alert').css('display', 'none');
    $('#alert').removeClass('success');
    $('#alert').removeClass('error');
    $('#titleAlert').text('');
    $('#messageAlert').text('');


}

function isFormValid(){
    var isFormValid = true;
    $('#contact-form input,select,textarea').each(function() {
        if ($(this).val() == "") {
            isFormValid = false;
            $(this).addClass("input-error");
        }
        else{
            $(this).removeClass("input-error");
        }
     });

     return isFormValid

}