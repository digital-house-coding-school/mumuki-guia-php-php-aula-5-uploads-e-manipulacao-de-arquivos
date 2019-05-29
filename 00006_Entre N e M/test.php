public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("entreDoisNumeros"), "A função entreDoisNumeros não existe");
  
  $fct = new ReflectionFunction('entreDoisNumeros');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 3, "A função deve receber três parâmetros");
  
  $this->assertTrue(entreDosNumeros(50, 10, 60) == true, "Sua função não está funcionando com o número 50 e os números 10 e 60 como limite");
  
  $this->assertTrue(entreDosNumeros(0, 0, 10) == true, "Sua função não está funcionando com o número 0 e os números 0 e 10 como limite");
  
  $this->assertTrue(entreDosNumeros(100, 90, 100) == true, "Sua função não está funcionando com o número 100 e os números 90 e 100 como limite");
  
  $this->assertTrue(entreDosNumeros(200, 100, 150) == false, "Sua função não está funcionando com o número 200 e os números 10 e 150 como limite");
  
  $this->assertTrue(entreDosNumeros(101, 80, 100) == false, "Sua função não está funcionando com o número 101 e os números 80 e 100 como limite");
  
  $this->assertTrue(entreDosNumeros(-90, -50, 0) == false, "Sua função não está funcionando com o número -90 e os números -50 e 0 como limite");
  
  $this->assertTrue(entreDosNumeros(-1, 0, 10) == false, "Sua função não está funcionando com o número -1 e os números 0 e 10 como limite");
}