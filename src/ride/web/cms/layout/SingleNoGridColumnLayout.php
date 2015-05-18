<?php

namespace ride\web\cms\layout;

use ride\library\cms\layout\AbstractLayout;

/**
 * Single column page layout
 */
class SingleNoGridColumnLayout extends AbstractLayout {

    /**
     * Machine name of the layout
     * @var unknown
     */
    const NAME = '100-no-grid';

    /**
     * Constructs a new layout
     * @return null
     */
    public function __construct() {
        $this->blocks = array(
        	'block1' => 'block1',
        );
    }

}
