# KeyMe 🔐

## Try it on InfinityFree (Free Hosting Service)

> http://keyme.epizy.com/

<br>



## About KeyMe 🔐

The major objective of this project was to implement Databases, using MySQL.

The initial idea included just that and make some CRUDs (create, read, update, delete): the heart of a database connection.

But... news ideas were emerging in the process, so at the end includes also:

- DDBB construction.

- A login / logout system.

- Backend validations.

- Encryption and Decryption methods.

- E-mail recovering password system.

- Configuration and running of the DDBB on an external hosting.

<br>



## Build With

- `PHP 7+`.
- `MySQL` for Database Management.
- `PHPMailer` as PHP Mailing Library.
- `Semantic UI` as CSS Framework.

Extra Tools:
- `Photoshop` for the portfolio images edition.

<br>



## Technical Comments

Looking at the files structure and the code, this project allowed me to understand a lot of things.

In first place, about the improvisation. It seems funny at first, but it became a headeache. Start any project with a good planification is totally neccesary.

I really missed the opportunity to create components. To connect the backend with the frontend through APIs. To integrate PHP with JavaScript for a better user experience.

At the same time, I know better now the reasons and convenience of doing it that way. So I will keep that learning, and this project will be a reminder to avoid bad practices.

<br>



## Local Use


I recommend to use `XAMPP` (Windows / MacOS) or `LAMP` (Linux) as an Apache distribution to host a server locally.

Download the project o merge it in `htdocs` folder inside the installation path of your **XAMPP** / **LAMP**.

Create a Database and named it `keyme`. Copy the content of the  `DDBB SQL Query` file and run the script.

Alter the `connection.php` file in `../files` folder, comment the external host connection line and uncomment the local connection one.

Check too the PHPMailer connection data.


<br>



## License

Distributed under Apache License, Version 2.0, January 2004. See `LICENSE.txt` for more information.
