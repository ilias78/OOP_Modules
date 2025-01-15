<?php

class BookCatalog 
{
    private array $books = [];
    
    public function addBook(Book $book): string
    {
        $this->books[] = $book;
        return "The book '{$book->getTitle()}' was toegevoegd .";
    }

    public function getCatalog(): array
    {
        return $this->books;
    }

    public function removeBook(Book $book): string
    {
        foreach ($this->books as $key => $b) {
            if ($b === $book) {
                unset($this->books[$key]);
                $this->books = array_values($this->books);
                return "The book '{$book->getTitle()}' was removed from the catalog.";
            }
        }
        return "The book '{$book->getTitle()}' was not found in the catalog.";
    }

    public function getAvgPrice(): float
    {
        if (count($this->books) === 0) {
            return 0;
        }

        $total = 0;
        foreach ($this->books as $book) {
            $total += $book->getPrice();
        }
        return $total / count($this->books);
    }

    public function displayCatalog(): void
    {
        if (empty($this->books)) {
            echo "The catalog is empty.";
            return;
        }

        foreach ($this->books as $book) {
            echo $book->display()  . "<br>";
        }
    }
}