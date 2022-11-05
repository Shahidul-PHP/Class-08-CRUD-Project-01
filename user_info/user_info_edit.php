<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Students Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto mt-3 p-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Students Informations</h2>
                    </div>
                    <div class="card-body">
                        <form class="p-3" action="user_info_update.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" value="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" value="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" value="" placeholder="Update Your Password">
                            </div>

                            <button type="submit" class="mt-2 btn btn-danger">Update Information</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>