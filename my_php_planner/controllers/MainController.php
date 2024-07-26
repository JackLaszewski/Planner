<?php
class MainController {
    private $pdo;

    public function __construct() {
        global $pdo; // Access the global $pdo variable
        $this->pdo = $pdo;
    }

    public function index() {
        $data = ["title" => "Welcome to My PHP Project"];
        
        // Fetch data from the database
        $stmt = $this->pdo->query("SELECT * FROM messages");
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data['messages'] = $messages;

        require_once "views/home.php";
    }

    public function about() {
        $data = ["title" => "About Us", "message" => "This is the about page."];
        require_once "views/about.php";
    }
}
