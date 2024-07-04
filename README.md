# Markdown Tools

Convert Markdown to HTML or reverse.

## Docker

You can use `docker compose` to run the application.

Create `.env` file

```bash
cp .env.example .env
```

- `APP_PORT`: external port of the container (default `8080`)

Docker compose will use the `.env` file to set environment variables.

```bash
docker compose down
docker compose up -d
```
