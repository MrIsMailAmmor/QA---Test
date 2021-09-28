$(document).ready(function () {
    let inputHTML = '<input type="text" name="reponse[]"  size="8"  autocomplete="off" required="" oninvalid="this.setCustomValidity("Remplissez cette case SVP")">'
    let inputHTMLLarge = '<input type="text" name="reponse[]"  size="12"  autocomplete="off" required="" oninvalid="this.setCustomValidity("Remplissez cette case SVP")>'
    $("p").click(function (e) {
        let targetEvent = e.target
        if (targetEvent.classList.contains("btnMot")) {
            const newItem = document.createElement('nobr');
            newItem.innerHTML = inputHTML;
            targetEvent.replaceWith(newItem)
        }
        else if (targetEvent.classList.contains("btnMotLarge")) {
            const newItem = document.createElement('nobr');
            newItem.innerHTML = inputHTMLLarge;
            targetEvent.replaceWith(newItem)
        }
    })
})