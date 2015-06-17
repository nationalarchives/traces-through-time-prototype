<?php
/**
 * Created by PhpStorm.
 * User: TNAwebteam
 * Date: 17/06/15
 * Time: 18:27
 */

namespace TracesThroughTime;


class RelatedRecord {
    private $introText = "The following record(s) may relate to an individual mentioned in this description. The percentage shows the degrees of similarity.";
    private $disclaimer = "This link has been system generated to aid research. Please note we cannot guarantee it is the same individual.";
    private $linkText;
    private $percentage;
    private $linkedDocument;

    function __construct(
        $linkText = "Default link text - no text provided to constructor",
        $percentage = 0,
        $linkedDocument = "Default - linked document not provided to constructor")
    {
        $this->linkText = $linkText;
        $this->percentage = $percentage;
        $this->linkedDocument = $linkedDocument;
    }

    /**
     * @return string
     */
    public function getLinkedDocument()
    {
        return $this->linkedDocument;
    }

    /**
     * @return int
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    public function printPercentage(){
        echo $this->getPercentage() . '% similarity';
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    public function printLink(){
        $format = "<a href='%s'>%s<a>";
        printf($format, $this->getLinkedDocument(), $this->getLinkText());
    }

    /**
     * @return string
     */
    public function getIntroText()
    {
        return $this->introText;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    public function printIntroText()
    {
        echo $this->getIntroText();
    }

    public function printDisclaimer(){
        echo $this->getDisclaimer();
    }


}