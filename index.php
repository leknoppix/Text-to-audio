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
    $Fnm = "aide.mp3";
    $inF = fopen($Fnm,"w");
    fputs($inF,$output);
    fclose($inF);*/
$chaine="Une interface utilisateur WYSIWYG permet de composer visuellement le résultat voulu, typiquement pour un logiciel de mise en page, un traitement de texte ou d'image. C'est une interface \" intuitive \": l'utilisateur voit directement à l'écran à quoi ressemblera le résultat final. Cette interface permet, à des utilisateurs ne connaissant aucun langage de programmation de pouvoir mettre en forme le texte et les images de son choix.
Dans ce tutoriel, vous apprendrez à télécharger le système complet et à configurer une page basique, présentant un textarea. Grâce à jquery, le textarea sera remplacé par le système wysiwyg.";
$parsing = new parser();
$newtext = $parsing->coupe($chaine);
echo "<pre>";
print_r($newtext);
echo "</pre>";
?><!-- 
<object type="application/x-shockwave-flash" data="dewplayer-mini.swf?mp3=aide.mp3" width="303" height=113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-mini.swf?mp3=aide.mp3" />
</object>
<object type="application/x-shockwave-flash" data="dewplayer-vinyl.swf?mp3=aide.mp3" width="303" height="113" id="dewplayer-mini">
<param name="wmode" value="transparent" /><param name="movie" value="dewplayer-vinyl.swf?mp3=aide.mp3" />
</object>
-->