public function testArquivo(): void {
  escreverUmArquivo();
  $this->assertTrue(file_exists("prova.txt"), "O arquivo 'prova.txt' parece não existir");
  
  $text = file_get_contents("prova.txt");
  $text = strtolower($text);
  
  $this->assertTrue($text === "meu primeiro arquivo!", "O conteúdo deste arquivo é '$text' e deveria ser 'Meu primeiro arquivo!'");
}