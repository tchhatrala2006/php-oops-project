<?php   

class account{
    private $aid;
    public $name;
    // public $balance;
    public function __construct($aid,$name)
   {
       $this->aid=$aid;
       $this->name=$name;
   
   }
  final public function getterid(){
    return "Account Number: ".$this->aid."<br>";
   }
   public function main(){
       echo "Account Holder Name: ".$this->name."<br>";
      
   
   }

}

class saving extends account{
     public $num;
     public $num1;
     public $balance;

     public function __construct($aid,$name,$balance,$num,$num1){
        parent::__construct($aid,$name);
        $this->num=$num;
        $this->num1=$num1;
        $this->balance=$balance;

     }
     public function balance(){
         echo "Saving Account Balance: ".$this->balance."<br>";
     }
    public function Decrease(){
     
        $this->balance=$this->balance-$this->num;
        echo "After Debit Balance: ".$this->balance."<br>";

    }
    public function Increase(){
       $this->balance=$this->balance+$this->num1;
        echo "After Creadit Balance: ".$this->balance."<br>";

    }
}
$saving=new saving(12345678,'Tirth',20000,2000,1000);
echo $saving->getterid();
$saving->main();
echo "Saving Account Class inheritance account class"."<br>";
$saving->balance();
$saving->Decrease();
$saving->Increase();

class current extends account{
     public $num;
     public $num1;
      public $balance;

     public function __construct($aid,$name,$balance,$num,$num1){
        parent::__construct($aid,$name,$balance);
        $this->num=$num;
        $this->num1=$num1;
        $this->balance=$balance;

     }
     public function balance(){
         echo "Current Account Balance: ".$this->balance."<br>";
     }
    public function Decrease(){
     
        $this->balance=$this->balance-$this->num;
        echo "After Debit Balance: ".$this->balance."<br>";

    }
    public function Increase(){
       $this->balance=$this->balance+$this->num1;
        echo "After Creadit Balance: ".$this->balance."<br>";

    }
}
echo "Current Account Class inheritance account class"."<br>";
$current=new current(12345678,'Tirth',100000,2000,5000);
echo $current->getterid();
$current->main();
$current->balance();
$current->Decrease();
$current->Increase();

?>