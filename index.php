<?php 
    require 'function.php';
    $games = query("SELECT * FROM games");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Game Database</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="about.php">Data</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <section>
                <div class="content">
                    <img src="asset/logo.png" class="logo">
                    <h1 class="e">Gamesdb</h1>
                    <h1>Welcome to <span style="color:palegoldenrod;">Gamesdb</span></h1>
                    <h2>A complete website of game databases of 2022 <br> Look up for your top favorite games and add it here, <br> make everyone look for this site.</h2>
                    <h6>You can start adding games in the Data page</h6>
                </div>
            </section>

        <div class="slider">
            <div class="slides">

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="asset/iklan1.png" alt="">
                </div>
                <div class="slide first">
                    <img src="asset/iklan2.png" alt="">
                </div>
                <div class="slide first">
                    <img src="asset/iklan3.png" alt="">
                </div>
                <div class="slide first">
                    <img src="asset/iklan4.png" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auton-btn1"></div>
                    <div class="auton-btn2"></div>
                    <div class="auton-btn3"></div>
                    <div class="auton-btn4"></div>
                </div>

            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 4000);
        </script>

        <aside class="tulisan">
            <h2>Your top favorite games of the year.<br>Get your games on the list. Let everyone <br>know your favorite games.</h2>
            <img src="asset/aset1.png" class="asset1">
        </aside>

        <about>
            <h1 class="judul">Games Data</h1>
            <a href="adddata.php" class="button"><span>Add Games Data</span></a>
            <br></br>

            <table border="2" cellpadding="10" cellspacing="10" class="table">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Released</th>
                    <th>Genre</th>
                    <th>Ratings</th>
                    <th>Platform</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach($games as $row): ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["released"]?></td>
                    <td><?= $row["genre"]?></td>
                    <td><?= $row["ratings"]?></td>
                    <td><?= $row["platform"]?></td>
                    <td><img src="asset/<?=$row["images"] ?>" alt="" width="100" height="100" ></td>
                    <td class="action">
                        <a href="">Change</a>
                        <a href="deletedata.php?id=<?= $row["id"];?>" onclick="return confirm('Do you want to delete the data below?')";>Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach ?>
            </table>
        </about>
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
                <div class="wave" id="wave5"></div>
            <ul class="social-icon">
                <li><a href="https://www.instagram.com/led_ih/"><ion-icon name="logo-instagram"></ion-icon></a></li>  
                <li><a href="https://www.linkedin.com/in/ladyaris-khalishah-b85a76220/"><ion-icon name="logo-linkedin"></ion-icon></a></li>  
                <li><a href="https://www.youtube.com/channel/UCuI2J4FCVmM-kTiiqokBnfQ"><ion-icon name="logo-youtube"></ion-icon></a></li>  
                <li><a href="https://github.com/Ladyaris"><ion-icon name="logo-github"></ion-icon></a></li>  
            </ul>
        </footer>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>