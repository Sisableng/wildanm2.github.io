<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>I'am Wildan Maulana</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
        <ul class="menu">
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="#about" class="menu-btn">About</a></li>
            <li><a href="#services" class="menu-btn">Services</a></li>
            <li><a href="#skills" class="menu-btn">Skills</a></li>
            <li><a href="#teams" class="menu-btn">Teams</a></li>
            <li><a href="#contact" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
        </div>
    </nav>

    <!-- home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text1">Hello, My name is</div>
                <div class="text2">Wildan Maulana</div>
                <div class="text3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="image/profile.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'am Wildan and i'am a <span class="typing2"></span></div>
                    <p>I am currently studying graphic designer and I enjoy learning many things, including web design, front-end, and many more related to design and programming. I also like working in teams, because it allows me to gain new knowledge and insights.</p>
                <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">services me</h2>
            <div class="services-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur molestiae officia inventore itaque, illo dolores.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur molestiae officia inventore itaque, illo dolores.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur molestiae officia inventore itaque, illo dolores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Skills Section -->

<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">My Skills</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">My creative skills & expriences.</div>
                <p>"Imagination is more important than knowledge. Knowledge is limited, while imagination is as wide as the heavens and the earth."</p>
                <br>
                <p>- Albert Einstein</p>
                <a href="">Read more</a>
            </div>
            <div class="column right">
                <div class="text">Programming</div>
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>60%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>30%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Java Script</span>
                        <span>10%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>10%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Imitate</span>
                        <span>95%</span>
                    </div>
                    <div class="line imitate"></div>
                </div>
                <hr>
                <div class="text">Design</div>
                <div class="bars">
                    <div class="info">
                        <span>Adobe Photoshop</span>
                        <span>60%</span>
                    </div>
                    <div class="line ps"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Adobe Illustrator</span>
                        <span>65%</span>
                    </div>
                    <div class="line ai"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Adobe Lightroom</span>
                        <span>99%</span>
                    </div>
                    <div class="line lr"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Adobe xd</span>
                        <span>99%</span>
                    </div>
                    <div class="line xd"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->

<section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">My teams</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                    <img src="image/avatar.jpg" alt="">
                    <div class="text">Someone name</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="image/avatar.jpg" alt="">
                    <div class="text">Someone name</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="image/avatar.jpg" alt="">
                    <div class="text">Someone name</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="image/avatar.jpg" alt="">
                    <div class="text">Someone name</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->

<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in touch</div>
                <p>If there is a business or personal need, you can contact or visit me directly.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Wildan Maulana</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Addres</div>
                            <div class="sub-title">Bandung Jawa Barat, Indonesia</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title"><a href="mailto:irwildan8@gmail.com">irwildan8@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form action="mail.php" method="POST">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" id="name" name="name" placeholder="Name" tabindex="1" required>
                        </div>
                        <div class="field email">
                            <input type="email" id="email" name="email" placeholder="abc@gmail.com" tabindex="2" required>
                        </div>
                    </div>
                            <div class="field">
                                <input type="text" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" id="message" name="message" placeholder="Describe project..." tabindex="4" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" name="submit" tabindex="5">Send Message</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->

<footer>
    <span>Created By <a href="#">CodingNepal</a> | <span class="far fa-copyright"></span> 2020 All right reserved. | <span class="ft-right">Edited By <a href="#">Wildan Maulana</a></span></span>
</footer>

<script src="script.js"></script>
</body>
</html>