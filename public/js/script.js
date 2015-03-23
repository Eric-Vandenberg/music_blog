$(document).ready(function(){
    $("#uploadi").on("change", "#fileToUpload", function() {
        var fileText = $(".btn-sm-texti").val();
        var loseTheExt = fileText.substring(12);
        var artistName = loseTheExt.substring(0, loseTheExt.indexOf('-'));
        var songName = loseTheExt.substring(loseTheExt.lastIndexOf("-")+2,loseTheExt.indexOf("(")-1);

        $("#artist").html(artistName);
        $("#songName").html(songName);
        $("#fileImportant").html(loseTheExt);

        var getUsername = $(".useri").html();
        console.log(getUsername);
        $("#userID").html(getUsername);
        
        
    });
    $("#save_post").click(function(){
        var posti = $("#postIt");
        var formData = {
            UID:posti.find("div[name=useri]").html(),
            file:posti.find("div[name=file]").html(),
            song:posti.find("div[name=title]").html(),
            artist:posti.find("div[name=artist]").html(),
            key:posti.find("div[name=key]").html(),
            bpm:posti.find("div[name=bpm]").html(),
            info:posti.find("textarea[name=trackInfo]").val(),
        }

        console.log(formData);
        $.ajax(
        {
            url: 'actions/add.php',
            data: formData,
            //dataType: 'json',
            cache: false,
            method: 'POST',
            error: function () {
                alert("Error!");
            },
            success: function(data){
                //success is achieved!
                console.log("Added!");
            }
        });
    });
});
