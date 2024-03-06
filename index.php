<?php
    $input_text = "afdsg gfdhydf";

    function text_redact($input_text) {
        $unspace_text = str_replace(' ', '', $input_text);
        $redacted_text = str_split($unspace_text);

        for ($q = 0; $q < count($redacted_text); $q++) {
            if ($q % 2 == 0) {
                $redacted_text[$q] = mb_strtoupper($redacted_text[$q]);
            } else {
                $redacted_text[$q] = mb_strtolower($redacted_text[$q]);
            }
        }
        return implode('', $redacted_text);
    }

    $finish_text = text_redact($input_text);
    echo $finish_text;
