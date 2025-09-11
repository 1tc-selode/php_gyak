<?php
  
    class MyService {
        use GreetingTraits;
        use LoggerTraits;

        public function run() {
            $this->log("MyService elindult");
            echo $this->sayHello()."<br>";
            $this->log("MyService vege");
        }
    }



?>