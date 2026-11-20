# PHP Development Environment

Docker based PHP development stack for VS Code Dev Containers.

| Service   | Purpose                                             | URL (host)                                     |
|-----------|-----------------------------------------------------|------------------------------------------------|
| `phpdev`  | PHP 8.5 (built-in web server), Xdebug, QA tools     | <http://localhost:9980>                        |
| `maildev` | [MailDev](https://github.com/maildev/maildev) - catches all outgoing mails | <http://localhost:9986>, SMTP `localhost:9925` |
| `db`      | MariaDB 11.8                                        | `localhost:9933`                               |
| `adminer` | [Adminer](https://www.adminer.org/) - database GUI  | <http://localhost:9981>                        |

All ports are bound to `127.0.0.1` only and can be changed in `.env`.

## Installation

1. Clone or download and extract this repo.
2. Copy `.env.example` to `.env` and check the contained settings.
3. Open the project folder (the folder containing this README) with VS Code.
4. Install the [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) extension and choose **Reopen in Container** - or build and start the stack manually:

   ```bash
   docker compose up -d --build
   ```

**The local folder `code` is mapped to `/opt/code` in the `phpdev` container and is the web root.**

## Installed tools

- [Composer](https://getcomposer.org/) - dependency manager
- [PHPUnit](https://phpunit.de/) 12 - testing framework
- [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) 4 (`phpcs` / `phpcbf`) - coding standard check and fixer, default standard [PSR-12](https://www.php-fig.org/psr/psr-12/)
- [PHPStan](https://phpstan.org/) 2 - static analysis
- [phpDocumentor](https://www.phpdoc.org/) 3 (`phpdoc`) - documentation generator
- [Xdebug](https://xdebug.org/) 3 - debugger and profiler

PHP extensions: bcmath, curl, gd, intl, mbstring, mysqli, opcache, pdo_mysql, sockets, zip, xdebug.

Versions are defined as `ARG`s at the top of [.docker/Dockerfile](./.docker/Dockerfile).

## Debugging with Xdebug

Xdebug runs in `trigger` mode on port `9003`. The launch configurations for the dev container are in [code/.vscode/launch.json](./code/.vscode/launch.json):

- **Listen for Xdebug** - start it, then trigger a request:
  - Browser: append `?XDEBUG_TRIGGER=1` to the URL (or use a browser extension that sets the `XDEBUG_TRIGGER` cookie)
  - CLI: `XDEBUG_TRIGGER=1 php script.php` (in the terminal of the dev container)
- **Launch current PHP script** - runs and debugs the currently open file.

Debugging from VS Code on the host (without dev container) needs `XDEBUG_CLIENT_HOST=host.docker.internal` in `.env` (apply with `docker compose up -d`) and a launch configuration with path mapping in the project root:

```json
{
  "name": "Listen for Xdebug (host)",
  "type": "php",
  "request": "launch",
  "port": 9003,
  "pathMappings": {
    "/opt/code": "${workspaceFolder}/code"
  }
}
```

## Database

The credentials from `.env` are available inside `phpdev` as environment variables (`DB_HOST`, `DB_DATABASE`, `DB_USER`, `DB_PASSWORD`). See [code/test-db.php](./code/test-db.php):

```php
$pdo = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_DATABASE'), getenv('DB_USER'), getenv('DB_PASSWORD'));
```

Adminer login: system `MySQL / MariaDB`, server `db`, user and password as defined in `.env` (default `phpdev` / `phpdev`).

Data is stored in the Docker volume `db-data`. Use `docker compose down -v` to reset it.

## Logs

PHP errors and mail delivery logs are written to the local `logs` folder (outside the web root).

## Installed VS Code extensions (dev container)

- [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) - code completion, navigation and diagnostics
- [PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug) - Xdebug integration
- [PHP Sniffer & Beautifier](https://marketplace.visualstudio.com/items?itemName=ValeryanM.vscode-phpsab) - runs `phpcs` / `phpcbf`, formats on save
- [PHP DocBlocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker)
- [Error Lens](https://marketplace.visualstudio.com/items?itemName=usernamehw.errorlens)
- [GitLens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens)
- [Git Graph](https://marketplace.visualstudio.com/items?itemName=mhutchie.git-graph)
- [Path Intellisense](https://marketplace.visualstudio.com/items?itemName=christian-kohler.path-intellisense)

## Useful commands

```bash
docker compose up -d                 # start the stack
docker compose down                  # stop the stack
docker compose build --no-cache      # rebuild the image (e.g. after changing tool versions)
docker exec -it phpdev bash          # open a shell in the PHP container
docker exec -i phpdev php test-db.php     # check the database connection
docker exec -i phpdev php test-mail.php   # send a test mail, then check MailDev
```

## Local host integration

The `bin` folder contains wrappers that run `php`, `composer`, `phpcs`, `phpcbf`, `phpstan` and `phpunit` inside the running `phpdev` container (`*.bat` for PowerShell / cmd, without extension for Git Bash). Add the folder to your `PATH`.

Paths are resolved inside the container, relative to `/opt/code` (the local `code` folder):

```bash
php test-db.php
phpcs .
```

Inside the dev container all tools are available directly, the wrappers are not needed there.
