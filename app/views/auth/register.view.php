<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <!-- <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div>End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form method="POST" action="/register" class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="fname" min="8" max="32" name="fname" placeholder="First name" required>
                                        <div class="invalid-feedback">Please, enter your first name!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lname" min="8" max="32" name="lname" placeholder="Last name" required>
                                        <div class="invalid-feedback">Please, enter your last name!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="email" min="8" max="32" name="email" placeholder="email" required>
                                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" id="password" min="8" max="32" name="password" placeholder="Password" class="form-control" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary w-100" value="Create Account">
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->