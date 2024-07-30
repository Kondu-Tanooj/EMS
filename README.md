# PHP-based End-to-end Event Management System

## 🚀 Features

* **Create Events**: Create and manage multiple events from the dashboard. 
* **Generate Forms**: Generate sign up forms based on requirements and share them to participants.
* **Manage Data**: No need of juggling between csv, excel, and other files. Manage all submission data at one place.
* **QR Attendance**: QR Codes are automatically generated and sent to users after their form has been submitted. Take attendances from Laptop/phone camers by simply scanning their QR codes!
* **Multiple Sessions**: Organising multiple sessions in a single event? Create as many sessions as you like per event. Attendance data will be different between each session.
* **Bulk Emailing**: We can send Bulk emails to all of the participants with the help of this, we can send the common message now, (sending individual messages to each is in progress)
* **Generate Certificates**: Check eligibility and generate certificates automatically for all eligible participants. (in progress)

## 🏗️ Development aka behind the scenes
This project has been developed using the LAMP/XAMPP/WAMP stack with some JS here and there. Since it deals with dynamically generated html forms, PHP code and the MySQL queries accompanying it, it dwells into a fair bit of complexity. I started by researching existing software and wanted to fork [formtools.org](https://formtools.org/) for the form generation part, but later decided it was too complex for my use case and started writing my own. The code is not pretty to look at and refactoring is in the roadmap.<br><br>
**References:**<br>
PHP Registration + Login system: [codeshack.io/secure-registration-system-php-mysql](https://codeshack.io/secure-registration-system-php-mysql/)<br>
QR Code Generator: [github.com/t0k4rt/phpqrcode](https://github.com/t0k4rt/phpqrcode)<br>
HTML 5 QR Scanner: [github.com/schmich/instascan](https://github.com/schmich/instascan)<br>
Certificate Generator With PHP Using imagettftext function: [dev.to/olawanle_joel/certificate-generator-with-php-using-imagettftext-function-1glh](https://dev.to/olawanle_joel/certificate-generator-with-php-using-imagettftext-function-1glh).

## 🤝 Contributing
Some tasks you can take up
* Refactoring the codebase. Can follow [Clean Code for PHP](https://github.com/piotrplenik/clean-code-php).
* Implementing email alerts and confirmations.
* Event-specific certificate elgibility rules and policies generation.
* Multi-access to the admin dashboard so that volunteers can work together.
* Host a demo of this project.
* And whatever ideas you have, you can use the issues or discussion page of this repo.
