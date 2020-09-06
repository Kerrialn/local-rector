<?php

declare(strict_types=1);

namespace Utils\Rector\Tests\Rector\Class_\CustomConvertPhalconModelPropertiesToSymfonyPropertiesRector;

use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;

final class CustomConvertPhalconModelPropertiesToSymfonyPropertiesRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(\Symplify\SmartFileSystem\SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): \Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return \Utils\Rector\Rector\Class_\CustomConvertPhalconModelPropertiesToSymfonyPropertiesRector::class;
    }
}
