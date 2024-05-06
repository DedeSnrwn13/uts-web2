<?php

class Player
{
    private $id;
    private $name;
    private $age;
    private $club;
    private $position;
    private $image;

    public function __construct($id, $name, $age, $club, $position, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->club = $club;
        $this->position = $position;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getClub()
    {
        return $this->club;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getImage()
    {
        return $this->image;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemain</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php
        include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
            <?php
            include "component/header.php";
            ?>


            <!-- start player list table -->
            <div class="player-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Daftar Pemain</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <?php include 'component/popupadd.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table palyers table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Klub</th>
                            <th>Posisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conixion.php';
                        $result = $con->query("SELECT * FROM players");
                        foreach ($result as $value) :
                        ?>
                            <tr class="bg-white align-middle">
                                <td><img src="../assets/img/<?php echo $value['img'] ?>" alt="img" height="50" with="50"></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['age'] ?></td>
                                <td><?php echo $value['club'] ?></td>
                                <td><?php echo $value['position'] ?></td>
                                <td class="d-md-flex gap-3 mt-3">
                                    <a href="modifier.php?id=<?php echo $value['id'] ?>">
                                        <i class="fa-solid fa-pen text-warning"></i>
                                    </a>
                                    <a href="remove.php?id=<?php echo $value['id'] ?>">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end player list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>