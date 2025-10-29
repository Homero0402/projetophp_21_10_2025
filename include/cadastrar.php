
 <?php 

 $primeiroNome = $_POST['primeiroNome'];
 $segundoNome = $_POST['segundoNome'];
 $Estados = $_POST['Estados'];

 echo ($primeiroNome . " " . $segundoNome);
echo "<br>";
    if (isset($_POST['cachorro'])) {
        echo "<br>";
    echo "Você tem um cachorro ";
    echo "<br>";
}
    if  (isset($_POST['gato'])) {
        echo "<br>";
    echo "Você tem um gato ";
    echo "<br>";
}
    if (isset($_POST['peixe'])) {
        echo "<br>";
    echo "Você tem um peixe ";
    echo "<br>";
}
    if (isset($_POST['passaro'])) {
        echo "<br>";
    echo "Você tem um passaro ";
    echo "<br>";
}
echo "<br>";
echo "Seu estado é: " . "$Estados";
 echo "<br>";
 echo "<br>";
 echo '<a href="javascript:history.go(-1)" title="Voltar para a página anterior">« Voltar</a>';

  ?>