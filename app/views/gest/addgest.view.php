<?php
include('../App/views/partials/header.view.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Teacher</h1>
        <div class="page_loc">
            <div class="nav">
                <a href="#"><i class="fa-solid fa-house-chimney"></i>Home</a><span>/</span>
                <a href="#">Gestionnaires</a><span>/</span>
                <a href="#">Add</a>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="container">

                <form method="POST" action="/add">
                    <div class="form_info">

                        <div class="form_infoTop_part">
                            <div class="form_name">
                                <p><i class="fa-solid fa-table"></i>Give the information For New Teacher</p>
                            </div>
                        </div>

                        <div class="row form_start">

                            <div class="col-11">
                                <div class="form_part">
                                    <div class="row">
                                        <div class="col-4 label_name">
                                            <label for="text">First name *</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" id="fname" name="fname" placeholder="fname Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-11">
                                <div class="form_part">
                                    <div class="row">
                                        <div class="col-4 label_name">
                                            <label for="text">Last Name *</label>
                                        </div>

                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" id="lname" name="lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-11">
                                <div class="form_part">
                                    <div class="row">
                                        <div class="col-4 label_name">
                                            <label for="text">Email * </label>
                                        </div>

                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-11">
                                <div class="form_part">
                                    <div class="row">
                                        <div class="col-4 label_name">
                                            <label for="text">Password *</label>
                                        </div>

                                        <div class="col-8">
                                            <input type="text" class="form-control mb-3" id="password" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <input type="submit" class="btn btn-primary w-100" value="Add">
                    </div>
                </form>

            </div>


        </div>
    </section>

</main><!-- End #main -->