<?php

use PHPUnit\Framework\TestCase;

require_once('src/CompteBancaire.class.php');

class TestCompteBancaireAffiche extends TestCase
{
    protected $compte1;
    protected $compte2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->compte1 = new CompteBancaire();
        $this->compte2 = new CompteBancaire("Bill Gates", 105300000000, "USD");
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testAffiche1()
    {
        $this->expectOutputString("Titulaire du compte : ".$this->compte1->getTitulaire()."".PHP_EOL."Vous disposez de ".$this->compte1->getSolde()." ".$this->compte1->getDevise()."".PHP_EOL);
        $this->compte1->affiche();
    }

    public function testAffiche2()
    {
        $this->expectOutputString("Titulaire du compte : ".$this->compte2->getTitulaire()."".PHP_EOL."Vous disposez de ".$this->compte2->getSolde()." ".$this->compte2->getDevise()."".PHP_EOL);
        $this->compte2->affiche();
    }    
}
