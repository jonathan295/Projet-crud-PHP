<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $username = $sex = $address = $phone = $salary = "";
$name_err = $username_err = $sex_err = $address_err = $phone_err = $salary_err = "";
 
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
    $input_username = trim($_POST["username"]);
    if(empty($input_username)){
        $username_err = "Please enter an username.";
    } elseif(!filter_var($input_username, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $usernname_err = "Please enter a valid username.";
    } else{
        $username = $input_username;
    }

    // Validate sex
    $input_sex = trim($_POST["sex"]);
    if(empty($input_username)){
        $username_err = "Please choose one sex.";
    } elseif(!filter_var($input_sex, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $sex_err = "Please enter a valid sex.";
    } else{
        $sex = $input_sex;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate phone
    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Please enter a phone call.";     
    } elseif(!ctype_digit($input_phone)){
        $phone_err = "Please enter a phone call.";
    } else{
        $phone = $input_phone;
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
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($username_err) && empty($address_err) && empty($phone_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, username, sex, address, phone, salary) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssii", $param_name, $param_username, $param_sex, $param_address, $param_phone, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_username = $username;
            $param_sex = $sex;
            $param_address = $address;
            $param_phone = $phone;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: detail.php");
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
 <?php include_once("header.php");?>
 <style>
    body{
    background: url(cap.png);
    background-size: cover;
    }
    
    .wrapper{
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    padding: 10px;
    width: 450px;
    border-radius: 20px;
    }

 </style>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

                        <div class="form-group <?php echo (!empty($sex_err)) ? 'has-error' : ''; ?>">
                            <label>Sex</label>
                            <select name="sex" class="form-control" value="<?php echo $sex; ?>">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            <span class="help-block"><?php echo $sex_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone call</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="detail.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>