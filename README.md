# iHack Nebraska WordPress Stack

Docker Compose stack for `ihacknebraska.com` using Traefik for HTTPS routing, Nginx as the web server, WordPress PHP-FPM, and MariaDB.

## Services

- `traefik`: public HTTP/HTTPS entrypoint and Let's Encrypt certificates.
- `nginx`: serves WordPress files and forwards PHP requests to WordPress FPM.
- `wordpress`: WordPress on PHP 8.3 FPM.
- `db`: MariaDB 11.4 with a persistent named volume.

## First Run

1. Copy the environment template:

   ```powershell
   Copy-Item .env.example .env
   ```

2. Edit `.env` and replace every `change-this-*` value with strong secrets.

3. Make sure DNS for `ihacknebraska.com` and `www.ihacknebraska.com` points to the server running Docker.

4. Start the stack:

   ```powershell
   docker compose up -d
   ```

5. Open `https://ihacknebraska.com` and finish the WordPress installer.

6. In WordPress admin, activate the `iHack Nebraska` theme if it is not already active.

## Local Testing

For a local-only test without public DNS or Let's Encrypt, set `DOMAIN_NAME=localhost` in `.env` and use the local override:

```powershell
docker compose -f docker-compose.yml -f docker-compose.local.yml config
docker compose -f docker-compose.yml -f docker-compose.local.yml up -d
```

The production Traefik config expects ports `80` and `443` to be available.

## Theme

The custom theme lives in:

```text
wordpress/themes/ihacknebraska
```

It provides a complete front page for the event while still letting WordPress manage pages, posts, media, and admin users.

## GitHub Pages Preview

A static preview site lives in:

```text
docs
```

To publish it, push this project to GitHub, then set **Settings > Pages > Build and deployment > Source** to deploy from the `docs` folder on the default branch. This preview mirrors the iHack Nebraska concept while the WordPress site and event details continue to evolve.
