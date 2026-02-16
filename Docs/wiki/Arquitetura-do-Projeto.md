# 🏗 Arquitetura do Projeto

Estrutura adotada:

```
mini-rpg/
│
├── src/
│   ├── Domain/
│   │   ├── Personagem.php
│   │   ├── Arma.php
│   │   ├── Ataque.php
│   │   └── Dano.php
│   │
│   └── main.php
│
├── docs/
└── README.md
```

---

## 📌 Camadas

### Domain
Contém as regras de negócio do sistema.

### Application
Responsável por orquestrar a execução (`main.php`).
