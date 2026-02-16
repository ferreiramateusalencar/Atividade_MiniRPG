<?php

namespace MiniRPG\Domain;

class Arma {
    private string $tipo;
    private int $danoBase;

    public function __construct(string $tipo, int $danoBase) {
        $this->tipo = $tipo;
        $this->danoBase = $danoBase;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function getDanoBase(): int {
        return $this->danoBase;
    }

    public function descricao(): string {
        return "Arma: {$this->tipo} | Dano Base: {$this->danoBase}";
    }
}
