<?php

namespace MiniRPG\Domain;

class Dano {
    private int $valor;
    private string $tipo;

    public function __construct(int $valor, string $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    public function getValor(): int {
        return $this->valor;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function descricao(): string {
        return "Dano: {$this->valor} | Tipo: {$this->tipo}";
    }
}
