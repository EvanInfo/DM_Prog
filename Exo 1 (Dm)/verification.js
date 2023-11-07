
// Fonction qui vérifie si la date de début est avant la date de fin
function validateDates() {
    var Date_début = new Date(document.getElementById("date_debut").value);
    var Date_Fin = new Date(document.getElementById("date_fin").value);

    if (Date_Fin < Date_début) {
        alert("La date de fin ne peut pas être antérieure à la date de début.");
        return false;
    }
}
