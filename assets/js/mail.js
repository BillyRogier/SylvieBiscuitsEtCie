$(".contact_form").submit(function (event) {
    event.preventDefault();
    $("#btn_submit").val("");
    $(".loader_mail").addClass("active");
    var form = $(this);
    $.ajax({
        type: "POST",
        url: "contact_form.php",
        method: "post",
        data: form.serialize(),
        success: function (result) {
            setTimeout(function () {
                $(".loader_mail").removeClass("active");
                if (result == "success") {
                    $("#btn_submit").val("Message bien envoyé !");
                    $(".input-contact").val("");
                    $("textarea").val("");
                    setTimeout(function () {
                        $("#btn_submit").val("envoyé");
                    }, 2000);
                } else {
                    $("#btn_submit").val("Erreur d'envoie !");
                    setTimeout(function () {
                        $("#btn_submit").val("envoyé");
                    }, 2000);
                }
            }, 1000);
        },
    });
});
