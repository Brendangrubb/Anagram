<?php
    class Compare
    {
        function anagramCompare($first_word, $word_list)
        {
            $results = array();
            $correctCharacters = str_split($first_word);
            $countCharacters = array_count_values($correctCharacters);
            $regExPattern = '/[' . $first_word . ']/i';
            foreach ($word_list as $word) {
                preg_match_all($regExPattern, $word, $matches);
                if ($matches[0]) {
                    $charCount = true;
                    $matchesCountValues = array_count_values($matches[0]);
                    foreach ($countCharacters as $key => $count) {
                        if (!$matchesCountValues[$key]) {
                            $charCount = false;
                        }
                    }
                    if ($charCount) {
                        array_push($results, implode($matches[0]));
                    }
                }
            }

            return $results;
        }
    }

?>
