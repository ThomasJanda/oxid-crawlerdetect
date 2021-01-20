<?php

namespace rs\crawlerdetect\Core;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

class Utils extends Utils_parent
{
    public function setSearchEngine($blIsSe = null, $sClient = null)
    {
        parent::setSearchEngine($blIsSe, $sClient);

        $myConfig = $this->getConfig();

        //enable searchengine mode
        if($myConfig->getConfigParam('rs-crawlerdetect_settings_enable_se_mode'))
        {
            $this->_blIsSe=true;
            return;
        }

        if (!$this->_blIsSe && !($myConfig->getConfigParam('iDebug') && $this->isAdmin())) {

            $CrawlerDetect = new CrawlerDetect;

            // Check the user agent of the current 'visitor'
            if($CrawlerDetect->isCrawler()) {
                // true if crawler user agent detected
                $this->_blIsSe=true;
            }
        }
    }
}