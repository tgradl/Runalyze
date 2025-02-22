<?php

namespace Runalyze\Bundle\CoreBundle\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class PipeDelimitedArray extends Type
{
    /** @var string */
    const PIPE_ARRAY = 'pipe_array';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getClobTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (!is_array($value) || empty($value)) {
            return null;
        }

        return implode('|', $value);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null || '' == trim($value)) {
            return null;
        }

        $value = (is_resource($value)) ? stream_get_contents($value) : $value;

        return array_map(function ($v) {
            if (is_numeric($v)) {
                return $v + 0;
            } else {
                return null;
            }
        }, explode('|', $value));
    }

    public function getName()
    {
        return self::PIPE_ARRAY;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
