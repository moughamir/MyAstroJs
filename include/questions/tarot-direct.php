<?php
/* 
 * Questions de tarot-direct
 */
$questions = array (
    'Amour' => array(
        'celibat'  => [ 'code' => 'td_question_1', 'subject' => 'sentimental', 'text' => 'Je suis célibataire' ],
        'couple'   => [ 'code' => 'td_question_2', 'subject' => 'sentimental', 'text' => 'Je suis en couple', 'conjoint' => true ],
        'infidele' => [ 'code' => 'td_question_24', 'subject' => 'sentimental', 'text' => 'Je suis en couple mais jʼai une autre personne en tête', 'conjoint' => true],
        'amant'    => [ 'code' => 'td_question_2', 'subject' => 'sentimental', 'text' => 'Je suis en couple avec une personne mariée', 'conjoint' => true],
        'separe'   => [ 'code' => 'td_question_11', 'subject' => 'sentimental', 'text' => 'Je suis séparé(e) de mon/ma conjoint(e)', 'conjoint' => true],
    ),
    'Argent' => array(
        'argent'   => [ 'code' => 'td_question_73', 'subject' => 'financier', 'text' => 'Je veux savoir si ma situation financière va sʼaméliorer' ],
    ),
    'Travail' => array(
        'travail'  => [ 'code' => 'td_question_4', 'subject' => 'professionnel', 'text' => 'Je veux savoir si ma situation professionnelle va sʼaméliorer' ],
    )
);

