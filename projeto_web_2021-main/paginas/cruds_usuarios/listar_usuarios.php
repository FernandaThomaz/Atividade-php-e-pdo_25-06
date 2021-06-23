<?php
$sql = "SELECT us.id, us.nome, us.usuario, DATE_FORMAT (us.data_hora_criacao, '% d /% m /% Y% H:% i:% S') AS data_hora, DATE_FORMAT (us.data_hora_atualizacao , '% d /% m /% Y% H:% i:% S') AS data_hora_up
        DE nós usuarios
        PEDIR POR us.id DESC ";

$result = $ conn-> query ($ sql, PDO :: FETCH_ASSOC);

?>
<h1> Usuário cadastrados </h1>

<table>
    <tr>
        <th> ID </th>
        <th> Nome </th>
        <th> Login </th>
        <th> Data e Hora Criação </th>
        <th> Data e Hora atualização </th>           
        <th> Ações </th>
    </tr>
    <?php
        while ($linha = $result-> fetch ()) {
    ?>
        <tr>
            <? php
                foreach ($linha as $chave => $valor) {
            ?>
                <td> <? = $valor?> </td>
                
            <?php
                
                }
                $_SESSION ['id'] = $linha ['id'];                
            ?>
                <td> <a href="?pg=cruds_usuarios/alterar&id=<?= $linha['id'] ?> "> Alterar </a> <br> <a href ="? pg = cruds / excluir & id = < ? = $ linha ['id']?> "> Excluir </a> </td>
        </tr>
    <?php
        }
    ?>
</table>

<div id = "btn-limpar-sessao">
    <a href="?pg=cruds_usuarios/cadastrar"> Cadastrar Usuário </a>
</div>