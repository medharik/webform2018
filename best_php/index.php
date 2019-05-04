<?php include("module.php");
$produits=all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
    <?php include_once "_css.php";?>

</head>
<body>
    <?php include_once "_menu.php";?>

    
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <table class="table" id="list">
        <thead> <tr>
                <td>#</td>
                <td>Libellé</td>
                <td>prix</td>
                <td>Actions</td>
            </tr></thead>
           <tbody>
<?php  foreach ($produits as $p) {
?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['libelle']?></td>
                <td><?= $p['prix']?></td>
                <td> <a href="delete.php?id=<?= $p['id']?>" class="btn btn-sm btn-danger" 
                
                onclick="return confirm('supprimer?')"
                >Supprimer</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Modifier</a>
                <a href="show.php" class="btn btn-sm btn-info">Consulter</a></td>
            </tr>
<?php } ?>
</tbody>
        </table>
        </div>
    </div>
</div>



    <?php include_once "_js.php";?>
    
<script>
$(document).ready( function () {
    $('#list').DataTable();
} );
</script>

</body>
</html>