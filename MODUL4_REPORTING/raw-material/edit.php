<?php
include '../model/RawMaterial.php';
include '../config/auth.php';
include '../config/supervisor.php';

$db = new RawMaterial();
$material= $db->getRawMaterial($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI-035 Corporation - Edit Raw Material Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="p-5  text-white text-center" style="background-color : #712020">
        <h1>FRI-035 Corporation</h1>
        <p>Hero Walking Stick</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-5">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully changed.
                    </div>
            <?php }
            } ?>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Material</h5>
                        <form action="process.php?action=edit" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="hidden" name="id" class="form-control" value="<?=$material['id']?>">
                                <input type="text" name="name" class="form-control" value="<?=$material['name']?>">
                                <div id="emailHelp" class="form-text">Input the product name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                <input type="text" name="qty" class="form-control" value="<?=$material['qty']?>">
                                <div id="emailHelp" class="form-text">Input the quantitiy of material.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Price</label>
                                <input type="text" name="sp" class="form-control" value="<?=$material['price']?>">
                                <div id="emailHelp" class="form-text">Input the price.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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