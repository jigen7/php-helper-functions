<?php

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
    'version' => '2006-03-01', //required to get version
    'region'  => 'us-west-2', //required to get actual region
    'credentials' => [
        'key'    => 'key',
        'secret' => 'secretkey'
      ]
]);

//Sample Code
$bucket = "bucketname";

$s3->registerStreamWrapper();

$key = 'hello_again_world.txt';
echo "Creating a second object with key {$key2} using stream wrappers\n";
file_put_contents("s3://{$bucket}/{$key}", 'Hello Again!');


//Sample Acutal Code 
$image1 = $_FILES['image-pic'];
$photoContentImage = file_get_contents($image1['tmp_name']);
$photoNameImage = $currDate.'/'.$citizenID.'-image.png'; //Generate filename

$s3Client->registerStreamWrapper();

if (!file_put_contents("s3://{$bucket}/$photoNameImage", $photoContentImage)) {
    return $this->response('Error Uploading Photo Image');
}
