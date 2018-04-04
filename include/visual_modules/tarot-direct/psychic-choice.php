<?php
/** --------------- MODULE DE CHOIX DES VOYANTS TAROT-DIRECT --------------- **/

$psychics_bdd = array(
    'christelle' => [
        'name' => 'Christelle',
        'desc' => 'Bonjour, je suis Christelle et je suis tarologue et médium depuis maintenant treize ans. En plus de mes visions, je maitrise tous les messages du tarot. Leur profondeur sans limite me permet de compléter mes flashs afin de vous apporter des réponses claires et complètes. Je suis plus particulièrement spécialisée dans les questions amoureuses et sentimentales mais je peux aborder facilement le sujet de votre choix sans aucun problème. Je mets mes dons et mes connaissances divinatoires à votre service, afin de répondre à toutes les questions que vous vous posez.'
    ],
    'sonia' => [
        'name' => 'Sonia',
        'desc' => 'Bienvenue à tous et à toutes, je m’appelle Sonia et pour moi, le tarot est une histoire de famille puisque c’est ma grand-mère qui m’a initié à cette pratique. Très jeune j’ai commencé à avoir mes visions et grâce aux cartes du tarot, je peux mettre des mots sur ces flashs, et ainsi vous transmettre des interprétations très détaillées. Grâce à cette double compétence, je peux interpréter votre tirage du tarot et vous communiquer toutes les visions que j’ai vous concernant. Avec un seul mot d’ordre : chasser tous vos doutes pour vous aider à avancer l’esprit léger et serein.'
    ],
    'olivier' => [
        'name' => 'Olivier',
        'desc' => 'J’ai découvert et je me suis familiarisé avec le tarot au cours d’un de mes voyages en Egypte. J’ai tout de suite été fasciné par ce support et j’ai très vite remarqué une certaine prédisposition chez moi. C’est d’ailleurs cette passion qui m’a poussé à toujours approfondir mes connaissances et peaufiner ma pratique. Aujourd’hui, quelque soit le domaine de votre vie qui vous pose soucis, je suis capable de faire parler mes cartes pour vous. Ne restez pas sans réponse à vos questions, la tranquillité et la sérénité sont autant d’ingrédients indispensables pour une vie pleine de plénitude et de réussite. Mes cartes ne vous donneront pas de recette miracle, mais seront autant de routes à suivre pour marcher vers le destin que vous vous souhaitez.'
    ],
    'veronique' => [
        'name' => 'Véronique',
        'desc' => 'Bonjour à toutes et à tous. Je suis Véronique, médium et mamie à temps plein. Comme bon nombre de mes collègues présents sur ce site, j’ai découvert mon don très jeune et c’est après de nombreuses années de pratique que j’ai décidé de le mettre à disposition pour aider les autres. Je ne suis pas née avec Internet, loin de là, mais c’est ma nature curieuse et enjouée qui m’a permis de me mettre à la page et de me spécialiser dans la voyance par tchat, un support très pratique et agréable quand on commence à s’y habituer. Mes petits-enfants sont fiers d’avoir une mamie aussi impliquée sur Internet et je dois avouer moi aussi que je suis plutôt contente de moi. Concernant notre consultation, je vous promets de vous faire entrer dans mon monde afin d’en sortir épanoui et serein.'
    ],
    'dimitri' => [
        'name' => 'Dimitri',
        'desc' => 'J’ai découvert et je me suis familiarisé avec le tarot au cours d’un de mes voyages en Egypte. J’ai tout de suite été fasciné par ce support et j’ai très vite remarqué une certaine prédisposition chez moi. C’est d’ailleurs cette passion qui m’a poussé à toujours approfondir mes connaissances et peaufiner ma pratique. Aujourd’hui, quelque soit le domaine de votre vie qui vous pose soucis, je suis capable de faire parler mes cartes pour vous. Ne restez pas sans réponse à vos questions, la tranquillité et la sérénité sont autant d’ingrédients indispensables pour une vie pleine de plénitude et de réussite. Mes cartes ne vous donneront pas de recette miracle, mais seront autant de routes à suivre pour marcher vers le destin que vous vous souhaitez.'
    ],
    'margaux' => [
        'name' => 'Margaux',
        'desc' => 'Bonjour à toutes et à tous. Je suis Margaux, médium et mamie à temps plein. Comme bon nombre de mes collègues présents sur ce site, j’ai découvert mon don très jeune et c’est après de nombreuses années de pratique que j’ai décidé de le mettre à disposition pour aider les autres. Je ne suis pas née avec Internet, loin de là, mais c’est ma nature curieuse et enjouée qui m’a permis de me mettre à la page et de me spécialiser dans la voyance par tchat, un support très pratique et agréable quand on commence à s’y habituer. Mes petits-enfants sont fiers d’avoir une mamie aussi impliquée sur Internet et je dois avouer moi aussi que je suis plutôt contente de moi. Concernant notre consultation, je vous promets de vous faire entrer dans mon monde afin d’en sortir épanoui et serein.'
    ]
);

$def_psychics = ['sonia', 'christelle'];

/*if(date('Ymd') >= 20161226 and date('m') != 04){
    $def_psychics = ['veronique', 'olivier'];
}*/

if(strpos($_SERVER['REQUEST_URI'],'/tarot-direct-rentree') !== false){
    $def_psychics = ['margaux', 'dimitri'];
}

$psychics = isset($psychics) ? $psychics : $def_psychics;

?>
<div class="ContentBand-Table">
<?php 
    foreach ($psychics as $psy_code){
        $psy_name = $psychics_bdd[$psy_code]['name'];
        $psy_desc = $psychics_bdd[$psy_code]['desc'];
?>   
    <div class="ContentBand-Column PsychicChoice-Psychic <?= $psy_name;?>">
        <input type="radio" name="voyant" value="<?= $psy_name;?>" id="<?= $psy_code;?>_choice" class="PsychicChoice-Psychic-Input" required />
        <label for="<?= $psy_code;?>_choice" class="PsychicChoice-Psychic-VisualForm">
            <span class="PsychicChoice-Psychic-Picture"><span class="PsychicChoice-Psychic-Photo"></span></span>
            <span class="PsychicChoice-Psychic-Name"><?= $psy_name;?></span>
        </label>
        <div class="PsychicChoice-Psychic-Introduction"><?= $psy_desc;?></div>
    </div>
<?php } ?>
</div>