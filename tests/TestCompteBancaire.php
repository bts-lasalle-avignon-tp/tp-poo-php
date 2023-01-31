<?php

use PHPUnit\Framework\TestCase;

require_once('src/CompteBancaire.class.php');

class TestCompteBancaire extends TestCase
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

    public function testDeposerArgent()
    {
      $this->compte1->crediter(100);
      $this->assertSame(100, $this->compte1->getSolde());
    }

    public function testRetirerArgent()
    {
      $this->compte1->debiter(100);
      $this->assertSame(-100, $this->compte1->getSolde());
   }

   public function testDeposerRetirerArgent()
   {
      $this->assertSame(0, $this->compte1->getSolde());
      $this->compte1->crediter(1);
      $this->assertSame(1, $this->compte1->getSolde());
      $this->compte1->debiter(1);
      $this->assertSame(0, $this->compte1->getSolde());
   }    
}
