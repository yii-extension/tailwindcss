<?php

declare(strict_types=1);

namespace Yii\Extension\Tailwind\Tests\TestSupport;

use Yii\Extension\Tailwind\Widget;

final class StubWidget extends Widget
{
    protected function run(): string
    {
        return '<run-' . $this->getId() . '>';
    }
}
