<?php
include('../include/Lib_handler.php');
include_once('../include/tools.php');

//
//  tarot_amour.php
//
//  Description: tirage tarot d'amour (c) Copyright Nguyen Ngoc Rao 2006.
//
//  Change Activity:
//  $nn YY/MM/DD <---Name---> <----------Description--------->
//  $00 06/12/27 D. Nguyen    Creation
//  $01 08/06/14 D. Nguyen    Support PHP5
//////////////////////////////////////////////////////////////////////////////////////////////

   error_reporting(E_ALL);

   // protect against option register_globals set to OFF
   if (!isset($PHP_SELF))
   {
      if (!empty($_REQUEST))
      {
         extract($_REQUEST);
      }

      // recommended to be here (last) for security reason
      if (!empty($_SERVER))
      {
         extract($_SERVER);
      }
   }

   //////////////////////////////////
   // customizable data
   //////////////////////////////////
   $cookie_name      = "CkAfTarotAmour";
   $cookie_timeout = 60 * 60;           //  value in seconds

   $msg1 = "Prénom non défini !";
   $msg2 = "Numéro du tirage tarot invalide ou périmé !";
   $msg3 = "Fichier manquant ! ";
   $msg4 = "Veuillez entrer votre prénom ! ";
   $msg5 = "Erreur interne au programme ! ";
   $msg7 = "Erreur : numéro de tirage invalide ou cookie non trouvé ! ";
   $msg8 = "Erreur : cookie invalide !";
   $msg9 = "Signe non défini !";
   $msg10 = "Signe invalide !";
   $msg11 = "Etape de tirage invalide !";
   $msg12 = "Etape invalide !";

   //////////////////////////////////


   $html_tirage_template   = "tarot_amour_tirage_modele.php";
   $html_synthese_template = "tarot_amour_synthese_modele.php";
   $html_ensemble_template = "tarot_amour_vue_ensemble_modele.php";
   $html_jour_template     = "tarot_amour_jour_modele.php";
   $html_end_template      = "tarot_amour_fin_modele.php";

   $nb_tarot_cards   = 22;

   $max_data_records = 300;             //  number of records for each data file below
   $data_amour       = "data/data_amour.php";
   $data_amour7      = "data/data_amour7.php";

   $max_citation_records = 200;
   $data_citation    = "data/data_citation.php";

   $order_tab = array(
      1 => "1ère"
     ,2 => "2ème"
     ,3 => "3ème"
     ,4 => "4ème"
     ,5 => ""
   );

   $jour_order_tab = array(
      1 => "Premier"
     ,2 => "Deuxième"
     ,3 => "Troisième"
     ,4 => "Quatrième"
     ,5 => "Cinquième"
     ,6 => "Sixième"
     ,7 => "Septième"
   );

   $arcanes_table = array(
      1  => "../images_tarot/batelr.jpg"
     ,2  => "../images_tarot/papesse.jpg"
     ,3  => "../images_tarot/imperatrice.jpg"
     ,4  => "../images_tarot/empereur.jpg"
     ,5  => "../images_tarot/pape.jpg"
     ,6  => "../images_tarot/amoureux.jpg"
     ,7  => "../images_tarot/chariot.jpg"
     ,8  => "../images_tarot/justice.jpg"
     ,9  => "../images_tarot/hermite.jpg"
     ,10 => "../images_tarot/fortune.jpg"
     ,11 => "../images_tarot/force.jpg"
     ,12 => "../images_tarot/pendu.jpg"
     ,13 => "../images_tarot/treize.jpg"
     ,14 => "../images_tarot/temperanc.jpg"
     ,15 => "../images_tarot/diable.jpg"
     ,16 => "../images_tarot/maisondie.jpg"
     ,17 => "../images_tarot/etoile.jpg"
     ,18 => "../images_tarot/lune.jpg"
     ,19 => "../images_tarot/soleil.jpg"
     ,20 => "../images_tarot/jugement.jpg"
     ,21 => "../images_tarot/monde.jpg"
     ,22 => "../images_tarot/fou.jpg"
   );

   $arcanes_table_name = array(
      1  => "1- Le Bateleur"
     ,2  => "2- La Papesse"
     ,3  => "3- L'Impératrice"
     ,4  => "4- L'Empereur"
     ,5  => "5- Le Pape"
     ,6  => "6- L'Amoureux"
     ,7  => "7- Le Chariot"
     ,8  => "8- La Justice"
     ,9  => "9- L'Hermite"
     ,10 => "10- La Roue de Fortune"
     ,11 => "11- La Force"
     ,12 => "12- Le Pendu"
     ,13 => "13- L'Arcane Sans Nom"
     ,14 => "14- La Tempérance"
     ,15 => "15- Le Diable"
     ,16 => "16- La Maison Dieu"
     ,17 => "17- L'Etoile"
     ,18 => "18- La Lune"
     ,19 => "19- Le Soleil"
     ,20 => "20- Le Jugement"
     ,21 => "21- Le Monde"
     ,22 => "22- Le Fou"
   );

   $sign_tab = array(
      1  => "Belier"
     ,2  => "Taureau"
     ,3  => "Gemeaux"
     ,4  => "Cancer"
     ,5  => "Lion"
     ,6  => "Vierge"
     ,7  => "Balance"
     ,8  => "Scorpion"
     ,9  => "Sagittaire"
     ,10 => "Capricorne"
     ,11 => "Verseau"
     ,12 => "Poissons"
   );

   $month_tab = array(
     1  =>  "Janvier"
    ,2  =>  "Février"
    ,3  =>  "Mars"
    ,4  =>  "Avril"
    ,5  =>  "Mai"
    ,6  =>  "Juin"
    ,7  =>  "Juillet"
    ,8  =>  "Août"
    ,9  =>  "Septembre"
    ,10 =>  "Octobre"
    ,11 =>  "Novembre"
    ,12 =>  "Décembre"
   );

   // day-of-week (0=Sunday, 1=Monday...)
   $dayofweek_tab = array(
     0  =>  "Dimanche"
    ,1  =>  "Lundi"
    ,2  =>  "Mardi"
    ,3  =>  "Mercredi"
    ,4  =>  "Jeudi"
    ,5  =>  "Vendredi"
    ,6  =>  "Samedi"
   );

   // default values
   $carte1 = 0;
   $carte2 = 0;
   $carte3 = 0;
   $carte4 = 0;
   $carte5 = 0;
   $carte1_img = "../images_tarot/dos_01.jpg";
   $carte2_img = "../images_tarot/dos_02.jpg";
   $carte3_img = "../images_tarot/dos_03.jpg";
   $carte4_img = "../images_tarot/dos_04.jpg";
   $carte5_img = "../images_tarot/dos_05.jpg";
   $alt1 = "dos_01";
   $alt2 = "dos_02";
   $alt3 = "dos_03";
   $alt4 = "dos_04";
   $alt5 = "dos_05";
   $id_amour  = 1;
   $idday1 = 0;
   $idday2 = 0;
   $idday3 = 0;
   $idday4 = 0;
   $idday5 = 0;
   $idday6 = 0;
   $idday7 = 0;
   $citation_id1 = 0;
   $citation_id2 = 0;
   $citation_id3 = 0;
   $citation_id4 = 0;
   $citation_id5 = 0;
   $citation_id6 = 0;
   $citation_id7 = 0;

   //$php_fname = basename($PHP_SELF);
   $php_fname = "tarot_amour";

   // preliminary checks
   if ((count($arcanes_table) != $nb_tarot_cards) ||
       (count($arcanes_table_name) != $nb_tarot_cards)
      )
   {
      fatal_error($msg5);
   }

   if (!file_exists($html_tirage_template) ||
       !file_exists($html_synthese_template) ||
       !file_exists($html_ensemble_template) ||
       !file_exists($html_jour_template) ||
       !file_exists($html_end_template) ||
       !file_exists($data_amour) ||
       !file_exists($data_amour7) ||
       !file_exists($data_citation))
   {
      fatal_error($msg3);
   }

   if (!isset($ID))                     //  form input first time
   {
      if (!isset($prenom))              //  should not occur
      {
         fatal_error($msg1);
      }
      if (!isset($signe))               //  should not occur
      {
         fatal_error($msg9);
      }
      if (!isset($sign_tab[$signe]))    //  should not occur
      {
         fatal_error($msg10);
      }

      // normalize input
      $prenom = ucwords(stripslashes(strip_blank(trim($prenom))));       // make each word in upper case
      $prenom = str_replace(" ", "-", $prenom);// blank into hyphen
      $prenom = my_uppercase_words($prenom);
      if ($prenom == "")                   // should not occur (javascript checking)
      {
         fatal_error($msg4);
      }
$expire = 365*24*3600; 
      // clear cookie
      //setcookie($cookie_name, "", mktime(12,0,0,1, 1, 1970));

setcookie($cookie_name, "",time()+$expire); 
      // generate a new ID
      srand((double)microtime()*1000000);
      $ID = rand();

      set_cookies_data($cookie_name);

      $sequence = 0;
      get_and_set_cards();
      output_tirage($html_tirage_template);
   }
   else                                 //  normal click, $ID defined
   {
      if (isset($_COOKIE[$cookie_name]))         //  cookie set
      {
         if (isset($sequence))          //  tirage part
         {
            if (!isset($order_tab[$sequence]))//  should not occur
            {
               fatal_error($msg11);
            }
            get_cookies_data($cookie_name);
            get_and_set_cards();
            switch ($sequence)
            {
               case 1:
               case 2:
               case 3:
                  $html_template = $html_tirage_template;
                  break;
               case 4:
                  $html_template = $html_synthese_template;
                  break;
               default:
                  $html_template = $html_ensemble_template;
                  break;
            }
            output_tirage($html_template);
         }
         else
         {
            if (isset($jour))           //  interpretation part
            {
               get_cookies_data($cookie_name);
               set_cards();
               if (isset($jour_order_tab[$jour]))
               {
                  output_jour($html_jour_template, $jour);
               }
               else
               {
                  $jour = 8;
                  output_end($html_end_template);
               }
            }
            else                        //  should not occur
            {
               fatal_error($msg2);
            }
         }
      }
      else                              //  cookie not set: error (should not occur)
      {
         fatal_error($msg7);
      }
   }


function set_cookies_data($cookie_name)
{
   global $carte1;
   global $carte2;
   global $carte3;
   global $carte4;
   global $carte5;
   global $cookie_timeout;
   global $ID;
   global $prenom;
   global $signe;
   global $id_amour;
   global $citation_id1;
   global $citation_id2;
   global $citation_id3;
   global $citation_id4;
   global $citation_id5;
   global $citation_id6;
   global $citation_id7;
   global $idday1;
   global $idday2;
   global $idday3;
   global $idday4;
   global $idday5;
   global $idday6;
   global $idday7;

   $carte1 = get_random_cards($carte1, $carte2, $carte3, $carte4);
   $carte2 = get_random_cards($carte1, $carte2, $carte3, $carte4);
   $carte3 = get_random_cards($carte1, $carte2, $carte3, $carte4);
   $carte4 = get_random_cards($carte1, $carte2, $carte3, $carte4);
   $carte5 = get_5th_carte($carte1, $carte2, $carte3, $carte4);
   get_article_id();                    //  use global variables
   $cookie_value  = $ID;
   $cookie_value .= "|" . base64_encode($prenom);
   $cookie_value .= "|" . $carte1 ."|" . $carte2 . "|" . $carte3. "|" . $carte4 . "|" . $carte5;
   $cookie_value .= "|" . $signe;
   $cookie_value .= "|" . $id_amour;
   $cookie_value .= "|" . $citation_id1 ."|" . $citation_id2 . "|" . $citation_id3 . "|" . $citation_id4 . "|" . $citation_id5 . "|" . $citation_id6 . "|" . $citation_id7;
   $cookie_value .= "|" . $idday1 ."|" . $idday2 . "|" . $idday3 . "|" . $idday4 . "|" . $idday5 . "|" . $idday6 . "|" . $idday7;
   setcookie($cookie_name,
             $cookie_value,
             time()+$cookie_timeout);
}

function get_cookies_data($cookie_name)
{
   global $prenom;
   global $signe;
   global $carte1;
   global $carte2;
   global $carte3;
   global $carte4;
   global $carte5;
   global $msg8;
   global $id_amour;
   global $citation_id1;
   global $citation_id2;
   global $citation_id3;
   global $citation_id4;
   global $citation_id5;
   global $citation_id6;
   global $citation_id7;
   global $idday1;
   global $idday2;
   global $idday3;
   global $idday4;
   global $idday5;
   global $idday6;
   global $idday7;

   $pieces = explode("|", $_COOKIE[$cookie_name]);
   if (count($pieces) != 23)             //  invalid cookie, should not occur
   {
      fatal_error($msg8);
   }
   else
   {
      $ID             = trim($pieces[0]);
      $prenom         = base64_decode(trim($pieces[1]));
      $carte1         = trim($pieces[2]);
      $carte2         = trim($pieces[3]);
      $carte3         = trim($pieces[4]);
      $carte4         = trim($pieces[5]);
      $carte5         = trim($pieces[6]);
      $signe          = trim($pieces[7]);
      $id_amour       = trim($pieces[8]);
      $citation_id1   = trim($pieces[9]);
      $citation_id2   = trim($pieces[10]);
      $citation_id3   = trim($pieces[11]);
      $citation_id4   = trim($pieces[12]);
      $citation_id5   = trim($pieces[13]);
      $citation_id6   = trim($pieces[14]);
      $citation_id7   = trim($pieces[15]);
      $idday1         = trim($pieces[16]);
      $idday2         = trim($pieces[17]);
      $idday3         = trim($pieces[18]);
      $idday4         = trim($pieces[19]);
      $idday5         = trim($pieces[20]);
      $idday6         = trim($pieces[21]);
      $idday7         = trim($pieces[22]);
   }
}

function get_article_id()
{
   global $max_data_records;
   global $id_amour;
   global $citation_id1;
   global $citation_id2;
   global $citation_id3;
   global $citation_id4;
   global $citation_id5;
   global $citation_id6;
   global $citation_id7;
   global $idday1;
   global $idday2;
   global $idday3;
   global $idday4;
   global $idday5;
   global $idday6;
   global $idday7;

   mt_srand((double)microtime()*1000000);//  random seed generator

   $id_amour = mt_rand(1, $max_data_records);

   $idday1 = get_random_records();
   $idday2 = get_random_records();
   $idday3 = get_random_records();
   $idday4 = get_random_records();
   $idday5 = get_random_records();
   $idday6 = get_random_records();
   $idday7 = get_random_records();

   $citation_id1 = get_citation_random_records();
   $citation_id2 = get_citation_random_records();
   $citation_id3 = get_citation_random_records();
   $citation_id4 = get_citation_random_records();
   $citation_id5 = get_citation_random_records();
   $citation_id6 = get_citation_random_records();
   $citation_id7 = get_citation_random_records();
}

// implicit global input: $sequence
function get_and_set_cards()
{
   global $carte1;
   global $carte2;
   global $carte3;
   global $carte4;
   global $carte5;
   global $carte1_img;
   global $carte2_img;
   global $carte3_img;
   global $carte4_img;
   global $carte5_img;
   global $alt1;
   global $alt2;
   global $alt3;
   global $alt4;
   global $alt5;
   global $arcanes_table;
   global $arcanes_table_name;
   global $sequence;
   global $prenom;

   if ($sequence == 0)                     //  first time
   {
      // nothing to do
   }
   elseif ($sequence == 1)
   {
      if (!card_valid($carte1))
      {
         $carte1 = get_random_cards($carte1, $carte2, $carte3, $carte4);
      }
      $carte1_img = $arcanes_table[$carte1];
      $alt1       = $arcanes_table_name[$carte1];
   }
   else
   {
      $carte1_img = $arcanes_table[$carte1];
      $alt1       = $arcanes_table_name[$carte1];
      if ($sequence == 2)
      {
         if (!card_valid($carte2))
         {
            $carte2 = get_random_cards($carte1, $carte2, $carte3, $carte4);
         }
         $carte2_img = $arcanes_table[$carte2];
         $alt2       = $arcanes_table_name[$carte2];
      }
      else
      {
         $carte2_img = $arcanes_table[$carte2];
         $alt2       = $arcanes_table_name[$carte2];
         if ($sequence == 3)
         {
            if (!card_valid($carte3))
            {
               $carte3 = get_random_cards($carte1, $carte2, $carte3, $carte4);
            }
            $carte3_img = $arcanes_table[$carte3];
            $alt3       = $arcanes_table_name[$carte3];
         }
         else                           //  carte3 valid
         {
            $carte3_img = $arcanes_table[$carte3];
            $alt3       = $arcanes_table_name[$carte3];
            if ($sequence == 4)
            {
               if (!card_valid($carte4))
               {
                 $carte4 = get_random_cards($carte1, $carte2, $carte3, $carte4);
               }
               $carte4_img = $arcanes_table[$carte4];
               $alt4       = $arcanes_table_name[$carte4];
            }
            else                        //  carte 4 valid
            {
               $carte4_img = $arcanes_table[$carte4];
               $alt4       = $arcanes_table_name[$carte4];
               if ($sequence == 5)
               {
                  if (!card_valid($carte5))//  synthese not done
                  {
                     $carte5 = get_5th_carte($carte1, $carte2, $carte3, $carte4);
                  }
                  $carte5_img = $arcanes_table[$carte5];
                  $alt5       = $arcanes_table_name[$carte5];
               }
               else                     //  synthese already done
               {
                  // show predictions
                  $carte5_img = $arcanes_table[$carte5];
                  $alt5       = $arcanes_table_name[$carte5];
               }
            }
         }
      }
   }
}

function set_cards()
{
   global $carte1;
   global $carte2;
   global $carte3;
   global $carte4;
   global $carte5;
   global $carte1_img;
   global $carte2_img;
   global $carte3_img;
   global $carte4_img;
   global $carte5_img;
   global $alt1;
   global $alt2;
   global $alt3;
   global $alt4;
   global $alt5;
   global $arcanes_table;
   global $arcanes_table_name;
   global $prenom;

   $carte1_img = $arcanes_table[$carte1];
   $alt1       = $arcanes_table_name[$carte1];

   $carte2_img = $arcanes_table[$carte2];
   $alt2       = $arcanes_table_name[$carte2];

   $carte3_img = $arcanes_table[$carte3];
   $alt3       = $arcanes_table_name[$carte3];

   $carte4_img = $arcanes_table[$carte4];
   $alt4       = $arcanes_table_name[$carte4];

   $carte5_img = $arcanes_table[$carte5];
   $alt5       = $arcanes_table_name[$carte5];
}


function card_valid($carte)
{
   global $nb_tarot_cards;

   if (($carte >= 1) &&
       ($carte <= $nb_tarot_cards))
   {
      return true;
   }
   else
   {
      return false;
   }
}

function get_random_cards($carte1, $carte2, $carte3, $carte4)
{
   global $nb_tarot_cards;

   mt_srand((double)microtime()*1000000);

   for ($i = 0; $i < 1000; $i++)        //  max 1000 tries
   {
      $randval = mt_rand(1, $nb_tarot_cards);// range is 1-$nb_tarot_cards
      if (($randval != $carte1) &&
          ($randval != $carte2) &&
          ($randval != $carte3) &&
          ($randval != $carte4))
      {
         break;
      }
   }
   return $randval;
}

function get_5th_carte($carte1, $carte2, $carte3, $carte4)
{
   global $nb_tarot_cards;

   $num = $carte1 + $carte2 + $carte3 + $carte4;
   if ($num > $nb_tarot_cards)
   {
      $num2 = $num % 10;
      $num1 = ($num - $num2)/ 10;
      $num = $num1 + $num2;
   }
   return $num;
}

function get_tarot_text($jour, &$citation_text, &$amour_text)
{
   global $data_amour7;
   global $data_citation;
   global $citation_id1;
   global $citation_id2;
   global $citation_id3;
   global $citation_id4;
   global $citation_id5;
   global $citation_id6;
   global $citation_id7;
   global $idday1;
   global $idday2;
   global $idday3;
   global $idday4;
   global $idday5;
   global $idday6;
   global $idday7;

   switch ($jour)
   {
      case 1:
         $citation_line_number = $citation_id1;
         $amour_line_number    = $idday1;
         break;
      case 2:
         $citation_line_number = $citation_id2;
         $amour_line_number    = $idday2;
         break;
      case 3:
         $citation_line_number = $citation_id3;
         $amour_line_number    = $idday3;
         break;
      case 4:
         $citation_line_number = $citation_id4;
         $amour_line_number    = $idday4;
         break;
      case 5:
         $citation_line_number = $citation_id5;
         $amour_line_number    = $idday5;
         break;
      case 6:
         $citation_line_number = $citation_id6;
         $amour_line_number    = $idday6;
         break;
      case 7:
         $citation_line_number = $citation_id7;
         $amour_line_number    = $idday7;
         break;
      default:                     //  should not occur
         $citation_line_number = $citation_id1;
         $amour_line_number    = $idday1;
         break;
   }

   $fp = @fopen($data_amour7, "r");
   if ($fp)
   {
      fgets($fp, 4096);                 //  skip first line (php header)
      $line = 0;
      while ($buffer = fgets($fp, 4096))
      {
         $line++;
         if ($line >= $amour_line_number)
         {
            $amour_text = $buffer;
            break;
         }
      }
      fclose($fp);
   }

   $fp = @fopen($data_citation, "r");
   if ($fp)
   {
      fgets($fp, 4096);                 //  skip first line (php header)
      $line = 0;
      while ($buffer = fgets($fp, 4096))
      {
         $line++;
         if ($line >= $citation_line_number)
         {
            $citation_text = substr($buffer, 4);//  4: skip number part
            break;
         }
      }
      fclose($fp);
   }
}

function get_vue_ensemble_text()
{
   global $data_amour;
   global $id_amour;

   $tarot_text = "";
   $fp = @fopen($data_amour, "r");
   if ($fp)
   {
      fgets($fp, 4096);                 //  skip first line (php header)
      $line = 0;
      while ($buffer = fgets($fp, 4096))
      {
         $line++;
         if ($line >= $id_amour)
         {
            $tarot_text = $buffer;
            break;
         }
      }
      fclose($fp);
   }
   $tarot_text = str_replace("Couples : ",
                             "<div class=\"row-fluid social-share-footer\">
                                <span class=\"share-icon icon-caret-right\"></span>

                                <div class=\"share-icons\">
                                    Couples :
                                </div>
</div>",
                             $tarot_text);
   $tarot_text = str_replace("Célibataires : ",
                             "<br><div class=\"row-fluid social-share-footer\">
                                <span class=\"share-icon icon-caret-right\"></span>

                                <div class=\"share-icons\">
                                    Célibataires :
                                </div>
</div>",
                             $tarot_text);
   return $tarot_text;
}


function output_tirage($html_template)
{
   global $prenom;
   global $signe;
   global $sequence;
   global $php_fname;
   global $ID;
   global $order_tab;
   global $alt1;
   global $alt2;
   global $alt3;
   global $alt4;
   global $alt5;
   global $carte1_img;
   global $carte2_img;
   global $carte3_img;
   global $carte4_img;
   global $carte5_img;
   global $sign_tab;

   $sequence++;
   $f = implode("" , @file($html_template));

   $f = str_replace("[()prenom()]",
                    "$prenom",
                    $f);
   $f = str_replace("[()sign_text()]",
                    $sign_tab[$signe],
                    $f);
					
	$f = str_replace("[()sign_text_m()]",
                    strtolower($sign_tab[$signe]),
                    $f);
   if (isset($order_tab[$sequence]))
   {
      $f = str_replace("[()ordre_tirage()]",
                       $order_tab[$sequence],
                       $f);
   }
   else                                 //  vue ensemble
   {
      get_week_interval($date_debut, $date_fin);// $01C
      $f = str_replace("[()date_debut()]",
                       $date_debut,
                       $f);
		$f = str_replace("[()date_0()]",
                       dateplus0(),
                       $f);
	$f = str_replace("[()date_1()]",
                       dateplus1(),
                       $f);
   $f = str_replace("[()date_2()]",
                       dateplus2(),
                       $f);
   $f = str_replace("[()date_3()]",
                       dateplus3(),
                       $f);
   $f = str_replace("[()date_4()]",
                       dateplus4(),
                       $f);
   $f = str_replace("[()date_5()]",
                       dateplus5(),
                       $f);
   $f = str_replace("[()date_6()]",
                       dateplus6(),
                       $f);
      $f = str_replace("[()date_fin()]",
                       $date_fin,
                       $f);
      $tarot_text = get_vue_ensemble_text();
      $f = str_replace("[()tarot_text()]",
                       $tarot_text,
                       $f);
   }
   $f = str_replace("[()today_string()]",
                    get_todaystring(),
                    $f);
   $f = str_replace("[()php_fname()]",
                    $php_fname,
                    $f);
   $f = str_replace("[()param()]",
                    "$ID-$sequence",
                    $f);
   $f = str_replace("[()ID()]",
                    $ID,
                    $f);
   $f = str_replace("[()carte1_img()]",
                    $carte1_img,
                    $f);
   $f = str_replace("[()carte2_img()]",
                    $carte2_img,
                    $f);
   $f = str_replace("[()carte3_img()]",
                    $carte3_img,
                    $f);
   $f = str_replace("[()carte4_img()]",
                    $carte4_img,
                    $f);
   $f = str_replace("[()carte5_img()]",
                    $carte5_img,
                    $f);
   $f = str_replace("[()alt1()]",
                    $alt1,
                    $f);
   $f = str_replace("[()alt2()]",
                    $alt2,
                    $f);
   $f = str_replace("[()alt3()]",
                    $alt3,
                    $f);
   $f = str_replace("[()alt4()]",
                    $alt4,
                    $f);
   $f = str_replace("[()alt5()]",
                    $alt5,
                    $f);

   echo $f;
}
function dateplus1() {

$dateplusn = date( "w/d/n/Y", time() + 1 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus2() {

$dateplusn = date( "w/d/n/Y", time() + 2 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus3() {

$dateplusn = date( "w/d/n/Y", time() + 3 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus4() {

$dateplusn = date( "w/d/n/Y", time() + 4 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus5() {

$dateplusn = date( "w/d/n/Y", time() + 5 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus6() {

$dateplusn = date( "w/d/n/Y", time() + 6 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function dateplus0() {

$dateplusn = date( "w/d/n/Y", time() + 0 * 24 * 60 * 60 );
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");
// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', $dateplusn);
$dateplusn = ucfirst($nom_jour_fr[$nom_jour]) .' '.$jour.' '.ucfirst($mois_fr[$mois]).' '.$annee;
return $dateplusn;

}
function output_jour($html_template, $jour)
{

  
   global $prenom;
   global $signe;
   global $php_fname;
   global $ID;
   global $jour_order_tab;
   global $alt1;
   global $alt2;
   global $alt3;
   global $alt4;
   global $alt5;
   global $carte1_img;
   global $carte2_img;
   global $carte3_img;
   global $carte4_img;
   global $carte5_img;
   global $sign_tab;


   $f = implode("" , @file($html_template));

   

   $f = str_replace("[()prenom()]",
                    "$prenom",
                    $f);
   $f = str_replace("[()sign_text()]",
                    $sign_tab[$signe],
                    $f);
	$f = str_replace("[()sign_text_m()]",
                    strtolower($sign_tab[$signe]),
                    $f);
   $f = str_replace("[()jour()]",
                    $jour,
                    $f);
	$f = str_replace("[()date_0()]",
                       dateplus0(),
                       $f);
	$f = str_replace("[()date_1()]",
                       dateplus1(),
                       $f);
   $f = str_replace("[()date_2()]",
                       dateplus2(),
                       $f);
   $f = str_replace("[()date_3()]",
                       dateplus3(),
                       $f);
   $f = str_replace("[()date_4()]",
                       dateplus4(),
                       $f);
   $f = str_replace("[()date_5()]",
                       dateplus5(),
                       $f);
   $f = str_replace("[()date_6()]",
                       dateplus6(),
                       $f);
  
   $f = str_replace("[()date_jour()]",
                    get_datejour($jour),
                    $f);
   $f = str_replace("[()ordre_jour()]",
                    $jour_order_tab[$jour],
                    $f);
   $f = str_replace("[()php_fname()]",
                    $php_fname,
                    $f);
   $jour++;
   $f = str_replace("[()param()]",
                    "ID=$ID&jour=$jour",
                    $f);
   if (isset($jour_order_tab[$jour]))
   {
      $f = str_replace("[()link_title()]",
                       "$jour_order_tab[$jour] jour",
                       $f);
   }
   else
   {
      $f = str_replace("[()link_title()]",
                       "Suite",
                       $f);
   }
   $f = str_replace("[()ID()]",
                    $ID,
                    $f);
   $f = str_replace("[()carte1_img()]",
                    $carte1_img,
                    $f);
   $f = str_replace("[()carte2_img()]",
                    $carte2_img,
                    $f);
   $f = str_replace("[()carte3_img()]",
                    $carte3_img,
                    $f);
   $f = str_replace("[()carte4_img()]",
                    $carte4_img,
                    $f);
   $f = str_replace("[()carte5_img()]",
                    $carte5_img,
                    $f);
   $f = str_replace("[()alt1()]",
                    $alt1,
                    $f);
   $f = str_replace("[()alt2()]",
                    $alt2,
                    $f);
   $f = str_replace("[()alt3()]",
                    $alt3,
                    $f);
   $f = str_replace("[()alt4()]",
                    $alt4,
                    $f);
   $f = str_replace("[()alt5()]",
                    $alt5,
                    $f);

   get_tarot_text($jour, $citation_text, $amour_text);// $01C
   $f = str_replace("[()citation_text()]",
                    $citation_text,
                    $f);
   $f = str_replace("[()amour_text()]",
                    $amour_text,
                    $f);

   echo $f;
}

function output_end($html_template)
{
   global $prenom;
   global $signe;
   global $php_fname;
   global $ID;
   global $carte1;
   global $carte2;
   global $carte3;
   global $carte4;
   global $alt1;
   global $alt2;
   global $alt3;
   global $alt4;
   global $alt5;
   global $carte1_img;
   global $carte2_img;
   global $carte3_img;
   global $carte4_img;
   global $carte5_img;
   global $sign_tab;

   $f = implode("" , @file($html_template));

   $f = str_replace("[()prenom()]",
                    "$prenom",
                    $f);
   $f = str_replace("[()sign_text()]",
                    $sign_tab[$signe],
                    $f);
   $f = str_replace("[()today_string()]",
                    get_todaystring(),
                    $f);
   $f = str_replace("[()php_fname()]",
                    $php_fname,
                    $f);
   $f = str_replace("[()ID()]",
                    $ID,
                    $f);
   $f = str_replace("[()carte1_img()]",
                    $carte1_img,
                    $f);
   $f = str_replace("[()carte2_img()]",
                    $carte2_img,
                    $f);
   $f = str_replace("[()carte3_img()]",
                    $carte3_img,
                    $f);
   $f = str_replace("[()carte4_img()]",
                    $carte4_img,
                    $f);
   $f = str_replace("[()carte5_img()]",
                    $carte5_img,
                    $f);
   $f = str_replace("[()alt1()]",
                    $alt1,
                    $f);
   $f = str_replace("[()alt2()]",
                    $alt2,
                    $f);
   $f = str_replace("[()alt3()]",
                    $alt3,
                    $f);
   $f = str_replace("[()alt4()]",
                    $alt4,
                    $f);
   $f = str_replace("[()alt5()]",
                    $alt5,
                    $f);

   echo $f;
}

function fatal_error($string)
{
   echo "<html><body>\n";
   echo "$string\n";
   echo "<br><center><a href=\"javascript:history.go(-1)\">Retour</a></center>";
   echo "</body></html>\n";
   exit;
}

function strip_blank($instr)
{
   $instr = preg_replace("([ ]+)"," ", $instr);
   return $instr;
}

function my_uppercase_words($instr)
{
   if (strstr($instr, "è") == false)
   {
      $instr = ucwords($instr);
   }
   $pieces = explode("-", $instr);
   for ($i = 0; $i < count($pieces); $i++)
   {
      if (strstr($pieces[$i], "è") == false)
      {
        $pieces[$i] = ucwords($pieces[$i]);
      }
   }
   $instr = implode("-", $pieces);
   return $instr;
}


function get_random_records()
{
   global $max_data_records;
   global $idday1;
   global $idday2;
   global $idday3;
   global $idday4;
   global $idday5;
   global $idday6;
   global $idday7;

   mt_srand((double)microtime()*1000000);

   for ($i = 0; $i < 1000; $i++)        //  max 1000 tries
   {
      $randval = mt_rand(1, $max_data_records);
      if (($randval != $idday1) &&
          ($randval != $idday2) &&
          ($randval != $idday3) &&
          ($randval != $idday4) &&
          ($randval != $idday5) &&
          ($randval != $idday6) &&
          ($randval != $idday7))
      {
         break;
      }
   }
   return $randval;
}

function get_citation_random_records()
{
   global $max_citation_records;
   global $citation_id1;
   global $citation_id2;
   global $citation_id3;
   global $citation_id4;
   global $citation_id5;
   global $citation_id6;
   global $citation_id7;

   mt_srand((double)microtime()*1000000);//  random seed

   for ($i = 0; $i < 1000; $i++)        //  max 1000 tries
   {
      $randval = mt_rand(1, $max_citation_records);
      if (($randval != $citation_id1) &&
          ($randval != $citation_id2) &&
          ($randval != $citation_id3) &&
          ($randval != $citation_id4) &&
          ($randval != $citation_id5) &&
          ($randval != $citation_id6) &&
          ($randval != $citation_id7))
      {
         break;
      }
   }
   return $randval;
}

function get_todaystring()
{
   global $month_tab;

   $date_str = date("j");
   if ($date_str == 1)
   {
      $date_str .= "er";
   }
   $today_string = $date_str . " " . $month_tab[date("n")] . " " . date("Y");
   return $today_string;
}

function get_week_interval(&$date_debut, &$date_fin)
{
   global $month_tab;
   global $dayofweek_tab;

   // get current date
   $mm   = date("n");                   // month, without leading 0
   $dd   = date("j");                   // day without leading 0
   $yyyy = date("Y");                   // year
   $date = mktime(10,                   // hours (avoid using 0 for summer/winter time problem)
                  0,                    // minutes
                  0,                    // seconds
                  $mm,                  // month
                  $dd,                  // day
                  $yyyy);               // year

   $dd   = date("j", $date);            // day without leading 0
   $mm   = date("n", $date);            // month without leading 0
   $yyyy = date("Y", $date);            // year
   $dayofw = date("w", $date);          // day-of-week (0=Sunday, 1=Monday...)
   $dd_str = $dd;
   if ($dd == 1)
   {
      $dd_str .= "er";
   }

   $date_debut = "$dayofweek_tab[$dayofw] $dd_str $month_tab[$mm] $yyyy";

   // Associated end of period
   $date2 = $date + 6 * 24 * 60 * 60;
   $dd2 = date("j", $date2);            // day without leading 0
   $mm2   = date("n", $date2);          // month, without leading 0
   $yyyy2 = date("Y", $date2);
   $dayofw2 = date("w", $date2);         // day-of-week (0=Sunday, 1=Monday...)
   $dd2_str = $dd2;
   if ($dd2 == 1)
   {
      $dd2_str .= "er";
   }

   $date_fin = "$dayofweek_tab[$dayofw2] $dd2_str $month_tab[$mm2] $yyyy2";
}

// $jour = 1..7
function get_datejour($jour)
{
   global $month_tab;
   global $dayofweek_tab;

   $new_date = mktime(10, 0, 0, date("n"), date("j"), date("Y"));
   $new_date += ($jour-1) * 24 * 60 * 60;
   $date_str = date("j", $new_date);
   $dayofw = date("w", $new_date);          // day-of-week (0=Sunday, 1=Monday...)
   if ($date_str == 1)
   {
      $date_str .= "er";
   }
   $str = "$dayofweek_tab[$dayofw] $date_str " . $month_tab[date("n", $new_date)] . " " . date("Y", $new_date);
   return $str;
}

?>

