# Wordpress-Blog
## Instructions
### Requirements
- [Docker](https://www.docker.com/)
    - Make sure you have the latest versions of Docker and Docker Compose installed on your machine.
- [Postman](https://www.postman.com/) OR [cURL](https://curl.se/)


### Installation
- Open a terminal and cd to the folder in which docker-compose.yml is saved and run:
    ```
        docker-compose up
    ```
- The containers are now built and running. You should be able to access the WordPress installation with the configured IP in the browser address. By default it is http://127.0.0.1:80

### Removing containers
- To stop and remove all the containers use thedown command:
    ```
        docker-compose down
    ```

### phpMyAdmin
- You can also visit http://127.0.0.1:9090 to access _phpMyAdmin_ after starting the containers.
- The default username is root, and the password is the same as supplied in the .env file.

## API Endpoints

- List all posts:
    ```curl
        GET  /wp-json/wp/v2/posts
    ```

