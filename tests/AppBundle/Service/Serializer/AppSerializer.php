<?php
/**
 * Created by PhpStorm.
 * User: wamobi10
 * Date: 26/12/16
 * Time: 12:52
 */

namespace AppBundle\Service\Serializer;


use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class AppSerializer
{

    private $normalizers=[];
    private $encoders=[];

    private $serializer;

    public function __construct(ObjectNormalizer $normalizer, array $encoders){
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $this->encoders = $encoders;
        $this->normalizers[] = $normalizer;
        $this->serializer = new Serializer($this->normalizers,$this->encoders);
    }

    public function serialize($data, $format){

        return $this->serializer->serialize($data,$format);
    }
}