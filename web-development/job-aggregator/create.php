<?php

include "includes/includes.php";

?>

<div class="container mt-5">
    <!-- Pills -->
    <div class="bg-white p-3 rounded">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">New Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">New Location</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <?php
                    if(!empty($status)){
                        echo '<h5 class="text-danger mb-3 ">'.$status.'</h5>';
                    }
                ?>
                <form method="POST">
                    <label class="font-weight-bold">Title</label>
                    <input class="form-control mt-2 mb-2" name="title" placeholder="Enter the job title">
                    <label class="font-weight-bold">Description</label>
                    <textarea class="form-control mt-2 mb-2" name="description" placeholder="Enter the job description" id="description"></textarea>
                    <label class="font-weight-bold mt-3">Category</label>
                    <div class="input-group mb-3 mt-1 ">
                        <select class="custom-select" id="inputGroupSelect01" name="category">
                            <option value="select a category">Select a Category</option>
                            <?php foreach($retrieve_categories as $r_c){?>
                                 <option value="<?php echo $r_c['category'];?>"><?php echo $r_c['category'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label class="font-weight-bold">Salary</label>
                    <input type="text" placeholder="Enter the Salary" class="form-control" name="salary">
                    <label class="mt-3 font-weight-bold">Location</label>
                    <div class="input-group mb-3 mt-1">
                        <select class="custom-select" id="inputGroupSelect01" name="location">
                            <option value="select a location">Select a Location</option>
                            <?php foreach($retrieve_locations as $r_l){?>
                                 <option value="<?php echo $r_l['location'];?>"><?php echo $r_l['location'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label class="mt-1 font-weight-bold">Company</label>
                    <input type="text" placeholder="Enter the company name" class="form-control" name="company">
                    <label class="mt-3 font-weight-bold">Duration</label>
                    <input type="text" placeholder="Enter the job time duration" class="form-control" name="duration">
                    <label class="mt-3 font-weight-bold">Job Link</label>
                    <input type="text" placeholder="Enter the link of the job application page" class="form-control" name="link">
                    <button class="btn btn-primary mt-3" type="submit" name="create_job">Create</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="bg-white rounded mt-4">
                <form method="POST" class="mt-4">
                    <input type="text" placeholder="Add a new CATEGORY" class="form-control" name="new_category">
                    <button class="btn btn-primary mt-3" name="create_category">Create</button>
                </form>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <form method="POST" class="mt-4">
                    <input type="text" placeholder="Add a new LOCATION" class="form-control" name="new_location">
                    <button class="btn btn-primary mt-3" name="create_location">Create</button>
                </form>
            </div>

            
        </div>
    </div>

</div>



<?php

include "html/footer.php";

?>