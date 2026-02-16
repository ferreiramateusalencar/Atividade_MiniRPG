<?php

namespace MiniRPG\Domain;

class Ataque {
    private Personagem $atacante;
    private Arma $arma;

    public function __construct(Personagem $atacante, Arma $arma) {
        $this->atacante = $atacante;
        $this->arma = $arma;
    }

    public function executar(): Dano {
        $valor = $this->arma->getDanoBase() + $this->atacante->getNivel();
        return new Dano($valor, $this->arma->getTipo());
    }

    public function relatorio(): string {
        return "{$this->atacante->getNome()} atacou com {$this->arma->getTipo()}!";
    }
}
