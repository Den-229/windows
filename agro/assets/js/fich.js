
    function supprimerProduit(key) {
        if(confirm('Êtes-vous sûr de vouloir supprimer ce produit du panier ?')) {
            window.location.href = 'supprimer-produit.php?key=' + key;
        }
    }