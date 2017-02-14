<?php
    class Compare
    {
        function anagramCompare($first_word, $word_list)
        {
            $regExPattern = '/[' . $first_word . ']/i';
            preg_match_all($regExPattern, $word_list[0], $matches);
            $results = array(implode($matches[0]));

            return $results;
        }
    }

?>
