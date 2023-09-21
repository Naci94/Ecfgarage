// Attendez que le document soit prêt
document.addEventListener("DOMContentLoaded", function () {
    // Code JavaScript ici

    // Exemple : Afficher une alerte lorsque le bouton est cliqué
    const myButton = document.querySelector("#my-button");
    if (myButton) {
        myButton.addEventListener("click", function () {
            alert("Le bouton a été cliqué !");
        });
    }

    // Autres fonctionnalités JavaScript ici
});
