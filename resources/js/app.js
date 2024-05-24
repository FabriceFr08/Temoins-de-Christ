import './bootstrap';


let currentStep = 0; // Etape initiale du formulaire
showTab(currentStep); // Display the current tab

function showTab(n) {
    // Fonction qui affiche le formulaire à l'étape précise
    let x = document.getElementsByClassName("step");
    console.log(x)
    x[n].style.display = "inline";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n === (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Valider";
    } else {
        document.getElementById("nextBtn").innerHTML = "Suivant";
    }
    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}

export function nextPrev(n) {
    // This function will figure out which tab to display
    let x = document.getElementsByClassName("step");
    // Exit the function if any field in the current tab is invalid:
    if (n === 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentStep].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentStep = currentStep + n;
    // if you have reached the end of the form...
    if (currentStep >= x.length) {
        // ... the form gets submitted:
        document.getElementById("form").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentStep);
}

function validateForm() {

    // This function deals with validation of the form fields
    var x, y, i ,valid = true;
    x = document.getElementsByClassName("step");
    y = x[currentStep].getElementsByTagName("input");
    if (!validateNom() || !validatePrenom() || !validateEmail() || !validatePays() || !validateVille()) {
        valid = false;
    }
    console.log(y)

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentStep].className += " finish";
    }
    return valid; // return the valid status
}




function validateNom() {
    const nom = document.getElementById('nom');
    const value = nom.value.trim();
    const nomError = document.getElementById('nomError');

    if (value.length === 0) {
        nom.classList.add("invalid");
        nomError.textContent = "Le nom est requis";
        nomError.style.display = "block";
        return false;
    } else {
        nom.classList.remove("invalid");
        nomError.style.display = "none";
        return true;
    }
}

function validatePrenom() {
    const prenom = document.getElementById('prenom');
    const prenomError = document.getElementById('prenomError')
    const value = prenom.value.trim();
    if (value.length === 0) {
        prenom.classList.add("invalid");
        prenomError.textContent = "Le prénom est requis";
        prenomError.style.display = "block";
        return false;
    } else {
        prenom.classList.remove("invalid");
        prenomError.style.display = "none";
        return true;
    }
}

function validatePays() {
    const pays = document.getElementById('pays');
    const paysError = document.getElementById('paysError')
    const value = pays.value.trim();
    if (value === '') {
        pays.classList.add("invalid");
        paysError.textContent = "Veuillez choisir un pays";
        paysError.style.display = "block";
        return false;
    } else {
        pays.classList.remove("invalid");
        paysError.style.display = "none";
        return true;
    }
}

function validateVille() {
    const ville = document.getElementById('ville');
    const villeError = document.getElementById('villeError')
    const value = ville.value.trim();
    if (value === '') {
        ville.classList.add("invalid");
        villeError.textContent = "Veuillez choisir une ville";
        villeError.style.display = "block";
        return false;
    } else {
        ville.classList.remove("invalid");
        villeError.style.display = "none";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById('email');
    const emailError = document.getElementById('emailError')

    const value = email.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email validation
    if (!emailRegex.test(value)) {
        email.classList.add("invalid");
        emailError.textContent = "Veuillez saisir un email valide";
        emailError.style.display = "block";
        return false;
    } else {
        email.classList.remove("invalid");
        emailError.style.display = "none";
        return true;
    }
}

function validatePhone() {
    const phone = document.getElementById('phone');
    const value = phone.value.trim();
    if (value === "") {
        // Check if a phone number has been selected using intl-tel-input
        if (phone.querySelector(".iti__selected-flag")) {
            phone.classList.remove("invalid");
            return true;
        } else {
            phone.classList.add("invalid");
            return false;
        }
    } else {
        // Assuming you're also validating the input value itself (not just checking if a number has been selected)
        // You can add additional validation logic here if needed
        return true;
    }
}

function validateService() {
    const service = document.getElementById('service');
    const serviceError = document.getElementById('serviceError')
    const value = service.value.trim();
    if (value.length === 0) {
        service.classList.add("invalid");
        serviceError.textContent = "Ce champs est requis";
        serviceError.style.display = "block";
        return false;
    } else {
        service.classList.remove("invalid");
        serviceError.style.display = "none";
        return true;
    }
}

function validateSecteur(){
    const secteur = document.getElementById('secteur');
    const secteurError = document.getElementById('secteurError')
    const value = secteur.value.trim();
    if (value === '') {
        secteur.classList.add("invalid");
        secteurError.textContent = "Veuillez choisir un secteur d'activité";
        secteurError.style.display = "block";
        return false;
    } else {
        secteur.classList.remove("invalid");
        secteurError.style.display = "none";
        return true;
    }
}

function validateMessage() {
    const message = document.getElementById('message');
    const value = message.value.trim();
    const messageError = document.getElementById('messageError');

    if (value.length < 25) {
        message.classList.add("invalid");
        messageError.textContent = "Veuillez entre une description valide";
        messageError.style.display = "block";
        return false;
    } else {
        message.classList.remove("invalid");
        messageError.style.display = "none";
        return true;
    }
}



// function validateForm() {
//     var valid = true;
//
//     // Validate each field separately
//     if (!validateNom()) valid = false;
//     if (!validatePrenom()) valid = false;
//     if (!validateEmail()) valid = false;
//     if (!validatePhone()) valid = false;
//
//     // If the valid status is true, mark the step as finished and valid:
//     if (valid) {
//         document.getElementsByClassName("step")[currentStep].classList.add("finish");
//     }
//
//     return valid;
// }




// Function to populate the select element with country options
// Function to fetch countries and populate the select element
async function fetchCountries() {
    try {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();

        populateCountrySelect(countries);
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
}

// Function to populate the select element with country options
function populateCountrySelect(countries) {
    // Sort countries alphabetically by their common name
    countries.sort((a, b) => {
        if (a.name.common < b.name.common) return -1;
        if (a.name.common > b.name.common) return 1;
        return 0;
    });

    const select = document.getElementById('countrySelect');
    countries.forEach(country => {
        const option = document.createElement('option');
        option.value = country.cca2; // Code du pays
        option.textContent = country.name.common; // Nom du pays
        option.style.backgroundImage = `url(${country.flags.svg})`; // Drapeau du pays
        option.style.backgroundRepeat = 'no-repeat';
        option.style.backgroundPosition = 'left center'; // Positionnement du drapeau
        option.style.paddingLeft = '25px'; // Ajustement du padding pour laisser de l'espace pour le drapeau
        select.appendChild(option);
    });
}

const input = document.querySelector("#phone");
console.log(input)
window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.8/build/js/utils.js",
});


// Call the function to fetch and populate countries on page load
document.addEventListener('DOMContentLoaded', fetchCountries);

// Exposer la fonction globalement
window.nextPrev = nextPrev;


$(document).ready(function() {
    // Masquer toutes les options du select des villes au chargement de la page
    $('#ville option').hide();

    // Initialiser le select2 pour le select des pays
    $('#pays').select2({
        placeholder: "Sélectionnez un pays",
        width: '100%'
    }).on('change', function() {
        const selectedPaysId = $(this).val();
        const villeSelect = $('#ville');

        // Masquer toutes les options du select des villes
        villeSelect.find('option').hide();

        // Afficher seulement les options correspondant au pays sélectionné
        villeSelect.find('option[data-pays="' + selectedPaysId + '"]').show();

        // Rafraîchir le champ de sélection des villes avec Select2
        villeSelect.val(null).trigger('change');
    });

    // Initialiser le select2 pour le select des villes
    $('#ville').select2({
        placeholder: "Sélectionnez une ville",
        width: '100%',
    });
});

const selectPays = document.getElementById('pays');
const selectVille = document.getElementById('ville');


// Écoutez les changements dans le sélecteur de pays
selectPays.addEventListener('change', function() {
    const selectedPaysId = this.value;

    // Parcourez toutes les options du sélecteur de ville
    Array.from(selectVille.options).forEach(function(option) {
        // Affichez l'option si le pays correspond à l'ID sélectionné ou si aucune sélection n'est faite
        if (option.dataset.pays === selectedPaysId || selectedPaysId === '') {
            option.style.display = 'block';
        } else {
            option.style.display = 'none';
        }
    });
});



$('#secteur').select2({
    placeholder: "Sélectionnez un secteur",
    width: '100%',
});









