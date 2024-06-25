

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
