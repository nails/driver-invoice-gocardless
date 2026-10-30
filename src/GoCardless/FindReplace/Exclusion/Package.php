<?php

namespace Nails\Invoice\Driver\Payment\GoCardless\FindReplace\Exclusion;

use Nails\FindReplace\Interfaces\Exclusion;

class Package implements Exclusion
{
    public function hidden(): array
    {
        return [
            NAILS_DB_PREFIX . 'user_meta_invoice_gocardless_mandate.mandate_id',
        ];
    }

    public function readOnly(): array
    {
        return [
            NAILS_DB_PREFIX . 'user_meta_invoice_gocardless_mandate.label',
        ];
    }
}
