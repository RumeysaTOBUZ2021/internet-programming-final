<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d755b7edb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="#"><img src="./images/" alt="logo"/></a>
        <nav>
            <ul>
                <li><a href="Anasayfa.php">Anasayfa</a></li>
                <li><a href="website.php">Hizmetlerimiz</a></li>
                <li><a href="Hakkımızda.php">Hakkımızda</a></li>
                <li><a href="İletişim.php">İletişim</a></li>
                <li><a href="loginandregister.php">
                    <i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <section id="contact">
            <div class="contact-area">
                <div class="cont-left">
                    <div class="cont-top">
                    <div class="cont-element">
                            <i class="far fa-map"></i>
                            <a href="Kütahya /Türkiye">Kütahya /Türkiye</a>
                        </div>
                        <div class="cont-element">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:rumeysa43@gmail.com">rumeysa43@gmail.com</a>
                        </div>
                        <div class="cont-element">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+90 512 345 6789">+90 512 345 6789</a>
                        </div>
                    </div>
                    <div class="cont-bottom">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
                        <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="#"><i class="fab fa-instagram"></i></a> 
                        <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                    </div>
                </div>
                <div class="cont-right">
                    <form action="database.php" method="post">
                        <input type="text" name="text" id="text" placeholder="İsim">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <select id="mwfb83ac2222081" name="subjectDropdown" class="mwf-select mwf-multiple " data-mwf-id="mwfb83ac2222081">
                        <option id="mwf9b1ed98f5b65_TR1174478" data-mwf-value="Talep" data-mwf-label="Talep" value="Talep">Talep</option>
                        <option id="mwfc449354abe66_TR1174478" data-mwf-value="Şikayet" data-mwf-label="Şikayet" value="Şikayet">Şikayet</option>
                        <option id="mwf35739b0d06eb_TR1174478" data-mwf-value="Öneri" data-mwf-label="Öneri" value="Öneri">Öneri</option>
                        <option id="mwf935477e8c623_TR1174478" data-mwf-value="Memnuniyet" data-mwf-label="Memnuniyet" value="Memnuniyet">Memnuniyet</option>                    
                        </select>
                        <textarea name="message" id="message" rows="10" placeholder="Mesaj"></textarea>
                        <button>Gönder</button>
                    </form>
                </div>
            </div>
</div>        
    </section>
</body>
</html>