# Logging Server

This repository contains a simple web service for logging arbitrary data under namespaces.

- Create a file containing app secrets as `app/secret.php` using the template in `app/secret.example.php`.
- Install the slim framework in the `app/` directory: `composer require slim/slim:3.*`.
- Start a web server in the `public` directory.

For logging data, send a POST request to `/{namespace}` and specify `accessKey` and `text` in the body.
This will log the text in the `logs/{namespace}.txt` file.
