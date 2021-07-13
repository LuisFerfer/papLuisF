<?php
include_once("includes/body.inc.php");
top();

?>
<header id="header">
    <h1><a href="indexing.php"><img src="images/vermopreto.png"></a></h1>
    <nav id="nav">
        <ul> <a href="generic.php" ><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="genericingles.php" ><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                    <li><a href="indexing.php" style="color: black">Home</a></li>
                    <li><a href="genericingles.php" style="color: black">Other Game Modes</a></li>
                    <!--<li><a href="elements.html">Elements</a></li>-->
                    <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="perfilingles.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                        <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Logout</button> </li>
                    <?php } else{ ?>
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Sign Up</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Login</button></a></li>
                        <?php
                    }
                    ?>
        </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h2 style="margin-left: 780px;">Other Game Modes</h2>
<br>
<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="courses-thumb courses-thumb-secondary">

                    <div style="margin-left: 130px;" class="courses-detail">
                        <h3 style="margin-left: 27px;"><a href="infinitoing.php">Competitive Mode</a></h3>
                        <div class="courses-top">
                            <div class="courses-image">
                                <a href="infinitoing.php"><img src="images/trophy.png" alt=""></a>
                            </div>
                        </div>
                        <br><p></p>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-4">
                <div class="courses-thumb courses-thumb-secondary">

                    <div style="margin-left: 140px;" class="courses-detail">
                        <h3 style="margin-left: 50px;""><a href="duelo.php">Duel Mode</a></h3>
                        <div class="courses-top">
                            <div class="courses-image">
                                <a href="duelo.php"><img src="images/ooga.jpg" alt=""></a>
                            </div>
                        </div>
                        <br><p></p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-4">
                <div class="courses-thumb courses-thumb-secondary">

                    <div style="margin-left: 140px;" class="courses-detail">
                        <h3 style="margin-left: 30px;"><a href="numeroingles.php">Numeric Mode</a></h3>
                        <div class="courses-top">
                            <div class="courses-image">
                                <a href="numeroingles.php" ><img src="images/number.png" alt=""></a>
                            </div>
                        </div>
                        <br><p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br style="margin-bottom: 20px">

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <section class="links">
            <div class="align-center">
                <h3>Disclaimer</h3>
                <li>Vermo! is just an idea I had, it is not ready for professional use.</li>
                </ul>
            </div>
        </section>
        <div class="row">
            <div class="8u 12u$(medium)">
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved.</li>
                    <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>
</html>