<?php
/**
 * Created by PhpStorm.
 * User: gwynjones
 * Date: 19/06/15
 * Time: 18:26
 */

namespace TracesThroughTime;


class Record {
    private $title;
    private $linkText;
    private $linkHref;
    private $percentage;

    private $format = "<div class='related-record'><a href='%s'>%s</a> <span class=\"confidence\">%s&percnt; similarity</span></div>";
    private $formatTitle = "<h2><span><span>%s elsewhere</span></span></h2>";


    public function printRecord(){
        printf($this->format, $this->linkHref, $this->linkText, $this->percentage);
    }

    public function printTitle(){
        printf($this->formatTitle, $this->title);
    }
    function __construct($arr)
    {
        $this->title = $arr['title'];
        $this->linkText = $arr['linkText'];
        $this->linkHref = $arr['linkHref'];
        $this->percentage = $arr['percentage'];
    }
}