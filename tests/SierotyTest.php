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

    /** @test */
    public function it_adds_a_non_breaking_space_after_single_letter_word_at_the_start_of_a_sentence()
    {
        $text = 'Tutaj nic nie ma. W tym słoiku.';

        $modifiedText = sieroty($text);

        $this->assertEquals('Tutaj nic nie ma. W&nbsp;tym słoiku.', $modifiedText);
    }

    /** @test */
    public function it_adds_a_non_breaking_space_after_single_letter_word_at_the_start_of_the_string()
    {
        $text = 'W tym słoiku';

        $modifiedText = sieroty($text);

        $this->assertEquals('W&nbsp;tym słoiku', $modifiedText);
    }
}
