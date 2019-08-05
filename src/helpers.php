<?php

function sieroty(string $string): string
{
    return preg_replace('/(^| )([a-z]) /i', '$1$2&nbsp;', $string);
}
