<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['login'])) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog MS</title>
    <link rel="icon" href="../images/icon.jpg">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
            <div class="logo"><a href="#">Bl<span>og</span></a></div>
            <ul class="menu">
                <li><a href="../http/logout.php" class="menu-btn">Home</a></li>
                <li><a href="#posts" class="menu-btn">Posts</a></li>
                <li><a href="#education" class="menu-btn">Education</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="./edu.php" class="menu-btn">Edu</a></li>
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

    <!-- static section start -->
    <section class="contact">
        <div class="max-width">
            <div class="contact-content">
                <div class="column right">
                    <div class="text">Add Static</div>
                    <form action="../http/static-s.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Table name" required name="tname" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="first inc" required name="codeone" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="first inc new" required name="codeonez" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="second inc" required name="codetwe" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="second inc new" required name="codetwez" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="thred inc" required name="codethree" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="thred inc new" required name="codethreez" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="one name" required name="onename" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="two name" required name="twename" autocomplete="off">
                            </div>
                            <div class="field name">
                                <input type="text" placeholder="three name" required name="threename" autocomplete="off">
                            </div>
                        </div>
                        <div class="button-area">
                                <button type="submit" name="submit">Add Static</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- add education section start -->
    <section class="contact">
        <div class="max-width">
            <div class="contact-content">
                <div class="column right">
                    <div class="text">Add Education</div>
                    <form action="../http/edu-s.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="icon" required name="icon" autocomplete="off">
                            </div>
                            <div class="field text">
                                <input type="text" placeholder="title" required name="title" autocomplete="off">
                            </div>
                            <div class="field email">
                                <input type="text" placeholder="post" required name="post" autocomplete="off">
                            </div>
                        </div>
                        <div class="button-area">
                                <button type="submit" name="submit">Add Education</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- add post section start -->
    <section class="contact">
        <div class="max-width">
            <div class="contact-content">
                <div class="column right">
                    <div class="text">Add post</div>
                    <form action="../http/post-s.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="icon" required name="icon" autocomplete="off">
                            </div>
                            <div class="field text">
                                <input type="text" placeholder="title" required name="title" autocomplete="off">
                            </div>
                            <div class="field email">
                                <input type="text" placeholder="post" required name="post" autocomplete="off">
                            </div>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Add Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php 
	    include "../http/conn-db.php";
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
                        <img src="../images/<?php echo $row['icon'];?>"></img>
                        <div class="text"><?php echo $row['title'];?></div>
                        <p><?php echo $row['post']?></p>
                        <a class="del-btn" href="../http/edu-s.php?delete=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php 
	    include "../http/conn-db.php";
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
                        <a class="del-btn" href="../http/post-s.php?delete=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                </div>
                <?php endwhile; ?>
               </div>
            </div>
        </div>
    </section>

    <?php 
	    include "../http/conn-db.php";
	    $sql = "SELECT * FROM contact";
	    $result = mysqli_query($conn, $sql);
	?>

    <!-- my contact massages section start -->
    <section class="posts" id="contact">
        <div class="max-width">
            <h2 class="title">my contact massages</h2>
            <div class="post-content">
            	<?php     while ($row = mysqli_fetch_array($result)) : ?>
                <div class="card">
                    <div class="box">
                        <p><?php echo $row['oname'];?></p>
                        <div class="text"><?php echo $row['oemail'];?></div>
                        <p><?php echo $row['osubject']?></p>
                        <p><?php echo $row['omessage']?></p>
                        <a class="del-btn" href="../http/contact-my.php?delete=<?php echo $row['id']; ?>">Delete</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://instagram.com/">MS+</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>


<?php }else{
	header("Location: ../page/login.php?error=text");
	exit();
}?>