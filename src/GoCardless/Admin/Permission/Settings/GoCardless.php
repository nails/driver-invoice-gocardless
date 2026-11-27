<?php

namespace Nails\Invoice\Driver\Payment\GoCardless\Admin\Permission\Settings;

use Nails\Admin\Interfaces\Permission;

class GoCardless implements Permission
{
    public function label(): string
    {
        return 'Can manage GoCardless settings';
    }

    public function group(): string
    {
        return 'Settings';
    }
}
