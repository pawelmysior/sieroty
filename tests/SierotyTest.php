<?php

namespace PawelMysior\Sieroty\Tests;

use PHPUnit\Framework\TestCase;

class SierotyTest extends TestCase
{
    /** @test */
    public function it_adds_a_non_breaking_space_after_single_letter_words()
    {
        $text = 'Warunki zaliczenia ćwiczeń i ocena końcowa';

        $modifiedText = sieroty($text);

        $this->assertEquals('Warunki zaliczenia ćwiczeń i&nbsp;ocena końcowa', $modifiedText);
    }
}
