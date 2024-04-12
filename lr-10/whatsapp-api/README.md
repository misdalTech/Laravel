### WhatsApp API Integration in Laravel
**Description**

This project demonstrates how to integrate the WhatsApp API into a Laravel application for sending messages. It provides a simple method to send text messages or media files via WhatsApp using the API.

**Steps**

1. Installation

To install and set up the project, follow these steps:

    Clone the repository to your local machine:

    git clone https://github.com/your_username/whatsapp-api-laravel.git
`
2. Navigate to the project directory:

`cd whatsapp-api-laravel`

3. Install dependencies using Composer:`

composer install`

4. Configure your WhatsApp API credentials in the .env file:

```
WHATSAPP_API_TOKEN=your_api_token
WHATSAPP_API_INSTANCE_ID=your_instance_id
```

5. Run migrations to set up the database (if necessary):

`php artisan migrate`

6.Serve the application:

    `php artisan serve`

**Usage**

To send a WhatsApp message using the API, follow these steps:

    1. Access the application in your browser.

    2. Fill out the message form with the recipient's WhatsApp number (including the country code), the message content, and optionally, a media URL.

    3.Click the "Send Message" button.

    4.You will receive a success message if the message is sent successfully. Otherwise, an error message will be displayed.

**Contributing**

Contributions to this project are welcome! To contribute, follow these steps:

    1.Fork the repository.

    2.Create a new branch for your feature or bug fix:
`git checkout -b feature/my-feature`

3.Make your changes and commit them:
`git commit -am 'Add my feature'`
4.Push to your branch:
   ` git push origin feature/my-feature`

   5. Create a pull request to merge your changes into the main branch.

**License**

This project is licensed under the MIT License.    
