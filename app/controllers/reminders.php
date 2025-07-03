<?php

class Reminders extends Controller {

    public function index() {

      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();

      
      $this->view('reminders/index', ['reminders' =>$list_of_reminders]);
    }

    public function create(){

      $this->view('reminders/create');
    }

    public function insert(){
      $subject = $_REQUEST['subject'];
      $user_id = $_SESSION['user_id'];

      $reminder = $this->model('Reminder');
      $reminder->insert_reminder($subject, $user_id);
    }
  
    public function update($id){
      $subject = $_REQUEST['subject'];
      $user_id = $_SESSION['user_id'];
      $reminder = $this->model('Reminder');
      $reminder->update_reminder($id, $subject, $user_id);
    }

   public function delete($id){
     $reminder = $this->model('Reminder');
     $reminder->delete_reminder($id);
   }
}