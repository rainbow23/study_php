<?php
    $ch = curl_init('http://www.yahoo.co.jp/');

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_exec($ch);

    $redirectCount = curl_getinfo($ch, CURLINFO_REDIRECT_COUNT);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $redirectTime = curl_getinfo($ch, CURLINFO_REDIRECT_TIME);
    curl_close($ch);

    printf("redirectCount %d \n", $redirectCount);
    printf("httpcode  %d\n", $httpcode);
    printf("redirectTime  %f\n", $redirectTime);
    // printf("ch\n", $ch);
?>
