<?php

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
    'version' => '2006-03-01',
    'region'  => 'us-west-2',
    'credentials' => [
        'key'    => '',
        'secret' => ''
      ]
]);

$bucket = "bucketname";

$s3->registerStreamWrapper();

$key = 'hello_again_world.txt';
echo "Creating a second object with key {$key2} using stream wrappers\n";
file_put_contents("s3://{$bucket}/{$key}", 'Hello Again!');