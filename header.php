<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="create.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.css">
    <title>Crud</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: rgb(204, 200, 200);
        }
        header{
            background: url(backin.jpg);
            background-size: cover;
        }
        .navbar ul li img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .navbar ul li a{
            text-decoration: none;
            font-size: 30px;
            font-family: monospace;
            color: black;
        }
        .navbar ul li a i{
            font-size: 35px;
        }
        .navbar ul li a:hover{
            color: brown;
        }
        .navbar ul{
            list-style-type: none;
            align-items: center;
            display: flex;
            gap:10%;
            padding: 0 20px ;
        }
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li>
                    <img src="logo.png" alt="">    
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="detail.php">Employees details</a></li>
                <li><a href="create.php">Add new</a></li>
                <li><a href="#"><i class="fas fa-user-alt"></i></a></li>
            </ul>
        </nav>
    </header>