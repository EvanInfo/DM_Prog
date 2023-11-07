function Identifiant() {
    var identifiantInput = document.getElementById("identifiant");
    var identifiant = identifiantInput.value;
    var identifiantError = document.getElementById("identifiantError");

    // Validation de la longueur minimale
    if (identifiant.length < 5) {
        identifiantError.textContent = "L'identifiant doit contenir au moins 5 caractères.";
        identifiantInput.classList.add("error"); // Ajoute la classe CSS d'erreur
        return false;
    }

    // Validation des caractères autorisés (lettres, chiffres, et trait de soulignement)
    var pattern = /^[A-Za-z0-9_]+$/;
    if (!pattern.test(identifiant)) {
        identifiantError.textContent = "L'identifiant ne doit contenir que des lettres, des chiffres et le trait de soulignement.";
        identifiantInput.classList.add("error"); // Ajoute la classe CSS d'erreur
        return false;
    }

    // Aucune erreur de validation, effacez le message d'erreur et supprimez la classe CSS d'erreur en cas de succès
    identifiantError.textContent = "";
    identifiantInput.classList.remove("error"); // Supprime la classe CSS d'erreur
    return true;
}


  function Password() {
    var passwordInput = document.getElementById("password");
    var password = passwordInput.value;
    var passwordError = document.getElementById("passwordError");
  
    // Validation de la longueur minimale
    if (password.length < 6) {
      passwordError.textContent = "Le mot de passe doit contenir au moins 6 caractères.";
      passwordInput.classList.add("error");
      return false;
    }
  
    // Aucune erreur de validation, effacez le message d'erreur et les classes d'erreur
    passwordError.textContent = "";
    passwordInput.classList.remove("error");
    return true;
  }
  
  function Email() {
    var emailInput = document.getElementById("email");
    var emailConfirmInput = document.getElementById("email-confirm");
    var emailError = document.getElementById("emailError");
  
    var email = emailInput.value;
    var emailConfirm = emailConfirmInput.value;

    // Expression régulière pour valider une adresse e-mail
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
    
    
    
    // Vérification si l'email n'est pas vide
     if (email.trim() === "") {
        emailError.textContent = "L'adresse e-mail ne peut pas être vide.";
        emailInput.classList.add("error");
        emailConfirmInput.classList.add("error");
        return false;
      }
    // Vérification si les adresses e-mail sont identiques
    if (email !== emailConfirm) {
      emailError.textContent = "Les adresses e-mail ne correspondent pas.";
      emailInput.classList.add("error");
      emailConfirmInput.classList.add("error");
      return false;
    }
    
    // Vérification du format de l'e-mail
    if (!emailPattern.test(email)) {
        emailError.textContent = "L'adresse e-mail n'est pas valide.";
        emailInput.classList.add("error");
        emailConfirmInput.classList.add("error");
        return false;
      }
    // Aucune erreur de validation, effacez le message d'erreur et les classes d'erreur
    emailError.textContent = "";
    emailInput.classList.remove("error");
    emailConfirmInput.classList.remove("error");
    return true;
  }
  
function validateForm() {
    var isIdentifiantValid = Identifiant();
    var isPasswordValid = Password();
    var isEmailValid = Email();

    // Vérifiez si toutes les validations sont réussies
    if (isIdentifiantValid && isPasswordValid && isEmailValid) {
        return true; // Autorise la soumission du formulaire
    } else {
        return false; // Bloque la soumission du formulaire en cas d'échec de validation
    }
}
  
  