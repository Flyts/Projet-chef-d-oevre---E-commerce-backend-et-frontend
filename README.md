# Wenze

## About The Project

Wenze est un site E-commerce de vente des vêtements pout homme et femme

### Built With

This project uses the following technologies :

-   [Laravel](https://laravel.com/) (laravel/framework: ^6.2)



## Getting Started

To get a local copy up and running follow these simple example steps.


### Prerequisites

To run this project on your computer you will need the following tools

-   [PHP ≥ 7.4 ](https://www.php.net/manual/en/install.php)
-   [Composer ≥ 2.0](https://getcomposer.org/download/)


### Installation

- Clone the repo

    ```sh
    git clone https://github.com/Flyts/Wenze.git
    ```

-   Switch to the repo folder

    ```sh
    cd Wenze
    ```

-   Install all the dependencies using composer

    ```sh
    composer install
    ```

-   Copy the example env file and make the required configuration changes in the .env file

    ```sh
    cp .env.example .env
    ```

-   Upadate .env

    if you use mysql

    ```env
    ...
    DB_CONNECTION=mysql
    B_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=name of your database
    DB_USERNAME=your name
    DB_PASSWORD=your password
    ...
    ```

    if you use sqlite

    a. In your projet go to database folder and create database.sqlite file

    b. In .env file

        ```env
        ...
        DB_CONNECTION=sqlite
        ...
        ```

    c. and delete or comment

        ```env
        B_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=name of your database
        DB_USERNAME=your name
        DB_PASSWORD=your password
        ```


-   Generate a new application key

    ```sh
    php artisan key:generate
    ```

-   Start dev server

    ```bash
    php artisan serve
    ```


### Wenze Account Funding

Use the code "A587FG412H" to fund your account with 310,000 Fc to be able to do tests.


Project Link: [https://samytshibanda.com](Wenze)
