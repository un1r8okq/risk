#!/bin/bash

# Install Composer dependencies if they're missing
if [ ! -d "vendor" ]; then
    docker run --rm --interactive --tty -v $(pwd):/app composer install
fi

# Start sail services
./vendor/bin/sail up -d

# Create environment file if it's missing
if [ ! -f ".env" ]; then
    cp .env.example .env
    ./vendor/bin/sail artisan key:generate
fi

# Run database migrations
./vendor/bin/sail artisan migrate