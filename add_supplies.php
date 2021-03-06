<?php 

    // Requests the inclusion of the functions.php file

    include('functions.php');

    // Calls the isLoggedIn Function

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You are required to login";
        
        header('location: login.php');
    }

    // Logs user out if logout button clicked

    if (isset($_GET['logout'])) {
        
        session_destroy();
        unset($_SESSION['user']['username']);
        header("location: login.php");
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Emergency Supplies</title>
            <!-- Meta Data -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- Calls external stylesheets for css styles -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
        
            <!-- Calls external javascript files to enable javascript methods -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
<body>
    
    <div class = "container">
        <div class="wrapper">
            <form action="add_supplies.php" method="post" class="form-signin">       
                <h3 class="form-signin-heading">Add Emergency Supplies</h3>
                  <hr class="colorgraph">
                
                    <!-- Call error file to display errors -->
                    <?php include('errors.php'); ?>
                
                    <label for=supplies style="text-align:center;">Insert Number of Supplies to be Added!</label><br/>
                    <input type="text" class="form-control" id="supplies" name="supplies" size="2" placeholder="Enter Item">
                
                    <input type="number" class="form-control" id="amount" name="amount" size="5" placeholder="Amount"><br/>
                
                    <select class="form-control" id="priority" name="priority">
                        <option value="" selected>Choose Priority...</option>
                        <option value="High">High Priority</option>
                        <option value="Low">Low Priority</option>
                    </select><br/>
                
                    <button type="submit" class="btn btn-primary btn-block" name="add_items">ADD ITEM</button>                 		  

                  <a href="admin.php" style="color: white; text-decoration: none;" class="btn btn-primary btn-block">BACK</a>  			
            </form>			
        </div>
    </div>    
    
</body>
</html>