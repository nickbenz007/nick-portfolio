<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Responsive Design</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <a href="#" class="logo">Portfolio</a>
        <div class="toggle" onclick="togglemenu();"></div>
        <ul class="menu">
            <li>
                <a href="#Home" onclick="togglemenu();">Home</a>
            </li>
            <li>
                <a href="#About" onclick="togglemenu();">About</a>
            </li>
            <li>
                <a href="#Services" onclick="togglemenu();">Services</a>
            </li>
            <li>
                <a href="#Work" onclick="togglemenu();">Work</a>
            </li>
            <li>
                <a href="#Testimonial" onclick="togglemenu();">Testimonial</a>
            </li>
            <li>
                <a href="#Contact" onclick="togglemenu();">Contact</a>
            </li>
        </ul>
    </header>

    <section class="banner" id="Home">
        <div class="textbx">
            <h2>Hello, I am <br> <span>Nick Benz</span></h2>
            <h3>I am a Front End Web Developer</h3>
            <a href="#Home" class="btn">About Me</a>
        </div>
    </section>

    <section class="about" id="About">
        <div class="heading">
            <h2>About Me</h2>
        </div>
        <div class="content">
            <div class="contentBx w50">
                <h3>Hello, I am a Front End Developer</h3>
                <p>Being a Front End developer with a broad and versatile coding skills set. <br><br>I quickly helps
                    startups and enterprises with prototypes and ideas by efficiently building those things into
                    reality.<br><br> My expertise lies in building apps, scalable microservices, web
                    crawlers, React APIs, infrastructure modeling, deployments. I am the go-to
                    any of your development needs.
                </p>
            </div>

            <div class="w50">
                <img src="./img/about-content.jpg" class="img">
            </div>
        </div>
    </section>
    <section class="services" id="Services">
        <div class="heading white">
            <h2>Our Services</h2>
            <p>Complete Website Design BackEnd + Database
            </p>
        </div>
        <div class="content">
            <div class="servicesBx">
                <img src="./png/timeline.png">
                <h2>Web Design</h2>
                <p>Determining the structure and design of web pages.</p>
            </div>

            <div class="servicesBx">
                <img src="./png/web-development.png">
                <h2>Web Development</h2>
                <p>Developing features to enhance the user experience.</p>
            </div>

            <div class="servicesBx">
                <img src="./png/html.png">
                <h2>HTML</h2>
                <p>Proficiency with HTML & HTML5</p>
            </div>

            <div class="servicesBx">
                <img src="./png/css.png">
                <h2>CSS</h2>
                <p>Proficiency with CSS, Less, Sass, Scss</p>
            </div>

            <div class="servicesBx">
                <img src="./png/bootstrap.png">
                <h2>Bootstrap</h2>
                <p>Understanding of Bootstrap and Classes</p>
            </div>

            <div class="servicesBx">
                <img src="./png/java-script.png">
                <h2>JavaScript</h2>
                <p>Proficiency with JavaScript and jQuery.</p>
            </div>

        </div>
    </section>

    <section class="work" id="Work">
        <div class="heading">
            <h2>Our Latest Work</h2>

        </div>
        <div class="content">
            <div class="workBx">
                <img src="./img/pro-1.jpg" alt="">
            </div>
            <div class="workBx">
                <img src="./img/pro-2.jpg" alt="">
            </div>
            <div class="workBx">
                <img src="./img/pro-3.jpg" alt="">
            </div>
            <div class="workBx">
                <img src="./img/pro-4.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="testimonial" id="Testimonial">
        <div class="heading">
            <h2>Testimonial</h2>
            <p>Our customer remarks which is a live proof for working with some professional people.
            </p>
        </div>
        <div class="content">
            <div class="testimonialBx">
                <p>
                    I had a really good experience while working on one of my project and he is really
                    hard working guy who can tolerate all kind of hard situation during the period as
                    I had many troubles that i faced and he is the guy to contact and resolve the matter.
                </p>
                <h3>Somone Famous<br><Span>Creative Designer</Span></h3>
            </div>
            <div class="testimonialBx">
                <p>
                    I have found only this guy in market where I an trust and I can feel that he would
                    proceed my work further than delay.
                </p>
                <h3>Somone Famous<br><Span>Creative Designer</Span></h3>
            </div>
        </div>
    </section>

    <section class="contact" id="Contact">
        <div class="heading white">
            <h2>Contact Us</h2>
            <p><?php
                $msg = "";
                if (isset($_GET['error'])) {
                    $msg = "Please fill all the required fields";
                    echo '<div class="alert alert-danger">' . $msg . '</div>';
                }
                if (isset($_GET['success'])) {
                    $msg = "Your Message has been sent successfuly";
                    echo '<div class="alert alert-success">' . $msg . '</div>';
                }
                ?></p>
        </div>
        <div class="content">
            <div class="contactInfo">
                <h3>Contact Info</h3>
                <div class="contactInfoBx">
                    <div class="box">
                        <div class="icon"><i class="fas fa-map-marker"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>4188 West Side Avenue <br>Little Ferry NJ<br>USA</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="text">
                            <h3>Mobile</h3>
                            <p>+92-317-9658-231</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>nickbenz007@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formBx">
                <form action="process.php" method="POST">
                    <h3>Message Me</h3>
                    <input type="text" name="fullname" placeholder="Full Name">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="msg" placeholder="Your Message"></textarea>
                    <input type="submit" name="send_message">
                </form>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>Copyright © 2021 Nick Benz. All Right Reserved</p>
    </div>

    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        function togglemenu() {
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('.menu');
            menuToggle.classList.toggle('active')
            menu.classList.toggle('active')
        }
    </script>


</body>

</html>