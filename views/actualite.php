<?php
require_once('./models/actualite.php');
class AllView extends Post
{
     function viewAll($retour){
        while ($data = $retour->fetch())//Pour chaques articles :
        { 
         ?>
         <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['titre'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['date'];?></h6>
    <p class="card-text"><?= $data['content']; ?></p>
  </div>
</div>
<?php
        }
    }
}
?>