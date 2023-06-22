<?php
    //uuencode is similar to md5 but the difference is that the string encoded here can also be decoded which isn't available in md5 or sha1
    $str="chiragsuryavanshi@01";
    $encode=convert_uuencode($str);
    echo "Encoded String: ".$encode;

    $decode=convert_uudecode($encode);
    echo "<br>Decoded String: ".$decode;
    
?>