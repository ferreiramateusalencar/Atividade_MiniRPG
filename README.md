<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=00bfbf&height=120&section=header"/>
<h1 align="center"><img align="center" style="border-radius: 100%;" src="https://avatars.githubusercontent.com/u/86336670?v=4" width="200px;" alt=""/><br>MiniRPG — Projeto PHP (Mini RPG)</h1>

<p align="center">
  MiniRPG é um pequeno sistema RPG orientado a objetos em PHP. O projeto demonstra modelagem de domínio com classes como `Personagem`, `Arma`, `Ataque` e `Dano`, além de uma entrada de execução em `src/Application/main.php` e uma suíte de testes em `tests/MiniRPGTest.php`.
</p>

<h4 align="center">
    ✅  Concluído ✅
</h4>

---

Tabela de conteúdos
=
<!--ts-->
   * [Sobre o projeto](#-sobre-o-projeto)
   * [Estrutura do repositório](#-estrutura-do-repositório)
   * [Funcionalidades](#-funcionalidades)
   * [Como executar](#-como-executar)
   * [Executar testes](#-executar-testes)
   * [Tecnologias](#-tecnologias)
   * [Contribuidores](#-contribuidores)
   * [Licença](#-licença)
<!--te-->

---

## 💻 Sobre o projeto

MiniRPG é um exercício de design orientado a objetos em PHP que implementa conceitos básicos de um jogo de RPG: personagens, armas, ataques e cálculo de dano. O objetivo é demonstrar separação de domínio, testes automatizados e execução via CLI.

---

## 💻 Estrutura do repositório

O projeto está organizado da seguinte forma:

```
mini_rpg
├── composer.json
├── README.md
├── LICENSE
├── src
│   ├── Application
│   │   └── main.php
│   └── Domain
│       ├── Arma.php
│       ├── Ataque.php
│       ├── Dano.php
│       └── Personagem.php
└── tests
    └── MiniRPGTest.php
```

Arquitetura resumida:
- `src/Domain/` : entidades e lógica de domínio (`Personagem`, `Arma`, `Ataque`, `Dano`).
- `src/Application/` : ponto de entrada e orquestração (`main.php`).
- `tests/` : casos de teste automatizados para validar comportamento do domínio.

---

## ⚙️ Funcionalidades

- Modelagem de `Personagem` com atributos básicos (vida, força, defesa, etc.).
- Implementação de `Arma` e `Ataque` com cálculo de `Dano`.
- Simulação de confronto/ataque via CLI (`main.php`).
- Testes unitários cobrindo regras de combate.

---

## 🚀 Como executar

### Pré-requisitos

- PHP 8.0+ instalado
- [Composer](https://getcomposer.org/)

### Instalação

1. Clone o repositório:

```
git clone <URL_DO_REPOSITORIO>
cd nome-do-repositorio
```

2. Instale dependências (se houver) com o Composer:

```
composer install
```

3. Executar a aplicação via CLI:

```
php src/Application/main.php
```

O arquivo `src/Application/main.php` fornece um exemplo simples de uso das classes de domínio.

---

## 🧪 Executar testes

Se o projeto usa PHPUnit via Composer, execute:

```
vendor/bin/phpunit --colors=always tests
```

Caso não haja `phpunit` nas dependências, adicione via Composer ou execute os testes conforme sua configuração local.

---

## 🛠 Tecnologias

- PHP (OOP)
- Composer
- PHPUnit (para testes)

---

## 👨‍💻 Contribuidores

- Mateus A. Ferreira — desenvolvimento e modelagem do domínio

---

## 📄 Licença

Consulte o arquivo `LICENSE` do repositório para os termos da licença.

<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=00bfbf&height=120&section=footer"/>
