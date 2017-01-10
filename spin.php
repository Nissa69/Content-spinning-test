<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/01/17
 * Time: 13:07
 */

// Ceci est un petit test de content spinning //
$text = "{{Tous les|Chaque} {début de semaine|mardi}, je {prépare|rédige|met au propre|griffonne|écris} un {article|communiqué de presse|texte|page} {découpé|prédécoupé|spinné} sur un {nouveau {thème|thématique|concept|sujet}|{thème|thématique|concept|sujet} {inédit|unique|novateur|original}}.|Je {prépare|rédige|met au propre|griffonne|écris} un {article|communiqué de presse|texte|page} {découpé|prédécoupé|spinné} sur un {nouveau {thème|thématique|concept|sujet}|{thème|thématique|concept|sujet} {inédit|unique|novateur|original}} {tous les|chaque} {début de semaine|mardi}.} {Une {bonne| }{longueur|taille} et une {rigueur|qualité} {d’écrit |d’écriture |de contenu |de rédaction |}minimale sont {obligatoires|nécessaires|indispensables|éxigées|imposées|requises}|{Il|Celui-ci|Le texte|L’article} doit {obligatoirement|absolument|nécessairement| }être {en même temps|à la fois|simultanément| } {suffisament|assez|raisonnablement} {grand|long} et {détaillé|fourni|précis}} {afin de|pour} {me permettre|me donner la possibilité|pouvoir} d’en {produire|tirer|créer|extraire} {plusieurs dizaines|une centaine|au moins 100|plus de 100} {à terme|à la fin|au final}.";



function spinnage($text){



    if(!preg_match('/{/si', $text)) {

        return $text;

    }
                    else {
            preg_match_all('/\{([^{}]*)\}/si', $text, $matches);
            $occur = count($matches[1]);
            for ($i=0; $i<$occur; $i++)
            {
                $word_spinning = explode("|",$matches[1][$i]);
                shuffle($word_spinning);
                $text = str_replace($matches[0][$i], $word_spinning[0], $text);
            }
    return  spinnage($text);
            }

    }

    echo spinnage($text);

?>