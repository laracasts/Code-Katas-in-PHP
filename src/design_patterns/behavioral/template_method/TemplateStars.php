<?php

class TemplateStars extends TemplateAbstract
{
    /**
     * @param string $title
     * @return string
     */
    public function processTitle($title)
    {
        return Str_replace(' ','*',$title);
    }
}