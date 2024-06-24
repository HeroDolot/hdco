<?php
include './components/header.php';
?>

<div class="container-fluid">
    <div class="container d-flex justify-content-center align-items-center" style="height: 75vh;">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header fw-bolder border-primary fs-4">
                    HD Company
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="wrapper py-3 d-flex justify-content-end">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>