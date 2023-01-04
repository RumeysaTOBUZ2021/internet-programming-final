<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="navbar">
        <a href="Anasayfa.php"><img src="./images/era-car-kopya.jpg" alt="logo"/></a>
        <nav>
            <ul>
                <li><a href="Anasayfa.php">Anasayfa</a></li>
                <li><a href="website.php">Hizmetlerimiz</a></li>
                <li><a href="Hakkımızda.php">Hakkımızda</a></li>
                <li><a href="İletişim.php">İletişim</a></li>
                <li><a href="">
                    <i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </nav>
    </div>

        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>Giriş Yap</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email-id" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>Kayıt Ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>