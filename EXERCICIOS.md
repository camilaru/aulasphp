# Exercícios de PHP


## Exercício 3

Crie um novo arquivo chamado **exercicio03.php** e nele faça uma programação que permita avaliar o valor de um salário e calcular um novo valor de salário baseado nos seguintes critérios:

- Se salário menor que 1500, calcule um aumento de 15% 
- Senão, se salário menor ou igual a 3000, calcule um aumento de 10%
- Senão calcule um aumento de 5%

Mostre no HTML uma mensagem informando o valor do salário antigo (antes do reajuste) e do novo salário (após o reajuste).

### DICAS (LEIA!!)

- Você pode usar duas variáveis (ex: `$salario` e `$novoSalario`), uma para o salário atual (`$salario`) e outra para receber o cálculo do novo salário reajustado (`$novoSalario`)
- Para calcular o `$novoSalario`, você pode usar as seguintes fórmulas:
    - Para aumento de **15%**, **multiplique** o `$salario` por **1.15**
    - Para aumento de **10%**, **multiplique** o `$salario` por **1.10**
    - Para aumento de **5%**, **multiplique** o `$salario` por **1.05**

---

## Exercício 2

Crie um novo arquivo chamado **exercicio02.php** e nele faça um array (numérico OU associativo) chamado `dados` contendo as seguintes informações:

- nome de usuário *(exemplo: chapolin.colorado)*
- senha *(exemplo: 123reprovado)*
- idade *(exemplo: 30)*
- cidade *(exemplo: São Paulo)*

Em seguida, mostre somente os valores de **nome de usuário**, **idade** e **cidade** em uma lista ordenada HTML.

---

## Exercício 1

Crie um novo arquivo chamado **exercicio01.php** e nele crie variáveis e/ou constantes para:

- Nome de uma pessoa *(exemplo: Chapolin)*
- Nome de um curso que esta pessoa faz *(exemplo: Gastronomia)*
- Carga horária deste curso *(exemplo: 200)*
- Limite de faltas *(veja a dica abaixo)*

***Dica:** para obter o limite de faltas, pegue a carga horária e divida por 4 OU multiplique por 0.25.*

Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas.

Destaque estes dados usando a tag de negrito.




