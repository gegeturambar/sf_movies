<?php
/**
 * Created by PhpStorm.
 * User: wamobi10
 * Date: 21/12/16
 * Time: 12:16
 */

namespace AppBundle\Service\Handler;


use AppBundle\Service\Utils\StringUtils;
use AppBundle\Service\Utils\UploadUtils;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\EventDispatcher\Tests\Service;
use Symfony\Component\Form\FormInterface;

class MovieHandler extends FormHandler
{
    protected $form;
    protected $doctrine;
    protected $uploadUtil;

    public function __construct(Registry $doctrine,StringUtils $stringUtil,UploadUtils $uploadUtil)
    {
        $this->uploadUtil = $uploadUtil;
        parent::__construct($doctrine, $stringUtil);
    }

    public function process(){
        $data = $this->form->getData();
        $poster = $data->getPoster();
        if($poster) {
            $newfile = $this->uploadUtil->upload($poster);
            $data->setPoster($newfile);
        }

        return parent::process();
    }
}