<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait HasLocalization
{
    public function getAttribute($key)
    {
        if (in_array($key, $this->localized ?? [])) {
            $locale       = App::getLocale();
            $localizedKey = $key . '_' . $locale;

            return parent::getAttribute($localizedKey);
        }

        return parent::getAttribute($key);
    }
}
