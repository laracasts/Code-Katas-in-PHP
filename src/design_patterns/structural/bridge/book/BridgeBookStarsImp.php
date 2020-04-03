<?php

class BridgeBookStarsImp extends BridgeBookImp {

    /**
     * @param string $author_in
     * @return mixed
     */
    public function showAuthor($author_in) {
       return Str_replace(" ","*",$author_in);
    }

    /**
     * @param string $title_in
     * @return mixed
     */
    public function showTitle($title_in) {
        return Str_replace(" ","*",$title_in);
    }
}
