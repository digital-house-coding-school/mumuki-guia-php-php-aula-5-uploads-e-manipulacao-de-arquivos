public function testPrimerUsuario(): void {
  $usuarios = [
    0 => [
      "username" => "dariosus",
      "email" => "dario@digitalhouse.com"
    ],
    1 => [
      "username" => "aleviv",
      "email" => "alejandro@digitalhouse.com"
    ],
    2 => [
      "username" => "javih",
      "email" => "javier@digitalhouse.com"
    ]
  ];
  
  $usuarios = json_encode($usuarios);
  
  file_put_contents("usuarios.json", $usuarios);
  
  $usuario = buscarPorEmail("dario@digitalhouse.com");
  
  $this->assertTrue(is_array($usuario), "La función no esta retornando un array al buscar el usuario 'dario@digitalhouse.com'. Este usuario sí existe y en este caso deberías retornar un array con todos los datos del usuario");
  
  $this->assertTrue(array_key_exists("email", $usuario), "El array que se retornó no tiene una pocisión 'email'");
  
  $this->assertTrue($usuario["email"] === "dario@digitalhouse.com", "El usuario retornado no es el correcto. Se buscó a 'dario@digitalhouse.com' pero se retorno a '" . $usuario["email"] . "'");
}

public function testSegundoUsuario(): void {
  $usuarios = [
    0 => [
      "username" => "dariosus",
      "email" => "dario@digitalhouse.com"
    ],
    1 => [
      "username" => "aleviv",
      "email" => "alejandro@digitalhouse.com"
    ],
    2 => [
      "username" => "javih",
      "email" => "javier@digitalhouse.com"
    ]
  ];
  
  $usuarios = json_encode($usuarios);
  
  file_put_contents("usuarios.json", $usuarios);
  
  $usuario = buscarPorEmail("alejandro@digitalhouse.com");
  
  $this->assertTrue(is_array($usuario), "La función no esta retornando un array al buscar el usuario 'alejandro@digitalhouse.com'. Este usuario sí existe y en este caso deberías retornar un array con todos los datos del usuario");
  
  $this->assertTrue(array_key_exists("email", $usuario), "El array que se retornó no tiene una pocisión 'email'");
  
  $this->assertTrue($usuario["email"] === "alejandro@digitalhouse.com", "El usuario retornado no es el correcto. Se buscó a 'alejandro@digitalhouse.com' pero se retorno a '" . $usuario["email"] . "'");
}

public function testError(): void {
  $usuarios = [
    0 => [
      "username" => "dariosus",
      "email" => "dario@digitalhouse.com"
    ],
    1 => [
      "username" => "aleviv",
      "email" => "alejandro@digitalhouse.com"
    ],
    2 => [
      "username" => "javih",
      "email" => "javier@digitalhouse.com"
    ]
  ];
  
  $usuarios = json_encode($usuarios);
  
  file_put_contents("usuarios.json", $usuarios);
  
  $usuario = buscarPorEmail("pepito@digitalhouse.com");
  
  $this->assertTrue(is_null($usuario), "La función debería retornar NULL si no se encuentra el email buscado");
}