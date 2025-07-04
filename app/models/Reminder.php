<?php

class Reminder {

  public function __construct() {

  }

  public function get_all_reminders(){
    // Get all the reminders of the current user only
    $user_id = $_SESSION['user_id'];
    $dbh = db_connect();
    $statement = $dbh->prepare("SELECT * FROM reminders WHERE user_id = :user_id;");
    $statement->bindParam(':user_id', $user_id);
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

  public function update_reminder($id, $subject){
    //$user_id = $_SESSION['user_id'];
    $dbh = db_connect();
    $statement = $dbh->prepare("update reminders set subject = :subject where id = :id;");
    $statement->bindParam(':subject', $subject);
    //$statement->bindParam(':user_id', $user_id);
    $statement->bindParam(':id', $id);
    $statement->execute();
    header("location: /reminders/index");
  }

  public function delete_reminder($id){
    $dbh = db_connect();
    $statement = $dbh->prepare("delete from reminders where id = :id;");
    $statement->bindParam(':id', $id);
    $statement->execute();
    header("location: /reminders/index");
  }

  public function updateStatus($id, $completed){
    $dbh = db_connect();
    $statement = $dbh->prepare("update reminders set completed = :completed where id = :id;");
    $statement->bindParam(':completed', $completed);
    $statement->bindParam(':id', $id);
    $statement->execute();
    header("location: /reminders/index");
  }
  
}