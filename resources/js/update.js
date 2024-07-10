import './bootstrap';
import fr from "intl-tel-input/i18n/fr";


let currentStep = 0; // Etape initiale du formulaire
showTab(currentStep); // Display the current tab

function showTab(n) {
    // Fonction qui affiche le formulaire à l'étape précise
    let x = document.getElementsByClassName("step");
    console.log(x)
    x[n].style.display = "inline";
    //... and fix the Previous/Next buttons:
    if (n === 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n === (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Valider";
    } else {
        document.getElementById("nextBtn").innerHTML = "Suivant";
    }
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
    if (currentStep >= 2) {
        const phoneInput = document.querySelector("#phone");
        phoneInput.value = iti.getNumber();
        document.getElementById("form").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentStep);
}

function validateStep1() {
    return validateNom() && validatePrenom() && validateEmail() && validatePromotion() && validatePays() && validateVille() && validatePhone() ;
}

function validateStep2(){
    return validateSecteur() && validateService() && validateSite() && validatePhoto() && validateMessage();
}
function validateForm() {
    let valid = true;
    if (currentStep === 0) {
        valid = validateStep1();
    } else if (currentStep === 1) {
        valid = validateStep2();
    }

    // if (valid) {
    //     document.getElementsByClassName("step")[currentStep].className += " finish";
    // }

    return valid;
}



function validateNom() {
    const nom = document.getElementById('nom');
    const value = nom.value.trim();
    const nomError = document.getElementById('nomError');

    if (value.length === 0) {
        nom.classList.add("is-invalid");
        nomError.textContent = "Le nom est requis";
        nomError.style.display = "block";
        return false;
    } else {
        nom.classList.remove("is-invalid");
        nomError.style.display = "none";
        return true;
    }
}

function validatePrenom() {
    const prenom = document.getElementById('prenom');
    const prenomError = document.getElementById('prenomError')
    const value = prenom.value.trim();
    if (value.length === 0) {
        prenom.classList.add("is-invalid");
        prenomError.textContent = "Le prénom est requis";
        prenomError.style.display = "block";
        return false;
    } else {
        prenom.classList.remove("is-invalid");
        prenomError.style.display = "none";
        return true;
    }
}

function validatePays() {
    const pays = document.getElementById('pays');
    const paysError = document.getElementById('paysError')
    const value = pays.value.trim();
    if (value === "") {
        pays.classList.add("is-invalid");
        paysError.textContent = "Veuillez choisir un pays";
        paysError.style.display = "block";
        return false;
    } else {
        pays.classList.remove("is-invalid");
        paysError.style.display = "none";
        return true;
    }
}

function validatePromotion() {
    const promotion = document.getElementById('promotion');
    const promotionError = document.getElementById('promotionError');
    const value = promotion.value;

    if (value === "") {
        promotion.classList.add("is-invalid");
        promotionError.textContent = "Veuillez faire un choix";
        promotionError.style.display = "block";
        return false;
    } else {
        promotion.classList.remove("is-invalid");
        promotionError.style.display = "none";
        return true;
    }
}

function validateVille() {
    const ville = document.getElementById('ville');
    const villeError = document.getElementById('villeError')
    const value = ville.value.trim();
    if (value === "") {
        ville.classList.add("is-invalid");
        villeError.textContent = "Veuillez choisir une ville";
        villeError.style.display = "block";
        return false;
    } else {
        ville.classList.remove("is-invalid");
        villeError.style.display = "none";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const unique = checkEmailUniqueness(email.value.trim())
    console.log(unique)
    if (email.value.trim() === "") {
        email.classList.add('is-invalid');
        emailError.style.display = 'block';
        emailError.textContent = "L'email est requis.";
        return false;
    } else if (!emailRegex.test(email.value.trim())) {
        email.classList.add('is-invalid');
        emailError.style.display = 'block';
        emailError.textContent = "L'email n'est pas valide.";
        return false;
    }else{
        return true
    }
}

async function checkEmailUniqueness(email) {
    try {
        const response = await fetch('/check-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email: email })
        });
        return new Promise((resolve) =>{
            setTimeout(() => {
                const data =  response.json(); // Convertit la réponse en JSON
                resolve(data)
            }, 1)
        })

    } catch (error) {
        console.error('Error:', error);
        return false;
    }
}


function validatePhone() {
    const phone = document.getElementById('phone');
    const phoneError = document.getElementById('phoneError');
    //const value = phone.value.trim();
    if (phone.value.trim() === "" || !iti.isValidNumber() ) {
        phone.classList.add('is-invalid');
        phoneError.style.display = 'block';
        phoneError.textContent = "Le numéro de téléphone n'est pas valide.";
        return false;
    } else {
        phone.classList.remove('is-invalid');
        phoneError.style.display = 'none';

        return true;
    }
}

function validateService() {
    const service = document.getElementById('service');
    const serviceError = document.getElementById('serviceError')
    const value = service.value.trim();
    if (value.length === 0) {
        service.classList.add("is-invalid");
        serviceError.textContent = "Ce champs est requis";
        serviceError.style.display = "block";
        return false;
    } else {
        service.classList.remove("is-invalid");
        serviceError.style.display = "none";
        return true;
    }
}

function validateSecteur(){
    const secteur = document.getElementById('secteur');
    const secteurError = document.getElementById('secteurError')
    const value = secteur.value.trim();
    if (value === "") {
        secteur.classList.add("is-invalid");
        secteurError.textContent = "Veuillez choisir un secteur d'activité";
        secteurError.style.display = "block";
        return false;
    } else {
        secteur.classList.remove("is-invalid");
        secteurError.style.display = "none";
        return true;
    }
}

function validateMessage() {
    const message = document.getElementById('message');
    const value = message.value.trim();
    const messageError = document.getElementById('messageError');

    if (value.length < 10) {
        message.classList.add("is-invalid");
        messageError.textContent = "Veuillez entre une description valide";
        messageError.style.display = "block";
        return false;
    } else {
        message.classList.remove("is-invalid");
        messageError.style.display = "none";
        return true;
    }
}

function validateSite() {
    const siteInput = document.getElementById('site');
    const siteError = document.getElementById('siteError');
    const siteRegex = /^[^\s\/$.?#].\S*$/i;


    if (siteInput.value.trim() === "") {
        // Si le champ est vide, nous ne faisons rien et retournons true
        siteInput.classList.remove('is-invalid');
        siteError.style.display = 'none';
        return true;
    } else if (!siteRegex.test(siteInput.value.trim())) {
        // Si le champ n'est pas vide mais ne correspond pas au format requis
        siteInput.classList.add('is-invalid');
        siteError.style.display = 'block';
        siteError.textContent = "Veuillez entrer une URL de site valide.";
        return false;
    } else {
        // Si le champ n'est pas vide et correspond au format requis
        siteInput.classList.remove('is-invalid');
        siteError.style.display = 'none';
        return true;
    }
}

function validatePhoto() {
    const photoInput = document.getElementById('photo');
    const photoError = document.getElementById('photoError');

    // Vérifier si aucun fichier n'est sélectionné
    if (photoInput.files.length === 0 || !photoInput.files[0]) {
        photoInput.classList.remove('is-invalid');
        photoError.style.display = 'none';
        return true; // Le champ est valide car aucun fichier n'est sélectionné
    } else {
        const allowedExtensions = ['jpg', 'jpeg', 'png'];
        const file = photoInput.files[0];
        const extension = file.name.split('.').pop().toLowerCase();

        // Vérifier si l'extension du fichier est autorisée
        if (allowedExtensions.indexOf(extension) === -1) {
            photoInput.classList.add('is-invalid');
            photoError.style.display = 'block';
            photoError.textContent = "Veuillez sélectionner une image au format JPG, JPEG ou PNG.";
            return false; // Le fichier n'est pas une image valide
        } else {
            photoInput.classList.remove('is-invalid');
            photoError.style.display = 'none';
            return true; // Le fichier est une image valide
        }
    }
}



// Récupérer l'adresse ip du client sa position
function getIp(callback) {
    fetch('https://ipinfo.io/json?token=c20c9d51a874a9', { headers: { 'Accept': 'application/json' }})
        .then((resp) => resp.json())
        .catch(() => {
            return {
                country: 'us',
            };
        })
        .then((resp) => callback(resp.country));
}
const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/utils.js",
    autoPlaceholder: "polite",
    initialCountry: "auto",
    nationalMode: true,
    separateDialCode: true,
    geoIpLookup: getIp,
    i18n: fr
});

// Exposer la fonction globalement
window.nextPrev = nextPrev;


const selectPays = document.getElementById('pays');
const selectVille = document.getElementById('ville');

// Écoutez les changements dans le sélecteur de pays
selectPays.addEventListener('change', function() {
    const selectedPaysId = this.value;
    selectVille.value = ""

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










