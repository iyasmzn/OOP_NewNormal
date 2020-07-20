<?php
/**
 * 
 */
class Bio
{
	public $nama, $kelas, $umur;	
	function __construct($x, $y)
	{
		$this->nama = $x;
		$this->kelas = $y;
	}
	public function setUmur($x)
	{
		$this->umur = $x;
	}
}

class  extends Bio
{
	public $hobi, $citaCita, $kelas;
	public function setHobi($x)
	{
		$this->hobi = $x;
	}
	public function setCita($x)
	{
		$this->citaCita = $x;
	}
}
