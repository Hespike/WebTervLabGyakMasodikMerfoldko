<?php

class User
{
    private $valodinev;
    private $telefonszam;
    private $kupon;
    private $kuponcheck;
    private $email;

    public function __construct($valodinev, $telefonszam, $kupon, $kuponcheck, $email)
    {
        $this->valodinev = $valodinev;
        $this->telefonszam = $telefonszam;
        $this->kupon = $kupon;
        $this->kuponcheck = $kuponcheck;
        $this->email = $email;
    }




    
    /**
     * Get the value of valodinev
     */ 
    public function getValodinev()
    {
        return $this->valodinev;
    }

    /**
     * Set the value of valodinev
     *
     * @return  self
     */ 
    public function setValodinev($valodinev)
    {
        $this->valodinev = $valodinev;

        return $this;
    }

    /**
     * Get the value of telefonszam
     */ 
    public function getTelefonszam()
    {
        return $this->telefonszam;
    }

    /**
     * Set the value of telefonszam
     *
     * @return  self
     */ 
    public function setTelefonszam($telefonszam)
    {
        $this->telefonszam = $telefonszam;

        return $this;
    }

    /**
     * Get the value of kupon
     */ 
    public function getKupon()
    {
        return $this->kupon;
    }

    /**
     * Set the value of kupon
     *
     * @return  self
     */ 
    public function setKupon($kupon)
    {
        $this->kupon = $kupon;

        return $this;
    }

    /**
     * Get the value of kuponcheck
     */ 
    public function getKuponcheck()
    {
        return $this->kuponcheck;
    }

    /**
     * Set the value of kuponcheck
     *
     * @return  self
     */ 
    public function setKuponcheck($kuponcheck)
    {
        $this->kuponcheck = $kuponcheck;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


public function kiir(){
    $user = [
        "valodinev" => $this->nev,
        "telefonszam" => $this->telefonszam,
        "kupon" => $this->kupon,
        "kuponcheck" => $this->kuponcheck,
        "email" => $this->email,

    ];
    $file = fopen("users.txt", "a");
    fwrite($file, serialize($user) . "\n");
    fclose($file);
    }
}



                         