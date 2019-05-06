<?php
include('head.php');
require_once 'class/connectDB.php';

$db = new connectionDb();
$id = $_GET['id'];

$reponse = $db->db->prepare('DELETE FROM article  WHERE id_article = :id');
    $array = array(
        'id' => $id
    );
$reponse->execute($array);
$reponse->closeCursor();
?>
<div class="d-flex justify-content-center m-5">
    <div class="card border-primary mb-3" style="max-width: 20rem;">
    <div class="card-header">Article supprimé</div>
    <div class="card-body">
        <h4 class="card-title">L'article a bien été supprimé</h4>
        <a href="espaceAdmin.php" class="card-text">Retour à l'espace admin.</a>
    </div>
    </div>
</div>

<?php
include('footer.php')
?>
