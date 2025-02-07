<?php include_once("header.php");?>
    <style>
        h1{
            text-align: center;
            font-family: cursive;
            color: rgb(43, 33, 78);
        }
        h2{
            color: rgb(143, 78, 35);
        }
        h3{
            font-weight: bold;
            color: rgb(98, 77, 110);
        }
        form{
            margin-top: 40px;
        }
        section{
            display: flex;
            justify-content: space-between;
            text-align: justify;
            gap: 10%;
            padding: 0 20px;
            margin-top: 150px;
        }
        section .left{
            border: solid 1px black;
            padding: 10px;
            border-radius: 25px;
            box-shadow: 5px 5px 10px;
            transition: transform 0.3s ease;
        }
        section .left:hover{
            transform: scale(1.1);
        }
        section .middle{
            border: solid 1px black;
            padding: 10px;
            border-radius: 25px;
            box-shadow: 5px 5px 10px;
            transition: transform 0.3s ease;
        }
        section .middle:hover{
            transform: scale(1.1);
        }
        section .right{
            border: solid 1px black;
            padding: 10px;
            border-radius: 25px;
            box-shadow: 5px 5px 10px;
            transition: transform 0.3s ease;
        }
        section .right:hover{
            transform: scale(1.1);
        }
        button{
            width: 150px;
            height: 40px;
            border-radius: 20px;
            font-size: 15px;
            color: white;
            background-color: rgb(162, 144, 172);
        }
        button:hover{
            color: black;
            background: transparent;
        }
        footer{
            padding: 30px;
            background: url(foot.png);
            background-size: cover;
            height: 360px;
            margin-top: 200px;
        }
        footer ul{
            list-style-type: none;
        }
        footer ul i{
            font-size: 20px;
        }
        footer  li{
            font-size: 20px;
            list-style-type: none;
        }
        #fb{
            color: blue;
        }
        #insta{
            color: rgb(221, 109, 75);
        }
        #what{
            color: green;
        }
        #phone{
            color: rgb(161, 82, 151);
        }
        #mail{
            color: black;
        }
        footer p{
            text-align: center;
            font-size: 20px;
        }
        aside{
            display: flex;
            gap: 10%;
        }
    </style>
    <form>
        <h1>Welcome to our website</h1>
    </form>
    <section>
        <div class="left">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis non laudantium, earum quibusdam repellat nihil nemo cumque harum rerum totam culpa ipsum nulla dolorem consectetur quia? Minima rem fugiat assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sapiente deserunt minima assumenda itaque laboriosam pariatur exercitationem dolore, magni</p>
            <button>View more</button>
        </div>
        <div class="middle">
            <h3>Criteria</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis non laudantium, earum quibusdam repellat nihil nemo cumque harum rerum totam culpa ipsum nulla dolorem consectetur quia? Minima rem fugiat assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sapiente deserunt minima assumenda itaque laboriosam pariatur exercitationem dolore, magni</p>
            <button>View more</button>
        </div>
        <div class="right">
            <h3>Recommandation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis non laudantium, earum quibusdam repellat nihil nemo cumque harum rerum totam culpa ipsum nulla dolorem consectetur quia? Minima rem fugiat assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sapiente deserunt minima assumenda itaque laboriosam pariatur exercitationem dolore, magni</p>
            <button>View more</button>
        </div>
    </section>
    <footer>
        <aside>
            <div class="gauche">
                <h2>Contact</h2>
                <br>
                <ul>
                    <li><i class="fab fa-facebook" id="fb"></i>  Crud Mada</li>
                    <li><i class="fab fa-instagram" id="insta"></i>  Crud25mad</li>
                    <li><i class="fab fa-whatsapp" id="what"></i>  032 597 31 48</li>
                    <li><i class="fas fa-phone-alt" id="phone"></i>  +261 33 041 66 14</li>
                    <li><i class="fas fa-envelope" id="mail"></i>  crudmada25@gamil.com</li>
                </ul>
            </div>
            <div class="milieu">
                <h2>Offer</h2>
                <br>
                <li>Car insurance</li>
                <li>Home insurance</li>
                <li>Hobby insurance</li>
                <li>Savings & retirement solution</li>
                <li>Banking and credit solution</li>
            </div>
            <div class="droite">
                <h2>Service</h2>
                <br>
                <li>Accompaniment</li>
                <li>Portfolio</li>
                <li></li>
            </div>
        </aside>
        <br>
        <br>
        <br>
        <p>Site created by CRUD &copy 2025</p>
    </footer>
</body>
</head>