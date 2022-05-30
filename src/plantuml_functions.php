<?php

namespace Jawira\PlantUml;

/**
 * Encodes a UML text description
 *
 * @param string $pumlCode PlantUml diagram, encoded in UTF8
 *
 * @return string Encoded string
 * @throws \Exception
 */
function encodep($pumlCode)
{
    $compressed = gzdeflate($pumlCode, 9);

    if (false === $compressed) {
        throw new \Exception('Error while compressing PlantUml diagram');
    }

    return encode64($compressed);
}

/**
 * @param string $compressed Compressed string
 *
 * @return string Encoded string
 */
function encode64($compressed)
{
    $encoded = '';
    $length = strlen($compressed);
    for ($i = 0; $i < $length; $i += 3) {
        switch ($length) {
            case $i + 1:
                $encoded .= append3bytes(ord($compressed[$i]), 0, 0);
                break;
            case $i + 2:
                $encoded .= append3bytes(ord($compressed[$i]), ord($compressed[$i + 1]), 0);
                break;
            default:
                $encoded .= append3bytes(ord($compressed[$i]), ord($compressed[$i + 1]), ord($compressed[$i + 2]));
                break;
        }
    }

    return $encoded;
}

/**
 * @param int $b1 First byte
 * @param int $b2 Second byte
 * @param int $b3 Third byte
 *
 * @return string
 */
function append3bytes($b1, $b2, $b3)
{
    $c1 = $b1 >> 2;
    $c2 = (($b1 & 0x3) << 4) | ($b2 >> 4);
    $c3 = (($b2 & 0xF) << 2) | ($b3 >> 6);
    $c4 = $b3 & 0x3F;
    $r = encode6bit($c1 & 0x3F);
    $r .= encode6bit($c2 & 0x3F);
    $r .= encode6bit($c3 & 0x3F);
    $r .= encode6bit($c4 & 0x3F);

    return $r;
}

/**
 * @param int $b
 *
 * @return string
 */
function encode6bit($b)
{
    if ($b < 10) {
        return chr(48 + $b);
    }
    $b -= 10;
    if ($b < 26) {
        return chr(65 + $b);
    }
    $b -= 26;
    if ($b < 26) {
        return chr(97 + $b);
    }
    $b -= 26;
    if ($b === 0) {
        return '-';
    }
    if ($b === 1) {
        return '_';
    }

    return '?';
}
