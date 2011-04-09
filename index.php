<?php
include('class/parser.php');
include('class/audio.php');
/*
    $string = urlencode("Bienvenu à la Mairie de Mirande");
    $ch = curl_init();
	$lang='es';
    $options = array(   CURLOPT_URL => 'http://translate.google.fr/translate_tts?ie=UTF-8&q='.$string.'&tl='.$lang,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_SSLVERSION => 3,
                           CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => 2,
                        CURLOPT_HEADER => false,
                );
    curl_setopt_array($ch, $options);
    $output = curl_exec($ch);
    if(curl_errno($ch)) {  echo 'Erreur Curl : ' . curl_error($ch); }
    curl_close($ch);
    */
$chaine="Sous la baguette de maestro Max comme le présente JP Pierre CAUBERE,   Président et musicien  de la sté Philharmonique de Mirande ,  maire adjoint. En ce 1er Avril comme dans un aquarium, le cœur des enfants de l’école de musique mirandaise accompagné de l’orchestre de la Sté Philharmonique s’est une fois de plus démarquée.  Sous le regard de plus de 900 spectateurs conquis, ils ont interprété 12 morceaux emblématiques d’un siècle  de chanson française, thématique choisie et insufflée dans le programme pédagogique des écoliers mirandais par Max Fouga, Directeur de l’école de musique municipale. Le concert du 1er avril 2011 à la salle André Beaudran décorée des réalisations artistiques de nos têtes blondes mirandaises restera un moment inoubliable. Un exercice brillant qui réunit  près de  55 musiciens et 250 enfants des écoles primaires publiques et privées, présenté et interprété par, on y croyait, un véritable titi parisien paré de son haut de forme, sa queue de pie et ses gants blancs Michel accompagné de Mistinguette en personne, tant la voix et les effets de Rose sont convaincants.

Un succès mérité car 6 mois de travail, d’écriture, de répétition, de montage,  furent nécessaires pour un tel résultat. De la réécriture des partitions pour instruments à vent, au montage vidéo diffusé pendant la rétrospective du présentateur , en passant par la réalisation des programmes et de la communication, Max Fouga  a tout fait , aidé il faut toutefois le souligné des personnels éducatif et territorial pour certains aspects.

Un grand merci à tous les intervenants et encore félicitations à vous Maestro, aux musiciens et chanteurs pour ce moment de pur bonheur qui plus est gratuit (seul le programme décoré par les écoliers était vendu à la discrétion des spectateurs).

Un événement professionnel que l’on souhaite à nouveau vivre pourquoi pas à l’occasion de la fête de la musique mirandaise….
";
$parsing = new parser();
$audio=new audio();
$newtext = $parsing->coupe($chaine);
echo "<pre>";
print_r($newtext);
echo "</pre>";
/*$id=0;
foreach($newtext as $t)
{
	$id++;
	$audio->creation_audio($t,$id);
}
$audio->audiofinal($id);*/
?><!-- 
<object type="application/x-shockwave-flash" data="dewplayer-mini.swf?mp3=aide.mp3" width="303" height=113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-mini.swf?mp3=aide.mp3" />
</object>
<object type="application/x-shockwave-flash" data="dewplayer-vinyl.swf?mp3=aide.mp3" width="303" height="113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-vinyl.swf?mp3=aide.mp3" />
</object>
-->