<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use MiniRPG\Domain\Arma;
use MiniRPG\Domain\Personagem;
use MiniRPG\Domain\Ataque;
use MiniRPG\Domain\Dano;

echo "===== INÍCIO DO COMBATE =====\n\n";

$espada = new Arma("Espada", 15);
$machado = new Arma("Machado", 12);

$p1 = new Personagem("Guerreiro", 5, 100, $espada);
$p2 = new Personagem("Orc", 3, 80, $machado);

echo "STATUS INICIAL:\n";
echo $p1->status() . "\n";
echo $p2->status() . "\n\n";

$ataque = $p1->criarAtaque();
$dano = $ataque->executar();

echo $ataque->relatorio() . "\n";
echo $dano->descricao() . "\n\n";

$p2->receberDano($dano);

echo "STATUS FINAL:\n";
echo $p2->status() . "\n\n";

echo "===== DEMONSTRAÇÃO: PRIMITIVO VS OBJETO =====\n\n";

$a = 10;
$b = $a;
$b = 20;

echo "Primitivo:\n";
echo "a = $a\n"; 
echo "b = $b\n\n";

$obj1 = new Personagem("Teste", 1, 50);
$obj2 = $obj1;

$obj2->receberDano(new Dano(10, "Teste"));

echo "Objeto:\n";
echo $obj1->status() . "\n";
