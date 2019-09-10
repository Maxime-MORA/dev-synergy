<div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
  <label class="btn btn-secondary active" onclick="seeClient()">
    <input type="radio" name="options" id="option1" autocomplete="off"> Nous contacter
  </label>
  <label class="btn btn-secondary" onclick="seeRevendeur()">
    <input type="radio" name="options" id="option2" autocomplete="off"> Devenir revendeur
  </label>
</div>

<div id="client" style="height:800px; background-color:#6e6e6e;">
</div>

<div id="revendeur"  style="height:800px; background-color:#4287f5;">
</div>

<script>
var client = document.getElementById("client");
var revendeur = document.getElementById("revendeur");
function seeClient()
{
    revendeur.style.display = "none";
    client.style.display = "block";
}
function seeRevendeur()
{
    revendeur.style.display = "block";
    client.style.display = "none";
}
  
</script>