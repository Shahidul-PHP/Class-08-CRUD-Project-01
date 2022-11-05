<?php
require '../db.php';
session_start();

$user_info_select = "SELECT * FROM students ";
$result = mysqli_query($db_connection, $user_info_select);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .delete button {
            border: 0;
            color: red;
            outline: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto mt-4 p-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Students Information</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Name of Student's</th>
                                <th>Department</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($result as $key => $student_info) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $student_info['name'] ?></td>
                                    <td><?= $student_info['department'] ?></td>
                                    <td><?= $student_info['email'] ?></td>
                                    <td>
                                        <button data-id="user_info_del.php?id=<?= $student_info['id'] ?>" class="delete_btn btn btn-primary"><i class=" fa-sharp fa-solid fa-trash"></i></button>

                                        <a href="user_info_edit.php" class="btn btn-warning text-white"><i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.delete_btn').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    link = $(this).attr('data-id');
                    window.location.href = link;
                }

            })
        });
    </script>
    <?php
    if (isset($_SESSION['deleteMsg'])) { ?>
        <script>
            Swal.fire(
                'Deleted!',
                '<?= $_SESSION['deleteMsg'] ?>',
                'success'
            )
        </script>
    <?php } unset ($_SESSION['deleteMsg']) ?>
</body>

</html>