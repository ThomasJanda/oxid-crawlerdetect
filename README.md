# Oxid Crawler detection

## Description

The Oxid shop itself contain a search engine detection and if a search engine detected, for example, the session 
will not start. The crawler doesn´t need this functionallity like add product to the basket. This helps the server
to keep stable and balance the existing resources better.

This extension use:

    https://github.com/JayBizzle/Crawler-Detect 

The module extend the existing "isSearchEngine" function and if the shop itself doesn´t detect a crawler,
this extension will test again with the crawler detection with the code above.

This extension was created for Oxid 6.x. (Wave theme)

## Install

1. Copy module into following directory
        
        source/modules/rs/crawlerdetect
        
2. Add following to composer.json on the shop root

        "autoload": {
            "psr-4": {
                "rs\\crawlerdetect\\": "./source/modules/rs/crawlerdetect"
            }
        },
    
3. Refresh autoloader files with composer in the oxid root directory.

        composer dump-autoload

4. Enable module in the oxid admin area, Extensions => Modules