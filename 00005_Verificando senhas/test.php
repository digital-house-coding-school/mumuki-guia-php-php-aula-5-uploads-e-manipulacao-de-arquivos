public function testOk(): void {
  $pass = "monito123";
  $hash = password_hash($pass, PASSWORD_DEFAULT);
  
  $_POST = [
    "password" => $pass
  ];
  
  $resultado = $this->verificarPassword($hash);
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertTrue($resultado, "A função indicou um erro ao compara a senha");
}


public function testError(): void {
  $pass = "monito123";
  $hash = password_hash($pass, PASSWORD_DEFAULT);
  
  $_POST = [
    "password" => "manzana"
  ];
  
  $resultado = $this->verificarPassword($hash);
  
  $this->assertTrue(is_bool($resultado), "A função não está retornando um valor booleano");
  
  $this->assertFalse($resultado, "La función indica una contraseña correcta cuando en realidad esta mal!");
}

public /*...content...*/ 