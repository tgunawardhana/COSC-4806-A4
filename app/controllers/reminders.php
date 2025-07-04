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

    public function edit(){
      //$subject = $_REQUEST['subject'];
      //$user_id = $_SESSION['user_id'];
      $id = $_POST['id'];
      $subject = $_POST['sub'];

       $this->view('reminders/update', ['id' => $id, 'subject'=> $subject]);
    }
  
    public function update(){
      $subject = $_REQUEST['subject'];
      $id = $_REQUEST['id'];
      //$user_id = $_SESSION['user_id'];

      $reminder = $this->model('Reminder');
      $reminder->update_reminder($id, $subject);
    }

   public function delete(){
     $id = $_POST['id'];
     $reminder = $this->model('Reminder');
     $reminder->delete_reminder($id);
   }

    public function updateStatus(){
      $id = $_POST['id'];
      $completed = $_POST['completed'];
      $reminder = $this->model('Reminder');
      $reminder->updateStatus($id, $completed);
    }
  
}