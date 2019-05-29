public function testOk(): void {
  $pass = "monito123";
  $hash = password_hash($pass, PASSWORD_DEFAULT);
  
  $_POST = [
    "password" => $pass
  ];
  
  $resultado = $this->verificarPass($hash);
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función indica un error cuando la contraseña es correcta!");
}


public function testError(): void {
  $pass = "monito123";
  $hash = password_hash($pass, PASSWORD_DEFAULT);
  
  $_POST = [
    "password" => "manzana"
  ];
  
  $resultado = $this->verificarPass($hash);
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertFalse($resultado, "La función indica una contraseña correcta cuando en realidad esta mal!");
}

public /*...content...*/ 