<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Alexey
 */
interface ParserInterface {
    //put your code here
    public function process(string $url, string $tag): array;
}
