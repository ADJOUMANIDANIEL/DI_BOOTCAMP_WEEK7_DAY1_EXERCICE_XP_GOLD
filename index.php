<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXERCICE 1</h1>

        <h3 style="color:orange; font-size:25px;">
            <?php 
            class Calculator {
                private $valeur1, $valeur2;
                public function __construct( $first_val, $second_val ) {
                $this->valeur1 = $first_val;
                $this->valeur2 = $second_val;
                }
                    public function add() {
                        return $this->valeur1 + $this->valeur2;
                    }
                    public function subtract() {
                        return $this->valeur1 - $this->valeur2;
                    }
                    public function multiply() {
                        return $this->valeur1 * $this->valeur2;
                    }
                    public function divide() {
                        return $this->valeur1 / $this->valeur2;
                    }
                }
                $mycalc = new Calculator(12, 6); 
                echo"l'addition de 12 et 6 est : ", $mycalc-> add()." <br>\n"; // Displays 18 
                echo "la multiplication de 12 et 6 est : ", $mycalc-> multiply()."<br>\n"; // Displays 72
                echo "la soustraction de 12 et 6 est : ", $mycalc-> subtract()."<br>\n"; // Displays 6
                echo "la division de 12 et 6 est : ",$mycalc-> divide()."<br>\n"; // Displays 2
            ?>
        </h3>
<hr>
<h1>EXERCICE 2 </h1>
        <h3 style="color:blue; font-size:25px;">
            <?php 
            
            class Produit{
                public $name,$description,$price;
                public function product1(){
                   return $this->name = "iPhone 14";
                }

                public function product2(){

                    return $this->name = "iPhone 14 Pro";
                }
            }
            $stockClass = new Produit();
            echo "Le nom du premier est : ", $stockClass->product1()."<br/>";
            echo "Le nom du deuxieme produit est  : ", $stockClass->product2()
            ?>
        </h3>
<hr>
<h1>EXERCICE 3 </h1>
       
    <h3 style="color:red; font-size:25px;">
            <?php 
            
            class Product{
                private $name,$description,$price;
                public function __construct( $name, $description,$price ) {
                    $this->name = $name;
                    $this->description = $description;
                    $this->price = $price;
                    }
                public function product1(){
                   return $this->name = "iPhone 12 " . $this->description = "This is a great iPhone " . $this->price = 799.99;
                  
                }

                public function product2(){

                    // return $this->name = "iPhone 14 Pro";
                }
            }
            $product1 = new Product($name, $price, $description);
            echo $product1->product1()."<br/>";
       
			class MyCalculator {
			private $_fval, $_sval;
			public function __construct( $fval, $sval ) {
			$this->_fval = $fval;
			$this->_sval = $sval;
			}
			public function add() {
			return $this->_fval + $this->_sval;
			}
			public function subtract() {
			return $this->_fval - $this->_sval;
			}
			public function multiply() {
			return $this->_fval * $this->_sval;
			}
			public function divide() {
			return $this->_fval / $this->_sval;
			}
			}
			$mycalc = new MyCalculator(12, 6); 
			echo $mycalc-> add()."\n"; // Displays 18 
			echo $mycalc-> multiply()."\n"; // Displays 72
			echo $mycalc-> subtract()."\n"; // Displays 6
			echo $mycalc-> divide()."\n"; // Displays 2
	?>
    </h3>
</body>
</html>

