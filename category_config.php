<?php
include('helpers.php');
include('database.php');


// Define variables and initialize with empty values
$cat_name_error   = "";
$errors = array(); 



if (isset($_POST['submit'])) {
  $input_cat_name = trim($_POST["cat_name"]);



  if(empty($input_cat_name)){$cat_name_error = "Please enter category name.";} 
 
     else{
            if(empty($errors)){
               $messages[] = "Sucessfully uploaded post!";
    }

  if (count($errors) == 0) {
  
    $sql = 'INSERT INTO categories(cat_name) 
    VALUES(:cat_name )';

    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':cat_name' =>$input_cat_name,
       
    ]);


    $input_cat_name = "";
 
  
      
      }
    }


    }



  

