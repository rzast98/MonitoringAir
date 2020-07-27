<!doctype html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="style.css" />

    <link rel="manifest" href="/manifest.json">

    <meta name="theme-color" content="#3823a4">

    <title>Tugas Besar</title>
</head>

<body>
<?php 
		include 'koneksi.php';
		?>
    <section class="container header">
        <div class="row">
            <div class="col-12">
                <p class="title mb-0">
                    History
                </p>
                <p class="sub mb-0">
                    Tugas Besar Banyuresmi Squad.
                </p>
            </div>
        </div>
    </section>

    
    <div class="container pt-3 text-center">

        <form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input class="btn btn-primary btn-md no-border btn-cream text-medium" type="submit" value="FILTER">
		</form>

        <br/>
   

        <div class="table-responsive-sm">

		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>WaterFlow1</th>
                <th>WaterFlow2</th>
				<th>WaterFlow3</th>
				<th>WaterFlow4</th>

			</tr>
			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from datasensor where tanggal='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from datasensor");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['waterflow1']; ?></td>
                <td><?php echo $data['waterflow2']; ?></td>
                <td><?php echo $data['waterflow3']; ?></td>

                <td><?php echo $data['waterflow4']; ?></td>

			</tr>
			<?php 
			}
			?>
		</table>

	</center>
        </div>
        </div>





    </section>

    <section class="container bottom-nav fixed-bottom py-3">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-4 menu d-flex justify-content-center">
                        <a href="index.html">
                            <i class="material-icons ">
                                home
                </i>
                        </a>
                    </div>

                    <div class="col-4 menu d-flex justify-content-center">
                        <a href="#">
                            <i class="material-icons">
                                photo
                </i>
                        </a>
                    </div>
                    <div class="col-4 menu d-flex justify-content-center">
                        <a href="#">
                            <i class="material-icons active">
                dashboard
                </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="history.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="main.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.16.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.16.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

<script src="style.js"></script>

</body>

</html>