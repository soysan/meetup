<?php
namespace App\MyClasses;

use App\MyClasses\User;

class Meeting {
    private string $hostUsername;
    private string $title;
    private string $meetDate;
    private string $location;
    private string $languageA;
    private string $languageB;
    private array $participants;
    private int $min;
    private int $max;
    public int $count = 0;

    public function __construct($hostUsername, $title, $meetDate, $location, $languageA, $languageB, $participants, $min, $max)
    {
        $this->hostUsername = $hostUsername;
        $this->title = $title;
        $this->meetDate = $meetDate;
        $this->location = $location;
        $this->languageA = $languageA;
        $this->languageB = $languageB;
        $this->participants = $participants;
        $this->min = $min;
        $this->max = $max;
    }

    public function getHostUserName(): string
    {
        return $this->hostUsername;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getMeetDate(): string
    {
        return $this->meetDate;
    }
    public function getLocation(): string
    {
        return $this->location;
    }
    public function getLanguageA(): string
    {
        return $this->languageA;
    }
    public function getLanguageB(): string
    {
        return $this->languageB;
    }
    public function getParticipants(): array
    {
        return $this->participants;
    }
    public function getMin(): int
    {
        return $this->min;
    }
    public function getMax(): int
    {
        return $this->max;
    }
    public function addParticipant(User $participant): bool
    {
        if($this->count < $this->max &&
         ($participant->getKnownLanguages() == $this->languageA || $participant->getKnownLanguages() == $this->languageB) &&
         ($participant->getNativeLanguages() == $this->languageA || $participant->getNativeLanguages()== $this->languageB)
         ) {
             $this->count++;
             return true;
         } else {
             return false;
         }
    }
}