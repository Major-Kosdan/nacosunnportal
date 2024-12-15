<?php
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
class staff_details
{
    public function verifyUser($dbo,$un,$pw)
    {
        $rv=["id"=>-1,"status"=>"ERROR"];
        $c="select id,password from staff_details where user_name=:un";
        $s=$dbo->conn->prepare($c);
        try{
            $s->execute([":un"=>$un]);
            if($s->rowCount()>0)
            {
                $result=$s->fetchAll(PDO::FETCH_ASSOC)[0];
                if($result['password']==$pw)
                {
                    //all ok
                    $rv=["id"=>$result['id'],"status"=>"ALL OK"]; 
                }
                else{
                    //pw does not match
                    $rv=["id"=>$result['id'],"status"=>"Wrong password!"]; 
                }
            }
            else{
                //user name does not exist
                $rv=["id"=>-1,"status"=>"Username does not exist!"];
               
            }
        }
        catch(PDOException $e)
        {

        }
       return $rv;
    }
}
?>