<!--<link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">-->
<?php

    namespace Appp\Models;
    use Appp\Models\Person;

    class BusinessCard extends Person{
        public string $company;

        public function __construct(?int $id, string $name, string $email, string $phone, string $company)
        {
            parent:: __construct($id,$name,$email,$phone);
            $this->company = $company;
        }

        public function displayCard(): string{
            return "Név: {$this->name} | Email {$this->email} | Cég {$this->company}";
        }
    }

?>