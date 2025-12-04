<?php

class User {

  // public properties
    public $username;
    public $fullname;
    public $city;
    public $created_at;

  // protected properties
    protected $id;
    protected $password;
    protected $photo;
    protected $db;

  // constructor
public function __construct() {
  $this->db = new Database();
}
  // Authenticate user credentials

  // Get all users
public function getAll() {
  $sql = "SELECT * FROM users ORDER BY id ASC";
  $stmt = $this->db->query($sql);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

  // Set user properties by ID
    public function setById($id) {
        $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $stmt = $this->db->query($sql, ['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->id        = $row['id'];
            $this->username  = $row['username'];
            $this->fullname  = $row['fullname'];
            $this->city      = $row['city'];
            $this->created_at= $row['created_at'];
            $this->password  = $row['password'];
            $this->photo     = $row['photo'];
            return true;
        }
        return false;
    }

  // Get ID
    public function getId() {
      return $this->id;
    }

  // Get password
    public function getPassword() {
      return $this->password;
    }
  
  // Get photo
  public function getPhoto() {
    return $this->photo;
}
  // Set photo
    public function setPhoto($filename) {
        $this->photo = $filename;
    }

  // Set password (hashed)
    public function setPassword($password) {
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

  // save user
public function save() {
    $sql = "INSERT INTO users (username, password, fullname, city, photo, created_at)
            VALUES (:username, :password, :fullname, :city, :photo, NOW())";

    $stmt = $this->db->conn->prepare($sql);

    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':password', $this->password);
    $stmt->bindParam(':fullname', $this->fullname);
    $stmt->bindParam(':city', $this->city);
    $stmt->bindParam(':photo', $this->photo);

    return $stmt->execute();
}

  // update user
    public function update() {

        $sql = "UPDATE users SET 
                    username = :username,
                    fullname = :fullname,
                    city = :city,
                    password = :password,
                    photo    = :photo
                WHERE id = :id";

        $stmt = $this->db->query($sql, [
            'username' => $this->username,
            'fullname' => $this->fullname,
            'city'     => $this->city,
            'password' => $this->password,
            'photo'    => $this->photo,
            'id'       => $this->id
        ]);

        return $stmt;
    }
  // remove user
  public function delete($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        return $this->db->query($sql, ['id' => $id]);
    }
}
