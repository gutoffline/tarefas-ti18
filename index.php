<?php
include "cabecalho.php";
include "conexao.php";
?>
<h1>Controle de Tarefas</h1>
<p>
    <a href="nova-tarefa.php" class="btn btn-success">Nova tarefa</a>
</p>
<table border="1" class="table">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Finalizada</td>
        <td>Ações</td>
    </tr>
    <?php
    $sql = "select * from tarefas";
    $todas = mysqli_query($conexao, $sql);
    while($tarefa = mysqli_fetch_assoc($todas)):
        ?>
        <tr>
            <td><?php echo $tarefa["id"]; ?> </td>
            <td><?php echo $tarefa["nome"]; ?> </td>
            <td><?php echo $tarefa["finalizada"]; ?> </td>
            <td>
                <a href="excluir-tarefa.php?id=<?php echo $tarefa["id"];?>">Excluir</a>
                <a href="editar-tarefa.php?id=<?php echo $tarefa["id"];?>">Editar</a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>
<?php
mysqli_close($conexao);
include "rodape.php";
?>