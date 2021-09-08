<?php
    include("bd_Profesor.php");
?>

<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="../images/logo.png" alt="Cool Admin" />
        </a>
    </div>

    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="images/icon/avatar-01.png" alt="John Doe" />
            </div>
            <h4 class="name"><?php echo $nombre;?></h4>
        </div>

        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub"> <a class="js-arrow" href="#"> <i class="fas fa-user"> </i>Mi Informacion</a></li>
                
                <li> <a class="js-arrow" href="agregarMaterial.php"> <i class="fas fa-book"></i>Materiales </a> </li>

            </ul>
        </nav>
    </div>
</aside>