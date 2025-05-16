# Do-It-Unique WordPress Project

A WordPress project that can be run either with Docker or as a traditional WordPress installation.

## Docker Setup (Recommended)

### Prerequisites
- Docker
- Docker Compose

### Installation

1. Clone this repository:
```bash
git clone <your-repository-url>
cd do-it-unique
```

2. Start the Docker containers:
```bash
docker-compose up -d
```

3. Access WordPress at [http://localhost:8080](http://localhost:8080)
4. Access phpMyAdmin at [http://localhost:8081](http://localhost:8081)
   - Username: root
   - Password: rootpassword

### Configuration
- WordPress database configuration is handled automatically in Docker.
- WordPress files are in the container with wp-content mounted as a volume.

## Traditional Setup (Non-Docker)

### Prerequisites
- PHP 7.4 or higher
- MariaDB 10.0 or higher
- Web server (Apache/Nginx)

### Installation

1. Clone this repository to your web server's document root.
2. Create a MariaDB database for WordPress.
3. Copy the wp-config-sample.php to wp-config.php:
```bash
cp wp-config-sample.php wp-config.php
```
4. Edit wp-config.php with your database information.
5. Download WordPress core files:
```bash
wget https://wordpress.org/latest.zip
unzip latest.zip
cp -r wordpress/* .
rm -rf wordpress latest.zip
```
6. Access your WordPress site through your web server.

## Project Structure

```
do-it-unique/
├── .dockerignore        # Docker ignore file
├── .gitignore           # Git ignore file
├── docker-compose.yml   # Docker configuration
├── wp-config-sample.php # Sample WordPress configuration
└── wp-content/          # WordPress content folder (themes, plugins, etc.)
```

## Notes

- For the Docker setup, data is persisted in a Docker volume.
- For local development, you may need to modify database settings in wp-config.php.
- The wp-content directory is preserved regardless of the setup method. 