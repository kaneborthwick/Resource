<?php

declare (strict_types = 1);

namespace Towersystems\Resource\StateMachine;

use SM\StateMachine\StateMachineInterface as BaseStateMachineInterface;

/**
 * @author Alexandre Bacco <alexandre.bacco@gmail.com>
 */
interface StateMachineInterface extends BaseStateMachineInterface {
    /**
     * Returns the possible transition from given state
     * Returns null if no transition is possible
     *
     * @param string $fromState
     *
     * @return string|null
     */
    public function getTransitionFromState(string $fromState):  ? string;

    /**
     * Returns the possible transition to the given state
     * Returns null if no transition is possible
     *
     * @param string $toState
     *
     * @return string|null
     */
    public function getTransitionToState(string $toState) :  ? string;
}
