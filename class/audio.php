<?php
class audio
{
	private $lang;
	private $audio;

	function __construct($lang='fr')
	{
		$this->lang=$lang;
	}
	public function creation_audio($string)
	{
		$ch = curl_init();
		$options = array(   CURLOPT_URL => 'http://translate.google.fr/translate_tts?ie=UTF-8&q='.$string.'&tl='.$this->lang,
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
		$Fnm = "audio.mp3";
		$inF = fopen($Fnm,"w");
		fputs($inF,$output);
		fclose($inF);
		$handle = fopen('audio.mp3', "rb");
		$size = filesize('audio.mp3');
		$load = stream_get_line($handle, $size);
		fclose($handle);
		$tab=array("mp3" => $load, "size" => $size);
		$this->audio.=$tab['mp3'];
	}
	public function audiofinal()
	{
		$Fnm = "final.mp3";
		$inF = fopen($Fnm,"w");
		fputs($inF,$this->audio);
		fclose($inF);
	}
}
?>