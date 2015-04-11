<?php
/*
Plugin Name: Discus for Wordpress Localization Glue
Description: Provides a "glue" to fix the gap between heterogeneous language keys between Disqus and WordPress, allowing comments widget language to be customized according to core software locale
Author: Alessio Felicioni
Version: 1.0
Author URI: https://github.com/afelicioni/disqus-wordpress-localization-glue
*/

if (defined('DISQUS_VERSION'))
{
    class DWPLGlue
    {
        private static $glueTable = array(
            'ar'    => 'ar',
            'az'    => 'ar',
            'bg_BG' => 'bg',
            'bs_BA' => 'bs',
            'ca'    => 'ca',
            'cy'    => 'cy',
            'da_DK' => 'da',
            'de_DE' => 'de',
            'de_CH' => 'de',
            'el'    => 'el',
            'en_CA' => 'en_CA',
            'en_GB' => 'en',
            'en_AU' => 'en',
            //'eo'  => '',
            'es_MX' => 'es_MX',
            'es_PE' => 'es_ES',
            'es_ES' => 'es_ES',
            'es_CL' => 'es_CL',
            'eu'    => 'eu',
            'fa_IR' => 'fa',
            'fi'    => 'fi',
            'fr_FR' => 'fr',
            'gd'    => 'gd',
            'gl_ES' => 'gl',
            //'haz'   => '',
            'he_IL' => 'he',
            'hr'    => 'hr',
            'hu_HU' => 'hu',
            'id_ID' => 'id',
            'is_IS' => 'is',
            'it_IT' => 'it',
            'ja'    => 'ja',
            'ko_KR' => 'ko',
            'lt_LT' => 'lt',
            //'my_MM' => '',
            'nb_NO' => 'nb',
            'nl_NL' => 'nl',
            'pl_PL' => 'pl',
            //'ps'    => '',
            'pt_PT' => 'pt',
            'pt_BR' => 'pt_BR',
            'ro_RO' => 'ro',
            'ru_RU' => 'ru',
            'sk_SK' => 'sk',
            'sl_SI' => 'sl',
            'sr_RS' => 'sr',
            'sv_SE' => 'sv_SE',
            'th'    => 'th',
            'tr_TR' => 'tr',
            //'ug_CN' => '',
            'uk'    => 'uk',
            'zh_TW' => 'zh_TW',
            'zh_CN' => 'zh'
        );
        public static function glue()
        {
            $sWPLocale = get_locale();
            if (array_key_exists($sWPLocale, self::$glueTable))
            {
                return self::$glueTable[$sWPLocale];
            }
            return $sWPLocale;
        }
    }
    add_filter('disqus_language_filter', array('DWPLGlue', 'glue'));
}