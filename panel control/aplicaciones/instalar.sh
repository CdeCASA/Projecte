#!/bin/bash
sudo apt install $1 -y
sudo rm -r aplicaciones.txt
echo 'Se ha instalado el programa' $1 >> aplicaciones.txt