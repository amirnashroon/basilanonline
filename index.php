<?php
include("database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basilan Online</title>
    <link rel="stylesheet" href="style100.css">
</head>
<body>
    <header>
<a href="index.php">
    <img src="images/bonbasilanlogo.png">
    <h1>Basilan Online</h1>

</a>
        

    </header>
    
    <main>

    <?php
    if(isset($_SESSION["feedback"])){
        echo  "<h5>{$_SESSION["feedback"]}</h5>";
    }
        
        ?>
        
        


    <form action="index.php" method="post">

        <section>
          
            <h2>login</h2> 
            Username <br><input type="text" class="username" name="usernamel" maxlength="8"><br><br>
            Password <br><input type="password" class="password" name="passwordl" maxlength="8"><br><br>
            <input type="submit" class="login" name="login" value="Login"><br><br>
            
    
        </section>
        <section>  
            <h2>Register</h2> 
            Username <br><input type="text" class="username" name="username" maxlength="8"><br><br>
            Password <br><input type="password" class="password" name="password" maxlength="8"><br><br>
            Contact <br><input type="text" class="contact" name="contact"><br><br><br>
            <input type="submit" class="login" name="register" value="Register"><br><br>
            
    
        </section>

    </form>
    
    


    </main>
    <footer>
        
    </footer>
</body>
</html>


<?php


if(isset($_POST["register"])){

    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
    $contact = filter_input(INPUT_POST,"contact", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
        $_SESSION["feedback"] = "Enter username";
        header("Location: index.php");
    }elseif(empty($password)){
        $_SESSION["feedback"] = "Enter password";
        header("Location: index.php");
    }elseif(empty($contact)){
        $_SESSION["feedback"] = "Enter contact information";
        header("Location: index.php");
    }else{

        
        $sql = "INSERT INTO users (username,password,contact) VALUES ('$username','$password','$contact')";

             
                try{    

                    mysqli_query($conn, $sql);
                    $_SESSION["feedback"] = "Successfully registered";
                    header("Location: index.php");


                }catch(mysqli_sql_exception){

                    $_SESSION["feedback"] = "Registration failed";
                    header("Location: index.php");

                }
                
            
            }
}




if(isset($_POST["login"])){

    $username = filter_input(INPUT_POST,"usernamel", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"passwordl", FILTER_SANITIZE_SPECIAL_CHARS);
    
    

    $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $result=mysqli_query($conn, $sql);  
    
    if(mysqli_num_rows($result) > 0){
        while($row =mysqli_fetch_assoc($result)){
            
            $hash = password_hash($row["password"], PASSWORD_DEFAULT);

            if(password_verify("{$password}", $hash)){
                $_SESSION["username"] = $row["username"];
                header("Location: home.php");
            }else{
                $_SESSION["feedback"]= "Incorrect username or password";
                header("Location: index.php");
            }
            
        
            
        }
  
    
    }else{
        $_SESSION["feedback"]= "Incorrect username and password";
        header("Location: index.php");
    }

}
    
    
    mysqli_close($conn);

?>