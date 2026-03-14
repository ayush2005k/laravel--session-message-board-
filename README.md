
## Laravel Session-Based Message Board

## 🎯 Project Overview
This application allows users to submit their **Name**, **Phone Number**, and **Message**. Instead of using a traditional database, the data is stored in the user's session and displayed instantly.

## 📂 Project Structure

```text
app/
 └── Http/Controllers/
     └── MessageController.php   <-- Business Logic & Session Handling
resources/
 └── views/
     ├── message-board.blade.php <-- Main View
     └── components/             <-- Reusable Blade UI
         ├── input.blade.php
         └── button.blade.php
routes/
 └── web.php                     <-- Route Definitions

 


