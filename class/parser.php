<?php
class parser
{
	public $chaine;
	public $resultat;

	public function coupe($chaine)
	{
		$this->chaine=str_replace('\n','',strip_tags(nl2br($chaine)));
		$this->chaine = wordwrap( $this->chaine, 60 , "\n" );
		$this->resultat = explode("\n", $this->chaine);
		return $this->resultat;
	}
}
?>