<?php include '../includes/header.php' ?>
<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>
<!-- codes -->
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">Crew Management System</h4>
                                </div>

                                <form>
                                    <p>Please login to your account</p>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form2Example11" class="form-control fw-bold"
                                            placeholder="Username" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control fw-bold"
                                            placeholder="Password" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary gradient-custom-2 mb-1" type="button">Log
                                            in</button><br>
                                        <a class="text-muted" href="#!" style="text-decoration:none;">Forgot
                                            password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button type="button" class="btn btn-outline-danger">Create new</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">PETROLIFT</h4>
                                <p class="small mb-0">The Petrolift Crew Management System is an advanced solution
                                    designed to streamline maritime crew operations. It handles recruitment, scheduling,
                                    compliance, and performance tracking, ensuring efficient and compliant crew
                                    management. This system enhances operational effectiveness and improves crew welfare
                                    with intuitive interfaces and robust data analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../includes/footer.php' ?>