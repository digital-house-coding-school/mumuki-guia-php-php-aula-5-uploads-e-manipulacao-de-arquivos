Y para finalizar...un lindo desafío más :sunglasses:

La función `buscarPorEmail` recibe un string...un email para ser más precisos y debe retornar el usuario que tenga ese mail.

Si no hay ningún usuario con ese email debe retornar NULL.

La base de usuarios se encuentra en **usuarios.json**.

La secuencia a seguir sería algo así:

1. Leer la base de usuario de **usuarios.json**
2. Transformar el contenido del archivo de JSON a un Array
3. Recorrer el array de usuarios...
4. Por cada usuario preguntar si el **email** del mismo equivale al valor de `$email`
5. Si la condición da verdadera, retornar el usuario!!
6. Si terminamos de recorrer el array de usuarios y nunca se encontró al usuario, simplemente retornar null.