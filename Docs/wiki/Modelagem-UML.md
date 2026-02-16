# 📐 Modelagem UML

## 🧱 Classes do Sistema

### Personagem
Atributos:
- nome: string
- nivel: int
- hp: int
- arma: Arma

Métodos:
- status()
- criarAtaque()
- receberDano(Dano)

---

### Arma
Atributos:
- tipo: string
- danoBase: int

Métodos:
- descricao()

---

### Ataque
Atributos:
- atacante: Personagem
- arma: Arma

Métodos:
- executar(): Dano
- relatorio()

---

### Dano
Atributos:
- valor: int
- tipo: string

Métodos:
- descricao()
