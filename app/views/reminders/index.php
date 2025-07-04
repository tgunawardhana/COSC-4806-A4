<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>

                <a href="reminders/create">Create Reminder</a>
                
            </div>
        </div>
        <br>

        <div class="row" id="reminders-list">

            <table>
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Time Stamp</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['reminders'] as $reminder): ?>
                  <tr>
                    <td> <?php echo $reminder['subject'] ?></td>
                    <td> <?php echo $reminder['created_at'] ?> </td>
                    <td> 
                      <?php echo  ' <a href="/reminders/update/' . $reminder['id'] . '">Update</a>' ?>
                    
                    </td>
                    <td> 
                      <?php echo  ' <a href="/reminders/delete/' . $reminder['id'] .'">Delete</a>' ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            

        </div>
        <br>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>