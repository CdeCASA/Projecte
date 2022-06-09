#!/bin/bash
sudo rm -r buscar.txt
sudo apt-cache search $1 >> buscar.txt
