<?php

namespace barrelstrength\sproutforms\base;

use craft\base\SavableComponent;

/**
 * Defines a condition that can be applied to a Rule
 *
 * @property string $label
 * @property string $value
 */
abstract class Condition extends SavableComponent implements ConditionInterface
{
    /**
     * @var $formField FormField
     */
    public $formField;

    /**
     * @var $inputValue string
     */
    public $inputValue;

    /**
     * @var $ruleValue string
     */
    public $ruleValue;


    /**
     * @inheritDoc
     */
    public function getLabel(): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getValue(): string
    {
        return '';
    }
}
