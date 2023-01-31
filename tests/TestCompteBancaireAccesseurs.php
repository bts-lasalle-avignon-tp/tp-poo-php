<?php

use PHPUnit\Framework\TestCase;

require_once('src/CompteBancaire.class.php');

class TestCompteBancaireAccesseurs extends TestCase
{
    protected $compte1;
    protected $compte2;
    protected $compte3;
    protected $compte4;

    protected function setUp(): void
    {
        parent::setUp();
        $this->compte1 = new CompteBancaire();
        $this->compte2 = new CompteBancaire("Bill Gates", 105300000000, "USD");
        $this->compte3 = new CompteBancaire("Moi");
        $this->compte4 = new CompteBancaire("Maria", 1000, "YEN");
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetSolde()
    {
        $this->assertSame(0, $this->compte1->getSolde());
        $this->assertSame(105300000000, $this->compte2->getSolde());
        $this->assertSame(0, $this->compte3->getSolde());
        $this->assertSame(1000, $this->compte4->getSolde());
    }

    public function testGetTitulaire()
    {
        $this->assertSame("", $this->compte1->getTitulaire());
        $this->assertSame("Bill Gates", $this->compte2->getTitulaire());
        $this->assertSame("Moi", $this->compte3->getTitulaire());
        $this->assertSame("Maria", $this->compte4->getTitulaire());
    }

    public function testGetDevise()
    {
        $this->assertSame("EUR", $this->compte1->getDevise());
        $this->assertSame("USD", $this->compte2->getDevise());
        $this->assertSame("EUR", $this->compte3->getDevise());
        $this->assertSame("YEN", $this->compte4->getDevise());
    }
}
