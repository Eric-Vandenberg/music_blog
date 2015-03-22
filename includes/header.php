    <header id="main_header">
        <div class="row">
            <div class=".col-md-6 .col-md-offset-3">
                <div id="todo-add" class="panel panel-default">
                    <div class="panel-heading">Upload Your Music</div>
                    <div class="panel-body">
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
                                    <button class="btn btn-primary" data-action="back">
                                        <i class="glyphicon glyphicon-step-backward"></i>
                                        Backward
                                    </button>

                                    <button class="btn btn-primary" data-action="play">
                                        <i class="glyphicon glyphicon-play"></i>
                                        Play
                                        /
                                        <i class="glyphicon glyphicon-pause"></i>
                                        Pause
                                    </button>

                                    <button class="btn btn-primary" data-action="forth">
                                        <i class="glyphicon glyphicon-step-forward"></i>
                                        Forward
                                    </button>

                                    <button class="btn btn-primary" data-action="toggle-mute">
                                        <i class="glyphicon glyphicon-volume-off"></i>
                                        Toggle Mute
                                    </button>
                                    <form action="../public/actions/uploadhandler.php" method="post" enctype="multipart/form-data">
                                        Select image to upload:
                                        <button class="btn btn-primary"><input type="file" name="fileToUpload" id="fileToUpload"></button>
                                        <button class="btn btn-primary"><input type="submit" value="Upload File" name="submit"></button>
                                    </form>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

