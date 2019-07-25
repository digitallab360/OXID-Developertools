<?php
/**
 * Modul: dlb_developertools
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

namespace DigitalLab\DeveloperTools\Application\Controller\Admin;

class DlbClearTmp extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    protected $_sClearCacheLog;
    protected $_sClearLog;

    public function render() {

        parent::render();
        return 'dlb_cleartmp.tpl';

    }

    public function getTmpFiles() {

        $getDir = glob('../tmp/*');
        foreach ($getDir as $files) {
            echo $files . "<br />";
        };

    }

    public function getShopName() {

        return \OxidEsales\Eshop\Core\Registry::getConfig()->getActiveShop()->oxshops__oxname->value;

    }

    public function clearTmpFiles() {

        $this->_sClearLog = \OxidEsales\Eshop\Core\Registry::getLang()->translateString("dlb_clearcache_success");
        $clearDir = glob('../tmp/*');
        $clearDir = array_merge( $clearDir, glob('../tmp/smarty/*') );
        foreach($clearDir as $file) {
            if(!@unlink($file) && $file != "../tmp" && $file != "../tmp/smarty") {
                $this->_sClearCacheLog = \OxidEsales\Eshop\Core\Registry::getLang()->translateString("dlb_clearcache_file") . " <strong>" . $file . "</strong> ";
            }
        }
        $this->_aViewData["clearcachelog"] = $this->_sClearCacheLog;
        $this->_aViewData["clearcachesuccess"] = $this->_sClearLog;

    }

}
