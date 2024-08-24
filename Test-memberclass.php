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

// Example usage
$title = "The Great Gatsby"; // Book title
$availableCopies = 5; // Number of available copies

// Creating a new member object
$member = new Member("John Doe");

// Accessing the member's name
echo "Member Name: " . $member->getName(); // Output: Member Name: John Doe

// Accessing book information
echo "Book Title: " . $title; // Output: Book Title: The Great Gatsby
echo "Available Copies: " . $availableCopies; // Output: Available Copies: 5
?>