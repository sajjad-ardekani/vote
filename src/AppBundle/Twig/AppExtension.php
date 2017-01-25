<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Model\Util\Persian\DateTime\DateTime as PersianDateTime;
use AppBundle\Model\Util\Persian\DateTime\Diff;

/**
 * Description of AppExtension
 *
 * @author sajjad
 */
class AppExtension extends \Twig_Extension {

    private $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function getFunctions() {
        return array(
            new \Twig_SimpleFunction('group_is_granted', array($this, 'group_is_granted'), array('is_safe' => array('all'))),
            new \Twig_SimpleFunction('barcode_generate', array($this, 'barcode_generate'), array('is_safe' => array('all'))),
            new \Twig_SimpleFunction('smart_date', array($this, 'smartDate'), array('is_safe' => array('all'))),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('pdt_format', array(new PersianDateTime(), 'persian_datetime_format')),
            new \Twig_SimpleFilter('pd_format', array(new PersianDateTime(), 'persian_date_format')),
            new \Twig_SimpleFilter('separate_number', array($this, 'separate_number')),
        );
    }

    public function group_is_granted($groups) {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user) {
            foreach ($user->getGroups() as $grp) {
                $grps[$grp->getName()] = $grp->getId();
            }
            foreach ($groups as $group) {
                if (array_key_exists($group, $grps)) {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    public function barcode_generate($productId) {
        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($productId, $generator::TYPE_CODE_128)) . '">';
    }

    public function separate_number($productId, $decimals = 0, $decPoint = '.', $thousandsSep = ',') {
        $number = number_format($productId, $decimals, $decPoint, $thousandsSep);
        return $number;
    }

    public function getName() {
        return 'app_extension';
    }

    public function smartDate(\DateTime $date, $format) {

        if ($this->container->get('session')->get('_locale') == 'fa') {
            $pdate = new PersianDateTime();
            return $pdate->persian_date_format($date);
        }
        return $date->format($format);
    }

}
