public function testAgregarUsuario1(): void {
  $usuarios = [
    0 => [
      "nome" => "Cassio",
      "sobrenome" => "Ramos"
    ],
    1 => [
      "nome" => "Marcos",
      "sobrenome" => "Mion"
    ]
  ];
  
  $usuariosJSON = json_encode($usuarios);
  
  $novoUsuario = [
    "nome" => "Chico",
    "sobrenome" => "Xavier"
  ];
  
  $resultado = agregarUsuario($usuariosJSON, $novoUsuario);
  
  $this->assertTrue(is_string($resultado), "O resultado da função deveria ser uma string");
  
  $usuarios[] = $novoUsuario;
  $usuariosJSON = json_encode($usuarios);
  
  $this->assertTrue($usuariosJSON === $resultado, "O resultado obtido não é o esperado");
}