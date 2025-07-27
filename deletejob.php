<!-- Delete Job Modal -->
<?php
if(isset($_POST['delete_job'])){
    $getid = $_POST['id_input'];
$qry = $conn->query("DELETE FROM jobs WHERE id  = '$getid'");
}
?>
    <?php
    $qury = $conn->query("SELECT * FROM jobs");
    while ($job_data = mysqli_fetch_array($qury)) { ?>
        <div class="modal fade" id="delete_job<?php echo $job_data['id'] ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg_delete">
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $job_data['id']?>" name="id_input"> 
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this job?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dnager" name="delete_job">Delete</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php } ?>
