    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.main-menu nav ul li a');

        links.forEach(link => {
            link.addEventListener('click', function() {
                // Ajouter la classe 'visited' au lien cliqué
                link.classList.add('visited');
            });
        });

        // Optionnel: retirer la classe 'visited' lorsque l'utilisateur quitte la page
        window.addEventListener('beforeunload', function() {
            links.forEach(link => {
                link.classList.remove('visited');
            });
        });
    });
