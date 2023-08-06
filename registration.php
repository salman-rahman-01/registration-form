<?php
    require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration | PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php
        
        ?>
    </div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values.</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" id="firstname" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" id="lastname" name="lastname" required>

                        <label for="email"><b>E-mail</b></label>
                        <input class="form-control" type="email" id="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" type="text" id="phonenumber" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" id="password" name="password" required>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){
                var valid = this.form.checkValidity();
                
                if(valid){

                var firstname       = $('#firstname').val();
                var lastname        = $('#lastname').val();
                var email           = $('#email').val();
                var phonenumber     = $('#phonenumber').val();
                var password        = $('#password').val();
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                        success: function(data){
                            Swal.fire({
                                    'title': 'Successful',
                                    'text': data, 
                                    'type': 'success'
                                })
                        },
                        error: function(data){
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.', 
                                'type': 'error'
                            })
                        }
                    });
                    
                }else{
                    
                }
                
            });
            
        });
    </script>
</body>
</html>