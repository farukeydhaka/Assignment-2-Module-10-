<?php
class Member {
    // Private property for name
    private $name;

    // Constructor to set the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }
}

class Book {
    // Properties for title and available copies
    private $title;
    private $availableCopies;

    // Constructor to initialize title and available copies
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "You have successfully borrowed '{$this->title}'. Available copies now: {$this->availableCopies}.<br>";
        } else {
            echo "Sorry, '{$this->title}' is currently out of stock.<br>";
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
        echo "You have successfully returned '{$this->title}'. Available copies now: {$this->availableCopies}.<br>";
    }

    // Getter for available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }
}

// Example usage

// Creating a new member
$member = new Member("John Doe");

// Creating a new book
$book = new Book("The Great Gatsby", 5);

// Borrowing a book
$book->borrowBook(); // Output: You have successfully borrowed 'The Great Gatsby'. Available copies now: 4.

// Returning a book
$book->returnBook(); // Output: You have successfully returned 'The Great Gatsby'. Available copies now: 5.
?>