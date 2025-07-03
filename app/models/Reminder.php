<?php

class Reminder {

  public function __construct() {

  }

  public function get_all_reminders(){
    $dbh = db_connect();
    $statement = $dbh->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function update_reminder($reminder_id){
    $dbh = db_connect();
    $statement = $dbh->prepare("update reminders set reminder = :reminder where id = :id;");
    $statement->bindParam(':reminder', $reminder);
    $statement->bindParam(':id', $id);
    $statement->execute();
  }

}