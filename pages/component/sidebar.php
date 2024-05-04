<?php session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
    <div class="log d-flex justify-content-between">
        <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">E-Timnas U23</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <img class="rounded-circle" src="../assets/img/img-admin.png" alt="img-admin" height="120" width="120">
        <h2 class="h6 fw-bold"><?php echo $_SESSION['name']; ?></h2>
        <span class="h7 admin-color">admin</span>
    </div>
    <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
        <ul class="d-flex flex-column list-unstyled">
            <li class="h7"><a class="nav-link text-dark" href="dashboard.php"><i class="fa-solid fa-house me-2"></i> <span>Beranda</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="players.php"><i class="fa-solid fa-users me-2"></i> <span>Pemain</span></a></li>
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Keluar</span><i class="fa-solid fa-right-from-bracket ms-2"></i></i></a></li>
        </ul>
    </div>

</div>