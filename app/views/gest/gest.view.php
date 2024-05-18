<!-- <?php if (isset($_SESSION['loggedIn']) && isset($_SESSION['role']) && $_SESSION['role'] === "admin") : ?>

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">CKEI</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Content</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Analytics</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Like</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li>
                    <form method="post" action="/logout"><a href="/logout">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a>
                    </form>
                </li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?> -->
<?php
include('../App/views/partials/header.view.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Teachers Information</h1>
        <div class="page_loc">
            <div class="nav">
                <a href="#"><i class="fa-solid fa-house-chimney"></i>Home</a><span>/</span>
                <a href="#">Gestionnaires</a><span>/</span>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="container">

                <div class="form_info">

                    <div class="form_infoTop_part">
                        <div class="form_name">
                            <p><i class="fa-solid fa-table"></i>Gestionnaires List</p>
                        </div>
                    </div>

                    <div class="row form_start">

                        <div class="col-11">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID NO</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gests as $gest) : ?>
                                        <tr>
                                            <td><?= $gest['id'] ?></td>
                                            <td><?= $gest['nom'] . " " . $gest['prenom'] ?></td>
                                            <td><?= $gest['email'] ?></td>
                                            <td>


                                                <a href="" class="btn btn-primary">
                                                    <form action="/" method="post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="id" value="<?= $gest['id'] ?>">
                                                        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </a>
                                                <a href="" class="btn btn-success">
                                                    <form action="/" method="post">
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="id" value="<?= $gest['id'] ?>">
                                                        <button type="submit" name="submit" class="btn btn-success">Details</button>
                                                    </form>
                                                </a>
                                                <a href="/delete?id=<?= $gest['id'] ?>" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->