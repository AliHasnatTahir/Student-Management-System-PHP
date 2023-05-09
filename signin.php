<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

<body>
    <form action="do_signin.php" method="post">
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="assets/signin.jpg" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="email" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" />

                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./Signup.php" class="link-danger">Sign Up</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>


</body>

</html>