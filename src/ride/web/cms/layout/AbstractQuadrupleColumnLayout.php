<?php

namespace ride\web\cms\layout;

use ride\library\cms\layout\AbstractLayout;

/**
 * Triple block page layout
 */
class AbstractQuadrupleColumnLayout extends AbstractLayout {

    /**
     * Constructs a new layout
     * @return null
     */
    public function __construct() {
        $this->regions = array(
            'block1' => 'block1',
            'block2' => 'block2',
            'block3' => 'block3',
            'block4' => 'block4',
        );
    }

}
