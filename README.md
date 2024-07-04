# Markdown Tools

Convert Markdown to HTML or reverse.

## Docker

You can use `docker compose` to run the application.

Create `.env` file

```bash
cp .env.example .env
```

- `PORT`: internal port of the container (default `3000`)
- `HOST`: host of the application
- `HTTPS`: false (`true` or `false`)
- `ENV`: environment (`development`, `production`, `test`)
- `APP_PORT`: external port of the container (default `3000`)

Docker compose will use the `.env` file to set environment variables.

```bash
docker compose down
docker compose up -d
```
