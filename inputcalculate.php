<form method="post">
    
    <input type="text" name="one" id="one" class="form-control" >
    <br >
 
    <input type="text" name="two" id="two" class="form-control">
    <br /><br />
    <input type="submit" name="submit">
 </form>
   
   <h4><b>Result:</b></h4>  
   <br >
     <?php 
     if($_POST){
         $sum=0;
         $multiply=0;
         $subtraction=0;
         $division=0;
         $one=$_POST['one'];
         $two=$_POST['two'];
         $sum=$one+$two;
         $div=$one/$two;
         $multiply=$one*$two;
         $subtraction=$one-$two;

         echo "Number 1: $one";
         echo "<br>";
         echo "Number 2: $two";
         echo "<br>";
         echo "Sum: $sum";
         echo "<br>";
         echo "Multiply: $multiply";
         echo "<br>";
         echo "Subtraction: $subtraction";
         echo "<br>";
         echo "Division: $div";

         }
?>