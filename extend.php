<?php

/*
 * This file is part of Flarum.
 *
 * Flarum Task List Extension by Santhosh Veer. https://santhoshveer.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[checkbox]{TEXT1}[/checkbox]',
                '<span><input type="checkbox" style="margin-right: 10px" disabled>{TEXT1}</span>'
            );
            $config->BBCodes->addCustom(
                '[checkbox=checked]{TEXT2}[/checkbox]',
                '<span><input type="checkbox" style="margin-right: 10px" checked disabled>{TEXT2}</span>'
            );
        })
];
