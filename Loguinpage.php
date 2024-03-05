<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Nazarene University</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" type="x-icon" href="Imagens/Screenshot (240).png">
  

</head>
<body>
    <div>
        <header class="J">
      
            <div class="cabecalho-link" >
                <li class="hom" id="hh"> 
                    <a href="#" class="cor" ><b>HOME</b></a>
                </li>
                <li class="Faculty">
                    <a href="#"><b>Faculty Portal</b></a>
                </li>
                <li class="Student">
                    <a href="#"><b>Student Portal</b></a>
                </li>
                <li class="Contact">
                    <a href="#"><b>Contact</b></a>
                </li>

            </div>
        </header>

        <div class="wrapper">
            <form action="testLoguin.php" method="post">
    
                <div id="loginlogo" class="login-logo">
                    <img id="logoimage" src="Imagens/E-NAZ.png" class="img-fluid" alt="Africa Nazarene University:      E-Learning Portal"/>
                </div>
    
                <div class="input-box">
                    <input type="email" name="email" id="email" style="color: black;" placeholder="ANU UserName" required>
                    <i class='bx bxs-user'></i>
                </div>
    
                <div class="input-box">
                    <input type="password" name="password" style="color: black;" placeholder="ANU Password"
                    required>
                    <i class='bx bxs-lock' ></i>
                </div>
     
                <div class="remember-forgot">
                    <label class="rem"><input type="checkbox" >Remember me</label>
                    <a href="#" class="forg">Forgot password?</a>
                </div>
    
                <!-- <button type="button" class="btn" > <a href="Main.html" class="corbtn">Login to eNaz</a> </button> -->
                <input type="submit" name="submit" class="btn" value="Login to eNaz" >
                <div class="register-link">
                    <p>Dont You Have an Account? <a href="cadastro.php">Register</a></p>
                </div>
            </form>
        </div>    

        
        

    </div>

    
</body>
</html>