<?php 
    session_start();

    include('actions/connect.php');

    if(isset($_SESSION['user']))
    {
        ?><a href="logout.php" class="right">Log Out</a>
        <a href="#" class="useri"><?php echo ($_SESSION['user']['username']); ?></a><?php
    }
    else
    {
        ?><a href="loginform.php">Log In</a><?php
        header('Location: loginform.php');
        exit();
    }


?>


<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Music | BLOG</title>

    <link rel="stylesheet" href="assets/external/bootstrap/css/bootstrap.min.css">
    <script src="assets/external/jquery.min.js"></script>
    <script src="assets/external/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- wavesurfer.js -->
    <script src="src/wavesurfer.js"></script>
    <script src="src/util.js"></script>
    <script src="src/webaudio.js"></script>
    <script src="src/mediaelement.js"></script>
    <script src="src/drawer.js"></script>
    <script src="src/drawer.canvas.js"></script>

    <!-- regions plugin -->
    <script src="plugin/wavesurfer.regions.js"></script>

    <!-- Demo -->
    <script src="js/main.js"></script>
    <script src="js/trivia.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <?php include( '../includes/header.php'); ?>
        <div class="container">

            <div class="row">
                <div class="col-md-12 todo-display-container">
                    <h3 id="blogPlaceHolder">Upload your music and post it to the blog!</h3><br>
                    <div class="todo-list">
                        <div class="col-md-3">
                            <img src="../includes/images/photo.jpg" class="img-circle sm"></img>
                            <div class="sm">DJSomeKid</div>
                        </div>
                        <div class="col-md-4">
                            <dl class="dl-horizontal">
                                <dt>Song Name:</dt>
                                <dd>Ice Ring</dd>
                                <dt>Artist(s)</dt>
                                <dd>Cashmere Cat and DJMustard</dd>
                                <dt>Key:</dt>
                                <dd>C Major</dd>
                                <dt>BPM:</dt>
                                <dd>100</dd>
                            </dl>
                        </div>
                        <div class="col-md-5" id="demo">
                            <div id="waveform">
                                <div class="progress progress-striped active" id="progress-bar">
                                    <div class="progress-bar progress-bar-info"></div>
                                </div>

                                <!-- Here be the waveform -->
                            </div>

                            <div class="controls">
                                <button class="btn btn-info btn-sm" data-action="back">
                                    <i class="glyphicon glyphicon-step-backward"></i>
                                    Start
                                </button>

                                <button class="btn btn-info btn-sm" data-action="play">
                                    <i class="glyphicon glyphicon-play"></i>
                                    Play
                                    /
                                    <i class="glyphicon glyphicon-pause"></i>
                                    Pause
                                </button>

                                <button class="btn btn-info btn-sm" data-action="forth">
                                    <i class="glyphicon glyphicon-step-forward"></i>
                                    End
                                </button>

                                <button class="btn btn-info btn-sm" data-action="toggle-mute">
                                    <i class="glyphicon glyphicon-volume-off"></i>
                                    Mute
                                </button>
                            </div>
                        </div><br>
                        <div class="col-md-6 col-md-offset-6" id="comments">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>00:46</td>
                                        <td>Omg omg omg</td>
                                    </tr>
                                    <tr>
                                        <td>00:50</td>
                                        <td>Aaaaaamaaazing</td>
                                    </tr>
                                    <tr>
                                        <td>00:52</td>
                                        <td>Put that on the beat, oh!</td>
                                    </tr>
                                    <tr>
                                        <td>00:55</td>
                                        <td>Holy!</td>
                                    </tr>
                                    <tr>
                                        <td>00:56</td>
                                        <td>That bass!</td>
                                    </tr>
                                    <tr>
                                        <td>02:18</td>
                                        <td>Dum dum dum ayyyyy!</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>
                    
            </div>
        </div>
    <?php include( '../includes/footer.php'); ?>
</body>

</html>