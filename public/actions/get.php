<?php
//    $todo_json = file_get_contents('../data/todo.json');

    require_once('connect.php');

    $sql = "SELECT * FROM `blog_post`";

    $results = mysqli_query($con, $sql);
    
    $output=[];
    
    $html='<div class="row bloggy">
                
            </div>';

    while($blog_row = mysqli_fetch_assoc($results)){
        
        $ID = $blog_row['ID'];
        $UID = $blog_row['UID'];
        $file = $blog_row['file'];
        $song = $blog_row['song'];
        $artist = $blog_row['artist'];
        $key = $blog_row['key'];
        $bpm = $blog_row['bpm'];
        $info = $blog_row['info'];
        
        $blog_item_html =                 
                    "<div class='col-md-3'>
                        <img src='../includes/images/photo.jpg' class='img-circle sm'></img>
                        <div class='sm'>$UID</div>
                    </div>
                    <div class='col-md-4'>
                        <dl class='dl-horizontal'>
                            <dt>Song Name:</dt>
                            <dd>$song</dd>
                            <dt>Artist(s)</dt>
                            <dd>$artist</dd>
                            <dt>Key:</dt>
                            <dd>$key</dd>
                            <dt>BPM:</dt>
                            <dd>$bpm</dd>
                            <dt>Track Info:</dt>
                            <dd>$info</dd>
                        </dl>
                    </div>
                    <div class='col-md-5' id='demo'>
                        <div id='waveform'>
                            <div class='progress progress-striped active' id='progress-bar'>
                                <div class='progress-bar progress-bar-info'></div>
                            </div>

                            <!-- Here be the waveform -->
                        </div>

                        <div class='controls'>
                            <button class='btn btn-info btn-sm' data-action='back'>
                                <i class='glyphicon glyphicon-step-backward'></i>
                                Start
                            </button>

                            <button class='btn btn-info btn-sm' data-action='play'>
                                <i class='glyphicon glyphicon-play'></i>
                                Play
                                /
                                <i class='glyphicon glyphicon-pause'></i>
                                Pause
                            </button>

                            <button class='btn btn-info btn-sm' data-action='forth'>
                                <i class='glyphicon glyphicon-step-forward'></i>
                                End
                            </button>

                            <button class='btn btn-info btn-sm' data-action='toggle-mute'>
                                <i class='glyphicon glyphicon-volume-off'></i>
                                Mute
                            </button>
                        </div>
                    </div><br>
                    <div class='col-md-6 col-md-offset-6' id='comments'>
                        <table class='table table-striped'>
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
                    </div>\n";
            $html.=$blog_item_html;

    }

    if(mysqli_num_rows($results) > 0){
        $output=['success'=>true, 'html=>$html'];
    }else{
        $output=['success'=>false, 'message'=>'No blog posts!'];
    }
    echo($html);














?>