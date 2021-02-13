
<?php
class DbConnection{
    
    private $connection = null;
// this function is called anytime this class is instanciated
  public function __construct($dbhost="localhost",$dbname="project",$username="root",$password="") {
try{
    $this->connection = new PDO("mysql:host={$dbhost};dbname={$dbname};",$username,$password,);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(Exception $e){
    throw new Exception($e->getMessage());
    
}
    }
// insert a row/s in databse table
 public function insert($statement="",$parameters = []){
     try{
$this->executeStatement($statement,$parameters );
return $this->connection->lastInsertId();
 }catch(Exeption $e){
     throw new Exception($e->getMessage());
     
 }
}
public function check_user_exits($statement="",$parameters = []){
try{
$this->executeStatement($statement,$parameters );
return $stmt->fetchColumn() > 0;

}catch(Exeption $e){
    throw new Exception($e->getMessage());
    
}
}


// select a row/s in databse table
 public function select($statement="",$parameters = []){
try {
$stmt = $this->executeStatement($statement,$parameters );
    return $stmt->fetchAll();
} catch (Exeption $e) {
    throw new Exception($e->getMessage());
    
}
}
// update a row/s in databse table
public function update($statement="",$parameters = []){
    try {
        $this->executeStatement($statement,$parameters );
}catch (Exeption $e) {
    throw new Exception($e->getMessage());
    
}
}
//  delete a row/s in databse table
public function remove($statement="",$parameters = []){
    try {
        $this->executeStatement($statement,$parameters );
}catch (Exeption $e) {
    throw new Exception($e->getMessage());
    
}
}
// execute statement
public function executeStatement( $statement="",$parameters=[]){
try{
    $stmt = $this->connection->prepare($statement);
    $stmt->execute($parameters);
    return $stmt;
}catch(Exeption $e){
throw new Exception($e->getMessage());

}

}

}