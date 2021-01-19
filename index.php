<!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="container">
                <form id="frm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name"  autocomplete="on" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" autocomplete="on" class="form-control"  id="password">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"  autocomplete="on" class="form-control"  id="email">
                        </div>
                        <input type="submit" class="btn btn-success" id="addnew" value="Add New">
                </form>
            </div>
            <!-- For Show Table Div-->
            <div class="container">
                <div id="showtable">
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript"> 
            
            //Add New Rows
                    $(document).on('click', '#addnew' , function() {
                    if($('#name').val() == '' || $('#password').val() == '' || $('#email').val() == '' ) {
                        alert("Please input data first");
                    }
                    $name = $('#name').val();
                    $password = $('#password').val();
                    $email = $('#email').val();

                    $.ajax({
                        url : 'insert.php',
                        type: 'POST',
                        data: {
                            name : $name,
                            password : $password,
                            email : $email,
                        },
                        success : function() {
                            window.location.reload();
                        }
                    });
                });


                //show table
                $(document).ready(function(){
                    $('#showtable').load('show.php');
                });


                //delete Rows
                $(document).on('click','#delete',function(){

                                        $id = $(this).val();
                                        alert($id);
                                        

                                        $.ajax({
                                            url: 'delete.php',
                                            type: 'post',
                                            data: {
                                                id: $id
                                            },
                                            success :function() {
                                                window.location.reload();
                                            }
                        });
                    });

                    //Update
                    $(document).on('click','.update',function(){
                        $id = $(this).val();
                        $name = $('#name' + $id).val();
                        $password = $('#password' + $id).val();
                        $email = $('#email' + $id).val();

                        $.ajax({
                            url: 'update.php',
                            type: 'POST',
                            data: {
                                id: $id,
                                name: $name,
                                password: $password,
                                email: $email,
                            },
                            success: function() {
                                window.location.reload();
                            }
                        });
                    });
        </script>
    </body>
    </html>