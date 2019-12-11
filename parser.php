<?php

require_once 'ParserInterface.php';


class parser implements ParserInterface{
    public function process(string $url, string $tag)
            {
        return [
            'just',
            'do',
            'id'
        ];
    }
    
}
