<?php

namespace TracesThroughTime;

class RelatedRecords {
    const INITIAL_TEXT = "The following record(s) may be related to the individual mentioned in this description. The percentage shows the likelihood it is a match. We cannot guarantee it is the same individual.";
    const CLOSING_TEXT = "This automatic tool only finds possible matches across certain records.";
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

    public function printTitle(){
        foreach ($this->records as $r) {
            $r->printTitle();
            break;
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