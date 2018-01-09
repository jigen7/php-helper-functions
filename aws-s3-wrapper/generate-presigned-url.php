<?php 

/**
* Function to return S3 PreSigned Url
*
* @param $key
* @return string
*/
public function getS3PresignedUrl($key){

  if(!$key){
    return "";
  }

  $s3Client = new Aws\S3\S3Client([
    'version' => $this->getConfigValues('s3_sdk_ver'),
    'region'  => $this->getConfigValues('s3_region'),
    'credentials' => [
        'key'    => $this->getConfigValues('s3_access_key'),
        'secret' => $this->getConfigValues('s3_secret_key'),
    ]
  ]);

  $bucket = $this->api_model->getConfigValues('s3_bucket_name');

  $cmd = $s3Client->getCommand('GetObject', [
    'Bucket' => $bucket,
    'Key'    => $key
  ]);

  $request = $s3Client->createPresignedRequest($cmd, '+60 minutes');

  $preSignedUrl = (string) $request->getUri();

  return $preSignedUrl;

}