<?php
/**
 * User: Senchuk Roman
 *
 * @package Cook
 */

namespace Cook {


    trait TraitCut {
        public function cut(){
            echo $this->getName() . " got cut".PHP_EOL;;
        }
    }
}