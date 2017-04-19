<!DOCTYPE html>
<html lang="en">
<head>
    <title>FaceMapper</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    .bg-1 {
        display: inline;
        width: 50%
    }

    .faceimg {
        width: 33%;
        height: 100%;
        float: left;
    }
</style>


<?php include 'header.php' ?>
<body>
<div class="container-fluid text-center">
    <img class="faceimg" src="coconut_tall.jpg">
    <img class="faceimg" src="sample_face.png">
    <img class="faceimg" src="coconut_face_rec_tall.png">
    <p style="clear:both;"></p>
</div>
<div class="container-fluid bg-1 text-center">
    <h1>FaceMapper</h1>
    <p> The FaceMapper annotation tool is used for annotating faces with landmarks to be used in training facial
        landmark recognition algorithms.
        It includes a script to transform the output into input used by Dlib. The tool is part of a larger project
        involving the creation of a pipeline
        to combine information from naturalistic ECoG and AV recordings to establish correlations between facial pose,
        speech, and brainwave data.</p>
</div>
<blockquote class="embedly-card"><h4><a href="http://github.com/gvelchuru/FaceMapper">gvelchuru/FaceMapper</a></h4>
    <p>FaceMapper - Face annotation tool for neural network training</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card"><h4><a href="http://github.com/gvelchuru/Dlib_tweaks">gvelchuru/Dlib_tweaks</a></h4>
    <p>Dlib_tweaks - Tweaks to Dlib python scripts</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
</body>
</html>