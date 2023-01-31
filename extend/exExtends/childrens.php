<?php

namespace exExtends;

class childrens extends people
{
    public function bo() {
        echo "trẻ con bò bằng " . $this->chan. "chân" . $this->tay. "tay";
    }
}