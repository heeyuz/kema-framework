<?php

namespace Kema\Kema;

use Kema\Kema\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}