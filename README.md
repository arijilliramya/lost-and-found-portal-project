Lost & Found Portal – Web Application
📖 Project Description
The Lost & Found Portal is a web-based application designed to help users report and find lost items easily.
Users can submit item details such as name, description, location, contact number, and date found.
All submitted data is stored securely in a MySQL database.
This project is developed as part of a college mini project using PHP and MySQL.
🚀 Features
Add lost/found item details
Store data in MySQL database
Clean and user-friendly UI
Responsive design
Easy form submission
Simple navigation bar
🛠️ Technologies Used
Frontend: HTML, CSS
Backend: PHP
Database: MySQL
Server: XAMPP (Apache & MySQL)
📂 Project Structure
Copy code

lost_and_found/
│
├── index.php        # Main form page
├── insert.php       # Handles form submission
├── db.php           # Database connection
├── style.css        # Styling file
├── README.md        # Project documentation
🗄️ Database Details
Database Name: lost_and_found
Table Name: items
Table Structure:
Column Name
Data Type
id
INT (Primary Key)
item_name
VARCHAR
description
TEXT
location
VARCHAR
contact_number
VARCHAR
date_found
DATE
⚙️ How to Run the Project
Install XAMPP
Start Apache and MySQL
Copy the project folder to:
Copy code

C:\xampp\htdocs\
Create database lost_and_found in phpMyAdmin
Create table items
Open browser and visit:
Copy code

http://localhost/lost_and_found/index.php
✅ Output
User fills the Lost & Found form
Clicks submit
Data is saved successfully into the database
🎓 Use Case
This project can be used in:
Colleges
Hostels
Offices
Public places
👩‍💻 Author
Name: Ramya Arijilli
Course: B.Tech
Project Type: Mini Project
📌 Future Enhancements
View all lost items
Search functionality
Admin login
Edit & delete items
Image upload for items
⭐ If you like this project, give it a star on GitHub!# lost-and-found-portal-project
