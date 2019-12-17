<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Coordinates
 * Author : tao.ruiz@zohomail.eu
 *
 * @MongoDB\EmbeddedDocument
 */
class Coordinates
{
    /**
     * @MongoDB\Field(type="float")
     * @var float latitude
     */
    protected $latitude;
    /**
     * @MongoDB\Field(type="float")
     * @var float longitude
     */
    protected $longitude;

    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
