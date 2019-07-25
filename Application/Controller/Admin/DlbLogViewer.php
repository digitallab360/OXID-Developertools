<?php
/**
 * Modul: dlb_developertools
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

namespace DigitalLab\DeveloperTools\Application\Controller\Admin;

class DlbLogViewer extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render() {

        parent::render();
        return 'dlb_logviewer.tpl';

    }

    public function showExceptionlog() {

        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        if (filesize($sLogfile) > 0) {
            $fOpenFile = fopen($sLogfile, 'r');
            $fReadFile = fread($fOpenFile, filesize($sLogfile));
        } else {
            $fReadFile = false;
        }
        return $fReadFile;

    }

    public function showLastModify() {

        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fFileTime = date ("d.m.Y - H:i:s", filemtime($sLogfile));
        return $fFileTime;

    }

    public function showFileSize() {

        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fSize = round(filesize($sLogfile)/1024, 2);
        return $fSize;

    }

    public function getShopName() {

        return \OxidEsales\Eshop\Core\Registry::getConfig()->getActiveShop()->oxshops__oxname->value;

    }

    public function clearExeptionlog(){

        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fOpenFile = fopen($sLogfile, 'w');
        @file_put_contents($fOpenFile, '');
        return parent::render();

    }

}
