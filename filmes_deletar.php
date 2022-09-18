<?php 
    $sql_filme = "SELECT * FROM
                        WHERE codigo= :codigo";
    $filme_prepara = $conn->prepare($sql_filme);
    $filme_prepara->execute(array("codigo"=>$_GET['codigo']));

    $filme = $filme_prepara->fetch();

?>
<table class="table">
    <tr>
        <td>
            codigo
        </td>
        <td>
            <?php echo $filme['codigo'];?>
        </td>
    </tr> 
    <tr>
        <td>
            nome
        </td>
        <td>
            <?php echo $filme['nome'];?>
        </td>
    </tr> 
    <tr>
        <td>
            resumo
        </td>
        <td>
            <?php echo $filme['resumo'];?>
        </td>
    </tr>        
</table>
<form method="post">
     <input class="btn btn-danger" type="submit" nane="deletar" value="Deletar">
     
</form>
