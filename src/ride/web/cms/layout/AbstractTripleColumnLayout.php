<?php

namespace ride\web\cms\layout;

use ride\library\cms\layout\AbstractLayout;

/**
 * Triple column page layout
 */
class AbstractTripleColumnLayout extends AbstractLayout {

    /**
     * Constructs a new layout
     * @return null
     */
    public function __construct() {
        $this->regions = array(
            'column1' => 'column1',
            'column2' => 'column2',
            'column3' => 'column3',
        );
    }

}
