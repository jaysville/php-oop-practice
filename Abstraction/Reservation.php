<?php
    
    class Reservation 
    {
        private $host = 'Host class'; //Host class
        private $guest ='Guest Class'; //Guest Class


        public function cancel(){
            $this->sendCancellationNotification();
            $this->refundGuest();

            echo 'And a load of other stuff that happens';
        }







        private function sendCancellationNotification(){
            echo 'Sending notificaton to ' .$this->host . '<br>';
        }
        private function refundGuest(){

       echo 'Refunding ' . $this->guest .'<br>';

        }
    }