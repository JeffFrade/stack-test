# Casos de Teste para Pilha/Stack
---

Repositório criado para abordar casos de testes unitários em uma estrutura de dados de uma `Pilha/Stack`, utilizando `PHP` e `PHPUnit` para criar os casos de testes.

## Métodos da Pilha/Stack
---
A estrutura da `Pilha/Stack` conta com os seguintes métodos:

- `push` => Insere um novo valor a pilha/stack
- `top` => Exibe o último valor da pilha/stack
- `pop` => Exibe e remove o último valor da pilha/stack
- `size` => Exibe o tamanho da pilha/stack
- `clear` => Limpa a pilha/stack

## Casos de Teste da Pilha/Stack
---

A estrutura da `Pilha/Stack` conta com os seguintes casos de testes:

- `testPushAndSizeStack` => Testa a inserção e a contagem de quantos valores possuem a pilha/stack
- `testTopStack` => Testa a exibição do último valor inserido na pilha/stack
- `testPopStack` => Testa a exibição do último valor inserido na pilha/stack, a remoção do último valor e o tamanho da pilha/stack
- `testClearStack` => Testa se a pilha/stack está limpa
- `testClearStack` => Testa se Exception `StackEmptyException` é disparada caso a pilha/stack esteja vazia

## Instalação
---

Após clonar ou baixar esse repositório, basta entrar na pasta gerada e executar `composer install` para efetuar a instalação dos pacotes necessários.

## Executando os Testes Unitários
---

Após instalar os pacotes, basta digitar `./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests` na raíz do projeto para que os casos de testes sejam executados.
