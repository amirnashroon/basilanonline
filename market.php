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
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <header>
        <section class="sec1">
            <a href="home.php">
                <img class="img1" src="images/bonbasilanlogo.png">
                <h1>Basilan Online</h1>
            </a>
        </section>
        
        <section class="sec2">
            <label><b><?php
                        if(empty($_SESSION["username"])){
                            header("Location: index.php");
        
                        }else{
        
                            echo $_SESSION["username"];
        
                        }
                        ?>
            </b></label>
            <a href="index.php">   
                <img class="img2" title="logout" src="images/logout.png">
            </a>
        </section>
        
    </header>
    <nav>
        <a href="market.php">Market</a>
        <a href="hiring.php">Job Posting</a>
        
    </nav>
    
        <nav class="menu">
            <form>
                <aside class="dropD">
                    <a class="dropB">Delete</a>
                    
                        <aside class="dropC">
                            Code: <input type="text" class="names"><br>
                            <input type="submit" value="Confirm" class="dropCon">
        
                        </aside>
                    </aside>

                <aside class="dropD">
                <a class="dropB">Sell</a>
                
                    <aside class="dropC">
                        <input type="file" class="files"><br>
                        Name: <input type="text" class="names"><br>
                        <input type="submit" value="Confirm" class="dropCon">
    
                    </aside>
                </aside>


                
                <a>Search</a>
                <input type="search" class="search">
            
                
                
                
                

            </form>
            


        </nav>

    
    
    <main>

        

        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        <div class="item">
            <section>
                <label><small>Seller:</small> <b>amir ibno</b> <small>Code:</small>123123</label>

            </section>
            
            <img class="dagang1" src="images/maliguefalls.jpg">
            <h4>name: maligue water falls</h4>
            <h4>contact: 09364878609</h4>

        </div>
        
    </main>
    <footer>
        
    </footer>
</body>
</html>



