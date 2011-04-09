<?php
class parser
{
	public $chaine;
	public $resultat;

	public function coupe($chaine)
	{
		$this->chaine=str_replace('\n','',strip_tags(nl2br($chaine)));
		$this->chaine=str_replace('.','./point/',$this->chaine);
		$this->chaine=str_replace(',',',/virgule/',$this->chaine);
		$this->chaine=str_replace('!','!/exclamation/',$this->chaine);
		$this->chaine = explode('/point/', $this->chaine);
		$nouvellechaine='';
		foreach($this->chaine as $v)
		{
			$pointexclamation=explode('/exclamation/',$v);
			foreach($pointexclamation as $o)
			{
				if(strlen($o)>'150')
				{
					$toto=explode("/virgule/", $o);
					foreach($toto as $k)
					{
						if(strlen($k)>'150')
						{
							$nouvellechaine.=wordwrap( $k, 150 , "\n" );
						}
						else
						{
							$nouvellechaine.=$k."\n";
						}
					}
				}
				else
				{
					$nouvellechaine.=$o."\n";
				}
			}
		}
		$nouvellechaine=str_replace('/virgule/','',$nouvellechaine);
		$this->resultat = explode("\n", $nouvellechaine);
		return $this->resultat;
	}
}
?>