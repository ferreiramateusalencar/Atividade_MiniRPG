<?php

namespace MiniRPG\Domain;

class Personagem {
    private string $nome;
    private int $nivel;
    private int $hp;
    private ?Arma $arma;

    public function __construct(
        string $nome = "Desconhecido",
        int $nivel = 1,
        int $hp = 100,
        ?Arma $arma = null
    ) {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->hp = $hp;
        $this->arma = $arma;
    }

    public function setArma(Arma $arma): void {
        $this->arma = $arma;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getArma(): ?Arma {
        return $this->arma;
    }

    public function getHp(): int {
        return $this->hp;
    }

    public function criarAtaque(): Ataque {
        return new Ataque($this, $this->arma);
    }

    public function receberDano(Dano $dano): void {
        $this->hp -= $dano->getValor();
        if ($this->hp < 0) {
            $this->hp = 0;
        }
    }

    public function status(): string {
        return "Personagem: {$this->nome} | Nível: {$this->nivel} | HP: {$this->hp}";
    }
}
