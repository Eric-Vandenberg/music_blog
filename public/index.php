<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Todo List</title>

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
                <div class="col-md-5 todo-display-container">
                    <button id="display_refresh" type="button" class="btn btn-default glyphicon glyphicon-refresh"></button>
                    <button type="button" id="update_list">Delete</button>
                    <div class="todo-list">
                        <p>Upload your music and share</p>
                    </div>
                </div>
            </div>
        </div>
    <?php include( '../includes/footer.php'); ?>
</body>

</html>