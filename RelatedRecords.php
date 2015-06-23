<?php

namespace TracesThroughTime;

class RelatedRecords {
    const INITIAL_TEXT = "The following record(s) may be related to an individual mentioned in this description. The percentage shows the degrees of similarity.";
    const CLOSING_TEXT = "This link has been system generated to aid research. We cannot guarantee it is the same individual.";
    private $records;

    /**
     * @param mixed $record
     */
    public function addRecord(Record $record)
    {
        $this->records[] = $record;
    }

    public function printRecords(){
        foreach ($this->records as $r) {
            $r->printRecord();
        }

    }


    public function printInitialText()
    {
        printf("<p>%s</p>", self::INITIAL_TEXT);
    }

    public function printClosingText() {
        printf("<p>%s</p>", self::CLOSING_TEXT);
    }

}