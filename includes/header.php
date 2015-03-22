<header id="main_header">
    <div class="container">
        <div class="header">
            <noindex>
            <ul class="nav nav-pills pull-right">
                <li><?php ?></li>
            </ul>
            </noindex>

            <h1 itemprop="name">MUSIC | BLOG</h1>
        </div>

        <div id="demo">
            <div id="waveform">
                <div class="progress progress-striped active" id="progress-bar">
                    <div class="progress-bar progress-bar-info"></div>
                </div>

                <!-- Here be the waveform -->
            </div>

            <div class="controls">
                <button class="btn btn-info btn-md active" data-action="back">
                    <i class="glyphicon glyphicon-step-backward"></i>
                    Backward
                </button>

                <button class="btn btn-info btn-md active" data-action="play">
                    <i class="glyphicon glyphicon-play"></i>
                    Play
                    /
                    <i class="glyphicon glyphicon-pause"></i>
                    Pause
                </button>

                <button class="btn btn-info btn-md active" data-action="forth">
                    <i class="glyphicon glyphicon-step-forward"></i>
                    Forward
                </button>

                <button class="btn btn-info btn-md active" data-action="toggle-mute">
                    <i class="glyphicon glyphicon-volume-off"></i>
                    Toggle Mute
                </button>
                <form action="../public/actions/uploadhandler.php" method="post" enctype="multipart/form-data">
                    Select mp3 or mp4 file to upload:
                    <input class="btn btn-info btn-md active" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-info btn-md active" type="submit" value="Upload File" name="submit">
                </form>
            </div>
        </div>
</header>

