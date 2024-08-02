<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Calculadora{

            private $num1;
            

            public function __construct($num1){
                $this->num1 = $num1;
                
            }

            public function getNum1(){
                return $this->num1;
            }

            
            public function setNum1($novoNum1){
                $this->num1 = $novoNum1;
            }


        }
        
        $numero1 = new Calculadora("2");
        $numero2 = new Calculadora("3");

        echo "numero 1 é igual a: " . $numero1->getNum1() . "<br>";
        $numero1->setNum1(2);

        $numero2->setNum1(3);
        echo "numero 2 é igual a: " . $numero2->getNum1() . "<br>";
        
        echo "A soma entre os dois é: " . $numero1 + $numero2;


    ?>
</body>
</html>