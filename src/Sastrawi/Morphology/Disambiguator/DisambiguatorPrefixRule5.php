<?php

namespace Sastrawi\Morphology\Disambiguator;

/**
 * Disambiguate Prefix Rule 5
 * Rule 5 : beC1erC2 -> be-C1erC2 where C1 != 'r'
 */
class DisambiguatorPrefixRule5 implements DisambiguatorInterface
{
    /**
     * Disambiguate Prefix Rule 5
     * Rule 5 : beC1erC2 -> be-C1erC2 where C1 != 'r'
     */
    public function disambiguate($word)
    {
        $matches  = null;
        $contains = preg_match('/^be([bcdfghjklmnpqstvwxyz])(er[bcdfghjklmnpqrstvwxyz])(.*)$/', $word, $matches);

        if ($contains === 1) {
            return $matches[1] . $matches[2] . $matches[3];
        }
    }
}
