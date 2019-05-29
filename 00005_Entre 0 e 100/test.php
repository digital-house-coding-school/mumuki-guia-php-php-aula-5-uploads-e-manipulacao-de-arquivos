public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("entre0e100"), "A função entre0e100 não existe.");
  
  $fct = new ReflectionFunction('entre0e100');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 1, "A função deve receber um parámetro");

  $this->assertTrue(entre0e100(0) == true, "Sua função não funcionou muito bem com o número 0");
  
  $this->assertTrue(entre0e100(50) == true, "Sua função não funcionou muito bem com o número 50");
  
  $this->assertTrue(entre0e100(100) == true, "Sua função não funcionou muito bem com o número 100");

  $this->assertTrue(entre0e100(101) == false, "Sua função não funcionou muito bem com o número  101");

  $this->assertTrue(entre0e100(200) == false, "Sua função não funcionou muito bem com o número 200");
  
  $this->assertTrue(entre0e100(-90) == false, "Sua função não funcionou muito bem com o número o -90");
  
  $this->assertTrue(entre0e100(-1) == false, "Sua função não funcionou muito bem com o número  -1");
}