<?php
    namespace Appp\Services;
    use Appp\Models\BusinessCard;
    use PDO;

    class CardManager{
        private PDO $pdo;
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        //private array $cards = [];

        public function addCard(BusinessCard $card):void
        {
            $stmt = $this->pdo->prepare("INSERT INTO business_cards (name,email,phone,company) VALUES (?,?,?,?)");
            $stmt->execute([
                $card->name,
                $card->getEmail(),
                $card->getPhone(),
                $card->company
            ]);
            echo "nevjegy sikeresen hozzadva";

            //$this->cards[] = $card;
        }

        /*public function getCards():array
        {
            return $this->cards;
        }*/
    }
?>