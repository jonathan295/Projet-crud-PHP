<?php

$title = "CREATE";
include_once "header.php";
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $username = $address = $salary = $sexe = $tel = $password = "";
$name_err = $username_err = $address_err = $salary_err = $sexe_err = $tel_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
     // Validate username
    //  $input_name = trim($_POST["username"]);
     $input_username = trim($_POST["username"]);
     if(empty($input_username)){
         $username_err = "Please enter a username.";
    //  } elseif(!filter_var($input_username, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //      $username_err = "Please enter a valid username.";
     } else{
         $username = $input_username;
     }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }

    // Validate sexe
    $input_sexe = trim($_POST["sexe"]);
    if(empty($input_sexe)){
        $sexe_err = "Please your sex in it."; 
    } else{
        $sexe = $input_sexe;
    }

    // Validate tel
    $input_tel = trim($_POST["tel"]);
    if(empty($input_tel)){
        $tel_err = "Please your tel in it.";     
    } elseif(!ctype_digit($input_tel)){
        $tel_err = "Please your real tel in it.";
    } else{
        $tel = $input_tel;
    }

    // Validate password
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter a name.";
    // } elseif(!filter_var($input_password, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $password_err = "Please enter a valid name.";
    } else{
        $password = $input_password;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($username_err) && empty($address_err) && empty($salary_err) && empty($sexe_err) && empty($tel_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name,username, address, salary, sexe, tel, password) VALUES (?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssisis", $param_name, $param_username,$param_address, $param_salary, $param_sexe, $param_tel, $param_password);
            
            // Set parameters
            $param_name = $name;
            $param_username = $username;
            $param_address = $address;
            $param_salary = $salary;
            $param_sexe = $sexe;
            $param_tel = $tel;
            $param_password = $password;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
               // Records created successfully. Redirect to landing page
                header("location: view.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
    <div class="wrapper">
        <div class="container mt-4 modif-box add-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="create-users">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sexe_err)) ? 'has-error' : ''; ?>">
                            <label>Sexe</label>
                            <select name="sexe" class="form-control" value="<?php echo $sexe; ?>">
                                <option value=""></option>
                                <option value="M">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                            <!-- <input type="text" name="sexe" class="form-control" value="<?php echo $sexe; ?>"> -->
                            <span class="help-block"><?php echo $sexe_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sexe_err)) ? 'has-error' : ''; ?>">
                            <label>Tel</label>
                            <input type="text" name="tel" class="form-control" value="<?php echo $tel; ?>">
                            <span class="help-block"><?php echo $tel_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err;?></span>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <input type="submit" class="btn btn-primary width-btn-modif mb-2" value="Submit">
                            <a href="index.php" class="btn btn-default width-btn-modif">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>
</html>