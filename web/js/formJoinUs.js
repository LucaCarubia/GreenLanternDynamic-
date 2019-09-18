document.forms["contact"].addEventListener("submit", function(e) {
        
    let error;

    let inputs = this;

    for (var i = 0; i < inputs.length; i++) {
        if(!inputs[i].value) {
            error = "Veuillez renseigner tous les champs.";
        }
    }

    if (error) {
        e.preventDefault();
        document.getElementById("error").innerHTML = error;
        return false;
    } else {
        alert('Formulaire Envoyé !');
    }
})