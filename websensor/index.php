<!DOCTYPE html>
<html>

<head>
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




    <meta charset="utf-8">
    <meta name="viewport" content="wid=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>

    <title>Aliran air</title>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksensor").load('ceksensor.php');
            }, 1000);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksensor2").load('ceksensor2.php');
            }, 1000);
        });
    </script>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksensor3").load('ceksensor3.php');
            }, 1000);
        });
    </script>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksensor4").load('ceksensor4.php');
            }, 1000);
        });
    </script>
</head>

<body>
    <section class="container header">
        <div class="row">
            <div class="col-12">
                <p class="title mb-0">
                    Mengukur banyaknya aliran air
                </p>
                <p class="sub mb-0">
                    Tugas Besar Banyuresmi Squad.
                </p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center">

            <div class="mt-3" style="text-align: center;  width:500px">
                <h2> WaterFlow1</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1><span id="ceksensor"></span></h1>
                    </div>


                </div>
                <div class="mt-5" style="text-align: center; width:500px">
                    <h2> WaterFlow2</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1><span id="ceksensor2"></span></h1>
                        </div>
                    </div>
                    <div class="mt-5" style="text-align: center; width:500px">
                        <h2>WaterFlow3</h2>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h1><span id="ceksensor3"></span></h1>
                            </div>
                        </div>
                        <div class="mt-5" style="text-align: center;  width:500px">
                            <h2> WaterFlow4</h2>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h1><span id="ceksensor4"></span></h1>
                                </div>
                            </div>

                        </div>


                    </div>



                    <section class="container bottom-nav fixed-bottom py-3">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 menu d-flex justify-content-center">
                                        <a href="/index.html">
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

                    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.16.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.16.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</body>

</html>