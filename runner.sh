#!/bin/bash

apt update
apt install apt-get install gettext-base -y

. .env 
DB_SECRET=${DB_SECRET}
export DB_SECRET
envsubst < ./docker-compose.tmpl.yml > ./docker-compose.yml

git submodule sync --recursive
git submodule update --init --recursive
