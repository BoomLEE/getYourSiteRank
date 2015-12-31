<?php
if(isset($_POST['url']) && $_POST['url'] !=""
&& isset($_POST['keyword']) && $_POST['keyword'] !=""
)
{
    $output = array(
        'google' => '1',
        'naver' => '30',
        'yahoo' => '80',
        'bing' => '10',
    );
}

echo json_encode($output);
