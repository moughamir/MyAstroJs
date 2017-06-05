<?php // yyadmin/documentation-generale.php

/* ##### INITIALISATION ##### */
    require_once('inc/init.php');

/* ###### VUE ###### */

    include('inc/header.php');
?>
<h2>Généralités </h2>
    <blockquote>
            La page présente a pour but d'expliquer l'historique de myastro ainsi que les démarches qui ont été mise en place depuis mon arrivée.
    </blockquote>
    <div class="alert alert-info">
            <p>A lire : <a href="http://fr.slideshare.net/francoisz/php-100k" target="_blank" >http://fr.slideshare.net/francoisz/php-100k</a> . Pas forcémment applicable sur l'application actuelle, mais très intéressant sur la structure.</p>
    </div>

<h2>Historique</h2>
    <p>D'après ma connaissance, le site myastro.fr est le V2 du site elle-voyance ( en quelques sortes ). Il a été créé de toute pièces sur un template acheté. Template initialement prévu pour wordpress.</p>
    <p>A mon arrivée, le site était réparti en plusieurs fichiers php, chacun ( ou presque ) représentant une page avec du contenu en dur. Un fichier <code>.htaccess</code> possédant la règle suivante <code>RewriteRule ^([a-z0-9-]+)$ $1.php [L]</code> redirige chaque URL demandée vers le fichier php correspondant.</p>
    <p>N'ayant pas de "structure correcte", chaque connexion à la BDD était répétée dans les fichiers, ainsi que certains header / footer.</p>
    <p>Il m'a d'abord était demandé de mettre en place un nouveau formulaire : http://www.myastro.fr/voyance-gratuite, celui-ci ayant déjà été bootstrapé, c'est à ce moment que j'ai créé le fichier dans <code>/include/tools.php</code> celui-ci ayant pour but de regrouper les bouts de code dupliqués de ci de là.</p>
    <p>C'est donc ce fichier, qui joue dorénavant le rôle de controleur principale, possédant toutes les fonctions "communes" ( ex : la fonction de vérification des n° de téléphone. ), et qui gère les include nécessaires au bon fonctionnement du site <code>
            require_once(ROOT_PATH.'/inc/config.php'); <br />
            require_once(ROOT_PATH.'/inc/bdd.php');      // New mysql Class From Wordpress : Wpdb <br />
            require_once(ROOT_PATH.'/lib/Compteur/Compteur.class.php'); // Counter used for EMV groups <br />
            require_once(ROOT_PATH.'/lib/Tracker/Tracker.class.php'); // Tracking users for campains <br />
            require_once(ROOT_PATH.'/lib/SmartFocus/SmartFocus.class.php'); // Tracking users for campains <br />
    </code></p>
    <ul class="list-group">
            <li class="list-group-item">config.php : possède les <code>define()</code> utilisés par les différentes fonctions.</li>
            <li class="list-group-item">bdd.php : il s'agit la de la class d'accès à <a href="http://codex.wordpress.org/Class_Reference/wpdb">la BDD de Wordpress</a>. N'ayant pas une structure correcte (voir plus loin chapitre BDD ), il m'était impossible d'installer un ORM ( propel, doctrine ). Cette solution était donc la plus simple et la plus rapide.</li>
            <li class="list-group-item">Compteur.class.php : Assez complexe à expliquer, cette classe gère des découpage de la base. Un compteur est incrémenté à chaque inscription d'utilisateur afin de lui attribué un "groupe" lors de l'envoie des données à smartFocus.</li>
            <li class="list-group-item">Tracker.class.php : voir plus loin ( chapitre tracker ).</li>
            <li class="list-group-item">SmartFocus.class.php : <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/yyadmin/documentation-smartfocus.php"> voir ici </a></li>
    </ul>
    <p> Il est donc maintenant inclue dans la plupart des fichiers du site.</p>

<h2>Base de données</h2>
    <p>A mon arrivée, le site reposait sur une seule Table, aujourd'hui il en existe 25 ( 30 précisement, mais 5 n'ont jamais été utilisées ).</p>
    <p>La table déjà existante à mon arrivée est la table <code>ag_users</code> c'est ici que sont insérés tous les leads réalisés sur les formulaires. Elle possède un id mais les méthodes d'insertions regardent en général si le mail de l'utilisateur existe, si oui font un update, sinon un insertion, on peut donc dire que l'email joue le rôle de <i>primary key</i>.</p>
    <img src="images/doc-bdd.png" />
    <p>
    Les anciennes tables sont : ag_tosend, anna_joseph, chat, commentaire, tarot, visiteur, tarot_an_jo. Leur utilisation m'est inconnue, je les ai laissées tel quel pour éviter de casser un fonctionnement existant.
    <p>
    <ul class="list-group">
        <li class="list-group-item"><code> compteurs</code>: <i>voir plus haut</i> sert au découpage de la base Smartfocus.</li>
        <li class="list-group-item"><code>emv_tasks</code> : <i>voir la doc smartfocus</i></li>
        <li class="list-group-item"><code>Tables prefixées form_ :</code> Ces tables servent à la gestion des formulaires myastro ou plus précisement, à la gestion des réponses aux formulaires.
            <ul class="list-group">
                <li class="list-group-item"><code>form_astro_genre</code> : Contient les paragraphes d'intro, typés par sexe, par question et par signe astrologique.</li>
                <li class="list-group-item"><code>form_formulaires</code> : Anticipation de la gestion des formulaires via l'admin. Non utilisée actuellement.</li>
                <li class="list-group-item"><code>form_responses</code> : <span class="alert alert-danger">Contient les réponses envoyées aux utilisateurs</span> typées par question et par sexe. </li>
                <li class="list-group-item"><code>form_users_responses</code> : Contient les réponses données par les utilisateurs, surtout pour capturer le champ texte du formulaire de /voyance-gratuite</li>
            </ul>
        </li>
            <li class="list-group-item"><code>Tables prefixées tchat_ : 7 tables au total qui sont utiliser pour génrer / tracker les fake tchat de la page myastro.fr/tchat/. <br />Pour une explication avancée du fonctionnement du tchat, se reporter à la section correspondante.</code>
                    <ul class="list-group">
                            <li class="list-group-item"><code>tchat_conclusion</code> : contient les groupes de conclusion</li>
                            <li class="list-group-item"><code>tchat_content</code> : contient les groupes de contenus</li>
                            <li class="list-group-item"><code>tchat_groups</code> : contient les groupes </li>
                            <li class="list-group-item"><code>tchat_intro</code> : contient les groupes d'intro</li>
                            <li class="list-group-item"><code>tchat_messages</code> : contient l'intégralité des contenus affichés dans le tchat.</li>
                            <li class="list-group-item"><code>tchat_scenario</code> : contient les scénario : principalement, nom du voyant, spécialité, tarif.</li>
                            <li class="list-group-item"><code>tchat_stats</code> : contient les statistiques des scénarios proposés pour déterminer que triplette intro / content / conlusion fonctionne le mieux, mais aussi générer les résumés ( qui devraient être envoyés par mail mais pas encore en place à l'heure ou j'écris ces lignes. )</li>
                    </ul>
            </li>
            <li class="list-group-item"><code>Tables prefixées tracking_ : Ces tables sont nécessaires aux statistiques, pour plus d'informations, se référer à la section Tracking.</code>
                    <ul class="list-group">
                            <li class="list-group-item"><code>tracking_displays</code> : Enregistre chacun des affichage des pages trackés. <p class="alert alert-warning">Attention cette table grossie à une vitesse folle et je n'ai pour l'instant pas prévu de la purger automatiquement. Il faudra <b>ABSOLUMENT</b> y prêter attention pour éviter de crasher le serveur.</p></li>
                            <li class="list-group-item"><code>tracking_groups</code> : Contient la relation entre un groupe de tracker et un utilisateur.</li>
                            <li class="list-group-item"><code>tracking_rdv</code> : Interfaçage avec le standard (ou avec l'application de gestion dans l'avenir). Les utilisateurs ayant consulté sont enregistrés ici, avec le montant de la consultation </li>
                            <li class="list-group-item"><code>tracking_sources</code> : On appelera <i>source</i> un formulaire. contient donc la liste des formulaires trackés.</li>
                            <li class="list-group-item"><code>tracking_trackers</code> : Contient, les trackers à rajouter dans les urls pour identifier les campagnes.</li>
                            <li class="list-group-item"><code>tracking_users</code> : Contient les enregistrements des utilisateurs ayant soumis un formulaires ( ci après <b>lead</b> ) avec leur tracker de provenance.</li>
                            <li class="list-group-item"><code>tracking_website</code> : contient la liste des sites trackés</li>
                    </ul>
            </li>
            <li class="list-group-item"><code>users : </code>Contient la liste des utilisateurs ayant accès au Back office.</li>
            <li class="list-group-item"><code>users_common : </code>Contient la liste des utilisateurs inscrits sur les mini-sites.
                    Il existe une règle, très dangereuse j'en suis bien conscient, mais l'urgence de la demande ne m'a pas permis d'utiliser un autre système. Chaque mini-site possède un duplicata de la table <code>ag_users</code>, la différence entre celles-ci provient du départ de l'auto incrémentation.
                    <ol class="list-group-item">
                            <li>Ascendant astrologique : commence à 2 000 000.</li>
                            <li>tirage tarot gratuit : commence à 3 000 000.</li>
                            <li>horoscope de la semaine : commence à 4 000 000.</li>
                            <li>medium sérieux : commence à 5 000 000.</li>
                            <li>voyant virtuel : commence à 6 000 000.</li>
                            <li>numérologie gratuite : commence à 7 000 000.</li>
                            <li>voyance par tchat : commence à 8 000 000.</li>
                    </ol>
            </li>
    </ul>

    <h2>Le système de tchat</h2>

    <p> Le système de tchat est visible derrière les formulaires, il simule une conversation avec un voyant. <br />
    Le sytème est basé sur les fichiers suivants : 
            <ul class="list-group">
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Tchat.php</code><li>
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Intro.php</code><li>
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Content.php</code><li>
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Conclusion.php</code><li>
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Parts.php</code> <i>est l'interface de intro / content / conlusion</i><li>
                            <li class="list-group-item"><code>/lib/vendor/Tchat/Stats.php</code><li>
            </ul>
            L'idée générale était de pouvoir créer des contenus presque spinnés :
            <blockquote> Content spinning <br />
            Re-écriture automatique ou semi automatique d'un texte
            </blockquote>
            Le sytème se décompose donc de la manière suivante : <br />
            <span class="label label-default">1</span> Les sources ont été décomposées en 2 types de <b>support</b> : <b>voyance et tarot</b> <br />
            <span class="label label-default">2</span> Chaque couple support / question constitue un groupe (bdd : tchat_groups) <br />
            <span class="label label-default">3</span> Chaque <i>Part</i> ( intro, content, conclusion ) appartient à un group <br />
            <span class="label label-default">3</span> Chaque <i>grappe de message</i> appartient à une <i>Parts</i> <br />
            Cela permet une "rotation" des contenus, dans la mesure où il existe plusieurs <i>Parts</i> pour le même <i>group</i>.
            <br />
            Exemple : <br />
            Un utilisateur valide le formulaire /voyance-gratuite en posant la question 'question_1'. Le système déterminera donc son <i>group</i>. Il choisiera ensuite au hasard des <i>Parts</i> correspondants au <i>group</i>, puis des <i>messages</i> correspondants au <i>Parts</i>.
            <br />
            De plus, il existe des variables de remplacement suivant le sexe du client, et du voyant. exemple [c[masculin|féminin]c]
            sera remplacé par masculin / féminin en fonction du sexe du client ( [c[]c] pour client, et [s[]s] pour voyant <i>seer en anglais</i>)
            <br />
            Pour finir : Le scénario ( nom du voyant / tarif ) est choisi en fonction du support uniquement. La question posé n'ayant aucune incidence sur le consultant.
    </p>
    <p>Petite précision supplémentaire : Le tchat ayant été le dernier système développé, j'ai mis en place un Autoloader situé dans <code>/lib/Autoloader.php</code>. C'est un Autoloader de base utilisant la fonction <code>spl_autolad</code> de PHP 5.4. J'y ai intégré l'autoloader de la librairie SWIFT permettant d'envoyer les mails ( mails internes uniquement ) ainsi que les injections de dépendances.</p>

    <h2> Le système de tracking : </h2>
    <p> Le système de tracking a été créé dans un but simple, pouvoir mesurer le ROI de chaque campagne.<p>
    <p> Il est composé de 7 tables et (malheureusement) une seule classe assez ( très ? ) indigeste. Sorry about that. L'idée est de tracker un utilisateur sur certaines pages ( celles de leads principalement ), depuis son arrivée sur le site, jusqu'à un certains point ( affichage du tchat ).</p>
    <p>Les données sont ensuite restituées dans l'interface d'administration sous l'onglet statistique.</p>
    <p>Il existe aussi un système de rapport par mail. Cependant, il n'est pas terminé à l'heure ou j'écris ces lignes et nécessietera quoi qu'il en soit une action humaine. Il se situe dans <code>yyadmin/stats-hebdo.php</code> et fait la relation entre le rapport adwords et les statistiques du site. Le rapport d'adwords ne pouvant pas être utilisé autrement que par un export ( interdiction dans les CGU d'utiliser l'API de manière automatique ). Pour compléter ce rapport il faudrait : ajouter une ligne totaux et générer le tout dans un fichier .xls envoyé par mail. Gl Hf.</p>

    <h2>Interface d'admin : </h2>
    <p>A mon arrivée, cette interface ne possédait que des pages <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/yyadmin/nouveaux.php">comme celle-ci</a>, et ne servait qu'a connaitre les inscrits et MAJ utilisateur. De plus elle ne possédait qu'un seul utilisateur inscrit en dur dans la page login.php</p>
    <p>Aujourd'hui, tout a changé. La base de l'administration de situe dans <code>/yyadmin/inc/config.php</code>, ce fichier contient ( principalement ) les groupes d'utilisateurs ainsi que les pages auxquels ils ont accès. Ce n'est certainement pas la manière optimale de gérer une admin, mais encore une fois, c'est fait avec les moyens du bord et dans un temps relativement limité.</p>
    <p>Il se compose sous la forme d'un tableau associatif à 2 niveaux : <br />
            Niveau 1 : Groupe d'utilisateur => Rubrique du menu <br />
        Niveau 2 : Item du menu => Url</p>
    <h3>Les groupes d'utilisateurs</h3>
            <ul class="list-group">
                            <li class="list-group-item">superadministrateur : Possède tous les droits.</li>
                            <li class="list-group-item">administrateur : N'a pas accès aux stats / exports.</li>
                            <li class="list-group-item">voyant : N'a accès qu'aux réponses des utilisateurs.</li>
                            <li class="list-group-item">standard : N'a accès qu'aux exports et à la page d'insertion des RDV.</li>
                            <li class="list-group-item">redacteur : #Old. N'avait accès qu'à la page de rédaction des scénario tchat</li>
                            <li class="list-group-item">SEO : N'a accès qu'aux statistiques</li>
                            <li class="list-group-item">Lead manager : Accès particulier. N'a accès qu'a ses propres statistiques, il a été utilisé dans la situation ou l'on achète un emplacement pub chez un prestataire et celui dernier veut voir le traffic généré par son emplacement pub ( ou vérifier la cohérence entre ses données et les notres ).</li>
            </li>
    <h2>Autres : </h2>
    <h3>Génération de rapports : </h3>
    <p>Tous les lundis matin, il faut générer le rapport de statistiques. Pour cela il faut : <br />
            - Télécharger le rapport adwords de J-9 à J-2. <br />
            - Le déposer sur le ftp dans <code>/yyadmin/media/adwords.csv</code>. J'insiste sur le <b>nom du rapport</b><br />
        - Enfin : jouer le script <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/yyadmin/stats-hebdo.php">http://www.myastro.fr/yyadmin/stats-hebdo.php</a></p>
    <h3>Git</h3>
    <p>Il existe un git installé avec gitlab. url : git.myastro.fr, user : git. Jamais eu le temps de commit dessus mais ça serait bien. Il faudra regénérer une clé privée très certainement.</p>
    <h3>Dit</h3>
    <p>J'avais attaqué une refonte durant mon temps libre sur une <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/images/flat.jpg">maquette que j'avais faite</a> sur l'url <a href="http://dit.myastro.fr">dit.myastro.fr</a>. La base technique est un <a href="doc.thelia.net">thélia 2.</a></p>
<?php
    include('inc/footer.php');
?>
