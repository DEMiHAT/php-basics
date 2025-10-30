# 🐘 PHP Backend Fundamentals

This repository contains a collection of **beginner-to-intermediate PHP scripts** designed to demonstrate core server-side programming concepts. Each program focuses on processing form data, performing calculations, and returning results to the client.

This project serves as a backend counterpart to a JavaScript fundamentals collection, translating client-side logic into **robust server-side applications**.

-----

## 📂 Project Structure

This project assumes most scripts are paired with a basic HTML form (either in the same file or a separate `.html` file) that submits data using the `POST` or `GET` method.

```
PHP_Basics/
│
├── factorial.php             → Calculates the factorial of a user-submitted number
├── odd_even.php              → Checks if a number is odd or even
├── prime_check.php           → Checks whether a number is prime
├── max_of_three.php          → Finds the largest of three submitted numbers
├── armstrong.php             → Checks if a number is an Armstrong number
├── fibonacci.php             → Generates the Fibonacci series up to a given limit
├── swap_values.php           → Swaps two values using a custom PHP function
├── string_reverse.php        → Reverses a string using the built-in strrev() function
├── calculator.php            → Adds or multiplies two numbers from form input
├── random_number.php         → Generates a random number within a specified range
├── form_validation.php       → Validates form fields (checks for empty, valid email, etc.)
│
├── login/
│   ├── login.php             → User login form and authentication logic
│   ├── welcome.php           → A secure "welcome" page shown after successful login
│   └── style.css             → CSS for styling the login page
└── ... (other files)
```

-----

## ⚙️ How to Run

These are **server-side scripts** and **cannot** be run by opening the files directly in a browser. You need a local server environment.

1.  **Install a Local Server Stack:**

      * Download and install a package like **XAMPP**, **WAMP**, or **MAMP**. This bundles Apache (web server), PHP, and MySQL (database).

2.  **Start Your Server:**

      * Run your control panel (e.g., XAMPP Control Panel) and **start the Apache** service.

3.  **Clone the Repository:**

      * Clone this project into the web server's root directory. The name of this directory varies:
          * **XAMPP:** `C:\xampp\htdocs\`
          * **WAMP:** `C:\wamp\www\`
          * **MAMP:** `/Applications/MAMP/htdocs/`

    <!-- end list -->

    ```bash
    git clone https://github.com/DEMiHAT/php-basics.git
    ```

4.  **Access in Browser:**

      * Open your web browser and navigate to the project's folder using `localhost`.
      * Example: `http://localhost/PHP_Basics/factorial.php` or `http://localhost/PHP_Basics/login/login.php`

-----

## 🧩 Concepts Demonstrated

  * **Form Handling:** Capturing data using superglobals like `$_POST` and `$_GET`.
  * **Server-Side Logic:** Performing calculations and operations on the server.
  * **PHP + HTML Integration:** Embedding PHP logic within an HTML page to display dynamic results.
  * **Conditional Logic:** Using `if`, `else`, `elseif`, and `switch` statements.
  * **Loops:** Iterating with `for`, `while`, and `do-while` loops (for Factorial, Fibonacci, Prime).
  * **Functions:**
      * **Custom Functions:** Defining and using your own functions (like for swapping).
      * **Built-in Functions:** Using PHP's standard library (`strrev()`, `rand()`, `isset()`, `empty()`).
  * **State Management:** Using **Sessions** (`session_start()`, `$_SESSION`) for the login system.
  * **Data Validation:** Sanitizing and validating user input (`filter_var()`, regex).

-----

## 🛠️ Technologies Used

| Technology | Purpose |
| :--- | :--- |
| **PHP** | All server-side logic, calculations, and data processing |
| **HTML5** | Provides the user interface and forms to submit data |
| **CSS3** | Used for styling the login page and other forms |
| **Local Server Stack** | (e.g., XAMPP, WAMP) to run and test the PHP scripts |

-----

## 👨‍💻 Author

**Sanjeev Sriram**
📧 sanjeevsriram06@gmail.com
🌐 https://github.com/DEMiHAT

-----

> *“God will steer the boat, But you must row.”* 🪄
