<?php
interface Animal {
    public function communicate();//declare method without providing method bodies 
}

//implementing an interface using implements keyword
class Dog implements Animal {
    public function communicate(){
        return 'bark';
    }
}

class Cat implements Animal {
    public function communicate(){
        return 'meow';
    }
}

// example 2

interface Logger{

}

class LogtoFile implements Logger {
    public function execute($message){
        echo 'log the mesaage to file: '.$message;
    }
}

class LogtoDatabase implements Logger{
    public function execute($message){
        echo "log the message to db: ".$message;
    }
}

class userController {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    public function show(){
        $user = 'John';
        $this->logger->execute($user);
    }
}
$controller = new userController(new LogtoDatabase);
$controller->show();







// example interface vs abstract

interface Searchable {
    public function search($query);
}

interface Printable {
    public function print();
}

class Article implements Searchable, Printable {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function search($query) {
        // Implement search functionality for articles
    }

    public function print() {
        // Implement print functionality for articles
    }
}

class Video implements Searchable {
    private $title;
    private $url;

    public function __construct($title, $url) {
        $this->title = $title;
        $this->url = $url;
    }

    public function search($query) {
        // Implement search functionality for videos
    }
}




?>