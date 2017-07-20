<?php

class Bob
{
    public function respondTo($string)
    {
        if ($this->isScream($string)) {
            return "Whoa, chill out!";
        }

        if ($this->isQuestion($string)) {
            return "Sure.";
        }

        if ($this->doNotSayAnything($string)) {
            return "Fine. Be that way!";
        }

        return "Whatever.";
    }

    private function isScream($string)
    {
        $disinfected_string = $this->sanitizeScream($string);
        return ctype_upper($disinfected_string);
    }

    private function isQuestion($string)
    {
        $string_without_whitespace = $this->sanitizeWhitespace($string);
        return substr($string_without_whitespace, -1) == '?' ? true : false;
    }

    private function doNotSayAnything($string)
    {
        $string_without_whitespace = $this->sanitizeWhitespace($string);
        return empty($string_without_whitespace);
    }

    private function sanitizeScream($string)
    {
        return preg_replace('/[ÄÜ0-9\s\(\)%*@#^$!?,]+/', '', $string);
    }

    private function sanitizeWhitespace($string)
    {
        return preg_replace('/[\\\u000b\\\u00a0\\\u2002u\s+]/', '', $string);
    }

}