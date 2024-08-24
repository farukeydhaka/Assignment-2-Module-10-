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

    // Method to borrow a book
    public function borrowBook(Book $book) {
        $book->borrowBook();
    }

    // Method to return a book
    public function returnBook(Book $book) {
        $book->returnBook();
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

class Library {
    // Property to store books
    private $books = [];

    // Method to add a book to the library
    public function addBook(Book $book) {
        $this->books[] = $book;
        echo "Book '{$book->getTitle()}' added to the library.<br>";
    }

    // Method to display all available books
    public function displayAvailableBooks() {
        echo "Available books in the library:<br>";
        foreach ($this->books as $book) {
            echo "- '{$book->getTitle()}' with {$book->getAvailableCopies()} copies available.<br>";
        }
    }

    // Method to find a book by title
    public function findBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null; // Book not found
    }
}

// Example usage

// Create a library
$library = new Library();

// Add two books to the library
$book1 = new Book("The Great Gatsby", 3);
$book2 = new Book("1984", 2);
$library->addBook($book1);
$library->addBook($book2);

// Create two members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Display available books before borrowing
$library->displayAvailableBooks();

// Member One borrows Book 1
$member1->borrowBook($book1);

// Member Two borrows Book 2
$member2->borrowBook($book2);

// Display available books after borrowing
$library->displayAvailableBooks();
?>