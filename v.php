<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> Votre étude personnalisée est prête </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />
        <style type="text/css">
            /* Fonts and Content */
            body{ font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; font-size:14px; text-align: justify; }
            p{ padding:10px;}
            p span{ color: #1871b9;font-weight: bold;}
            p .code{color:#e42683;}
        </style>
    </head>
    <body>

        <?php
        $code = (isset($_GET['c'])) ? $_GET['c'] : '';
        $id = base_convert($code, 32, 10);
        $prenom = $prenom2 = $question = '';
        require_once('inc/config.php');
        require_once('inc/bdd.php');      // New mysql Class From Wordpress : Wpdb
        $bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
        $qry = 'SELECT * FROM ' . $bdd->users . ' as agu WHERE internal_id=' . $id;
        $user = $bdd->get_row($bdd->prepare($qry));
        if (isset($user->prenom))
        {
            $prenom = $user->prenom;
            $prenom2 = $user->conjoint;
            $question = $user->questionContent;
        }
        if (!empty($prenom) && !empty($code))
        {
            switch ($question)
            {
                case 'question_1' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Suite à votre demande d'étude personnalisée je me permets de vous répondre aujourd'hui.<br/><br/>
                        Je sais que vous vous trouvez dans une situation que vous pouvez de moins en moins supporter et que cela vous affecte dans votre quotidien. Même si vous excellez dans l'art et la manière de prendre tout ça sur vous, je vois qu'il est maintenant important pour vous de retrouver un équilibre dans votre vie. <br/><br/>
                        Ce que je peux vous affirmer, c'est que lors de votre étude j'ai décelé une rencontre importante pour vous dans les semaines à venir, cette rencontre pourra être déterminante pour votre avenir amoureux. Malheureusement ce que je sais aussi, c'est que vous ne serez pas apte à faire face à cette rencontre au moment voulu <?php echo $prenom; ?>. En effet, votre manque de confiance en vous va irrémédiablement vous pousser à la faute. <br/><br/>
                        Vous êtes dans une sorte de cercle vicieux dans lequel vous cherchez désespérément à faire la rencontre qui changera votre vie. Cependant, vous avez peur de laisser quelqu'un rentrer dans votre vie à nouveau! Mais sachez <?php echo $prenom; ?> que vous avez fait appel à la bonne personne, car je peux vraiment être un allié de poids pour vous dans cette aventure !!<br/><br/>
                        Laissez-moi-vous le démontrer lors d'une consultation téléphonique !! Je suis même prête à vous faire une offre !! Une consultation téléphonique complète pour seulement <span>1€ les 10 premières minutes</span> suivi de 4€ par minute supplémentaire. <br/><br/>
                        Je vous donne également mon numéro de ligne directe : <span>04 82 53 71 59</span> ainsi que votre code personnel : <span class="code">S1-<?php echo $code; ?></span><br/><br/>
                        J'attends votre appel dès maintenant <?php echo $prenom; ?> !!<br/><br/>
                        Cécile<br/><br/>
                    </p>

                    <?php
                    break;
                case 'question_2' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Après avoir pu consulter votre profil astral je me permets donc de vous répondre suite à votre demande d'étude personnalisée sur le site de <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/" >myastro.fr</a><br/><br/>
                        Je vois que vos sentiments pour <?php echo $prenom2; ?> vous préoccupent la majeure partie du temps. Je comprends tout à fait votre désarroi face à une telle situation <?php echo $prenom; ?>. Vous ne savez pas si vous pouvez envisager un avenir avec <?php echo $prenom2; ?> et cela vous perturbe. Rien de plus normal <?php echo $prenom; ?> !!<br/><br/>
                        Je ressens en vous de grandes capacités pour surmonter tous les obstacles qui se présenteront devant vous. Cependant, il est clair que lorsqu'il s'agit de <?php echo $prenom2; ?> toutes vos facultés deviennent obsolètes. Pas de panique <?php echo $prenom; ?>, ce genre de réaction est tout à fait normal lorsqu'on a de tels sentiments et de tels doutes...<br/><br/>
                        Ce qui est sûr, c'est que dans un futur proche vous allez devoir prendre une décision qui sera déterminante pour votre avenir avec <?php echo $prenom2; ?>. Je ne peux malheureusement pas vous donner plus de détails sur la nature de cette décision car à ce stade je ne dispose pas d'assez d'éléments vous concernant <?php echo $prenom; ?>.<br/><br/>
                        Par contre ce que je peux vous proposer <?php echo $prenom; ?>, c'est de faire une consultation complète avec moi qui vous permettrait vraiment de déterminer la nature et l'ampleur des sentiments de <?php echo $prenom2; ?> à votre égard. Pour cela je vous fais donc une offre de bienvenue à seulement <span>1€ pour les 10 premières minutes</span> suivi de 4€ par minute supplémentaire.<br/><br/>
                        Je vous donne également mon numéro de ligne directe : <span>04 82 53 71 59</span> ainsi que votre code personnel : <span class="code">S1-<?php echo $code; ?></span> qui vous permettra de bénéficier de cette promotion.<br/><br/>
                        J'attends votre appel <?php echo $prenom; ?>, grâce à cette consultation je serai en mesure de vous apporter toutes les réponses aux questions que vous vous posez.<br/><br/>
                        A très vite !<br/><br/>
                        Cécile<br/><br/>
                    </p>

                    <?php
                    break;
                case 'question_3' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Si j'ai bien compris, vous êtes dans l'attente d'un emploi et cela vous stresse, rien de plus normal au vu de la phase d'instabilité que vous traversez actuellement.<br/><br/>
                        Il est clair que vous manquez de confiance en vous et laissez-moi vous dire que cela ne vous aidera pas dans votre recherche d'emploi.<br/><br/>
                        Ce que je peux vous certifier cependant, c'est qu'une opportunité va se présenter à vous dans les semaines voire les jours à venir. Mais malheureusement tout n'est pas tout rose, un obstacle est là bien présent sur votre chemin, et j'ai bien peur qu'il vous empêche d'atteindre votre objectif professionnel.<br/><br/>
                        Écoutez <?php echo $prenom; ?>, j'ai vraiment envie de vous aider car je vois bien que seul vous ne vous en sortez plus, cependant je ne dispose pas assez d'éléments vous concernant... <br/><br/>
                        Alors ce que je vous propose c'est de m'appeler sur ma ligne directe : <span>04 82 53 71 59</span>.<br/><br/>
                        Nous pourrions ensemble procéder à une consultation complète, et comme c'est votre première fois je vous propose une consultation pour seulement <span>1€ les 10 premières minutes</span> suivi de 4€ par minute supplémentaire.<br/><br/>
                        Voici votre code personnel qui vous permettra de bénéficier de cette offre : <span class="code">S1-<?php echo $code; ?></span><br/><br/>
                        J'attends votre appel avec impatience <?php echo $prenom; ?> !<br/><br/>
                        Cécile<br/><br/>
                    </p>
                    <?php
                    break;
                case 'question_4' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?> ,<br/><br/>
                        Je vous écris aujourd'hui pour vous répondre au sujet de la demande d'étude personnalisée que vous avez demandé. <br/><br/>
                        Tout d'abord laissez moi vous dire <?php echo $prenom; ?>  que vous êtes une personne angoissée qui se laisse assez vite déborder par les évènements et surtout ces derniers temps. Je vois que votre emploi vous préoccupe beaucoup, à tel point que vous n'êtes plus capable de savourer les petits plaisirs de la vie.<br/><br/>
                        Ce qui est sûr <?php echo $prenom; ?> , c'est qu'il faut absolument que vous sortiez de cette phase instable dans laquelle vous vous trouvez. Je comprends que votre avenir professionnel vous inquiète mais il ne faut pas non plus que cela prenne le dessus sur votre vie quotidienne.<br/><br/>
                        Cependant je peux vous affirmer une chose <?php echo $prenom; ?> ! Un évènement qui pourrait changer le cours de votre vie va se présenter à vous dans les semaines à venir. Cette occasion sera unique et il ne faudra pas passer à côté! Malheureusement je vois la présence d'une personne négative autour de vous qui va venir s'interposer entre vous et vos projets professionnels.<br/><br/>
                        A ce stade là, je ne peux pas vraiment vous en dire d'avantage, mais si nous pouvions discuter ensemble je pourrais vous aider à mieux préparer votre avenir. Je voudrais vous proposer une consultation auditive, je pense que ce sera le plus adapté dans votre cas.<br/><br/>
                        Écoutez <?php echo $prenom; ?> , je suis prête à vous faire une offre pour cette consultation à seulement <span>1 € les 10 premières minutes</span> suivi de 4€ par minute supplémentaire. Pour cela je vous donne votre code personnel : <span class="code">S1-<?php echo $code; ?></span>  ainsi que mon numéro de ligne directe où vous pouvez me joindre actuellement : <span>04 82 53 71 59</span> <br/><br/>
                        J'attends votre appel <?php echo $prenom; ?>  !!<br/><br/>
                        Cécile<br/><br/>
                    </p>
                    <?php
                    break;
                case 'question_11' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Je suis Cécile voyante pure pour <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/" >myastro.fr</a>, c'est donc moi qui me suis chargée de votre demande d'étude personnalisée concernant votre relation avec <?php echo $prenom2; ?>. <br/><br/>
                        Écoutez je comprends que dans une situation pareille votre sensibilité prenne le dessus sur votre personnalité, mais <?php echo $prenom; ?> vous ne pouvez pas rester comme ça... La situation est critique et j'ai  bien peur que le départ de <?php echo $prenom2; ?> vous ai trop affecté pour reprendre le contrôle de la situation.<br/><br/>
                        Sachez cependant que tout dans votre profil astral laisse supposer qu'il y a de fortes chances pour que <?php echo $prenom2; ?> revienne vers vous, mais il semblerait qu'il y ai un problème dans votre comportement qui ne permette pas d'établir une stabilité dans votre relation.<br/><br/>
                        Je veux vraiment vous aider <?php echo $prenom; ?>, je vous perçois comme une personne sincère et qui aujourd'hui à juste besoin d'aide pour avancer. Cette aide je peux vous l'apporter par téléphone dans le cadre d'une consultation approfondie.<br/><br/>
                        Voici mon numéro de ligne directe : <span>04 82 53 71 59</span> <br/><br/>
                        Exceptionnellement je vous propose de vous prendre en consultation pour seulement <span>1€ les 10 premières minutes</span> suivi de 4€ par minute supplémentaire, pour cela je vous donne votre code personnel : <span class="code">S1-<?php echo $code; ?></span><br/><br/>
                        Je me tiens à votre disposition <?php echo $prenom; ?>, n'hésitez pas à m'appeler si vous voulez de mon aide pour vous sortir de cette situation.<br/><br/>
                        Cécile<br/><br/>
                    </p>

                    <?php
                    break;
                case 'question_24' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Vous avez demandé hier une étude de voyance personnalisée, c'est pour cela que je me permets de vous écrire aujourd'hui car  j'ai vu à quel point votre situation actuelle vous oppresse.<br/><br/>
                        On ne va pas se mentir <?php echo $prenom; ?> vous êtes clairement perdu au niveau sentimental et vous ne savez plus ce que vous devez penser et comment agir.<br/><br/>
                        Je pense que votre situation pourrait se débloquer très prochainement car j'ai vu qu'une occasion particulière allait se présenter à vous dans les semaines à venir. Il s'agit d'une occasion qui pourrait bouleverser le cours de votre vie <?php echo $prenom; ?>! Il ne faut donc pas prendre cet évènement à la légère....<br/><br/>
                        Mais méfiez-vous <?php echo $prenom; ?>, j'ai vu qu'une personne proche de vous pourrait nuire à votre vie sentimentale et vous faire passer à côté de cette occasion unique qui ne se représentera pas deux fois dans votre vie!<br/><br/>
                        Je vois bien que vous êtes en pleine détresse et que vous avez besoin de mon aide, alors ce que je peux vous proposer exceptionnellement c'est une consultation à <span>1€ les 10 premières minutes</span> seulement, suivi de 4€ par minute supplémentaire.<br/><br/>
                        Je vous confie votre code personnel : <span class="code">S1-<?php echo $code; ?></span> qui vous permettra de bénéficier de ce tarif avantageux, et voici mon numéro de ligne directe : <span>04 82 53 71 59</span> sur lequel vous pouvez me joindre dès maintenant. <br/><br/>
                        Grâce à cette consultation je serai en mesure de vous révéler quels seront les évènements déterminants qui vous attendent dans les semaines à venir.<br/><br/>
                        A tout de suite j'espère !<br/><br/>
                        Cécile<br/><br/>
                    </p>

                    <?php
                    break;
                case 'question_73' :
                    ?>
                    <p>Bonjour <?php echo $prenom; ?>,<br/><br/>
                        Suite à votre demande d'étude personnalisée je me permets de vous répondre dès aujourd'hui car j'ai vu que votre situation était vraiment très urgente.<br/><br/>
                        En effet j'ai ressentie que vous étiez en pleine période d'angoisse, que vos nuits étaient de plus en plus agitées. Sachez <?php echo $prenom; ?> qu'il est tout à fait normal d'avoir de telles émotions alors que vous attendez l'investissement qui va peut-être changer votre vie !<br/><br/>
                        D'autant plus que lors de votre analyse j'ai vu qu'un évènement directement lié à vos finances allait avoir lieu dans les semaines à venir. Il s'agit d'un évènement qui pourrait marquer votre vie <?php echo $prenom; ?>! Mais prenez garde ! Il y a malgré tout une ombre au tableau! <br/><br/>
                        En effet il y a visiblement quelqu'un dans votre entourage qui pourrait nuire à votre épanouissement financier. Une personne qui pourrait s'interposer entre vous et l'investissement que vous attendez.<br/><br/>
                        Écoutez, j'aimerais vraiment écourter votre période de stress et vous apportez les réponses aux questions que vous vous posez, mais pour cela il faudrait que nous puissions nous entretenir ensemble lors d'une consultation privée.
                        Donc exceptionnellement, je suis prête à vous proposer une consultation à seulement <span>1€ les 10 premières minutes</span> suivi de 4€ par minute supplémentaire. <br/><br/>
                        Voila <?php echo $prenom; ?> je vous donne ce code : <span class="code">S1-<?php echo $code; ?> </span>il vous servira à bénéficier de cette offre, voici également mon numéro de ligne directe : <span>04 82 53 71 59</span> sur lequel vous pouvez me joindre dès que vous le souhaitez.<br/><br/>
                        Sachez <?php echo $prenom; ?> que si vous avez envie de savoir ce que vous réserve les semaines à venir, la voyance auditive sera la meilleure des solutions pour écourter cette période d'attente dans laquelle vous vous trouvez.<br/><br/>
                        J'attends votre appel avec impatience !<br/><br/>
                        Cécile<br/><br/>
                    </p>

                    <?php
                    break;
                default :
                    ?>
                    <p> Vous avez demandé une analyse de voyance concernant votre avenir sur le site <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/" >myastro.fr</a>, cependant vous n'avez pas précisé quel domaine vous préoccupe.
                        Je vous invite donc à remplir à nouveau notre formulaire afin que l'on puisse vous apporter une analyse personnalisée. 
                        Pour cela cliquez sur le lien suivant et remplissez le formulaire sans oublier les cases à cocher : Demande d'analyse <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-gratuite" >MyAstro</a><br/><br/>
                        Cécile<br/><br/>
                    </p>
                    <?php
                    break;
            }
        } else
        {
            echo "Une erreur est survenue lors du chargement de cette page! La réponse vous à été envoyée par mail";
        }
        ?>
    </body>
</html>