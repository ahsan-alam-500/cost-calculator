# Khata - Personal Finance Manager

Khata is a simple personal finance manager built with Laravel. It allows users to register, log in, and manage their deposits and expenses.

## About The Project

This project is a web-based application that helps users track their income and expenses. It provides a dashboard view of the total deposits and expenses for the authenticated user.

### Built With

*   [Laravel](https://laravel.com/)
*   [Tailwind CSS](https://tailwindcss.com/)
*   [Vite](https://vitejs.dev/)

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

*   PHP >= 8.2
*   Composer
*   Node.js & npm

### Installation

1.  **Clone the repo**
    ```sh
    git clone https://github.com/ahsan-alam-500/cost-calculator.git
    ```
2.  **Navigate to the project directory**
    ```sh
    cd khata
    ```
3.  **Install PHP dependencies**
    ```sh
    composer install
    ```
4.  **Install NPM packages**
    ```sh
    npm install
    ```
5.  **Create a copy of your .env file**
    ```sh
    cp .env.example .env
    ```
6.  **Generate an app encryption key**
    ```sh
    php artisan key:generate
    ```
7.  **Create a database and update your .env file**
    Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables in your `.env` file.
8.  **Run the database migrations**
    ```sh
    php artisan migrate
    ```

## Usage

1.  **Build assets**
    ```sh
    npm run build
    ```
2.  **Start the development server**
    ```sh
    php artisan serve
    ```
3.  Open your browser and navigate to `http://127.0.0.1:8000`

## Routes

The application has the following routes:

*   `/`: Welcome page
*   `/sign-in`: Login page
*   `/sign-up`: Register page
*   `/dashboard`: User dashboard (requires authentication)
*   `/deposit`: (POST) Add a new deposit (requires authentication)
*   `/expense`: (POST) Add a new expense (requires authentication)
*   `/logout`: (POST) Log the user out (requires authentication)
