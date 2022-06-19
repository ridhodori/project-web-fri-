<?php
include '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI-035 Corporation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <div class="p-5  text-white text-center " style="background-color : #712020">
        <h1>FRI-035 Corporation</h1>
        <p>Hero Walking Stick</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-5">

        <?php if (isset($_GET['message'])) {
            if ($_GET['message'] == "unauthorized") {
        ?>
                <div class="alert alert-danger" role="alert">
                    You don't have the right to acces the page.
                </div>
        <?php }
        } ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <img src="../images/Capturee.PNG" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h1>FRI-035 Corporation</h1>
                        <p>
                            Hero Walking Stick, is a product development that is used as a multifunctional security tool, in overcoming crimes or crimes experienced by the elderly. This product development is carried out with an approach to technological advances that aims to create a safe and effective environment for the use of a product. 

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 p-4  text-white text-center" style="background-color:#373434">
        <p>&copy 2022 FRI-035 Corporation</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>