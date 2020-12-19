<?php

require_once('data-provider.php');

class Task extends DataProvider {


    public function addTask($content, $description) {

       $connectionDb = $this->connect();

       if($connectionDb == null) {
           return;
       }

       $requeteSql = "INSERT INTO tasks (content, description) VALUES (:content, :description)";

       $statement = $connectionDb->prepare($requeteSql);

       $statement->execute([
           ":content" => $content,
           ":description" => $description
       ]);

       echo " <div  style='padding:20px ;background-color:yellow;' > Data Added Successfully </div> ";
       $statement = null;
       $connectionDb = null;

      

    }
    
    public function getTask()
    {
      $connectionDb = $this->connect();

      if($connectionDb == null) {
          return;
      }
      
      $query = $connectionDb->query("SELECT id , content , description FROM tasks ");
      $data = $query->fetchAll(PDO::FETCH_ASSOC);

      $querry = null ;
      $connectionDb = null ;

      return $data ;
    

    }

    public function getTaskById($id)
    {
      $connectionDb = $this->connect();

      if($connectionDb == null) {
          return;
      }

      $requeteSql1 = "SELECT * FROM tasks where id =:id ";

      $statement1 = $connectionDb->prepare($requeteSql1);

      $statement1->execute([
          ":id" => $id
      ]);

     $data= $statement1->fetch(); 
     $statement = null;
     $connectionDb = null;

     if (!$data) {
       echo "data not Found 404 " ;
     }
     return $data ;
      
    }

    public function searchTasks($search) {
       
      $connectionDb = $this->connect();

      if($connectionDb == null) {
          return;
      }

      $requeteSql2 = "SELECT * FROM tasks WHERE content LIKE :search OR description LIKE :search";

      $statement2 = $connectionDb->prepare($requeteSql2);

      $statement2->execute([
         
          ":search" => "%" .$search."%" 
      ]);

      $data = $statement2->fetchAll(PDO::FETCH_ASSOC);

      $statement2 = null;
      $connectionDb = null;

      if(!$data) {
          return [];
      }

      return $data;
  }
   

  public function updateTask($id, $content, $description) {
      
    $connectionDb = $this->connect();

    if($connectionDb == null) {
        return;
    }

    $requeteSql3 = "UPDATE tasks SET content = :content, description = :description WHERE id = :id";

    $statement3 = $connectionDb->prepare($requeteSql3);

    $statement3->execute([
        ":content" => $content,
        ":description" => $description,
        ":id" => $id
    ]);
    echo " <div  style='padding:20px ;background-color:yellow;' > Data Updated Successfully </div> ";
    $statement3 = null;
    $connectionDb= null;
}
public function deleteTask($id) {
      
  $connectionDb = $this->connect();

  if($connectionDb== null) {
      return;
  }

  $requeteSql4 = "DELETE FROM tasks WHERE id = :id";

  $statement4 = $connectionDb->prepare($requeteSql4);

  $statement4->execute([
      ":id" => $id
  ]);
  echo " <div  style='padding:20px ;background-color:yellow;' > Data Deleted Successfully </div> ";
  $statement4 = null;
  $connectionDb= null;
}









    }

  ?>