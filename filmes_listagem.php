<h1>Listagemde Filmes</h1>
<?php
 $sql_filmes = "select * from filmes";
 $filmes_prepara = $conn->prepare($sql_filmes);
 $filmes_prepara->execute();
   
?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Resumo</th>
            <th>Ano</th>
        </tr>
    </thead>
    <tbody>
        <?php
           while ($filme = $filmes_prepara->fetch()) {
            echo "<tr>";
            echo "<td>".$filme['codigo']."</td>";
            echo "<td>".$filme['nome']."</td>";
            echo "<td>".$filme['resumo']."</td>";
            echo "<td>".$filme['ano']."</td>";
            echo "</tr>";
           }
        ?>
    </tbody>        
</table>


