<?php

namespace pallo\web\cms\layout;

use pallo\library\cms\layout\AbstractLayout;

/**
 * Single column page layout
 */
class SingleColumnLayout extends AbstractLayout {

    /**
     * Machine name of the layout
     * @var unknown
     */
    const NAME = 'single';

    /**
     * Constructs a new layout
     * @return null
     */
    public function __construct() {
        $this->regions = array(
        	'column1' => 'column1',
        );
    }

}