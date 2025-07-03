<?php require_once 'app/views/templates/header.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create Reminder</h1>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
    <form action="/reminders/insert" method="post" >
    <fieldset>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input required type="text" class="form-control" name="subject">
      </div>
      
            <br>
        <button type="submit" class="btn btn-primary">Add Reminder</button>
    </fieldset>
        <br>
    </form> 
  </div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
