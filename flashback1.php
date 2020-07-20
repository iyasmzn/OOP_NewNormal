<?php
/**
 *
 */
class Bio
{
    public $nama, $kelas, $umur;
    public function __construct($x, $y)
    {
        $this->nama  = $x;
        $this->kelas = $y;
    }
    public function setUmur($x)
    {
        $this->umur = $x;
    }
    public function getOut()
    {
        echo $this->kelas . $this->nama;
    }
}

class Bio2 extends Bio
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
    public function suwitch($val)
    {
        echo "asd" . $this->kelas = $val;
    }
    public function getOut2()
    {
        echo $this->kelas;
    }
}
$asd = new Bio('Aji', '9a');
$asd->getOut();
$dsa = new Bio2('ajid', '7u');
echo $dsa->suwitch('9b');
$dsa->getOut2();
