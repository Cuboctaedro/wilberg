<?php


class EventPage extends Page {

    public function subjectTitle() {
        return $this->subject()->toPage()->title();
    }

    public function subjectID() {
        return $this->subject()->toPage()->sectionid();
    }

    public function panelTableTitle() {
        return $this->title() . ' | ' . $this->subjectTitle();
    }

    public function panelTableData() {
        return $this->date()->toDate('d.m.Y') . ' | ' . $this->location();
    }
}