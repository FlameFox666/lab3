<?php
    $input_text = "In the realm of technology, constant innovation shapes our digital landscape. As we navigate the dynamic currents of the information age, breakthroughs in artificial intelligence, cybersecurity, and data analytics redefine the possibilities. The interconnected world thrives on the seamless integration of smart devices and the Internet of Things. However, this evolution brings forth challenges, such as the need for robust privacy measures and sustainable practices. The quest for efficient, eco-friendly technologies becomes increasingly vital. In the expansive realm of science, discoveries propel us into new frontiers. From unraveling the mysteries of the cosmos to advancing medical breakthroughs, the scientific community fuels our understanding of the universe. Collaborative efforts transcend borders, fostering a global exchange of knowledge. Whether delving into quantum physics or exploring the intricacies of the human genome, each revelation expands the tapestry of human comprehension. Ultimately, the synergy between technology and science propels humanity forward, offering a glimpse into a future where innovation becomes the cornerstone of progress and understanding.";

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
