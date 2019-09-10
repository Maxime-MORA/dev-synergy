<?php
require_once('./models/temoignages-clients.php');
class AllView extends Temoignage
{
     function viewAll($retour){
        while ($data = $retour->fetch())//Pour chaques articles :
        { 
         ?>
         <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['role'];?></h6>
    <p class="card-text"><?= $data['content']; ?></p>
  </div>
</div>
<?php
        }
    }
}
?>