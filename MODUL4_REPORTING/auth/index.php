<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI-035 Corporation - Login  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="p-5 text-white text-center" style="background-color : #712020;">
        <h1>FRI-035 Corporation</h1>
        <p>Hero Walking Stick</p>
    </div>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "failed"){
			echo "<span class='text-alert'>Login gagal! username dan password salah!</span>";
		}else if($_GET['pesan'] == "logout"){
			echo "<span class='text-success'>Logout berhasil</span>";
		}else if($_GET['pesan'] == "not_login"){
			echo "<span class='text-success'>Login gagal! username dan password salah!</span>";
		}
	}
	?>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 align-middle"> 
                <img src="../images/Capture.PNG" alt="">
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <form action="process.php?action=login" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control">
                                <div id="emailHelp" class="form-text">Input your username.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                                <div id="emailHelp" class="form-text">Input your password.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 p-4 text-white text-center" style="background-color:#373434">
        <p>&copy 2022 FRI-035 Corporation</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>