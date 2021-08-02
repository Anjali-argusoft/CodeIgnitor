<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
    public function student()
	{
       $this->load->model('StudentModel', 'stud');
        //$this->StudentModel->student_data();
        // $student = new StudentModel;
        // $student->student_data();

        $student=  $this->stud->student_data();
        echo $student;
    }

    public function show($id)
    {
        $this->load->model('StudentModel', 'stud');
        $this->stud->get($id);
    }
    
}

?>