<?php
class Employee {
    //db connection & table name 
    private $conn;
    private $table_name = "employees";
    // object properties
    public $emp_no;
    public $birth_date;
    public $last_name;
    public $first_name;
    public $gender;
    public $hire_date;

    // constructor 
    public function __construct($data){ 
        $this->conn = $data;
    }
}