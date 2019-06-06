Chegou a hora do **Desafio Final** :sunglasses:

Suponhamos que o usuário preenche um formulário com o seguinte código:

``` html
<form method="POST">
  <input type="email" name="email" required>
  <input type="text" name="username" required>
  <input type="password" name="password" required>
</form>
```

Seu trabalho será capturar essas informações e armazená-las.
Não só isso, mas também adicioná-las à base de usuários existente em **usuarios.json**.

Uma boa ideia para começar é reunir uma matriz do seguinte estilo:

``` php
$usuario = [
  "email" => "jon@snow.com",
  "username" => "jonsnow",
  "password" => "rxh321fxaw123"
];
```

Onde as informações virão do formulário e o campo da senha deve ser criptografado. **É essencial para o exercício usar os nomes corretos para as posições da matriz**

Então, os passos seriam os seguintes:

1. Criar um array `$usuario` que tenha a informação final do usuário. Isso deve incluir a senha **criptografada**.
2. Leia o arquivo **usuarios.json**
3. Transforme o conteúdo de **usuarios.json** em um array.
4. Adicione o novo usuário ao array de todos os usuários (`$usuarios`)
5. Transforme o array final de volta em JSON.
6. Sobrescreva **usuarios.json** com o conteúdo final.
