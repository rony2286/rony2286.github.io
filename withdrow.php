
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Admin</title>
    </head>
    <body>
        <div class="container">
<?php
try{


    include ('connection.php');
    $error_username= '';
    $success='';

    if(isset($_POST['submit']))
    {

        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $bKash = $_POST['bKash'];
        $amount = $_POST['amount'];
        
        
        //exit;
        /*if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }*/
        
        if($username == '')
        {
            $error_username = 'User name required';
        }
        if($email == '')
        {
            $error_email = 'Email name required';
        }
        
        
        else
        {

            $sql = "call sec_users_insert(null,200,'$username','$password','123','','$name',null,'$email','$mobile',null,null,1,0,0,null,null,null,null,'created')";

            //echo $sql;

            $result = mysqli_query($connection,$sql);
            $success = 'Thanks, Sucessfully Registered!';
            header("Location: withrow.php");
        }
    }
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>

    
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">

                        
                    </div>
                </div> 
                <div class="main-login main-center">
                    <h1 class="title">Withdrow Form</h1>
                        <hr />
                    <?php
                                echo $success;
                            ?>
                            <br/>
                    <form class="form-horizontal" method="post" action="withdrow.php">
                        
                   
                        <div class="form-group">
                            <?php
                                echo $error_username;
                            ?>
                            <br>
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label">Mobile</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter your Mobile no"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <label for="bKash no" class="cols-sm-2 control-label">bKash no</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bKash no fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="bKash no" id="bKash no"  placeholder="Enter your bKash no"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <label for="amount" class="cols-sm-2 control-label">Amount</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bKash no fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="amount" id="bKash no"  placeholder="Enter your amount"/>
                                </div>
                            </div>
                        </div>

                        

                    


                        <div class="form-group ">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
                        </div>
                      
                    </form>
                </div>
            </div>
<?php
        
?>
        </div>

        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </body>
</html>