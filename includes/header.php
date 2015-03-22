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
                    <input class="btn btn-info btn-sm" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-info btn-sm" type="submit" value="Upload" name="submit">
                </form>
            </div>
        </div>
</header>

