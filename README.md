# 📚 Book & Author Management System

Welcome to the **Book Author Management System** - a Laravel-powered web application that helps you manage your library of books and authors with ease!

---

## 🎯 What is This Project?

This is a simple yet powerful application that allows you to:
- **Manage Authors**: Add, view, edit, and delete authors
- **Manage Books**: Add, view, edit, and delete books
- **Search Functionality**: Quickly find books or authors
- **Relationship Management**: Books are linked to their respective authors

Think of it as your personal digital library catalog!

---

## 🚀 Quick Start

### Prerequisites
- PHP 8.1+
- Composer
- MySQL
- Node.js & NPM

### Installation Steps

1. **Clone the repository** (if you haven't already)
   ```bash
   cd c:/Users/adilq/Desktop/book-author-management
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Set up your database**
   - Make sure MySQL is running with password: `AdIl@6969`
   - Create the database:
     ```sql
     CREATE DATABASE book_author_db;
     ```

4. **Configure environment**
   The `.env` file is already configured with:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=book_author_db
   DB_USERNAME=root
   DB_PASSWORD=AdIl@6969
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Start the server**
   ```bash
   php artisan serve
   ```

7. **Open your browser** and go to: `http://localhost:8000`

---

## 📖 How to Use

### Authors Management (`/authors`)
- **View All Authors**: See a list of all authors with their book count
- **Add New Author**: Click "+ Add New Author" button
- **Search Authors**: Use the search bar to find authors by name or bio
- **View Author Details**: Click "View" to see author info and their books
- **Edit Author**: Click "Edit" to modify author details
- **Delete Author**: Click "Delete" (will also delete all associated books)

### Books Management (`/books`)
- **View All Books**: See a complete list of books with author names
- **Add New Book**: Click "+ Add New Book" button
- **Search Books**: Search by title, ISBN, description, or author name
- **View Book Details**: Click "View" to see full book information
- **Edit Book**: Click "Edit" to modify book details
- **Delete Book**: Click "Delete" to remove a book

---

## 📊 Database Structure

### Authors Table
| Column | Type | Description |
|--------|------|-------------|
| id | BIGINT | Unique identifier |
| name | VARCHAR(255) | Author's full name |
| bio | TEXT | Author's biography |
| created_at | TIMESTAMP | When record was created |
| updated_at | TIMESTAMP | Last update time |

### Books Table
| Column | Type | Description |
|--------|------|-------------|
| id | BIGINT | Unique identifier |
| title | VARCHAR(255) | Book title |
| isbn | VARCHAR(20) | Unique ISBN number |
| published_year | INT | Year of publication |
| description | TEXT | Book description |
| author_id | BIGINT | Foreign key to authors table |
| created_at | TIMESTAMP | When record was created |
| updated_at | TIMESTAMP | Last update time |

---

## 🎨 Sample Data Included

The app comes pre-loaded with these famous authors and books:

**Authors:**
1. J.K. Rowling - Creator of Harry Potter
2. George Orwell - Author of 1984
3. Harper Lee - Author of To Kill a Mockingbird
4. F. Scott Fitzgerald - Author of The Great Gatsby
5. Jane Austen - Author of Pride and Prejudice

**Books:**
- Harry Potter and the Philosopher's Stone (1997)
- 1984 (1949)
- To Kill a Mockingbird (1960)
- The Great Gatsby (1925)
- Pride and Prejudice (1813)
- Harry Potter and the Chamber of Secrets (1998)
- Animal Farm (1945)

---

## 🔧 Project Structure

```
book-author-management/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AuthorController.php    # Handles author operations
│   │       └── BookController.php       # Handles book operations
│   └── Models/
│       ├── Author.php                   # Author model
│       └── Book.php                     # Book model
├── database/
│   ├── migrations/                      # Database tables structure
│   └── seeders/                         # Sample data
├── resources/
│   └── views/
│       ├── authors/                     # Author views (CRUD)
│       ├── books/                       # Book views (CRUD)
│       └── layouts/                     # Layout templates
└── routes/
    └── web.php                          # Application routes
```

---

## ✨ Features

- ✅ **Clean UI**: Simple, responsive design
- ✅ **Search**: Real-time search on both pages
- ✅ **CRUD Operations**: Full Create, Read, Update, Delete
- ✅ **Relationships**: Books linked to authors automatically
- ✅ **Validation**: Form input validation
- ✅ **Confirmation dialogs**: Safety prompts before deletions


