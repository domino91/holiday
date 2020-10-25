<?php

/*
 * This file is part of the umulmrum/holiday package.
 *
 * (c) Stefan Kruppa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umulmrum\Holiday\Test;

use umulmrum\Holiday\Model\Holiday;
use umulmrum\Holiday\Translator\TranslatorInterface;

final class TranslatorStub implements TranslatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function translateName(Holiday $holiday): string
    {
        return $this->translate($holiday->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function translate(string $string): string
    {
        switch ($string) {
            case 'name': return 'Very name';
            case 'day_off': return 'Day off';
            case 'religious': return 'Religious';
            default: return '';
        }
    }
}
