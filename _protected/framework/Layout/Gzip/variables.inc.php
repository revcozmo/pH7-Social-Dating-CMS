<?php
/**
 * @title            CSS & JS dynamic variables
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2015, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Layout / Gzip
 */
namespace PH7\Framework\Layout\Gzip;
defined('PH7') or exit('Restricted access');

return array(
    'url_theme' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL, // Replace the "[$url_tpl_css]" variable
    'url_def_tpl_css' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL . PH7_DEFAULT_THEME . PH7_SH . PH7_CSS, // Replace the "[$url_def_tpl_css]" variable
    'url_def_tpl_js' => PH7_URL_ROOT . PH7_LAYOUT . PH7_TPL . PH7_DEFAULT_THEME . PH7_SH . PH7_JS, // Replace the "[$url_def_tpl_js]" variable
);
