<?php 
  include 'config.php';
//   $sql = " select * from `ajaxcrud` ";
//   $result = mysqli_query($conn,$sql);
  
?>


<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                  
                    <th scope="col">Action</th>
                    <!-- <th colspan="2" style="text-align:center;">Action</th> -->
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    $res = mysqli_query($conn,"select * from `ajaxcrud`");
                    // print_r($res);
                    while($row = mysqli_fetch_assoc($res)) : 
                    // print_r($row);
                ?>

                <tr>
                    <td><?php echo $row['id'] ;?></td>
                    <td><?php echo $row['name'] ;?></td>
                    <td><?php echo $row['email'] ;?></td>
                
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">
                            Edit
                        </button>
                        <button value="<?php echo $row['id'] ;?>" class="btn btn-danger" id="delete">Delete</button>
                        <?php  include('edit.php'); ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
</table>
