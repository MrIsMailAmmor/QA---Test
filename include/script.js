$(document).ready(function () {
    $("#nextBtn").click(function () {
        texte = $("#textarea").val();
        $("#paragraphe").html(texte);
        $("#nextBtn").hide()
        $("#first-row").hide()
        $("#container").css('visibility', 'visible');
    })
    let message = ""
    $("#delete").click(function () {
        document.querySelectorAll("#words td").forEach(elem => {
            elem.parentElement.remove()
        })
        message = ""
        $("#textCache").val(message)
    })
    $("#paragraphe").mouseup(selectedText);

    function selectedText() {
        const selectedWord = window.getSelection().toString().trim();
        if (selectedWord.length === 0) {
            return;
        }
        message += selectedWord + ","
        $("#textCache").val(message)
    }
});