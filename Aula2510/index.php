<?php
mysqli_report(MYSQLI_REPORT_OFF);
##mysqli

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if ($conexao) {
    echo "Conectado com sucesso<br>";
} 
else {    
    echo "Erro na conexão";
}

##Criando tabelas

#Tabela Alunos

// $query = "CREATE TABLE IF NOT EXISTS ALUNOS(
//    id_aluno int not null auto_increment,
//    nome_aluno varchar(255) not null,
//    data_nascimento varchar(255),
//    primary key (id_aluno) 
// )";

// $executar = mysqli_query($conexao, $query);

// if($executar) {
//     echo "Executado com sucesso!
//     (alunos)<br>";
// }
// else{
//     echo "Falha ao executar!
//     (alunos)<br>";
// }


#tabela alunos_cursos
 $query = "CREATE TABLE IF NOT EXISTS ALUNOS_CURSOS (
     id_aluno_curso int not null auto_increment,
     id_aluno int not null,
     id_curso int not null, 
     primary key (id_aluno_curso)
 )";

$executar = mysqli_query($conexao, $query);

if($executar) {
    echo "Executado com sucesso!
    (aluno cursos)<br>";
}
else{
    echo "Falha ao executar!
    (aluno cursos)<br>";
}




#TABELA CURSOS

// $query = "CREATE TABLE IF NOT EXISTS CURSOS(
//     id_curso int not null auto_increment,
//     nome_curso varchar(255) not null,
//     carga_horaria int not null,
//     primary key (id_curso) 
// )";

#TABELA FUNCIONARIOS

// $query = "CREATE TABLE IF NOT EXISTS funcionarios(
//     id_funcionario int not null auto_increment,
//     nome_funcionario varchar(255) not null,
//     data_funcionario varchar(255),
//     primary key(id_funcionario)
// )";

$executar = mysqli_query($conexao, $query);

// if($executar) {
//     echo "Executado com sucesso!
//     (tabela funcionario)<br>";
// }
// else{
//     echo "Falha ao executar!
//     (tabela funcionario)<br>";
// }


#Inserir dados na tabela ALUNOS
$query = "INSERT INTO ALUNOS (nome_aluno, data_nascimento) VALUES
 ('Jose', '05-07-1990'), ('Maria', '01-10-1991'),
 ('Felipe', '01-11-1990'), ('Ana', '01-10-1991'),
 ('Gustavo', '08-06-1990'), ('Gabi', '01-10-1991'),
 ('Adriano', '04-02-1990'), ('Rafa', '01-10-1991')";

// $executar = mysqli_query($conexao, $query);
// if($executar) {
//     echo "Executado com sucesso! (Insert)<br>";
// }
// else{
//     echo "Falha ao executar! (Insert)<br>";
// }     

#Inserir dados na tabela CURSOS
$query = "INSERT INTO CURSOS (nome_curso, carga_horaria) VALUES 
('Sistema de Desenvolvimento', '40'),
('Ciência de Computador', '1000'),
('Design', '200'),
('Engenharia de Software', '800')";

$executar = mysqli_query($conexao, $query);
if($executar) {
    echo "Executado com sucesso! (Insert)<br>";
}
else{
    echo "Falha ao executar! (Insert)<br>";
}     

#Tabela alunos_cursos
$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_curso) VALUES 
(1,2), (4,1), (5,3), (6,4)";

$executar = mysqli_query($conexao, $query);
if($executar) {
    echo "Executado com sucesso! (Insert)<br><br>";
}
else{
    echo "Falha ao executar! (Insert)<br>";
}     


// if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 15")){
//     echo 'Apagando com Sucesso! (Delete)<br>';
// }
// else{
//     echo 'Falha ao com apagar dados (Delete)<br>';
// }

#Exibir na tela o resultado de um select. No caso abaixo, da tabela Alunos
// echo '<table border=1>
//         <tr>
//             <th>id</th>
//             <th>Nome</th>    
//             <th>Data de Nascimento</th>
//         </tr>';

// $consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");
// #print_r($consulta);

// while($linha = mysqli_fetch_array($consulta)){
//     echo '<tr><td>'.$linha['id_aluno'].'</td>';
//     echo '<td>'.$linha['nome_aluno'].'</td>';
//     echo '<td>'.$linha['data_nascimento'].'</td></tr>';
// }

// echo '</table>';

$consulta = mysqli_query($conexao, "SELECT alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_cursos
WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso;");

echo '<table border=1><tr><th>Nome do aluno</th><th>Nome do curso</th></tr>';
while ($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso'].'</td></tr>';
}

echo '</table>';

?>