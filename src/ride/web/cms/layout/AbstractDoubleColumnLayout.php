<?php

namespace ride\web\cms\layout;

use ride\library\cms\layout\AbstractLayout;

/**
 * Double column page layout
 */
class AbstractDoubleColumnLayout extends AbstractLayout {

    /**
     * Constructs a new layout
     * @return null
     */
    public function __construct() {
        $this->regions = array(
        	'block1' => 'block1',
        	'block2' => 'block2',
        );
    }

}
