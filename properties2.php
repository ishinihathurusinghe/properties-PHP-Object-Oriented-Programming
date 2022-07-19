<?php
 
                   class Employee{

     var $emp_id;
     var $first_name;
     var $last_name;
     var $is_active = false;
 }

 
 
$employee_1 = new Employee;
$employee_2 = new Employee;

$employee_1->emp_id = 100;
$employee_1->first_name= 'Michael';
$employee_1->last_name = 'max';

$employee_2->emp_id = 200;
$employee_2->first_name= 'Richael';
$employee_2->last_name = 'hax';

echo 'Details 0f Employee 1: <br>';
echo ' Employee Id: ' . $employee_1->emp_id;

echo '<br>';
echo 'Full Name: ' . $employee_1->first_name . ' ' . $employee_1->last_name;
echo '<br>';


echo 'Details 0f Employee 2: <br>';
echo ' Employee Id: ' . $employee_2->emp_id;

echo '<br>';


echo 'Full Name: ' . $employee_2->first_name . ' ' . $employee_1->last_name;
echo '<br>';

$class_vars = get_class_vars('Employee');

echo 'Class Variables <br>';

echo '<pre>';
print_r($class_vars);
echo '</pre>;


?>
