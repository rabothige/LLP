<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Event</title>
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />    
        <script src="js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            // check the input
            is_numeric($_GET['id']) or die("invalid URL");
            
            require_once '_db.php';
            
            $stmt = $db->prepare('SELECT * FROM [events] WHERE id = :id');
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            $event = $stmt->fetch();

        ?>
        <form id="f" action="backend_update.php" style="padding:20px;">
            <input type="hidden" name="id" id="id" value="<?php print $_GET['id'] ?>" />
            <h1>Edit Event</h1>
            
            <div class="space">
                <a href="#" id="delete">Delete Event</a>
            </div>
            
            <div>Name: </div>
            <div><input type="text" id="name" name="name" value="<?php print $event['text'] ?>" /></div>
            <div class="space"><input type="submit" value="Save" /> <a href="#" id="cancel">Cancel</a></div>
        </form>
        
        <script type="text/javascript">

        $("#f").submit(function () {
            var f = $("#f");
            $.post(f.attr("action"), f.serialize(), function (result) {
                DayPilot.Modal.close(result);
            });
            return false;
        });
        
        $("#delete").click(function() {
            $.post("backend_delete.php", { id: $("#id").val()}, function(result) {
                DayPilot.Modal.close(result);
            });
            return false;
        });
        
        $("#cancel").click(function() {
            DayPilot.Modal.close();
            return false;
        });

        $(document).ready(function () {
            $("#name").focus();
        });
    
        </script>
    </body>
</html>
