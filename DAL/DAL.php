<?php
require_once('settings.php');
class Database
{  

    private static $conn  = null;
     
    public static function DB()
    {       
    if (!isset(self::$conn)) {
      
          self::$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
      self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
           return self::$conn;
    }
}

class carton{ 

  //search the goods out table for products not saved on the products table
  public function getStyles(){
  $pdo = Database::DB();
  $stmt = $pdo->prepare('select *
    from style
    ');
   $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}

public function getFlutes(){
  $pdo= Database::DB();
  $stmt = $pdo->prepare('select *
    from flute');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function getGrades(){
  $pdo= Database::DB();
  $stmt = $pdo->prepare('select *
    from grade');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getLiners(){
  $pdo= Database::DB();
  $stmt = $pdo->prepare('select *
    from liner');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getFinish(){
  $pdo= Database::DB();
  $stmt = $pdo->prepare('select *
    from finish');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getCategories(){
  $pdo= Database::DB();
  $stmt = $pdo->prepare('select *
    from category');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function addStyle($style,$height,$width,$length,$breadth,$glueFlap,$trimWidth,$trimLength,$image){
  $pdo = Database::DB();
  $stmt = $pdo->prepare('insert into style
    (name, height, width, length, breadth, glueFlap, trimWidth, trimLength, image)
    values (?,?,?,?,?,?,?,?,?)');
  $stmt->bindvalue(1, $style);
  $stmt->bindvalue(2, $height);
  $stmt->bindvalue(3, $width);
  $stmt->bindvalue(4, $length);
  $stmt->bindvalue(5, $breadth);
  $stmt->bindvalue(6, $glueFlap);
  $stmt->bindvalue(7, $trimWidth);
  $stmt->bindvalue(8, $trimLength);
  $stmt->bindvalue(9, $image);
  $stmt->execute();

}

public function addJob($ref, $style, $height, $length, $breadth, $qty, $deckle, $chop, $chopCrease, $deckleCrease, $slit, $finish, $grade, $image, $initials ){
  $pdo = Database::DB();
  $stmt = $pdo->prepare('insert into cartons
    (ref, style, height, length, breadth, qty, deckle, chop, chopCrease, deckleCrease, slit, finish, grade, image, initials)
    values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
  $stmt->bindvalue(1, $ref);
  $stmt->bindvalue(2, $style);
  $stmt->bindvalue(3, $height);
  $stmt->bindvalue(4, $length);
  $stmt->bindvalue(5, $breadth);
  $stmt->bindvalue(6, $qty);
  $stmt->bindvalue(7, $deckle);
  $stmt->bindvalue(8, $chop);
  $stmt->bindvalue(9, $chopCrease);
  $stmt->bindvalue(10, $deckleCrease);
  $stmt->bindvalue(11, $slit);
  $stmt->bindvalue(12, $finish);
  $stmt->bindvalue(13, $grade);
  $stmt->bindvalue(14, $image);
  $stmt->bindvalue(15, $initials);
  $stmt->execute();

}

public function getCarton($ref){
  $pdo = Database::DB();
  $stmt = $pdo->prepare('select *
    from cartons
    where 
    ref = :stmt');
  $stmt -> bindvalue(':stmt', $ref);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}