public function testJPG(): void {
 /*...content...*/
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtensao();
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertTrue($resultado, "A função está falhando para o arquivo 'avatar.jpg'");
}

