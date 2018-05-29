<html>
    <header>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>style.css" />
    </header>
    <body>
        <center>
            <form action="<?php echo base_url()."site/note_action/".$user_id ?>" method="post">
                <input type="submit" value="Respect" class="noteButton">
            </form>
        </center>
    </body>
</html>