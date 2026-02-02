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

## 🚀 Setup Instructions

Follow these steps to set up the project on any computer:

---

### 📋 Step 1: System Requirements

Before starting, ensure you have the following installed:

| Software | Version | Required For |
|----------|---------|--------------|
| **PHP** | 8.1 or higher | Running Laravel |
| **Composer** | Latest | PHP dependency management |
| **MySQL** | 5.7 or higher | Database storage |
| **Node.js** | 14+ | Frontend assets |
| **NPM** | 6+ | JavaScript packages |

**Windows Users:** Use XAMPP, WAMP, or Laragon for easy PHP/MySQL setup
**Mac Users:** Use Homebrew or MAMP
**Linux Users:** Use package manager (apt, yum)

---

### 📥 Step 2: Clone the Project

```bash
# Navigate to your projects directory
cd your/projects/folder

# Clone the repository (or download and extract)
git clone <repository-url> book-author-management

# Enter the project directory
cd book-author-management
```

---

### 📦 Step 3: Install PHP Dependencies

```bash
# Install all Laravel dependencies
composer install
```

This may take a few minutes. You'll see "Package operations: X installs, Y updates" when complete.

---

### 🎨 Step 4: Install Frontend Dependencies

```bash
# Install NPM packages for frontend assets
npm install
```

---

### 🗄️ Step 5: Set Up MySQL Database

**Option A: Using MySQL Command Line**
```sql
-- Login to MySQL (use your password)
mysql -u root -p

-- Inside MySQL, create the database
CREATE DATABASE book_author_db;

-- Exit MySQL
exit;
```

**Option B: Using MySQL Workbench/XAMPP**
1. Open MySQL Workbench or phpMyAdmin
2. Create a new database named `book_author_db`
3. Select UTF-8 collation (utf8mb4_unicode_ci)

**Default MySQL Credentials:**
- Username: `root`
- Password: `AdIl@6969`
- Database: `book_author_db`
- Port: `3306`

---

### ⚙️ Step 6: Configure Environment Variables

The `.env` file is already configured for this project:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_author_db
DB_USERNAME=root
DB_PASSWORD=AdIl@6969
```

**To customize for your setup:**
```bash
# Generate a new APP_KEY
php artisan key:generate
```

---

### 🏗️ Step 7: Run Database Migrations

```bash
# Create all tables and seed with sample data
php artisan migrate:fresh --seed
```

**What this does:**
- Drops all existing tables (`migrate:fresh`)
- Creates new tables for users, authors, and books
- Seeds the database with 5 authors and 7 books

**Expected output:**
```
Dropping all tables .............................. DONE
Creating migration table ......................... DONE
Running migrations ............................... DONE
Seeding database ................................. DONE
```

---

### 🚀 Step 8: Start the Development Server

```bash
# Start Laravel development server
php artisan serve
```

**Server will start at:** `http://127.0.0.1:8000`

**Alternative binding (if localhost doesn't work):**
```bash
php artisan serve --host=0.0.0.0 --port=8000
```

---

### ✅ Step 9: Verify Installation

Open your browser and navigate to:

| Page | URL | Description |
|------|-----|-------------|
| **Home** | http://localhost:8000 | Welcome page |
| **Authors** | http://localhost:8000/authors | View all authors |
| **Books** | http://localhost:8000/books | View all books |

You should see:
- 5 authors listed (J.K. Rowling, George Orwell, etc.)
- 7 books with author names
- Search bars on both pages
- Add/Edit/Delete buttons

---

### 🔧 Step 10: Additional Commands

```bash
# Clear configuration cache (if changes don't reflect)
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear all caches at once
php artisan optimize:clear

# Rebuild caches for production
php artisan optimize
```

---

### 🐛 Troubleshooting

| Problem | Solution |
|---------|----------|
| "Access denied for user" | Check MySQL credentials in `.env` file |
| "Database not found" | Run `CREATE DATABASE book_author_db;` in MySQL |
| "Port already in use" | Stop other servers or use `--port=8001` |
| "Class not found" | Run `composer dump-autoload` |
| "APP_KEY missing" | Run `php artisan key:generate` |
| "MySQL connection refused" | Ensure MySQL service is running |
| "Password warning in terminal" | Safe to ignore, just a warning |

---

### 🛑 Stopping the Server

When done, press **Ctrl+C** in the terminal to stop the development server.

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


