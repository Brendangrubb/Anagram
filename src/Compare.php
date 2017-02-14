<?php
    class Compare
    {
        function anagramCompare($first_word, $word_list)
        {
            $results = array();
            $regExPattern = '/[' . $first_word . ']/i';
            foreach ($word_list as $word) {
                preg_match_all($regExPattern, $word, $matches);
                array_push($results, implode($matches[0]));
            }

            return $results;
        }
    }

?>
