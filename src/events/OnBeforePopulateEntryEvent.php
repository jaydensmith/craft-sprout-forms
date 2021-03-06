<?php

namespace barrelstrength\sproutforms\events;

use barrelstrength\sproutforms\elements\Form;
use yii\base\Event;

/**
 * OnBeforePopulateEntryEvent class.
 */
class OnBeforePopulateEntryEvent extends Event
{
    /**
     * @var Form
     */
    public $form;
}
