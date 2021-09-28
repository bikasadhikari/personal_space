<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <section class="cover-main" id="home">  <!--our full cover of the header-->
        <header>
            <nav class="nav-wrapper">  <!--It contains logo and menu items -->
              <div class="logo">
                    <a href="http://www.throttleup.live">
                      <img src="images/logo-white.png">
                    </a>
                </div>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My Photos</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Footer</a></li>
                </ul>
            </nav>
        </header>
        <div class="wrapper">
          <ul id="scene"
                  data-invert-x="false"
                  data-invert-y="false"
                  data-scalar-x="7"
                  data-scalar-y="7"
                  data-friction-x="0.1"
                  data-friction-y="0.1"
                  data-origin-x="0.5"
                  data-origin-y="0.5">
            <li class="layer name" data-depth="0.90">Bikas Adhikari</li>
            <li class="layer title" data-depth="0.50">Web Developer</li>
            <li class="layer btn btn-main" data-depth="0.30">
              <a href="#" class="portfolio-btn">View Portfolio</a>
              <a href="#" class="contact-btn">Contact Me</a>
            </li>
          </ul>
        </div>
    </section>

    <section class="masonry-grid" id="work">
      <h2 class="sub-title">My Portfolio</h2>
      <div class="grid">
          <div class="grid-item"><img src="images/one.jpg" alt=""></div>
          <div class="grid-item"><img src="images/two.jpg" alt=""></div>
          <div class="grid-item"><img src="images/three.jpg" alt=""></div>
          <div class="grid-item"><img src="images/four.jpg" alt=""></div>
          <div class="grid-item"><img src="images/five.jpg" alt=""></div>
          <div class="grid-item"><img src="images/six.jpg" alt=""></div>
          <div class="grid-item"><img src="images/seven.jpg" alt=""></div>
          <div class="grid-item"><img src="images/eight.jpg" alt=""></div>
          <div class="grid-item"><img src="images/nine.jpg" alt=""></div>
        <div class="grid-item"><img src="images/ten.jpg" alt=""></div>
      </div>
    </section>

    <section class="beating-heart" id="about">
      <div class="wrapper">
        <h2 class="sub-title">About Me</h2>
        <p>
          My Name is Bikas Adhikari. I'am Pursuing Bachelor Of Computer Applications. I Love Web Programming with PHP and SQL. I never give up on trying. My weakness is that I'am not so good in english and my communication skill is also not so decent but Iam trying to improve them. My hobbies are playing sports, learning new things, travelling and music.  
        </p>
        <span>I</span>
        <svg class="heart" viewBox="0 0 32 29.6">
        <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
          	c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"></path>
        </svg>
        <span>Me</span>
      </div>
    </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="scripts/masonry.js"></script>
  <script src="scripts/parallax.min.js"></script>
  <script src="scripts/main.js"></script>

  <script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
  </script>

</body>
</html>
