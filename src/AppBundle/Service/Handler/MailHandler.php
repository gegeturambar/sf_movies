<?php
/**
 * Created by PhpStorm.
 * User: wamobi10
 * Date: 21/12/16
 * Time: 12:16
 */

namespace AppBundle\Service\Handler;


use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\Form\FormInterface;

class MailHandler extends FormHandler
{
    public function __construct(Registry $doctrine){
        parent::__construct($doctrine);
    }

    public function check(FormInterface $form){
        return parent::check();
    }

    public function process(){
        return parent::process();
    }

    public function delete($entity){
        return parent::delete($entity);
    }

}