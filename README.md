# Unencrypted-login-test

## Capturing and Analysis of Http Credentials

*A cybersecurity project showing how insecure login systems expose user credentials.*

## Project Overview

**This project demonstrates how an insecure login system**:

-Stores credentials in plain text

-Transmits passwords without encryption

-Allows Wireshark interception

-Accepts weak admin credentials

-Logs users without hashing

-Uses no HTTPS


**This is intentionally vulnerable for cybersecurity learning, specifically in**:

-Packet sniffing

-Insecure authentication

-Plain-text storage

-HTTP interception

-Web exploitation fundamentals

**How to Run THis Project (PHP Built-In Server)**

This project helps beginners understand how insecure login forms can leak credentials during trasmission and how attackers analyze them.

This version uses the simplest possible server so as to focus on cybersecurity concepts, not server configuration.

## Project Requirements

**-Software/OS**

       - Kali Linux (VM or Bare Metal)
       
       - Apache2 Web Server
       
       - PHP 8+
       
       - Wireshark
       
       - Browser(Firefox recommended)
       

## Project Directory
project-root/

│── public/

│     ├── index.php

│     ├── login.php

│     ├── dashboard.php

│

│── server/

│     ├── users.txt

│

│── logs/

      ├── login_attempts.log



## Project Workflow
  
1. **Install PHP if missing**

In your Kali Linux machine open the terminal and enter the command:

`sudo su` - to run as the root, put your Kali password to proceed.

`apt install php`

2. **Create a directory in /home called insecure-login**

`mkdir insecure-login`

3. **Move to the insecure-login directory and add these new directories with these files in them**

`cd insecure-login` - change directory to insecure login


`mkdir logs public server` - make these directories: logs, public, server.ls

4. **Create these files under `public` directory**       

`cd public` - change to public directory

**After editing the created files example `nano index.html` press `CTRL + O` then `ENTER` and lasty `CTRL + X` to save the changes.**

`nano index.html` 
                 - creates the file index.html paste code from index.html in files section  
                 - serves as the main landing page containing the login form where users enter their username and password

`nano login.php` 
                 - creates another file login.php, paste the code from login.php in files section  
                 - processed login form submissions by checking entered credentials against the stored `users.txt`

`nano dashboard.php`
                 - creates file dashboard.php, paste code from dashboard.php in files section
                 -displays the protected dashboard page that only logged-in users access after successful authentication



   
