<?php

namespace Example\Log;

class Console {

        public function println($line, $emphasis=false) {
                if($emphasis){
                        $line = "\e[0;35m{$line}\e[0m";
                }

                echo  "{$line}\n";
        }

}