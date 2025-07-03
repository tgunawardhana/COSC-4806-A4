<?php

class Reminder {

  public function __construct() {

  }

  public function get_all_reminders(){
    $dbh = db_connect();
    $statement = $dbh->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function insert_reminder($subject, $user_id) {
    $dbh = db_connect();
    $statement = $dbh->prepare("insert into reminders (subject, user_id) values (:subject, :user_id);");
    $statement->bindParam(':subject', $subject);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();
    header("location: /reminders/index");
  }

  public function update_reminder($id, $subject, $user_id){
    $dbh = db_connect();
    $statement = $dbh->prepare("update reminders set subject = :subject, user_id = :user_id where id = :id;");
    $statement->bindParam(':subject', $subject);
    $statement->bindParam(':user_id', $user_id);
    $statement->bindParam(':id', $id);
    $statement->execute();
    header("location: /reminders/index");
  }

  public function delete_reminder($id){
    $dbh = db_connect();
    $statement = $dbh->prepare("delete from reminders where id = :id;");
    $statement->bindParam(':id', $id);
    $statement->execute();
  }
  
}