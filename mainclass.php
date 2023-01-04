<?php
   class Demo{
        private $con;

        function __construct()
        {
            $dsn = "mysql:host=localhost;dbname=test";

            $this->con = new PDO($dsn,'root','');

            if($this->con == true)
            {
                echo "Connection establishe successfully";
            }
            else
            {
                echo " Connection failed";
            }
        }

        function insert($a,$b,$c,$d)
        {
            $qry = "insert into student(sname,password,mno,email) values(:a,:b,:c,:d)";

            $stmt = $this->con->prepare($qry);
            $stmt->bindParam(':a',$a);
            $stmt->bindParam(':b',$b);
            $stmt->bindParam(':c',$c);
            $stmt->bindParam(':d',$d);

            $r = $stmt->execute();
            
        }
   }
?>