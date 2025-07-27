
<?php
if (isset($_POST['update_job'])) {
    // Collect form data
    $title = $_POST['title'];
    $name = $_POST['name'];
    $job_type = $_POST['job_type'];
    $l_d_a = $_POST['l_d_a'];
    $must_have = $_POST['must_have'];
    $c_date = $_POST['c_date'];
    $post_by = $_POST['post_by'];
    $id = $_POST['job_id']; // Assuming you have a hidden field with the job ID

    // Update query
    $query = $conn->query("UPDATE jobs 
              SET title='$title', name='$name', job_type='$job_type', l_d_a='$l_d_a', 
                  must_have='$must_have', c_date='$c_date', post_by='$post_by' 
              WHERE id='$id'");

    // Execute the query
    if ($query) {
        echo "<script>alert('Updated successfully')</script>";

    } else {
        echo "<script>alert('Something went wrong try later')</script>";

    }
}

?>

<div class="container mt-5">
<?php
$qury= $conn->query("SELECT * FROM jobs");

while($job_data = mysqli_fetch_array($qury)){?>
    <!-- Modal -->
    <div class="modal fade" id="update_job<?php echo $job_data['id']?>" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="jobModalLabel">Add Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $job_data['id']?>" name="job_id">
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $job_data['title']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $job_data['name']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="job_type">Job Type</label>
                            <input type="text" class="form-control" id="job_type" name="job_type" value="<?php echo $job_data['job_type']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="l_d_a">Last Date to Apply</label>
                            <input type="date" class="form-control" id="l_d_a" name="l_d_a" value="<?php echo $job_data['l_d_a']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="must_have">Must Have</label>
                            <input type="text" class="form-control" id="must_have" name="must_have" value="<?php echo $job_data['must_have']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="c_date">Creation Date</label>
                            <input type="date" class="form-control" id="c_date" name="c_date" value="<?php echo $job_data['c_date']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="post_by">Posted By</label>
                            <input type="text" class="form-control" id="post_by" name="post_by" value="<?php echo $job_data['post_by']?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_job">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>