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
    <?php include_once ("_menu.php");?>


<div class="container">

<div class="row">

<div class="col-md-6 mx-auto shadow mt-3">
<form class="form-horizontal" method="post" action="store.php">
<fieldset>

<!-- Form Name -->
<legend>Nouveau produit</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="libelle">Libellé :</label>  
  <div class="col-md-12">
  <input id="libelle" name="libelle" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="prix">Prix : </label>  
  <div class="col-md-12">
  <input id="prix" name="prix" type="text" placeholder="prix en DHS" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <button id="" name="" class="btn btn-primary">Valider</button>
  </div>
</div>

</fieldset>
</form>


</div>
</div>
</div>
    





    <?php include_once "_js.php";?>
</body>
</html>