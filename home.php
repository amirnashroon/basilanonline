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
    <link rel="stylesheet" href="style11.css">
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
    
    <main>

    <aside>

        <img src="images/yakan.png">
        <img src="images/Basilan.jpg">
        

    </aside>
    <section>
        <p>Basilan, officially the Province of Basilan is an island province of the Philippines located primarily in the Bangsamoro Autonomous Region. Basilan Island is the largest and northernmost of the major islands of the Sulu Archipelago. It is just off the southern coast of the geographic Zamboanga Peninsula.
        </p>
        <p> Basilan is home to three main ethnolinguistic groups: the indigenous Yakans, and the later-arriving Tausugs and Chavacanos. The Yakans and Tausugs are predominantly Muslim, while the Chavacano are mainly Christian. There are also a number of smaller ethnic groups. Although the official languages are Filipino and English, the main native language is Yakan and lingua franca is Chavacano. Other languages include Tausug, Cebuano, and Sama.</p>
        

    </section>
    <article>
        <div class="container">
            <div class="sliderwrapper">
                <div class="slider">
    
                    <img id="slide-1" src="images/whitebeach.jpg">
                    <img id="slide-2" src="images/lampinigan.png">
                    <img id="slide-3" src="images/maliguefalls.jpg">
    
    
    
                </div>

                <div class="slider-nav">
    
                    <a href="#slide-1" ></a>
                    <a href="#slide-2" ></a>
                    <a href="#slide-3" ></a>
    
    
    
                </div>
    
    
            </div>
            
        </div>
        

    </article>


    </main>
    <footer>
        
    </footer>
</body>
</html>

<?php
    
    

?>