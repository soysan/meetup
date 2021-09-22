<?php
namespace App\MyClasses;

use Illuminate\Support\Carbon;

class User
{
    private string $username;
    private string $firstName;
    private string $lastName;
    private string $gender;
    private string $birthday;
    private string $nativeLanguage;
    private array $knownLanguages;
    private array $targetLanguages;
    private array $currentMeetingList;

    public function __construct($username, $firstName, $lastName, $gender, $birthday, $nativeLanguage, $knownLanguages, $targetLanguages, $currentMeetingList)
    {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->nativeLanguage = $nativeLanguage;
        $this->knownLanguages = [];
        $this->targetLanguages = [];
        $this->currentMeetingList = [];
    }
    public function getUsername(): string
    {
        return $this->username;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getGender(): string
    {
        return $this->gender;
    }
    public function getBirthday(): string
    {
        return $this->birthday;
    }
    public function getNativeLanguages(): string
    {
        return $this->nativeLanguage;
    }
    public function getKnownLanguages(): array
    {
        return $this->knownLanguages;
    }
    public function getTargetLanguages(): array
    {
        return $this->targetLanguages;
    }
    public function getCurrentMeetingList(): array
    {
        return $this->currentMeetingList;
    }
    public function setKnownLanguage(string $language): void
    {
        array_push($this->knownLanguages, $language);
    }
    public function setTargetLanguages(string $language): void
    {
        array_push($this->targetLanguages, $language);
    }
    public function setCurrentMeetingList(User $person): void
    {
        array_push($this->currentMeetingList, $person);
    }
    public function getAge()
    {
        $age = Carbon::parse($this->birthday);
        return $age;
    }
}