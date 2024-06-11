 <meta charset="utf-8">
<?php
/**
* Affiche la pagination à l'endroit où cette fonction est appelée
* @param string $url L'URL ou nom de la page appelant la fonction, ex: 'index.php' ou 'http://example.com/'
* @param string $link La nom du paramètre pour la page affichée dans l'URL, ex: '?page=' ou '?&p='
* @param int $total Le nombre total de pages
* @param int $current Le numéro de la page courante
* @param int $adj (facultatif) Le nombre de pages affichées de chaque côté de la page courante (défaut : 3)
* @return La chaîne de caractères permettant d'afficher la pagination
*/
function paginate($url, $link, $total, $current, $adj=3) {
    // Initialisation des variables
    $prev = $current - 1; // numéro de la page précédente
    $next = $current + 1; // numéro de la page suivante
    $penultimate = $total - 1; // numéro de l'avant-dernière page
    $pagination = ''; // variable retour de la fonction : vide tant qu'il n'y a pas au moins 2 pages
 
    if ($total > 1) {
        // Remplissage de la chaîne de caractères à retourner
        $pagination .= "<div class=\"pagination\">\n";
 
        /* =================================
         *  Affichage du bouton [précédent]
         * ================================= */
        if ($current >= 2) {
            // la page courante est supérieure à 2, le bouton renvoie sur la page dont le numéro est immédiatement inférieur
            $pagination .= "<a href=\"{$url}{$link}{$prev}\">Précédant</a>";
        } else {
            // dans tous les autres, cas la page est 1 : désactivation du bouton [précédent]
            $pagination .= '<span class="inactive">Précédant</span>';
        }
 
       
 
        /* ===============================
         *  Affichage du bouton [suivant]
         * =============================== */
        if ($current == $total)
            $pagination .= "<span class=\"inactive\">Suivant</span>\n";
        else
            $pagination .= "<a href=\"{$url}{$link}{$next}\">Suivant</a>\n";
 
        // Fermeture de la <div> d'affichage
        $pagination .= "</div>\n";
    }
 
    return ($pagination);
}
?>