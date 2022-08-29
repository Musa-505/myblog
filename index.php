<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog MS</title>
    <link rel="icon" href="./images/icon.jpg">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./dist/charts.min.css">
        <style>
          .container {
            max-width: 900px;
            margin: 0 auto;
          }
          .examples {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 150px;
          }
          h1, h2, h3, h4, h5, h6 {
            text-align: center;
            text-decoration: underline;
            margin: 1.5rem auto;
          }
          h1 {
            font-size: 3rem;
          }
          h2 {
            font-size: 2.5rem;
            margin-top: 10rem;
          }
          h3 {
            font-size: 2rem;
          }
          h4 {
            font-size: 1.5rem;
          }
          p {
            text-align: center;
          }
          code {
            background-color: #ffecef;
            padding: 5px;
          }
          .stacked td {
            --color-1: rgba(21, 197, 109, 0.788);
            --color-2: rgba(110, 67, 6, 0.767);
            --color-3: rgba(255, 50, 50, 0.5);
        }
        </style>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Bl<span>og</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#posts" class="menu-btn">Post</a></li>
                <li><a href="#education" class="menu-btn">Education</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="./page/login.php" class="menu-btn">Login</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Musa Aldanazar</div>
                <!-- <div class="text-3">And I'm a</div> -->
                <a href="#about">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="./images/second.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Musa and I'm a</div>
                    <p>18 year's old.</p>
                    <a href="#">Summary</a>
                </div>
            </div>
        </div>
    </section>

    <!-- code -->
    
    <table class="charts-css line show-labels show-data-on-hover show-primary-axis show-data-axes multiple" style="height: 200px;">
        <caption>Years Compared</caption>
        <thead>
          <tr>
            <th>Year</th>
            <th>Progress 1</th>
            <th>Progress 2</th>
            <th>Progress 3</th>
            <th>Progress 4</th>
            <th>Progress 5</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2000</th>
            <td style="--start:0.0; --size: 0.1;"> <span class="data"> 1 </span> </td>
            <td style="--start:0.0; --size: 0.1;"> <span class="data"> 1 </span> </td>
            <td style="--start:0.0; --size: 0.1;"> <span class="data"> 1 </span> </td>
          </tr>
          <tr>
            <th scope="row">2010</th>
            <td style="--start:0.1; --size: 0.2;"> <span class="data"> 2 </span> </td>
            <td style="--start:0.1; --size: 0.1;"> <span class="data"> 1 </span> </td>
            <td style="--start:0.1; --size: 0.3;"> <span class="data"> 3 </span> </td>
          </tr>
          <tr>
            <th scope="row">2020</th>
            <td style="--start:0.2; --size: 0.5;"> <span class="data"> 5 </span> </td>
            <td style="--start:0.1; --size: 0.2;"> <span class="data"> 2 </span> </td>
            <td style="--start:0.3; --size: 0.4;"> <span class="data"> 4 </span> </td>
          </tr>
        </tbody>
      </table>

    <?php 
        include "./http/conn-db.php";
        $sql = "SELECT * FROM post";
        $result = mysqli_query($conn, $sql);
    ?>
    <!-- posts section start -->
    <section class="posts" id="posts">
        <div class="max-width">
            <h2 class="title">My posts</h2>
            <div class="post-content">
                <?php     while ($row = mysqli_fetch_array($result)) : ?>
                <div class="card">
                    <div class="box">
                        <img src="./images/<?php echo $row['icon'];?>"></img>
                        <div class="text"><?php echo $row['title'];?></div>
                        <p><?php echo $row['post']?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            </div>
        </div>
    </section>

    <?php 
	    include "./http/conn-db.php";
	    $sql = "SELECT * FROM edu";
	    $result = mysqli_query($conn, $sql);
	?>

    <!-- education section start -->
    <section class="education" id="education">
        <div class="max-width">
            <h2 class="title">Education</h2>
            <div class="edu-content">
            <?php     while ($row = mysqli_fetch_array($result)) : ?>
                <div class="card">
                    <div class="box">
                        <img src="../images/<?php echo $row['icon'];?>"></img>
                        <div class="text"><?php echo $row['title'];?></div>
                        <p><?php echo $row['post']?></p>
                    </div>
                </div>
                <?php endwhile; ?>
               </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Aldanazar Musa</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Kazakhstan, Almaty</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">musaaldanazarov@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="./http/contact-my.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="oname" >
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="oemail" >
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="osubject" >
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="omessage" ></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://instagram.com/">MS+</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>
