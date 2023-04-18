<?php

if(isset($_GET['submit'])){
  $name = $_GET['Name'];
$email = $_GET['Email'];
$message = $_GET['Message'];



$to = "kowsersojol@gmail.com";
$subject = "Message from Portfolio";
$txt = $message;
$headers = "From: $email" . "\r\n" .
"CC: somebodyelse@example.com";
  mail($to,$subject,$txt,$headers);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Personal Portfolio Website - Kowser Ahmed Sajol</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/k.png" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/5f34c23bb2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <h1 class="logo-name"><span>S</span>ajol.</h1>
                <ul id="sidemenu">
                    <li>
                        <a href="#header">Home</a>
                        <a href="#about">About</a>
                        <a href="#services">Services</a>
                        <a href="#portfolio">Portfolio</a>
                        <a href="#contact">Contact</a>
                        <i class="f fa-sharp fa-solid fa-xmark" onclick="closemenu()"></i>
                    </li>
                </ul>
                <i class="f fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Full stack Web Developer</p>
                <h1>
                    Hi, I'm <br />
                    <span>Kowser Ahmed Sajol</span><br />
                    from Bangladesh
                </h1>
            </div>
        </div>
    </div>

    <!----------------------ABOUT-------------------------------->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/Formal Photo(Sojol).jpg" alt="" />
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non est
                        sed modi odio aperiam necessitatibus maxime eos. Hic totam
                        officiis assumenda tenetur obcaecati deleniti fugit eveniet
                        possimus, libero alias quam.
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">
                            Skills
                        </p>
                        <p class="tab-links" onclick="opentab('experience')">
                            Experience
                        </p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li>
                                <span class="heads">Front-End Web Development</span><br />
                                Designing website using HTML, CSS, JavaScript, Bootstrap,
                                Vue.js, Angular.js
                            </li>
                            <li>
                                <span class="heads">Back-End Web Development</span><br />
                                Making a website using php Laravel.
                            </li>
                            <li>
                                <span class="heads">Mobile Application Development</span><br />
                                Building Android Apps using Java/Kotlin.
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li>
                                <span class="heads">Lead generation</span><br />
                                <span class="smu">From: january 2022, TO: Running, Duration: 13 months</span>
                                <br />
                                Finding emails, gather informations form websites.
                            </li>
                            <li>
                                <span class="heads">Wordpress Developer</span><br />
                                <span class="smu">From: january 2022, TO: Running, Duration: 13 months</span>
                                <br />
                                Making portfolio websites, contact page, about page,
                                customizing themes using wordpress.
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li>
                                <span class="heads">Green University Of Bangladesh, Mirpur, Dhaka</span><br />Dept:
                                CSE<br />
                                CGPA : 3.06 out of 4.00
                            </li>
                            <li>
                                <span class="heads">Kadam Rasul College, Nabiganj, Bandar, Narayanganj</span><br />Dept:
                                Science<br />
                                GPA : 3.42 out of 5.00
                            </li>
                            <li>
                                <span class="heads">BM Union High School, Bandar, Narayanganj</span><br />Dept:
                                Science<br />
                                GPA : 4.56 out of 5.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------SERVICES-------------------------------->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Front-End Web Development</h2>
                    <p>
                        I have a very good knowledge of front end developement. I have
                        made many pages using HTML, CSS and JavaScript, which made me
                        eligible for your tasks
                    </p>
                    <a href="#"></a>
                </div>
                <div>
                    <i class="fa-brands fa-laravel"></i>
                    <h2>Back-End Web Development</h2>
                    <p>
                        With a big project made for my universities final year project
                        with PHP and also some project with laravel, I believe I am the
                        perfect candidate for your project.
                    </p>
                    <a href="#"></a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>Mobile App Development</h2>
                    <p>
                        I have a very good knowledge of mobile app develpoement and I
                        already have an app published on <b> play Store.</b>
                    </p>
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------PORTFOLIO-------------------------------->
    <div id="portfolio">
        <div class="container">
            <div class="sub-title">My Work</div>
            <!-- Work list tab-1  -->

            <div class="work-list">
                <div class="work">
                    <img src="images/ourstory.jpg" alt="" />
                    <div class="layer">
                        <h3>Mobile App</h3>
                        <p>
                            Name: Turkish Drama - Our Story <br />
                            This is a mobile Application made by using java.
                        </p>
                        <a target="_blank" class="l_btn"
                            href="https://play.google.com/store/apps/details?id=com.sajoltech.bizimhikiye"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/icons8.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: "CHATRABASH" - To Let Management system <br />
                            This is a Web Application made by using HTML, CSS, JavaScript,
                            PHP, MySql. <br />
                        </p>
                        <div class="row">
                            <div class="column c">
                                <a target="_blank" class="l_btn"
                                    href="https://chatrabash.000webhostapp.com/chatrabash/index.php"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <div class="column c">
                                <a target="_blank" class="l_btn"
                                    href="https://github.com/KowserAhmedSajol/Chatrabash-To-let-management-System-_php"><i
                                        class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <img src="images/calculator.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: "Calculator" <br />
                            This is a Web Application made by using HTML, CSS, JavaScript,
                            JQuery.
                        </p>
                        <a target="_blank" class="l_btn" href="Projects/Calculator/index.html"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>

                <div class="work">
                    <img src="images/weather_card.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: Weather Card <br />
                            This is a Web Application to find out weather details and this
                            app is made by using HTML, CSS, JavaScript and API.
                        </p>
                        <a target="_blank" class="l_btn" href="Projects/WEATHER-CARD/index.html"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work list tab-1  -->
            <!-- Work list tab-2  -->

            <div class="work-list">
                <div class="work">
                    <img src="images/qr.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: QR Code Generator <br />
                            This is a Web Application made by using HTML, CSS, JavaScript
                            and QR code API.
                        </p>
                        <a target="_blank" class="l_btn"
                            href="https://play.google.com/store/apps/details?id=com.sajoltech.bizimhikiye"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/guessing_game.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: Guessing Game <br />
                            This is a Web Application made by using HTML, CSS, JavaScript .
                            <br />
                        </p>
                        <div class="row">
                            <div class="column c">
                                <a target="_blank" class="l_btn"
                                    href="https://chatrabash.000webhostapp.com/chatrabash/index.php"><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </div>
                            <div class="column c">
                                <a target="_blank" class="l_btn"
                                    href="https://github.com/KowserAhmedSajol/Chatrabash-To-let-management-System-_php"><i
                                        class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <img src="images/slide_show.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: Slide Show <br />
                            This is a Web Application made by using HTML, CSS, JavaScript,
                            JQuery.
                        </p>
                        <a target="_blank" class="l_btn" href="Projects/SLIDE_SHOW/index.html"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>

                <div class="work">
                    <img src="images/slider.png" alt="" />
                    <div class="layer">
                        <h3>Web Application</h3>
                        <p>
                            Name: Slider <br />
                            This is a Web Application to find out weather details and this
                            app is made by using HTML, CSS, JavaScript.
                        </p>
                        <a target="_blank" class="l_btn"
                            href="https://play.google.com/store/apps/details?id=com.sajoltech.bizimhikiye"><i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>

            <!-- /Work list tab-1  -->
            <a href="#" class="btn">See More</a>
        </div>
    </div>

    <!----------------------CONTACT-------------------------------->

    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i> kowsersojol@gmail.com</p>
                    <p><i class="fa-solid fa-phone-volume"></i> +880 1988858108</p>
                    <div class="social-icons">
                        <a target="_blank" href="https://www.facebook.com/KowserAhmedSajol"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/kowserahmedsajol/"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/kowser-ahmed-sajol-8386bb265/"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a target="_blank" href="https://github.com/KowserAhmedSajol"><i
                                class="fa-brands fa-github"></i></a>
                    </div>
                    <a href="images/Sojol_cv_R.pdf" download class="btn btn2">Download CV</a>
                </div>

                <div class="contact-right">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="Name" placeholder="Your Name" required />
                        <input type="email" name="Email" placeholder="Your Email" required />
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" name="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>
                Copyright Sajol, Made with <i class="fa-solid fa-heart"></i> by Sajol
            </p>
        </div>
    </div>

    <script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        sidemenu.style.right = "0";
    }

    function closemenu() {
        sidemenu.style.right = "-200px";
    }
    </script>
    <script>
    const scriptURL =
        "https://script.google.com/macros/s/AKfycbx-ENJDIZ9PHKL6SHK-1KWrSn4gabLnFLyoBcb_6kbXtb7KVSQJj0QD00DebcCFhe-Q/exec";
    const form = document.forms["submit-to-google-sheet"];
    const msg = document.getElementById("msg");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, {
                method: "POST",
                body: new FormData(form)
            })
            .then((response) => {
                msg.innerHTML = "Message Sent Successfully";
                setTimeout(function() {
                    msg.innerHTML = "";
                }, 5000);
                form.reset();
            })
            .catch((error) => console.error("Error!", error.message));
    });
    </script>
</body>

</html>