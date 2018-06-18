<?php

namespace Concrete\Package\WorldskillsS3\File\StorageLocation\Configuration;

use \Concrete\Core\File\StorageLocation\Configuration\ConfigurationInterface;
use \Concrete\Core\File\StorageLocation\Configuration\Configuration;
use \Aws\S3\S3Client;
use \League\Flysystem\AwsS3v3\AwsS3Adapter;

class WorldskillsS3Configuration extends Configuration implements ConfigurationInterface
{
    public function hasPublicURL()
    {
        return true;
    }

    public function hasRelativePath()
    {
        return false;
    }

    public function loadFromRequest(\Concrete\Core\Http\Request $req)
    {
        return false;
    }

    public function validateRequest(\Concrete\Core\Http\Request $req)
    {
        return false;
    }

    public function getAdapter()
    {
        $client = new S3Client([]);
        $bucket = \Config::get('worldskills_s3.bucket');

        return new AwsS3Adapter($client, $bucket);
    }

    public function getPublicURLToFile($file)
    {
        $url = \Config::get('worldskills_s3.url');

        return $url . $file;
    }

    public function getRelativePathToFile($file)
    {
        return $file;
    }
}
