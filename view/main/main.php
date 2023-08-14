<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- box icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./core/vendor/sweet_alert_2/sweetalert2.min.css">
  <link rel="stylesheet" href="./core/css/style.css">
</head>
<body>
  <header class="header">
    <a class="logo">Jaime.<span class="animate" style="--i:1;"></span></a>
  
    <div class='bx bx-menu' id="menu-icon"><span class="animate" style="--i:2;"></span></div>
  
    <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#education">Education</a>
      <a href="#skills">Skills</a>
      <a href="#contact">Contact</a>
  
      <span class="active-nav"></span>
      <span class="animate" style="--i:2;"></span>
    </nav>
  </header>
  
  <!-- home section design -->
  <section class="home show-animate" id="home">
    <div class="home-content">
      <h1>Hi, I'm <span>Jaime Abad</span><span class="animate" style="--i:2;"></span></h1>
      <div class="text-animate">
        <h3>Software Developer</h3>
        <span class="animate" style="--i:3;"></span>
      </div>
      <p>Curious, creative, with a great desire to learn, to improve myself and show what I am worth.<span class="animate" style="--i:4;"></span></p>
      <div class="btn-box">
        <a class="btn projects" onclick="swAlert()">Projects</a>
        <a href="./assets/docs/cv_jaime_abad_garcia.pdf" target="_blank" class="btn">CV</a>
        <span class="animate" style="--i:5;"></span>
      </div>
    </div>
  
    <div class="home-sci">
      <a href="https://github.com/PiscisXalock" target="_blank"><i class='bx bxl-github'></i></a>
      <a href="#"><i class='bx bxl-linkedin'></i></a>
      <a href="#"><i class='bx bxl-youtube'></i></a>
      <span class="animate" style="--i:6;"></span>
    </div>
  
    <div class="home-imgHover"></div>
    <span class="animate home-img" style="--i:7;"></span>
  </section>
  
  <!-- about section design -->
  <section class="about" id="about">
    <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>
  
    <div class="about-img">
      <img src="./assets/img/profile_deg_2.png" alt="">
      <span class="circle-spin"></span>
      <span class="animate scroll" style="--i:2;"></span>
    </div>
  
    <div class="about-content">
      <h3>Jaime Abad García<span class="animate scroll" style="--i:3;"></span></h3>
      <p>I am 24 years old and I am from Spain. I live surrounded by giants, the mills of Campo de Criptana. A town with a lot of history and art.<span class="animate scroll" style="--i:4;"></span></p>
  
      <div class="btn-box btns">
        <a class="btn" onclick="swAlert()" style="cursor: pointer;">Read More</a>
        <span class="animate scroll" style="--i:5;"></span>
      </div>
    </div>
  </section>
  
  <!-- education section design  -->
  <section class="education" id="education">
    <h2 class="heading">My <span>Journey</span><span class="animate scroll" style="--i:1;"></span></h2>
  
    <div class="education-row">
      <div class="education-column">
        <h3 class="title">Education<span class="animate scroll" style="--i:2;"></span></h3>
  
        <div class="education-box">
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Course - School</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Course - School</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Course - School</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:3;"></span>
        </div>
      </div>
  
      <div class="education-column">
        <h3 class="title">Experience<span class="animate scroll" style="--i:5;"></span></h3>
  
        <div class="education-box">
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Occupation - Company</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Occupation - Company</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <div class="education-content">
            <div class="content">
              <div class="year"><i class='bx bxs-calendar'></i> year1 - year2</div>
              <h3>Occupation - Company</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, molestiae neque facilis ipsa voluptate necessitatibus deleniti. Deserunt, mollitia eaque libero necessitatibus voluptas explicabo inventore, ex quas eius beatae non? Alias!</p>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:6;"></span>
        </div>
      </div>
    </div>
  </section>
  
  <!-- skills section design -->
  <section class="skills" id="skills">
    <h2 class="heading">My <span>Skills</span><span class="animate scroll" style="--i:1;"></span></h2>
  
    <div class="skills-row">
      <div class="skills-column">
        <h3 class="title">Coding Skills<span class="animate scroll" style="--i:2;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>HTML <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>CSS <span>65%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>JS <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>JQuery <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>XML <span>60%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>JSON <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>PHP <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>C# <span>80%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>C++ <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Python <span>20%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Java <span>60%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>TS <span>80%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>SQL <span>85%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Assembler <span>10%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Bash <span>10%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Markdown <span>100%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:3;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Frameworks, APIs & Environments<span class="animate scroll" style="--i:5;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Angular <span>85%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>React <span>10%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Symfony <span>60%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>REST <span>95%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Bootstrap <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Material UI <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Material Design <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Node.js <span>75%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>MySQL <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Mariadb <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:6;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">IDEs that I use<span class="animate scroll" style="--i:8;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>VS Code <span>100%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Sublime Text <span>100%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>QT <span>65%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>PyCharm <span>10%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Eclipse <span>35%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>NetBeans <span>50%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:9;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Web Content Management<span class="animate scroll" style="--i:11;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Drupal <span>70%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:12;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Game Engines<span class="animate scroll" style="--i:14;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Unity <span>80%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Unreal Engine <span>10%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:15;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Version Control<span class="animate scroll" style="--i:17;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Github <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Git <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Plastic SCM <span>30%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:18;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Professional Skills<span class="animate scroll" style="--i:20;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Web Developer <span>90%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Software Developer <span>50%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Game Developer <span>85%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Ethical Hacking <span>5%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:21;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Art Skills<span class="animate scroll" style="--i:23;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>Model 3D <span>20%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>2D Art <span>5%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Pixel Art <span>5%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Concept Art <span>5%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:24;"></span>
        </div>
      </div>
  
      <div class="skills-column">
        <h3 class="title">Language Skills<span class="animate scroll" style="--i:26;"></span></h3>
  
        <div class="skills-box">
          <div class="skills-content">
            <div class="progress">
              <h3>English <span>75%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>Spanish <span>100%</span></h3>
              <div class="bar"><span></span></div>
            </div>
  
            <div class="progress">
              <h3>French <span>5%</span></h3>
              <div class="bar"><span></span></div>
            </div>
          </div>
  
          <span class="animate scroll" style="--i:27;"></span>
        </div>
      </div>
    </div>
  </section>
  
  <!-- contact section design -->
  <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span><span class="animate scroll" style="--i:1;"></span></h2>
  
    <form action="#">
      <div class="input-box">
        <div class="input-field">
          <input type="text" placeholder="Full Name" required>
          <span class="focus"></span>
        </div>
  
        <div class="input-field">
          <input type="text" placeholder="Email Address" required>
          <span class="focus"></span>
        </div>
  
        <span class="animate scroll" style="--i:3;"></span>
      </div>
  
      <div class="input-box">
        <div class="input-field">
          <input type="numeric" placeholder="Mobile Number" required>
          <span class="focus"></span>
        </div>
  
        <div class="input-field">
          <input type="text" placeholder="Email Subject" required>
          <span class="focus"></span>
        </div>
  
        <span class="animate scroll" style="--i:5;"></span>
      </div>
  
      <div class="textarea-field">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <span class="focus"></span>
  
        <span class="animate scroll" style="--i:7;"></span>
      </div>
  
      <div class="btn-box btns">
        <button type="submit" class="btn" onclick="swAlert()">Submit</button>
  
        <span class="animate scroll" style="--i:9;"></span>
      </div>
    </form>
  </section>
  
  <!-- footer design -->
  <footer class="footer">
    <div class="footer-text">
      <p>Powered by <span>Piscis Xalock</span></p>
  
      <span class="animate scroll" style="--i:1;"></span>
    </div>
  
    <div class="footer-iconTop">
      <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
  
      <span class="animate scroll" style="--i:3;"></span>
    </div>
  </footer>

  <script src="./core/vendor/sweet_alert_2/sweetalert2.all.min.js"></script>
  <script src="./core/js/script.js"></script>
</body>
</html>