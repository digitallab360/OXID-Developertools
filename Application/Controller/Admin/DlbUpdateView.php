<?php
/**
 * Modul: dlb_developertools
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

namespace DigitalLab\DeveloperTools\Application\Controller\Admin;

class DlbUpdateView extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render() {

        parent::render();
        return 'dlb_updateviews.tpl';

    }

    public function getShopName() {

        return \OxidEsales\Eshop\Core\Registry::getConfig()->getActiveShop()->oxshops__oxname->value;

    }

    public function rebuildViews() {

        if (\OxidEsales\Eshop\Core\Registry::getSession()->getVariable("malladmin")) {
            $oMetaData = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);
            $this->_aViewData["blViewSuccess"] = $oMetaData->updateViews();
        }

    }

}
