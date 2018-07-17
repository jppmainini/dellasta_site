<?php
include_once ('../../conectadb.php');

$usuarios = $_POST['palavra'];


if($usuarios != '') {
    $cadusuarios = "select * from usuarios where usernome LIKE '$usuarios%'";
    $resultususarios = mysqli_query($conectar, $cadusuarios) or die(mysqli_error($conectar));
    $linhas = mysqli_num_rows($resultususarios);

    if ($linhas > 0) {
        while ($linhas = mysqli_fetch_array($resultususarios)) {
            ?>
            <tr>
                <td><input type="checkbox" class="checkbox m-md-1 checkboxid" name="userid[]"
                           value="<?php echo $linhas['userid'] ?>"></td>
                <td><?php echo $linhas['userid'] ?></td>
                <td><?php echo $linhas['usernome'] ?></td>
                <td><?php echo $linhas['useremail'] ?></td>
                <td><?php echo $linhas['userusuario'] ?></td>
                <td><?php echo $linhas['nivel_acesso_id'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal"
                            data-target="#gridSystemModal<?php echo $linhas['userid'] ?>" title="Visualizar"><i
                                class="far fa-eye"></i></button>
                    <a href='admin.php?link=4&id=<?php echo $linhas['userid']; ?>'>
                        <button type="button" class="btn btn-warning btn-sm text-white" title="Editar"><i
                                    class="far fa-edit"></i></button>
                    </a>
                    <button type="button" class="btn btn-danger btn-sm text-white" title="Excluir"
                            onclick="deleteuser(<?php echo $linhas['userid']; ?>)"><i class="far fa-trash-alt"></i>
                    </button>
                </td>
            </tr>

            <?php
        }
    } else {
        echo "<tr><td>Nenhum usuarios encontrado...</td></tr>";
    }
}
?>