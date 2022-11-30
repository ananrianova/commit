<?php
    require_once 'student.php';

    class Group {
        private $name;
        private $students = [];

        public function __construct($name) {
            $this->name = $name;
        }

        public function addStudent($student) {
            $this->students[] = $student;
        }

        public function display() {
            echo '<h1>Группа: '.$this->name.'</h1>';
            echo '<h1>Список студентов:</h1>';
            echo '<ol>';
            foreach ($this->students as $student) {
                echo '<li>';
                echo $student->getSurname().' ';
                echo $student->getName().' ';
                echo $student->getAge().' ';
                echo $student->getRate();
                echo '</li>';
            }
            echo '</ol>';
        }
    }
?>