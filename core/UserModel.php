<?php

namespace app\core;

abstract class degisecek extends DbModel
{
    abstract public function getDisplayName(): string;
}
