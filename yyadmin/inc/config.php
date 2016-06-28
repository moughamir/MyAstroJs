<?php
$menuRole = array(
    'superadministrateur' => array(
//        'Inscrits' => array(
//            'Nouveaux'     => 'nouveaux.php',
//            'Utilisateurs' => 'utilisateurs.php',
//            'Rechercher un client'   => 'rechercher_inscrit.php',
//        ),
        'Rechercher'   => 'rechercher_inscrit.php',
        'Réponses' => array(
            'Utilisateurs' => 'responses.php',
            'Formulaires'  => 'responses-form.php',
            'Tchat'        => 'tchat.php',
        ),
//        'Horoscope' => 'utilisateurs_horoscope.php',
//        'Mobile' => 'utilisateurs_mobile.php',
//        'Corail' => 'utilisateurs_corail.php',
//        'Tarot'  => 'utilisateurs_tarot.php',
//        'Anna & Jospeh' => 'utilisateurs_an_jo.php',
        'Statistiques de Tracking' => array(
            'Sites'           => 'stats.php',
            'Standard'        => 'stats-standard.php',
            'Rapport adwords' => 'stats-hebdo.php',
        ),
        'Configuration' => array(
            'Gestion des Sites'               => 'stats-gestion-websites.php',
            'Gestion des campagnes'           => 'stats-gestion-campagnes.php',
            'Gestion des groupes de trackers' => 'stats-gestion-groups.php',
            'Gestion des Sources'             => 'stats-gestion-sources.php',
            'Gestion des comptes'             => 'comptes.php',
        ), 
        'Exports CRM' => 'exports.php',
//        'Contacts' => 'liste-des-contacts.php',
        'Documentation' => array (
            'Généralités'      => 'documentation-generale.php',
            'Mini-Sites'       => 'documentation-minisites.php',
            'SmartFocus Infos' => 'documentation-smartfocus.php',
            'Idées'            => 'documentation-idees.php',
        ),
        'SMS' => 'campagne-sms.php',
    ),
    'administrateur' => array(
        'Réponses Formulaires' => 'responses-form.php',
        'Tchat'                => 'tchat.php',
//        'Contacts'             => 'liste-des-contacts.php',
    ),
    'voyant' => array(
        'Rechercher un client' => 'rechercher_inscrit.php',
        'Réponses'             => 'responses.php',
    ),
    'standard' => array(
        'Rechercher un client' => 'rechercher_client.php',
//        'Prise de RDV'         => 'standard.php',
        'Exports'              => 'exports.php',
    ),
    'phoning' => array(
        'Rechercher un inscrit' => 'rechercher_inscrit.php',
    ),
    'redacteur' => array(
        'Tchat' => 'tchat.php'
    ),
    'SEO' => array(
        'Gestion des campagnes'   => 'stats-gestion-campagnes.php',
        'Statistiques de transfo' => 'stats.php',
    ),
    'Lead Manager' => array(
        'Gestion des leads'  => 'stats-gestion-campagnes-leads.php',
    )
);

$groupeRole = array(
	'admin' => array('superadministrateur','administrateur')
);

$questionArray = array(
	'question_1'   => 'Vous en avez marre dêtre seule',
	'question_10'  => 'Il ne sait pas que vous l\'aimez',
	'question_11'  => 'Il vous a quitté',
	'question_12'  => 'Il vous ignore',
	'question_2'   => 'Est-ce qu\'il m\'aime ?',
	'question_22'  => 'Il est marié',
	'question_23'  => 'Il vous trompe',
	'question_24'  => 'Vous en aimez un autre',
	'question_3'   => 'Vous cherchez un emploi',
	'question_4'   => 'Vous attendez d\'être muté / Vous attendez une augmentation',
	'question_5'   => 'Avenir familial',
	'question_6'   => 'Action réalisée',
	'question_701' => 'Vous attendez une décision de justice',
	'question_71'  => 'Vous attendez un contrat',
	'question_72'  => 'Vous attendez un héritage',
	'question_73'  => 'Vous attendez un investissement',
	'question_74'  => 'Vous attendez une bourse',
	);
$domaineArray = array(
		'question_1'	=> 'amour',
		'question_10'	=> 'amour',
		'question_11'	=> 'amour',
		'question_12'	=> 'amour',
		'question_2'	=> 'amour',
		'question_22'	=> 'amour',
		'question_23'	=> 'amour',
		'question_24'	=> 'amour',
		'question_3'	=> 'travail',
		'question_4'	=> 'travail',
		'question_5'	=> 'Famille',
		'question_6'	=> 'Action réalisé',
		'question_71'	=> 'argent',
		'question_72'	=> 'argent',
		'question_73'	=> 'argent',
		'question_74'	=> 'argent',
		'question_701'	=> 'argent',
		);
$sourceArray = array(
    1 => 'MyAstro',
    2 => 'Ascendant-Astrologique',
    3 => 'Tirage-Tarot-Gratuit',
    4 => 'Horoscope-de-la-semaine',
    5 => 'Medium-serieux',
    6 => 'Voyant-virtuel',
    7 => 'Numérologie-gratuite',
    8 => 'Voyance-par-tchat',
    9 => 'Voyance-virtuelle'
);
?>