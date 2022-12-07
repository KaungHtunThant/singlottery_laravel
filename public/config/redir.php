<?php
    
    $home_dir = "index.php";

	if(isset($_POST['submit'])) {
        if (condition) {
            // code...
        }
        dbInsert(array());
        _goto_alt($home_dir);
    }

    if(isset($_POST['delete'])) {
        dbDelete();
        _goto_alt($home_dir);
    }

    if(isset($_POST['edit'])) {
        dbEdit();
        _goto_alt($home_dir);
    }
?>