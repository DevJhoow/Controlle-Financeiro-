#!/bin/sh

# Esperar o banco de dados PostgreSQL ficar pronto
until php artisan migrate --force; do
  echo "Aguardando o banco de dados ficar disponível..."
  sleep 3
done

# Iniciar o servidor Laravel
php artisan serve --host=0.0.0.0 --port=8000
