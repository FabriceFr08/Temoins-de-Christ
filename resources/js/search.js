const pays = document.getElementById('pays');
const ville = document.getElementById('ville');

// Écoutez les changements dans le sélecteur de pays
pays.addEventListener('change', function() {
    const selectedPaysId = this.value;
    ville.value = ""

    // Parcourez toutes les options du sélecteur de ville
    Array.from(ville.options).forEach(function(option) {
        // Affichez l'option si le pays correspond à l'ID sélectionné ou si aucune sélection n'est faite
        if (option.dataset.pays === selectedPaysId || selectedPaysId === '') {
            option.style.display = 'block';
        } else {
            option.style.display = 'none';
        }
    });
});
