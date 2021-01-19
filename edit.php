<?php 
include 'config.php';
$result = mysqli_query($conn,"select * from `ajaxcrud` where id='" . $row['id'] ."' ");
$user = mysqli_fetch_assoc($result);
?>

<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="frm" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input" data-validate="Valid Name is required:">
                        <input class="input100" type="text" value="<?php echo $user['name']; ?>" id="name<?php echo $user['id']; ?>" placeholder="Name">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" value="<?php echo $user['email']; ?>" id="email<?php echo $user['id']; ?>" placeholder="Email">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" value="<?php echo $user['password']; ?>" id="password<?php echo $user['id']; ?>" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="modal-footer">
                
                        <button type="button" value="<?php echo $user['id']; ?>" class="btn btn-primary update">Update</button>
                    </div>
                </form>
    </div>
  </div>
</div>