# ShopEase
ShopEase is a simple web application that allows users to purchase products online. Users can enter their name and phone number, select a product, and choose their city for delivery. The application calculates the total price, including VAT and applicable discounts, and provides an invoice for the user's purchase.

## Features

-   Select products from a dropdown list.
-   Provide user details including name, phone, and city.
-   Calculate and display the total price including VAT, discount, and delivery charges.

## Technologies Used

-   PHP
-   HTML
-   Bootstrap

## Screenshots:

### Home Page

![index](https://github.com/user-attachments/assets/89108a09-52d4-4be7-98a1-62c4ba585ca8)

### Invoice Page

![invoice](https://github.com/user-attachments/assets/0c693066-3de4-40da-a561-99a2ce5ba4c0)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/emanebied/shopease.git
    ```

2. Navigate to the project directory:
    ```bash
    cd shopease
    ```
3. Move the project files to your web server's root directory (e.g., /var/www/html for Apache).

## Usage

1. Start your local server (e.g., using XAMPP, MAMP, or a built-in PHP server).

2. Place the project files in your server's root directory (e.g., `htdocs` for XAMPP).

3. Open a web browser and navigate to:

    ```
    http://localhost/shopease/index.html
    ```

4. Fill in the form with your details and select a product to receive an invoice.

### User Input

-   User enters her/his name.
-   User enters her/his phone number.
-   User selects a product from the following options:
    -   Laptop: 15,000 EGP
    -   Mobile: 12,000 EGP
    -   TV: 10,000 EGP
    -   T-shirt: 250 EGP
-   User selects a city from the following options:
    -   Cairo: 0 EGP delivery fee
    -   Alexandria: 50 EGP delivery fee
    -   Beni Suef: 200 EGP delivery fee

### Discounts

-   Laptop: 20% discount
-   Mobile: 10% discount
-   TV: 5% discount
-   T-shirt: No discount

### VAT

-   VAT is set at 14%.

## Project Structure

-   `index.html`: Contains the form for user input.
-   `invoice.php`: Processes the form data and displays the invoice.

## Contribution:

Contributions to my ShopEase application are most welcome! If you find any issues or have suggestions for improvements or want to add new features, please open an issue or submit a pull request.
