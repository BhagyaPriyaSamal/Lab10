# Lab 10 — PHP web applications

This repository contains solutions for the three exercises in the Lab 10 assignment.

## 1. Session greeting and logout

Open `index.php` and enter a name. The app stores the name and start time in a PHP session, shows the greeting and session start time, and calculates the usage duration when you log out.

## 2. Current date, time, and day

Open `datetime.php` to display the current date, time, and day. The page uses the Asia/Kolkata time zone.

## 3. Age authorization

Open `authorization.html`, enter a name and age, and submit the form. Visitors under 18 receive an unauthorized message; visitors aged 18 or older receive a welcome message.

## Run locally

Install PHP 8 or later. From this folder, start PHP's built-in development server:

```sh
php -S localhost:8000
```

Visit:

- `http://localhost:8000/`
- `http://localhost:8000/datetime.php`
- `http://localhost:8000/authorization.html`

Names are HTML-escaped before display.
