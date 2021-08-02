<?php

class StudentModel extends CI_Model
{
    public function student_data()
    {
        $stud_class = $this->student_class();
        return $name = "Rohit" ." and class is ". $stud_class;
    }
    private function student_class()
    {
        return $class = "BCA";
    }

    public function get($id)
    {
        if ($id == '1') {

            echo "THis is 1 data student";
        } elseif ($id == '2') {
            echo "THis is 2 data student";
        }
    }
    public function demo(){
       return $title = "This is title for demo page";
       
    }

}