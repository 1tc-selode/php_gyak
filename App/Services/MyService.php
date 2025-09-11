<?php

    namespace App\Services;
    use App\Traits\GreetingTraits;
    use App\Traits\LoggerTraits;

    class MyService {
        use GreetingTrait, LoggerTrait;

        public function run($name="User") {
            $this->log("Service elindult");
            $this->sayHello($name);
        }
    }
?>