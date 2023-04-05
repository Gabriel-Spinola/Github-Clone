<?php

namespace Controllers;

abstract class Controller {
    /** Rerence to model class */
    protected object $view;

    /** Rerence to model class */
    protected object $model;

    public abstract function execute(): void;
}