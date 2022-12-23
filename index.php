<?php 

$conn = mysqli_connect("localhost","root","","dentist") or die("connection failed");

if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $number =$_POST["number"];
    $date =$_POST["date"];
    
    $query = "INSERT into contact(name,email,number,date)
     VALUES('$name','$email','$number','$date')";

    if($conn->query($query) ==true){
        $message[] = "Apointment added successfully!";
    }else{
        $message[] = "Apointment Faield!";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentiest Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stlyle.css">
</head>
<body>
    
    <!-- header section Start -->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="#home" class="logo">dental<span>Care.</span></a>

                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#servieces">Servieces</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn link-small">Make Appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- End header section  -->

    <!-- Start home section -->
    <section id="home" class="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">

                <div class="content">
                    <h3>Let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quis pariatur, fugit vero blanditiis sapiente.</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>

            </div>

        </div>

    </section>
    <!-- End home section -->

    <!-- Start about section -->
    <section id="about" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class=" image col-md-6">
                    <img src="./images/about-img.jpg" class="w-100 mb-5 mb-md-0">
                </div>
                <div class="content col-md-6">
                    <span>About Us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus id cumque magnam libero possimus ex vero placeat quibusdam! Voluptatum ipsa harum consequatur eaque sed ullam delectus enim quo excepturi doloremque.</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->


    <!-- Start secrvice section -->
    <section class="servieces" id="servieces">
        <h1 class="heading">Our servieces</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg">
                <h3>Alignment specialest</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium.</p>
            </div>
            
        </div>
    </section>
    <!-- End secrvice section -->


    <!-- Start process section -->
    <section class="process">
        <h1 class="heading">Work process</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmatic dentestry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, accusantium?</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Cosmatic dentestry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, accusantium?</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Cosmatic dentestry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, accusantium?</p>
            </div>

        </div>
    </section>
    <!-- End process section -->


    <!-- Start Reviews section -->
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex exercitationem soluta voluptatibus animi id nobis, molestiae ipsam accusamus accusantium adipisci!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ramez</h3>
                <span>Satisfied clients</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex exercitationem soluta voluptatibus animi id nobis, molestiae ipsam accusamus accusantium adipisci!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ramez</h3>
                <span>Satisfied clients</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex exercitationem soluta voluptatibus animi id nobis, molestiae ipsam accusamus accusantium adipisci!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ramez</h3>
                <span>Satisfied clients</span>
            </div>

        </div>
    </section>
    <!-- End Reviews section -->


    <!-- Start Section cotnact -->
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

            <?php 
                if(isset($message)){
                    foreach($message as $message){
                        echo "<p class='message'>". $message ."</p>";
                    }
                }
            ?>

            <span>your name</span>
            <input type="text" class="box" name="name" placeholder="Enter Your Name" required>
            <span>your email</span>
            <input type="email" class="box" name="email" placeholder="Enter Your Email" required>
            <span>your number</span>
            <input type="number" class="box" name="number" placeholder="Enter Your number" required>
            <span>appointment data</span>
            <input type="datetime-local" class="box" name="date" required>
            <input type="submit" name="submit" value="Make Appointment" class="link-btn">
        </form>

    </section>
    <!-- End Section cotnact -->


    <!-- Start Section footer -->
    <section class="footer">
        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+970-599096729</p>
                <p>+970-599096729</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Palestine-Gaza Strip</p>
                <p>Nusirate camp</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Opening Hour</h3>
                <p>From 8:00 AM TO 8:00 PM</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>ramez199586@gmail.com</p>
            </div>
            
        </div>
        
        <div class="create">
                Copyright &copy; by <span>Ramez Abu Hamda</span>
                <?php echo date("Y") ?>
            </div>
    </section>
    
    
    
    
    <!-- End Section footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>