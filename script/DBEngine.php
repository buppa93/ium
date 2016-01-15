<?php

    class DBEngine
    {
        /*public $DBCONFIG = array();
        $DBCONFIG['db_host'] = 'localhost';
        $DBCONFIG['db_user'] = 'root';
        $DBCONFIG['db_pass'] = '';
        $DBCONFIG['db_name'] = 'test_ium';
        $DBCONFIG['sus'] = 'q_sus';
        $DBCONFIG['attrakdiff'] = 'q_attrakdiff';*/

        private $servername = "127.0.0.1";
        private $username = "root";
        private $password = "";
        private $DBName = 'test_ium';
        private $susTable = "q_sus";
        private $attrakdiffTable= "q_attrakdiff";
        private $conn;
        private $DBSelected;

        public function connect()
        {
            // Create connection
            $this->conn = mysql_connect($this->servername, $this->username, $this->password);

            // Check connection
            if (!$this->conn)
            {
                die('Could not connect: ' . mysql_error());
            }
        }

        public function selectDB()
        {
            $this->DBSelected = mysql_select_db($this->DBName, $this->conn);
            if (!$this->DBSelected)
            {
                die ('Can\'t use test_video : ' . mysql_error());
            }
        }

        public function putAttrakdiff($username, $study, $answer)
        {
            $query ="INSERT INTO ".$this->attrakdiffTable." (user_id, studio_id, r1, r2, r3, r4, r5, r6, r7,
                                r8, r9, r10, r11, r12, r13, r14, r15, r16, r17, r18, r19, r20, r21, r22, r23,
                                r24, r25, r26, r27, r28) VALUES ('".$username."', '".$study."'";
            for($i=0; $i<27; $i++)
            {
                $query = $query.", ".$answer[$i];
            }

            $query = $query.", ".$answer[27].");";
            if(mysql_query($query))
            {
                echo "It's all right! =)";
            }
            else
            {
                $message  = 'Invalid query: ' . mysql_error() . "\n";
                $message .= 'Whole query: ' . $query;
                die($message);
            }

        }

        public function putSUS($username, $study, $answer)
        {
            $query ="INSERT INTO ".$this->susTable." (user_id, studio_id, r1, r2, r3, r4, r5, r6, r7,
                                r8, r9, r10) VALUES ('".$username."', '".$study."'";
            for($i=0; $i<9; $i++)
            {
                $query = $query.", ".$answer[$i];
            }

            $query = $query.", ".$answer[9].");";
            if(mysql_query($query))
            {
                echo "It's all right! =)";
            }
            else
            {
                $message  = 'Invalid query: ' . mysql_error() . "\n";
                $message .= 'Whole query: ' . $query;
                die($message);
            }
        }

        public function getSUS()
        {
            $query = "SELECT * FROM ".$this->susTable.";";
            $result = mysql_query($query);
            if(!$result)
            {
                $message  = 'Invalid query: ' . mysql_error() . "\n";
                $message .= 'Whole query: ' . $query;
                die($message);
            }

            $row = mysql_fetch_array($result);
            $susData = array(array($row['id'], $row['user_id'], $row['studio_id'], $row['r1'], $row['r2']
                                  , $row['r3'], $row['r4'], $row['r5'], $row['r6'], $row['r7'], $row['r8']
                                  , $row['r9'], $row['r10']));
            while($row = mysql_fetch_array($result))
            {
                $susData[] = array($row['id'], $row['user_id'], $row['studio_id'], $row['r1'], $row['r2']
                                  , $row['r3'], $row['r4'], $row['r5'], $row['r6'], $row['r7'], $row['r8']
                                  , $row['r9'], $row['r10']);
            }
            return $susData;
        }

        public function close()
        {
            mysql_close($this->conn);
        }
    }
?>
