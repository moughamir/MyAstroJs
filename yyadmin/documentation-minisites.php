<?php // yyadmin/documentation-minisites.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');

/* ###### VUE ###### */

    include('inc/header.php');
?>
<h2>Mini sites</h2>
    <blockquote>
            Par convention, on appelle mini-sites la liste de sites faisant partie de la <i>"nébuleuse Myastro"</i> comme je l'appelle, ce sont pour la plupart des Wordpress créé dans un but SEO ( avec peu de traffic à l'heure actuelle ).
    </blockquote>
    <h4>Liste des sites :</h4>
    <ul class="list-group">
            <li class="list-group-item list-group-item-success"><a href="http://ascendant-astrologique.net">ascendant-astrologique.net</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://horoscope-de-la-semaine.net">horoscope-de-la-semaine.net</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://medium-serieux.net">medium-serieux.net</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://numerologie-gratuite.com">numerologie-gratuite.com</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://tirage-tarots-gratuit.net">tirage-tarots-gratuit.net</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://voyance-par-tchat.com">voyance-par-tchat.com</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://voyant-virtuel.com">voyant-virtuel.com</a></li>
            <li class="list-group-item list-group-item-warning"><a href="http://www.oracle-gratuit.fr">www.oracle-gratuit.fr</a></li>
            <li class="list-group-item list-group-item-warning"><a href="http://www.axelle-voyance.com">www.axelle-voyance.com</a></li>
            <li class="list-group-item list-group-item-success"><a href="http://voyant-virtuel.com">voyant-virtuel.com</a></li>
            <li class="list-group-item list-group-item-danger"><a href="http://news-myastro.com/">news-myastro.com/</a></li>
    </ul>
    <p class="alert alert-info">Les 2 avant-derniers sont plus anciens et n'ont pas forcément la même architecture que les autres. Ils ne possèdent pas non plus forcémment les mêmes fonctionnalités.</p>
    <p class="alert alert-info"> Le dernier quant à lui, est un système un peu particulier. voir plus loin.</p>
    <h4 class="alert alert-success">Mini Sites</h4>
    <p>
             Quand je dis qu'ils ne possèdent pas les mêmes fonctionnalités, c'est surtout que les autres sont tous construits de la même façon.
            <ol>
                    <li> - Ils implémentent tous la classe de tracking ( en V1 cependant. Une MAJ serait pas mal ).</li>
                    <li> - Ils implétentent tous la classe de Smartfocus.</li>
                    <li> - Ils implétentent tous la classe de Compteur.</li>
                    <li> - Les formulaires sont en ajax.</li>
            </ol>
    </p>

    <h4 class="alert alert-danger">Horoscopes</h4>
    <p>Ce site sous wordpress n'a en fait aucune volonté à être visité. Il s'agit simplement de la solution d'un prestataire pour gérer des serveurs smtp.</p>
    <p>Cette solution n'est pas spécialement la solution ultime, cependant elle reste une des plus abordables du marché.</p>
    <p class="alert alert-warning">Les utilisateurs auxquels sont envoyés les horoscopes proviennent d'un export de smartfocus satant du mois de avril/mai. Par manque de temps, les nouveaux inscrits ne sont pas reportés dans cette liste. Il faudra <b>impérativement</b> y penser ( via une api à créer ?).</p>
    
    <p>Il serait peut-être judicieux d'utiliser une API pour pouvoir envoyer les messages de façon à garder la gestion des utilisateurs la plus fine possible sur myastro. ( discutable cependant ).</p>

<?php
    include('inc/footer.php');
?>