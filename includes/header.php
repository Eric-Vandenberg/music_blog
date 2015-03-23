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
                
                <form action="../public/actions/uploadhandler.php" method="post" enctype="multipart/form-data">
                    <h3 id="rightTitle">Select mp3 or mp4 file to upload:</h3>
                    <input class="btn btn-info btn-sm" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-success btn-sm" type="submit" value="Upload" name="submit" id="step1">
                </form>
                <form class="form-inline vertical">
                    <div class="form-group">
                        <label class="" for="songName">Song Name:</label>
                        <input class="form-control" type="text" name="title" placeholder="Enter Song Title" id="songName">
                    </div>
                    <div class="form-group">
                        <label class="" for="artist">Artist Name:</label>
                        <input class="form-control" type="text" name="artist" placeholder="Enter Artist Name" id="artist">
                    </div>
                    <div class="form-group">
                        <label class="" for="key">Key:</label>
                        <div class="form-control" name="key" id="key">C Major</div>
                    </div>
                    <div class="form-group">
                        <label class="" for="bpm">BPM:</label>
                        <div class="form-control" name="bpm" id="bpm">100</div>
                    </div>
                    <div class="form-group">
                        <label class="" for="songName">Track Info:</label>
                        <textarea class="form-control" name="details" placeholder="Tell Us About Your Work!"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="" for="save_post">Post!</label>
                        <button type="button" id="save_post" class="btn btn-success btn-lg glyphicon glyphicon-cloud-upload"></button>
                    </div>
                </form>
            </div>
        </div>
</header>

