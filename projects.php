<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    .facemap {
        width = 100%;
        background-image: url("coconut_tall.jpg"), url("sample_face.png"), url("coconut_face_rec_tall.png");
        background-size: 33%;
        background-position: left, center, right;
        background-repeat: no-repeat;
        height: 100px;
        transition: all 1s;
        opacity: .5;
    }

    .facemap:hover {
        height: 500px;
        opacity: 1;
    }

</style>
<?php include 'header.php' ?>
<body>
<div class="container-fluid text-center">
    <h1>FaceMapper</h1>
    <p> Pipeline for using facial recognition algorithms on novel data</p>
</div>
<a href="face_mapper.php">
    <div class="container-fluid facemap text-center">
    </div>
</a>
</body>
</html>