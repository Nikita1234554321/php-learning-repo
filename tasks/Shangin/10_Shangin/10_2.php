<?php
    // index.php
    // /dir1/
    //     /dir2/
    //         test.txt
	echo file_get_contents('/dir1/dir2/test.txt');


    // /script/
    //     index.php
    // /dir1/
    //     /dir2/
    //         test.txt
    echo file_get_contents('../dir1/dir2/test.txt');


    // /script1/
    //     /script2/
    //         index.php
    // /dir/
    //     test.txt
    echo file_get_contents('../../dir/test.txt');

    // /script1/
    //     /script2/
    //         /script3/
    //             index.php
    // /dir1/
    //     /dir2/
    //         /dir3/
    //             test.txt
    echo file_get_contents('../../../dir/dir1/dir2/dir3/text.txt');
?>
