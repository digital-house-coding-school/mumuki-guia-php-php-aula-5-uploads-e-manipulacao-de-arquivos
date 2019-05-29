public function testDescriptionExample(): void {
  $this->assertTrue(function_exists("nomeCompleto"), "A função nomeCompleto não existe.");
  
  $fct = new ReflectionFunction('nomeCompleto');
  $fct = $fct->getNumberOfRequiredParameters();
  
  $this->assertTrue($fct == 2, "A função deve receber dois parâmetros");
  
  $res = nomeCompleto("Jon", "Snow");
  $this->assertTrue($res === "Jon Snow", "Dado o nome Jon Snow a funçãn retorna '$res'");
  
  $res = nomeCompleto("Arya", "Stark");
  $this->assertTrue($res === "Arya Stark", "Dado o nome Arya Stark a função retorna '$res'");
}