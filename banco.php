<?php
$servidor = "localhost";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try {
$conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<center><h1>Conectando Servidor com Sucesso: </h1>" .$base;
echo "<br><h2><font color=red>Vitor0060</font></h2></center>";

} catch(PDOExeption $e) {
echo "Falha na conexão:" .$e->getMessage();
}
?>
