$(document).ready(function() {
    $("#btnGuardar").click(function(e) {
        e.preventDefault();

        mostrarDato();
        location.href = "index.html";
        alert("Registro completo, por favor inicia sesión");
    }); // end #btnLogin

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('registro'));

        await fetch('assets/data/reg.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                //console.log(response.dato);
                if (response.dato == 'ok') {
                    location.href = "index.html";
                    alert("Registro completo, por favor inicia sesión");

                } else {
                    alert("Registro incompleto");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } // end mostrarDato
});