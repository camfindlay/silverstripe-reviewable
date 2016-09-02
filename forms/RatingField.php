<?php
namespace Reviewable;

class RatingField extends \FormField {

    public function __construct($name, $title = null, $value = null) {

        parent::__construct($name, $title, $value);

        $this->setTemplate('Reviewable_RatingField');

        \Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
        \Requirements::javascript(REVIEWABLE_MODULE . '/javascript/jquery.raty.js');
        \Requirements::javascript(REVIEWABLE_MODULE . '/javascript/reviewable.js');

        // simple theme only
        if (\Config::inst()->get('SSViewer', 'theme') == 'simple') {
            \Requirements::customCSS('.typography .rateable-ui img{border:0;background:none;}');
        }
    }

}