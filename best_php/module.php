<?php 


function connecter_db(){
 $cnx=new PDO("mysql:host=localhost;dbname=dbbest","root","");
return $cnx;

}


function store($libelle, $prix){
$cnx=connecter_db();
$rp=$cnx->prepare("insert into  produit(libelle, prix) values(?,?)");
$rp->execute(array($libelle,$prix));
}

function delete($id){
$cnx=connecter_db();
$rp=$cnx->prepare("delete from produit where id =?");
$rp->execute(array($id));
}
function update($id,$libelle,$prix){
$cnx=connecter_db();
$rp=$cnx->prepare("update  produit set libelle=? , prix=? where id =?");
$rp->execute(array($libelle,$prix,$id));
}
function find($id){
$cnx=connecter_db();
$rp=$cnx->prepare("select * from produit where id=?");
$rp->execute(array($id));
$produit=$rp->fetch();

return $produit;
}
function all(){
$cnx=connecter_db();
$rp=$cnx->prepare("select * from produit order by id desc ");
$rp->execute(array());
$produits=$rp->fetchAll();
return $produits;
}


//update(2,"dell",8000);
//store("hp",9000);
//delete(1);


?>