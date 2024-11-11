# Markdown Tools

Convert Markdown to HTML or reverse.

## Docker

You can use `docker compose` to run the application.

Create `.env` file

```bash
cp .env.example .env
```

- `APP_PORT`: external port of the container (default `3000`)

Docker compose will use the `.env` file to set environment variables.

```bash
docker compose down --remove-orphans
docker compose up -d --build
```
