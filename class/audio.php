<?php
class audio
{
	private $lang;
	private $audio;

	function __construct($lang='fr')
	{
		$this->lang=$lang;
	}
	public function creation_audio($string,$id)
	{
		$ch = curl_init();
		$options = array(   CURLOPT_URL => 'http://translate.google.fr/translate_tts?ie=UTF-8&q='.urlencode($string).'&tl='.$this->lang,
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
		$Fnm = $id.".mp3";
		$inF = fopen($Fnm,"w");
		fputs($inF,$output);
		fclose($inF);
	}
	public function GetAudio($file) 
	{
		$file = strtolower($file);
		$handle = fopen($file, "rb");
		$size = filesize($file);
		if (function_exists('stream_get_line')) 
		{
			$load = stream_get_line($handle, $size);
		}
		else
		{
			$load = fread($handle, $size);
		}
		fclose($handle);
		return array("mp3" => $load, "size" => $size);
	}
	public function audiofinal($nb_ligne)
	{
		$audio=array();
		for($i=1;$i<=$nb_ligne; $i++)
		{
			$audio[]=$this->GetAudio($i.".mp3");
			unlink($i.".mp3");
		}
		$mp3='';
		$size='';
		foreach ($audio as $key => $value) 
		{
			$mp3 .= $audio[$key]['mp3'];
			$size .= $audio[$key]['size'];
		}
		$Fnm = "final.mp3";
		$inF = fopen($Fnm,"w");
		fputs($inF,$mp3);
		fclose($inF);
	}
}
?>