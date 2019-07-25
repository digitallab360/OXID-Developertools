<?php
/**
 * Modul: dlb_developertools
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

namespace DigitalLab\DeveloperTools\Application\Controller\Admin;

class DlbCredits extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render() {

        parent::render();
        return 'dlb_credits.tpl';

    }

    public function getShopName() {

        return \OxidEsales\Eshop\Core\Registry::getConfig()->getActiveShop()->oxshops__oxname->value;

    }

}
