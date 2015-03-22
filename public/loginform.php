
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
    <header id="main_header">
        <div class="container">
            <div class="header">
                <noindex>
                <ul class="nav nav-pills pull-right">
                    <li><?php ?></li>
                </ul>
                </noindex>
                <span id="inlineTitle">
                <h1 itemprop="name" id="leftTitle">MUSIC</h1>
                <h1 itemprop="name" id="centerTitle"> | </h1>
                <h1 itemprop="name" id="rightTitle">BLOG</h1>
                </span>
            </div>

            <div id="demo">
                <div id="waveform">
                    <div class="progress progress-striped active" id="progress-bar">
                        <div class="progress-bar progress-bar-info"></div>
                    </div>

                    <!-- Here be the waveform -->
                </div>

                <div class="controls">
                    <button class="btn btn-info btn-sm" data-action="back">
                        <i class="glyphicon glyphicon-step-backward"></i>
                        Backward
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
                        Forward
                    </button>

                    <button class="btn btn-info btn-sm" data-action="toggle-mute">
                        <i class="glyphicon glyphicon-volume-off"></i>
                        Toggle Mute
                    </button>
                    
                    <form action="../public/actions/uploadhandler.php" method="post" enctype="multipart/form-data">
                        <h3 id="rightTitle">Select mp3 or mp4 file to upload:</h3>
                        <input class="btn btn-info btn-sm disabled" type="file" name="fileToUpload" id="fileToUpload">
                        <input class="btn btn-info btn-sm disabled" type="submit" value="Upload" name="submit">
                    </form>
                </div>
            </div>
    </header>

    <div class="container">
        <div id="showing_name"></div>
        <form id="signup" action="loginUser.php" method="post">
            <h3 id="rightTitle">Please Login Below</h3><br>
            <h3 id="rightTitle">No account?  Free sign up <a href="signupform.php">here!</a></h3><br>
            <input class="usrnm"type="text" name="username" placeholder="Username">
            <input class="usrnm"type="password" name="password" placeholder="Password">
            <button type="submit" id="usrlgn" class="btn btn-info btn-sm">Login</button>
        </form>
    </div>
    <?php include( '../includes/footer.php'); ?>
</body>

</html>


