# Define24

The template repository for definehack2024

![WhatsApp Image 2024-04-18 at 12 33 29_51d9e514](https://github.com/Definehack/Define24/assets/79042374/4d6c229a-5048-4ac9-bba6-c0e835e22097)

## EFDIN (Extra Food Distribution and Interconnection Network)

Distribution system targeted at sellers for managing excess food items

### Team Members

[1. Aathish R Viswam](https://github.com/Aathixh)  
[2. Amal S](https://github.com/RottenSpaceMan)  
[3. Rehan Philip Jacob](https://github.com/Rehanphilipjacob)  
[4. Vishnu B S](https://github.com/VandVi)

Explaining the working of project :

### Overview

This project is a food delivery application built with Laravel. It aims to reduce food waste by connecting sellers and common people who have surplus food with those who need it.

### Features:

-   User Registration: Users can create a new account, log in, and log out. We have different types of users: sellers, buyers, and delivery personnel.
-   Food Listing: Sellers can list surplus food along with details like quantity, pickup time, and location.
-   Food Ordering: Buyers can browse available food listings and place orders.
-   Order Fulfillment: Delivery personnel can accept orders, pick up food from the seller, and deliver it to the buyer.

### Architecture

The project follows the MVC (Model-View-Controller) architecture that is typical of Laravel applications. The `User`, `FoodItem`, and `Order` models represent the users, food listings, and orders, respectively. The corresponding controllers handle incoming requests and interact with the models. The views are Blade templates that display the data to the user.

### Workflow

When a seller submits the form to create a new food listing, a POST request is sent to the FoodItemController@store method. This method creates a new FoodItem model, sets the properties based on the form input, and saves it to the database. Then, it redirects the seller back to their list of food listings.

### Future Improvements

In the future, we plan to add a rating system for sellers and delivery personnel. We also plan to add a feature for buyers to save their favorite sellers.

Embed video of project demo:
https://drive.google.com/file/d/1RLZ_mBy_QxHiF5M-nbCGOeGE_CcYOYFi/view?usp=sharing

### Technologies used

Laravel,
PHP,
Tailwind-CSS,
Bootstrap,
HTML-VanillaCSS-JS,
Chatbase

### How to configure

Install laragon and run the development server

Use MySQL and the default version of Apache

Run these to install Composer:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

Install Node.js: https://nodejs.org/en/download

Update npm: npm install -g npm

create a copy .env.example and rename it into .env

### How to Run

    cd into the directory and run:
        php artisan migrate
        php artisan serve
        npm run dev(on another terminal)

### Other Links

Abstract:
EFDIN (Extra Food Distribution and Interconnection Network) is a pioneering online platform dedicated to combating food wastage by facilitating the redistribution of surplus food resources. With a primary focus on reducing food waste at its source, EFDIN serves as a dynamic hub where individuals and businesses can share information about excess food items and connect with potential recipients in need.
The core functionality of EFDIN's user-friendly website empowers users, including hotels, wedding malls, supermarkets, and individuals, to list surplus food items with detailed descriptions such as photographs, quantities, prices, and food types. Furthermore, the platform enables users to add new surplus food items to the listing, ensuring real-time updates and an expansive inventory of available resources.
EFDIN operates on the principle of leveraging technology to mitigate food wastage while simultaneously addressing issues of hunger and food insecurity within communities. By providing a centralized platform for efficient food redistribution, EFDIN promotes sustainable practices and fosters a culture of social responsibility among its users. Through collaborative efforts and widespread participation, EFDIN aims to create a future where surplus food resources are optimally utilized to benefit individuals, businesses, and the environment, ultimately contributing to the global effort to combat food wastage.

Presentation Link https://www.canva.com/design/DAGDBNOEJXs/KULnYFXoHeasYZcEn5dZMg/edit?utm_content=DAGDBNOEJXs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton
