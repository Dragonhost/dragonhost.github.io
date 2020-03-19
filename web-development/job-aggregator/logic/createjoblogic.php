<?php
    
    if(isset($_REQUEST['create_job'])){
        if(!empty($title) && !empty($description) && !empty($category) && !empty($salary) && !empty($location) && !empty($company) && !empty($duration) && !empty($link)){
            $location_upper = strtoupper($location);
            insert($conn, $title, $description, $category, $salary, $location_upper, $company, $duration, $link);
        }
    }

?>