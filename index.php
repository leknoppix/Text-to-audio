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
$chaine="Blogs, réseaux sociaux, pages d'accueil personnalisables... Depuis quelques années, les sites web ont gagné en fonctionnalités et sont devenus dans le même temps de plus en plus complexes.
Que le temps de la \"page web perso\" est loin ! Il y a une époque où l'on pouvait se contenter de créer un site basique. Un peu de texte, quelques images : hop là, notre site perso était prêt. :-°
Aujourd'hui, c'est différent : il faut que ça bouge ! On s'attend à ce qu'un site soit régulièrement mis à jour : on veut voir des actualités sur la page d'accueil, on veut pouvoir les commenter, discuter sur des forums, bref, participer à la vie du site.
Le langage PHP a justement été conçu pour créer des sites \"vivants\" (on parle de sites dynamiques). Et si vous voulez apprendre à créer vous aussi des sites web dynamiques, c'est votre jour de chance : vous êtes sur un cours pour vrais débutants en PHP !
L'essentiel, c'est de lire en entier les chapitres dans l'ordre. Après, ça passe tout seul et vous vous étonnerez bientôt de ce que vous êtes capable de faire ! ";
$parsing = new parser();
$audio=new audio();
$newtext = $parsing->coupe($chaine);
$id=0;
foreach($newtext as $t)
{
	$id++;
	$audio->creation_audio($t,$id);
}
$audio->audiofinal($id);
?> 
<object type="application/x-shockwave-flash" data="dewplayer-mini.swf?mp3=final.mp3" width="303" height=113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-mini.swf?mp3=final.mp3" />
</object>
<object type="application/x-shockwave-flash" data="dewplayer-vinyl.swf?mp3=final.mp3" width="303" height="113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-vinyl.swf?mp3=final.mp3" />
</object>