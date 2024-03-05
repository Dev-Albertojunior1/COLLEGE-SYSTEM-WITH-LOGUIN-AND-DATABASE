<?php

if(isset($_POST['submit']))
{
// print_r('Name: ' . $_POST['nome']);
// print_r('<br>');
// print_r('Email: ' . $_POST['email']);
// print_r('<br>');
// print_r('Student Id' . $_POST['id']);
// print_r('<br>');
// print_r('Gender: ' . $_POST['gender']);
// print_r('<br>');
// print_r('Date of Birth: ' . $_POST['birth']);
// print_r('<br>');
// print_r('Password: ' . $_POST['Password']);

include_once('config.php');

$name = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];
$gender =  $_POST['gender'];
$date = $_POST['birth'];
$password = $_POST['Password'];

$result = mysqli_query($conexao, "INSERT INTO users(name, email,id, gender, birth, password) 
VALUES ('$name', '$email', '$id', '$gender', '$date', '$password')"); 

header('Location: Loguinpage.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="cad-css.css">
    <link rel="shortcut icon" type="x-icon" href="Imagens/E-NAZ.png">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="cadastro.php"  method="post"  id="registrationForm">
            <fieldset>
                <legend><b>Africa Nazarene University</b></legend>
                <br>

                <div id="loginlogo" class="login-logo">
                    <img id="logoimage" src="Imagens/E-NAZ.png" class="img-fluid" alt="Africa Nazarene University:      E-Learning Portal"/>
                </div>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                    <label for="nome" class="labelInput">Complete Name</label>
                </div>

                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="id" id="id" class="inputUser" required>
                    <label for="id" class="labelInput">Student Id</label>
                </div>
                <p>Gender:</p>
                <input type="radio" id="feminino" name="Gender" value="feminino" required>
                <label for="feminino">Female</label>
                <br>
                <input type="radio" id="masculino" name="gender" value="masculino" required>
                <label for="masculino">Male</label>
                <br>
                <input type="radio" id="outro" name="Gender" value="outro" required>
                <label for="outro">Other</label>
                <br><br>
                <label for="data_nascimento"><b>Date of Birth:</b></label>
                <input type="date" name="birth" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="Password" id="cidade" class="inputUser" required>
                    <label for="password" class="labelInput">Password</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="REGISTER">
            </fieldset>
        </form>
    </div>
    
</body>
</html>

  


