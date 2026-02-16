<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use MiniRPG\Domain\Arma;
use MiniRPG\Domain\Personagem;
use MiniRPG\Domain\Dano;

class MiniRPGTest extends TestCase
{
    public function testCalculoDeDano()
    {
        $arma = new Arma("Espada", 10);
        $p = new Personagem("Heroi", 5, 100, $arma);

        $ataque = $p->criarAtaque();
        $dano = $ataque->executar();

        $this->assertEquals(15, $dano->getValor());
    }

    public function testHpNaoFicaNegativo()
    {
        $arma = new Arma("Espada", 1000);
        $p = new Personagem("Orc", 1, 50, $arma);

        $p->receberDano(new Dano(5000, "Espada"));

        $this->assertEquals(0, $p->getHp());
    }
}
