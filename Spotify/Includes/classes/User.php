<?php 

	class User{

		private $con;
        private $username;
        
        public function __construct($con,$username){
            $this->con=$con;
            $this->username=$username;
        }

        public function getUsername(){
        	return $this->username;
        }

        public function getFirstnameAndLastname(){
            $query=mysqli_query($this->con,"SELECT concat(firstName,' ',lastName) as 'name' FROM users WHERE username='$this->username'");
            $row=mysqli_fetch_array($query);
        
            return $row['name'];


        }

        public function getEmail(){
            
            $query=mysqli_query($this->con,"SELECT * FROM users WHERE username='$this->username'");
            $row=mysqli_fetch_array($query);
            return $row['email'];

        }


	}

 ?>