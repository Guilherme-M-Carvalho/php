<?php

    //implements herda ao filho somento os metodos

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();

        //todos os metodos devem ser publicos
    }

    class Geladeira implements EquipamentoEletronicoInterface{

        public function ligar(){
            echo "Ligar";
        }
        public function desligar(){
            echo "Desligar";
        }

        public function AbirPorta(){
            
        }
    }

    class Tv implements EquipamentoEletronicoInterface{
        public function TrocarCanal(){

        }
        public function ligar(){
            echo "Ligar";
        }
        public function desligar(){
            echo "Desligar";
        }
    }

    $x = new Geladeira();
    $y = new Tv();


   interface MamiferoInterface{
       public function respirar();
   } 
   interface TerrestreInterface{
       public function andar();
   } 
   interface AquaticoInterface{
       public function nadar();
   } 

   class Humano implements MamiferoInterface, TerrestreInterface{
        public function respirar(){
            echo "respirar";
        }
        public function andar(){
            echo "andar";
        }

        public function conversar()
        {
            echo "conversar";
        }
   }

   class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo "respirar";
        }
        public function nadar(){
            echo "nadar";
        }
        public function esguichar(){
            echo "esguichar";
        }
   }


   interface AnimalInterface{
       public function comer();
   }
   interface AveInterface extends AnimalInterface{
       public function voar();
   }

   class Papagaio implements AveInterface{
        public function voar(){
            echo "voar";
        }
        public function comer(){
            echo "comer";
        }
   }

?>