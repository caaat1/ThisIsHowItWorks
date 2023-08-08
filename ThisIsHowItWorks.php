<?php

$Experience =
    (new Situation)->workOn($myMistakes ?? null);

class Situation
{
    public function workOn(?array $myMistakes): ?Experience
    {
        if ($myMistakes == null) {
            return
                null or AtLeastSomeLimited::experience(
                    outOf: $myMistakes
                );
        }
        return
            FullScale::experience(
                outOf: $myMistakes
            );
    }
}

class AtLeastSomeLimited extends Experience
{
}
class FullScale extends Experience
{
    public function __construct(
        private array $outOf
    ) {
        #...
    }
}
class Experience
{
    public function experience(
        private array $outOf
    ) {
        #...
    }
}
