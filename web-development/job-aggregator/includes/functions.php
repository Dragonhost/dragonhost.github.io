<?php

    // Select all the jobs from the job_aggregator_data table
   function retrieve_jobs($conn){
        $sql = "SELECT * FROM job_aggregator_data";
        $query = mysqli_query($conn, $sql);
        return $query;
    }


    // Insert the job_aggregator_data into job_aggregator_data table
    function insert($conn, $title, $description, $category, $salary, $location, $company, $duration, $link){
        $description_slashes = addslashes($description);
        $sql = "INSERT INTO job_aggregator_data(title, description, category, salary, location, company, duration, link) VALUES('$title','$description_slashes', '$category', '$salary', '$location', '$company', '$duration', '$link')";
        $query = mysqli_query($conn, $sql);
    }
    
    // retrive everything with this id
    function retrieve_jobs_id($conn, $id){
        $sql = "SELECT * FROM job_aggregator_data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Update job post
    function update_job($conn, $id, $title, $description, $category, $salary, $location, $company, $duration, $link){
        $description_slashes = addslashes($description);
        $sql = "UPDATE job_aggregator_data SET title='$title', description='$description_slashes', category= '$category', salary= '$salary', location= '$location', company= '$company', duration= '$duration', link= '$link' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }
    
    //Delete the post 
    function delete($conn, $id){
        $sql = "DELETE FROM job_aggregator_data WHERE id= $id";
        $query = mysqli_query($conn, $sql);
        
    }

    //retrieve users with specific email 
    function retrieve_users($conn, $email){
        $sql = "SELECT * FROM job_aggregator_users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    //retrieve all the users 
    function retrieve_all_users($conn){
        $sql = "SELECT * FROM job_aggregator_users";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Signup form logic function
    function insert_users($conn, $username, $email, $password){
        $result_all_users = retrieve_all_users($conn);
        foreach($result_all_users as $r_a_u){
            if($username == $r_a_u['username']){
                header("Location:signup.php?usernameTaken");
                exit();
            }
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO job_aggregator_users(username, email, password) VALUES('$username', '$email', '$hash_password')";
        $query = mysqli_query($conn, $sql);
    }

    // Logout functionality
    function logout(){
        unset($_SESSION['username']);
        echo "<script>location.href='index.php';</script>";
    }

    // Select filter check boxes values
    function filter_category_checkboxes($conn){
        $sql = "SELECT DISTINCT category FROM job_aggregator_data";
        $query_category = mysqli_query($conn, $sql);
        return $query_category;
    }

    function filter_location_checkboxes($conn){
        $sql = "SELECT DISTINCT location FROM job_aggregator_data";
        $query_location = mysqli_query($conn, $sql);
        return $query_location;
    }

    // retrieving selected checkboxes job_aggregator_data
    function selected_checkboxes_data($conn, $checkboxes, $selected_category_checkboxes, $selected_salary_checkboxes, $selected_location_checkboxes){
        if($checkboxes == 'category'){
            $sql = 'SELECT * FROM job_aggregator_data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '")';
        }
        elseif($checkboxes == 'salary'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = 'SELECT * FROM job_aggregator_data WHERE salary < 25000';
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = 'SELECT * FROM job_aggregator_data WHERE salary > 100000';
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM job_aggregator_data WHERE salary BETWEEN $range[0] AND $range[1] ";
            }
            
        }
        elseif($checkboxes == 'location'){
            $sql = 'SELECT * FROM job_aggregator_data WHERE location IN ("' . implode('", "', $selected_location_checkboxes) . '")';
        }
        elseif($checkboxes == 'categorySalary'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = 'SELECT * FROM job_aggregator_data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND salary < 25000';
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = 'SELECT * FROM job_aggregator_data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND salary > 100000';
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM job_aggregator_data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary BETWEEN $range[0] AND $range[1]";
            }
            
        }
        elseif($checkboxes == 'categoryLocation'){
            $sql = 'SELECT * FROM job_aggregator_data WHERE category IN ("' . implode('", "', $selected_category_checkboxes) . '") AND location IN ("' . implode('", "', $selected_location_checkboxes) . '")';
        }
        elseif($checkboxes == 'salaryLocation'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = "SELECT * FROM job_aggregator_data WHERE salary < 25000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = "SELECT * FROM job_aggregator_data WHERE salary > 100000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM job_aggregator_data WHERE salary BETWEEN $range[0] AND $range[1] AND location IN ('" . implode("', '", $selected_location_checkboxes) . "') ";
            }
        }
        elseif($checkboxes == 'categorySalaryLocation'){
            if($selected_salary_checkboxes == 'less_than_25'){
                $sql = "SELECT * FROM job_aggregator_data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary < 25000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            elseif($selected_salary_checkboxes == 'more_than_100'){
                $sql = "SELECT * FROM job_aggregator_data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND  salary > 100000 AND location IN ('" . implode("', '", $selected_location_checkboxes) . "')";
            }
            else{
                $range = explode('-', $selected_salary_checkboxes);
                $sql = "SELECT * FROM job_aggregator_data WHERE category IN ('" . implode("', '", $selected_category_checkboxes) . "') AND salary BETWEEN $range[0] AND $range[1] AND location IN ('" . implode("', '", $selected_location_checkboxes) . "') ";
            }
        }

        $query_selected = mysqli_query($conn, $sql);
         return $query_selected;
    }
           
    //Create new category
    function create_category($conn, $new_category){
        $new_category_camel_case = ucwords($new_category);
        $sql = "INSERT INTO job_aggregator_categories(category) VALUES('$new_category_camel_case')";
        $query = mysqli_query($conn, $sql);
    } 

    // Retrieve all categories
    function retrieve_categories($conn){
        $sql = "SELECT * FROM job_aggregator_categories";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    //Create new location
    function create_location($conn, $new_location){
        $new_location_camel_case = ucwords($new_location);
        $sql = "INSERT INTO job_aggregator_locations(location) VALUES('$new_location_camel_case')";
        $query = mysqli_query($conn, $sql);
    } 

    // Retrieve all locations
    function retrieve_locations($conn){
        $sql = "SELECT * FROM job_aggregator_locations";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Check Categories table
    function check_category($conn, $category){
        $sql = "SELECT category FROM job_aggregator_categories WHERE category = '$category'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Check Locations table
    function check_location($conn, $location){
        $sql = "SELECT location FROM job_aggregator_locations WHERE location = '$location'";
        $query = mysqli_query($conn, $sql);
        return $query;

    }
    
?>

