Desta vez teremos um novo desafio :sunglasses:

A função `buscarPorEmail` receberá um parâmetro que será uma string (um email para ser mais preciso), e o usuário que tem aquele email deve retornar.

Se não houver usuário com este email, você deverá retornar NULL.

A base de usuários está localizada em **usuarios.json**.

A sequência a seguir seria algo assim:

1. Leia o banco de dados do usuário de **usuarios.json**
2. Transforme o conteúdo do arquivo JSON em uma matriz
3. Percorra a variedade de usuários...
4. Para cada usuário pergunte se o e-mail ** do mesmo é igual ao valor de '$email'.
5. Se a condição for verdadeira, devolva o usuário !!.
6. Se terminarmos de procurar o array do usuário e o usuário nunca foi encontrado, simplesmente retorne null.