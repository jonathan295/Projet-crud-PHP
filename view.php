<?php 

    $title = "VIEW";
    include_once "header.php";


?>
    <div>
        <div class="container-fluid">
            <div class="row mt-4 mb-4">
                <div class="col">
                    <h2 class="pull-left title text-shadow-2">Employees Details</h2>
                </div>
            </div>
            <div class="row mt-1 mb-4">
                <div class="col">
                    <a href="create.php" class="btn btn-success pull-right float-end">Add New Employee</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped change-table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Username</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Sexe</th>";
                                        echo "<th>Contact</th>";
                                        echo "<th>Password</th>";
                                        echo "<th class=\"text-lg-center\">Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>" . $row['sexe'] . "</td>";
                                        echo "<td>" . $row['tel'] . "</td>";
                                        echo "<td>" . "<div class=\"row\"><div class=\"mdp col\">".$row['password'] ."</div> <span class=\"biger col\">******</span>" . "<div class=\"col float-end\"><i class=\"fa fa-eye\" onclick=\"showPassword(this)\"></i></div></div> " . "</td>";
                                        echo "<td class=\"text-lg-center\">";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'class=\"mx-1\"><i class='fa fa-pencil'></i></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'class=\"mx-1\"><i class='fa fa-trash'></i></a>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'class=\"mx-1\"><i class='fa fa-eye'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
<script>

    function showPassword(icon) { 
    const row = icon.closest("tr"); 
    const mdp = row.querySelector(".mdp"); 
    const txt = row.querySelector(".biger"); 

    mdp.classList.toggle("showpassword");
    txt.classList.toggle("hidestars");
}
   
</script>

</html>