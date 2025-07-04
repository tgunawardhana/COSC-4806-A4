<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>

                <a href="/reminders/create">Create Reminder</a>
                
            </div>
        </div>
        <br>

        <div class="row" id="reminders-list">
          
            <table>
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Time Stamp</th>
                  <th>Completed</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
               
                <?php foreach ($data['reminders'] as $reminder): ?>
                  <tr>
                    <td> <?php echo $reminder['subject'] ?></td>
                    <td> <?php echo $reminder['created_at'] ?> </td>
                    <td class="text-center">

                      <form method="post" action="/reminders/updateStatus" style="display:inline;">
                      <input type="hidden" name="id" value="<?php echo $reminder['id']; ?>">
                      
                      <input type="checkbox" name="completed" <?php echo $reminder['completed'] ? 'checked' : '' ?> onChange="this.form.submit()"> 
  </form>
  
                    </td>
                    <td> 
                      <form method="post" action="/reminders/edit" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $reminder['id']; ?>">
                        <input type="hidden" name="sub" value="<?php echo $reminder['subject']; ?>">
                        <button class="btn-secondary" type="submit">Update</button>
                      </form>

                    
                    </td>
                    <td> 
                      
                      <form method="post" action="/reminders/delete" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $reminder['id']; ?>">
                        <button type="submit" class="btn-danger">Delete</button>
                      </form>

                      
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


          

        </div>
        <br>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>