<?php

// class Student {

//     // properties
//     public $name;
//     public $class;
//     public $fvrt_subj;
//     private $roll_no;

//     // __construct method
//     // function __construct($n,$c,$s,$r){
//     //     echo $this->name = $n ."<br>";
//     //     echo $this->class = $c ."<br>";
//     //     echo $this->fvrt_subj = $s ."<br>";
//     //     echo $this->roll_no = $r ."<br>";
//     // }

//     // method
//     function set_name($n){
//          $this->name = $n;
//     }

//     function get_name(){
//         echo $this->name;
//     }
//     function set_roll($r){
//         $this->roll_no = $r;
//    }

//    function get_roll(){
//       return $this->roll_no;
//    }
// }


// // $huzaifa = new Student("huzaifa","XI","Math",1);
// $huzaifa = new Student();
// $huzaifa->set_name("huzaifa");
// echo $huzaifa->get_name();
// $huzaifa->set_roll(5871);
// echo $huzaifa->get_roll();

// class Programmer extends Student{
//     public $lang = "php";
//     function set_lang($lang){
//         echo $this->lang = $lang;
//     }
// }

// $hamza = new Programmer();
// echo $hamza->name = "huzaifa";
// $hamza->set_lang("java");
// $hamza->set_name("hamza");
// $hamza->get_name();

// echo "student name is $huzaifa->name his class is $huzaifa->class her favourite subject is $huzaifa->fvrt_subj and her rollno is $huzaifa->roll_no";

?>


<?php
    class Employee{
        public $name;
        public $salary;

        public function __construct($name,$salary){
            $this->name = $name;
            $this->salary = $salary;
            $this->describe();
        }

        // private is not work inheritane.When we inherit a function we used access modifier protected
        protected function describe(){
            echo "the name is $this->name <br>";
            echo "the salary is $this->salary <br>";
        }
    }

$user = new Employee("huzaifa",1555555);

    class Programmer extends Employee{

        public function __construct($name,$salary){
            $this->name = $name;
            $this->salary = $salary;
            $this->describe();
        }
    }

 $new_user = new Programmer("abdullah",5555555555);

?>