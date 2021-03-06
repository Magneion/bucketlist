<?php
require('vendor/autoload.php');
require('todolist-lib.php');
include('include/header.php');
?>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ajouter une tâche</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Titre</label>
  <div class="col-md-4">
  <input id="title" name="title" placeholder="Votre titre" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">
  <input id="description" name="description" placeholder="Description de la tâche à faire" class="form-control input-md" type="text">

  </div>
</div>

<!-- date input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deadline">Date limite</label>
  <div class="col-md-4">
  <input id="deadline" name="deadline" placeholder="" class="form-control input-md" type="date">

  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="done">Tâche effectuée</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="done-0">
      <input name="done" id="done-0" value="1" type="checkbox">
      Oui
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Valider</button>
  </div>
</div>

</fieldset>
</form>
