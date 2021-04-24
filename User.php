<?php
class User
{

    //valtozok
    private $nev;
    private $fnev;
    private $jelszo;
    private $jelszoujra;
    private $telszam;
    private $email;
    private $kep;

    /**
     * User constructor.
     * @param $nev
     * @param $fnev
     * @param $jelszo
     * @param $jelszoujra
     * @param $telszam
     * @param $email
     * @param $kep
     */
    public function __construct($nev, $fnev, $jelszo, $jelszoujra, $telszam, $email, $kep)
    {
        $this->nev = $nev;
        $this->fnev = $fnev;
        $this->jelszo = $jelszo;
        $this->jelszoujra = $jelszoujra;
        $this->telszam = $telszam;
        $this->email = $email;
        $this->kep = $kep;
    }

    /**
     * @return mixed
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * @param mixed $nev
     */
    public function setNev($nev)
    {
        $this->nev = $nev;
    }

    /**
     * @return mixed
     */
    public function getFnev()
    {
        return $this->fnev;
    }

    /**
     * @param mixed $fnev
     */
    public function setFnev($fnev)
    {
        $this->fnev = $fnev;
    }

    /**
     * @return mixed
     */
    public function getJelszo()
    {
        return $this->jelszo;
    }

    /**
     * @param mixed $jelszo
     */
    public function setJelszo($jelszo)
    {
        $this->jelszo = $jelszo;
    }

    /**
     * @return mixed
     */
    public function getJelszoujra()
    {
        return $this->jelszoujra;
    }

    /**
     * @param mixed $jelszoujra
     */
    public function setJelszoujra($jelszoujra)
    {
        $this->jelszoujra = $jelszoujra;
    }

    /**
     * @return mixed
     */
    public function getTelszam()
    {
        return $this->telszam;
    }

    /**
     * @param mixed $telszam
     */
    public function setTelszam($telszam)
    {
        $this->telszam = $telszam;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getKep()
    {
        return $this->kep;
    }

    /**
     * @param mixed $kep
     */
    public function setKep($kep)
    {
        $this->kep = $kep;
    }



    public function kiir(){
        $user = [
          "nev" => $this->nev,
          "fnev" => $this->fnev,
          "jelszo" => $this->jelszo,
          "jelszoujra" => $this->jelszoujra,
          "telszam" => $this->telszam,
          "email" => $this->email,
          "kep" => $this->kep,
        ];
        $file = fopen("users.txt", "a");
        fwrite($file, serialize($user)."\n");
        fclose($file);
    }
}
