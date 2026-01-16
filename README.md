# Jodhana Trip Advisor

Welcome to **Jodhana**, a premium travel and tourism platform dedicated to the magnificent "Blue City" of Jodhpur, Rajasthan. This application serves as a comprehensive guide for tourists, offering insights into heritage sites, luxury stays, and seamless transportation services.

## 🌟 Features

*   **Modern Glassmorphism Design**: A visually stunning user interface featuring glass-like elements, smooth gradients, and premium typography (*Playfair Display* & *Inter*).
*   **Curated Destinations**: Detailed information on top tourist attractions like *Mehrangarh Fort*, *Umaid Bhawan Palace*, and *Jaswant Thada*.
*   **Accommodation Guide**: Showcase of heritage hotels, boutique stays, and luxury resorts with rating systems.
*   **Transportation Services**: Easy access to information on private cabs, tourist buses, and bike rentals.
*   **User Authentication**: Secure Sign-in and Sign-up functionality for personalized experiences.
*   **Responsive Layout**: Fully optimized tailored experience for desktops, tablets, and mobile devices.

## 🛠️ Tech Stack

*   **Framework**: [Laravel 9.x](https://laravel.com)
*   **Frontend**: Blade Templates, Vanilla CSS3 (Custom Glassmorphism System), FontAwesome Icons.
*   **Database**: MySQL
*   **Scripting**: PHP 8.x

## 🚀 Installation & Setup

Follow these steps to get the project running on your local machine.

### Prerequisites
*   PHP >= 8.0
*   Composer
*   MySQL/MariaDB

### Steps

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/ToshiJain15/jodhana.git
    cd jodhana
    ```

2.  **Install PHP Dependencies**
    ```bash
    composer install
    ```

3.  **Environment Setup**
    Copy the example environment file and configure your database settings.
    ```bash
    cp .env.example .env
    ```
    Open `.env` and update your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate App Key**
    ```bash
    php artisan key:generate
    ```

5.  **Run Migrations**
    Set up the database tables.
    ```bash
    php artisan migrate
    ```

6.  **Serve the Application**
    Start the local development server.
    ```bash
    php artisan serve
    ```
    Visit `http://localhost:8000` in your browser.

## 📂 Project Structure

*   `public/css/main.css`: The core stylesheet containing the custom design system and variables.
*   `resources/views/layouts/app.blade.php`: The master layout file defining the navigation and footer.
*   `resources/views/*.blade.php`: Individual pages (Home, Places, Hotel, etc.).

## 🤝 Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

---
*Created with ❤️ for Jodhpur.*
