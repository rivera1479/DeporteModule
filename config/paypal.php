<?php
return array(
    // set your paypal credential
    'client_id' => 'AQBLfyaDOQIxw36vcBsZROu0Us1LA1qJaCRsl2nhryYPDn4-iIVoCHgqLbq1Bm-p9FvRLFFQMCLaUGEe',
    'secret' => 'EO5TU8rNc56FGIDJIqyMjTGR6FLVjGy3782IlCP3EsAFa1O4M58se8PoOsvMbTnlRZuNjZ6OsjsnJMYb',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);