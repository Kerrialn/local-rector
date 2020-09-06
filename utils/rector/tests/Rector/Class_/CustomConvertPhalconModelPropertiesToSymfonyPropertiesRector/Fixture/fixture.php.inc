<?php

namespace Utils\Rector\Tests\Rector\Class_\CustomConvertPhalconModelPropertiesToSymfonyPropertiesRector\Fixture;

final class SomeClass
{
     /** @var integer */
     public $id;
}

?>
-----
<?php

namespace Utils\Rector\Tests\Rector\Class_\CustomConvertPhalconModelPropertiesToSymfonyPropertiesRector\Fixture;

final class SomeClass 
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;
}

?>
