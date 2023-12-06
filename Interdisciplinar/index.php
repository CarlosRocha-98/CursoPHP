<?php
    $pdo = new PDO('mysql:host=localhost;dbname=gestao','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Insert
if(isset($_GET['delete'])){
    $id = (int) $_GET['delete'];
    $pdo->exec("DELETE FROM clientes where id=$id");
    echo 'deletado com sucesso!';
}
    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        echo 'Inserido com sucesso!';

    }
//COMANDO PARA ATUALIZAR
?>
<form action="" method="post">
    <input type="text" name="nome">
    <input type="text" name="email" id="">
    <input type="submit" value="Enviar">
    </form>
<?php
    //listar, papel do SELECT
    $sql = $pdo->prepare("select * from clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();
    
    //foreach ($fetchClientes as $key => $value) {
      //  echo $value['nome'],' | ',$value['email'];
       // echo '<hr>';   

        foreach ($fetchClientes as $key => $value) {
            echo '<a href="?delete='.$value['id'],'">(X)</a>'.$value['nome'],' | ',$value['email'],'</a>';
            echo '<hr>';  
    }
?>