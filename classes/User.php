 <?php

    class User extends QueryBuilder
    {

        public $register_result = NULL;
        public $loggedUser = NULL;

        public function registerUser()
        {

            $name = $_POST['register_name'];
            $email = $_POST['register_email'];
            $password = $_POST['register_password'];

            $sql = "INSERT INTO users VALUES (NULL, ? ,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([$name, $email, $password]);


            if ($query) {
                $this->register_result = true;
            }
        }


        public function logUser()
        {
            $email = $_POST['login_email'];
            $password = $_POST['login_password'];

            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$email, $password]);
            $loggedUser = $query->fetch(PDO::FETCH_OBJ);
            // Test
            // var_dump($loggedUser);
            // object(stdClass)#6 (4) { ["id"]=> int(35) ["name"]=> string(6) "Danilo" ["email"]=> string(16) "danilo@gmail.com" ["password"]=> string(5) "12345" }

            if ($loggedUser != NULL) {
                $_SESSION['loggedUser'] = $loggedUser;
                $this->loggedUser = $loggedUser;
            }
        }


        public function getUserWithId($id)
        {
            $sql = "SELECT * FROM users WHERE id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);

            $postOwner = $query->fetch(PDO::FETCH_OBJ);

            return $postOwner;
        }
    }
    ?>







