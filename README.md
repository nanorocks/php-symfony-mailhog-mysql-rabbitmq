# Symfony API Skeleton

This repository serves as a starting point for creating a Symfony-based API project. It is designed to help you quickly set up the basic structure and dependencies required for building robust APIs with Symfony.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP 8.2 or higher
- Composer - [Installation Guide](https://getcomposer.org/doc/00-intro.md)
- Docker - [Installation Guide](https://docs.docker.com/get-docker/)
- Docker Compose - [Installation Guide](https://docs.docker.com/compose/install/)

## Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/nanorocks/php-symfony-mailhog-mysql-rabbitmq.git
   ```

2. Navigate to the project directory:

   ```bash
   cd php-symfony-mailhog-mysql-rabbitmq
   ```

3. Copy the example environment file and adjust as needed:

   ```bash
   cp .env.dist .env
   ```

   Update the necessary configurations in the `.env` file, such as Symfony database settings.

4. Build and start the Docker containers:

   ```bash
   docker-compose up -d
   ```

   The Symfony application will be accessible at `http://localhost:8080`.

## Docker Compose Services

### php-fpm

The PHP-FPM service runs the Symfony application.

### nginx

The Nginx service serves as the web server, forwarding requests to the PHP-FPM service.

### mailhog

Mailhog is included for email testing purposes. The Mailhog web UI can be accessed at `http://localhost:8025`.

### db

The MySQL service provides the database for the Symfony application.

### rabbitmq

RabbitMQ is included as a message broker for your Symfony application.

## Accessing Symfony Logs

Symfony logs are stored in the `var/logs` directory of the Symfony application.


## Project Structure

The project follows a standard Symfony structure, with additional directories for API-specific components:

- **config/**: Contains configuration files.
- **public/**: The web server's root directory.
- **src/**: Your application source code.
  - **Controller/**: API controllers.
  - **Entity/**: Doctrine entities.
  - **Repository/**: Doctrine repositories.
- **tests/**: PHPUnit test cases.
- **var/**: Temporary files (cache, logs, etc.).
- **vendor/**: Composer dependencies.
- **.env**: Environment configuration.
- **.gitignore**: List of files and directories to be ignored by Git.
- **composer.json**: Composer package definition.
- **phpunit.xml.dist**: PHPUnit configuration.

## Contributing

Feel free to contribute to this project by opening issues or submitting pull requests. Your feedback and contributions are highly appreciated.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
```