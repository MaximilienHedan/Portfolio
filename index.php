<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfolio | Maximilien Hédan</title>
    <link rel="stylesheet" href="style.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
           
    <div class="wrapper">
        <div class="cover cover-left"></div>
        <div class="cover cover-right"></div>

        <div class="book">
            <!-- profile page -->
            <div class="book-page page-left">
                <div class="profile-page">
                    <img src="c3452a9a7f1434fa78c3cbc96728da32-sticker.png" alt="">
                    <h1>Maximilien Hédan</h1>
                    <h3>Concepteur Développeur</h3>

                    <div class="social-media">
                        <a target="_blank" href="https://www.facebook.com/maximilien.hedan/"><i class='bx bxl-facebook'></i></a>
                        <a target="_blank" href="https://twitter.com/Reivaks_"><i class='bx bxl-twitter' ></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/maximilien-hédan-508b01105"><i class='bx bxl-linkedin' ></i></a>
                        <a target="_blank" href="https://www.instagram.com/max.hdn/"><i class='bx bxl-instagram-alt' ></i></a>
                    </div>

                    <p>Bonjour et bienvenue sur mon CV en ligne. Ce projet à pour objectif 
                        de m'entrainer et d'améliorer mes compétences en matière de développement web afin de pouvoir passer de développeur Back-end à développeur Front-End.</p>

                    <div class="btn-box">
                        <!-- <a href="#" class="btn">Télécharger CV</a> -->
                        <a href="#" class="btn contact-me">Me contacter</a>
                    </div>
                </div>   
            </div>

            <!-- page 1 & 2 -->
            <div class="book-page page-right turn" id="turn-1">
                <!-- page 1 experiences  -->
                <div class="page-front">
                    <h2 class="title">Expérience professionnelles</h2>
                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>Depuis juin 2023</span>
                            <h3>Développeur Low Code - CMB Arkéa</h3>
                            <p id="pos"><i class='bx bxs-map'></i>Brest</p>
                            <p>Création d'applications via l'outil low code Mendix, au sein de l'équipe pôle Innovation et Organisationnel</p>
                            
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>Juillet 2022 à Février 2023</span>
                            <h3>Tierce maintenance applicative -  URSSAF</h3>
                            <p id="pos"><i class='bx bxs-map'></i>Nantes</p>
                            <p>Maintenance applicative de l'application de gestion des URSSAF <b>contrAC</b>, destinée aux agents comptables.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>Janvier 2021 à Juin 2022</span>
                            <h3>Developpeur RPG - CDC Habitat</h3>
                            <p id="pos"><i class='bx bxs-map'></i>Nantes</p>
                            <p>Création / modification des différentes applications nécessaires concernées par la fusion des ESH (Entreprise Sociales pour l'Habitat)</p>
                        </div>

                    </div>

                    <span class="number-page">1</span>

                    <!-- next button -->
                    <span class="nextprev-btn" data-page="turn-1">
                        <i class='bx bx-chevron-right' ></i>
                    </span>
                </div>


                <!-- page 2 Etudes -->
                <div class="page-back">
                    <h2 class="title">Formations</h2>

                    <div class="workeduc-box">
                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>2023</span>
                            <h3>Formation Mendix</h3>
                            <p>Suivis des modules en ligne Mendix et obtention de la certification Rapid Developer.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>2020</span>
                            <h3>Formation Low Code</h3>
                            <p>Suivis des modules en ligne sur l'outil Power Plateforms.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>2017</span>
                            <h3>Formation en alternance</h3>
                            <p>Formation sur 2 ans en alternance entre l'ENI école et l'entreprise INETUM, afin de devenir concepteur développeur informatique.</p>
                        </div>

                        <div class="workeduc-content">
                            <span class="year"><i class='bx bxs-calendar'></i>2014</span>
                            <h3>BTS</h3>
                            <p>BTS SIO (Services Informatiques aux Organisations) option Développement, au Lycée Saint Sauveur à Redon.</p>
                        </div>
                    </div>


                    <span class="number-page">2</span>

                    <!-- prev button -->
                    <span class="nextprev-btn back" data-page="turn-1">
                        <i class='bx bx-chevron-left' ></i>
                    </span>
                </div>
            </div>

            <!-- page 3 & 4 -->
            <div class="book-page page-right turn" id="turn-2">
                <!-- page 3 (mes services) -->
                <div class="page-front">
                    <h2 class="title">Mes compétences</h2>

                    <div class="skills-box">
                        <div class="skills-content">
                            <h3>Front-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-html5' ></i>HTML</span>
                                <span><i class='bx bxl-css3' ></i>CSS</span>
                                <span><i class='bx bxl-javascript' ></i>JS</span>
                                <span><i class='bx bxl-react' ></i>React</span>
                                <span><i class='bx bxl-bootstrap' ></i>Bootstrap</span>                               
                            </div>
                        </div>

                        <div class="skills-content">
                            <h3>Back-End</h3>
                            <div class="content">
                                <span><i class='bx bxl-python' ></i>Python</span>
                                <span><i class='bx bxl-java' ></i>Java</span>
                                <span><i class='bx bxl-php' ></i>PHP</span>
                                
                            </div>
                        </div>        

                        <div class="skills-content">
                            <h3>Systemes d'exploitation</h3>
                            <div class="content">
                                <span><i class='bx bxl-windows' ></i>Windows</span>
                                <span><i class='bx bxl-tux'></i>Linux</span>
                                <span><i class='bx bxl-apple' ></i>MacOS</span>
                                
                            </div>
                        </div> 



                    </div>
                    <span class="number-page">3</span>

                    <!-- next button -->
                    <span class="nextprev-btn" data-page="turn-2">
                        <i class='bx bx-chevron-right' ></i>
                    </span>
                </div>


                <!-- page 4 (mes compétences) -->
                <div class="page-back">
                    <h2 class="title">Mes passions</h2>

                    <div class="hobbies-box">
                        <div class="hobbies-content">
                            <h3>Informatique</h3>
                            <div class="content">
                                <span><i class='bx bx-code-block' ></i>Dev Front</span>
                                <span><i class='bx bx-code-alt' ></i>Low Code</span>                                
                                <span><i class='bx bxl-android' ></i>Dev Mobile</span>
                            </div>
                        </div>

                        <div class="hobbies-content">
                            <h3>Jeux-vidéo</h3>   
                            <div class="content">
                                <span><img src="wow.png" alt="">WoW</span>
                                <span><img src="diablo-immortal-svgrepo-com.png" alt="">Diablo</span>
                                <span><img src="pngwing.com.png" alt="">LoL</span>
                            </div>
                        </div>

                        <div class="hobbies-content">
                            <h3>Musique</h3>
                            <div class="content">
                                <a target="_blank" href="https://open.spotify.com/playlist/37i9dQZF1Epsf87wz44jNW?si=6ca5b0e0121947cc" ><span><i class='bx bxl-spotify' ></i>Playlist</span></a>
                            </div>
                        </div>


                    </div>

                    <span class="number-page">4</span>
                    <!-- prev button -->
                    <span class="nextprev-btn back" data-page="turn-2">
                        <i class='bx bx-chevron-left' ></i>
                    </span>
                </div>
            </div>

            <!-- page 5 & 6   -->
            <div class="book-page page-right turn" id="turn-3">
                <!-- page 5 -->
                <div class="page-front">
                    <h2 class="title">Dernier projet</h2>

                    <div class="portfolio-box">
                        <div class="img-box">
                            <img src="portfolio.jpg" alt="">
                        </div> 
                        <div class="info-box">
                            <div class="info-title">
                                <h3>CV en ligne</h3>
                                <!-- <a href="#">Live Preview<i class='bx bx-link-external'></i></a> -->
                            </div>
                            <p>Techno utilisées:</p>
                            <p>Le CV en ligne sur lequel vous-vous trouvez à été réalisé en HTML, CSS et JavaScript et ce, grâce à un support vidéo en plus des modifications personnelles que j'ai pu apporter,
                                dans le but pratiquer mes compétences de développeur Front-End.</p>
                        </div>    
    
                        <div class="btn-box">
                            <a target="_blank" href="https://github.com/MaximilienHedan/Portfolio" class="btn">Code source</a>
                            <!-- <a href="#" class="btn">More Projects</a> -->
                        </div>
                    </div>

                    <span class="number-page">5</span>

                    <span class="nextprev-btn" data-page="turn-3">
                        <i class='bx bx-chevron-right' ></i>
                    </span>
                </div>

                <div class="page-back">
                    <h2 class="title">Me contacter</h2>

                    <div class="contact-box">
                        <form action="" method="post" target="index.php">
                            <input type="email" name="email" class="field" placeholder="mail" required>
                            <input type="text" name="sujet" class="field" placeholder="sujet" required>
                            <textarea name="message" cols="30" rows="8" class="field" placeholder="Votre message" required></textarea>
                            <input type="submit" class="btn" value="Envoyer">  
                        </form>
                        
                        <?php
                            if (isset($_POST["message"]) && !empty($_POST["message"])){
                                $message = "Ce message vous a été envoyé via la page contact du site maximilienhedan.fr
                                Email : " . $_POST["email"] . "
                                Message : " . $_POST["message"];
                                
                                $mail = mail("max_jl@hotmail.com", $_POST["sujet"], $message, "From:contact@maximilienhedan.fr". "\r\n" . "Reply-to:" . $_POST["email"]);

                                // header('Location: index.php');
                                // exit();
                            }
                        ?>
                                    
                    </div> 
                
                    <span class="number-page">6</span>

                    <span class="nextprev-btn back" data-page="turn-3">
                        <i class='bx bx-chevron-left' ></i>
                    </span>

                    <a href="#" class="back-profile">
                        <p>Profil</p>
                        <i class='bx bxs-user'></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
           


    <script src="script.js"></script>

</body>

</html>