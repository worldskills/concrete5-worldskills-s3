<?php
namespace Concrete\Package\WorldskillsS3;

use \Concrete\Core\Authentication\AuthenticationType;
use \Concrete\Core\Package\Package;
use \Concrete\Core\Page\Theme\Theme;
use \Concrete\Core\Page\Type\PublishTarget\Type\AllType as PageTypePublishTargetAllType;
use \Concrete\Core\Page\Type\PublishTarget\Configuration\AllConfiguration as PageTypePublishTargetAllConfiguration;
use \Concrete\Core\Attribute\Key\CollectionKey as CollectionAttributeKey;
use \Concrete\Core\Attribute\Type as AttributeType;
use \Concrete\Core\File\StorageLocation\Type\Type as StorageLocationType;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{
    protected $pkgHandle = 'worldskills_s3';
    protected $appVersionRequired = '5.7.5.3';
    protected $pkgVersion = '0.0.2';
    protected $pkgAutoloaderMapCoreExtensions = true;

    public function getPackageName()
    {
        return 'WorldSkills S3';
    }

    public function getPackageDescription()
    {
        return 'S3 Storage Type';
    }

    public function install()
    {
        $pkg = parent::install();

        \Concrete\Core\File\StorageLocation\Type\Type::add('worldskills_s3', 'S3', $pkg);
    }
}
