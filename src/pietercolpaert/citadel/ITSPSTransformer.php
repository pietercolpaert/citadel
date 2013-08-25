<?php

namespace pietercolpaert\citadel;

class ITSPSTransformer implements \tdt\core\tdtext\ITransformer{
    public function transform(&$object){
        var_dump($object);
    }
}
