#!/bin/bash	
sudo rm -r /etc/netplan/01-network-manager-all.yaml
#sudo sed 's/clave/$1/' <01-network-manager-all.yaml >>/etc/netplan/01-network-manager-all.yaml
cp 01-network-manager-all.yaml /etc/netplan/01-network-manager-all.yaml
sudo sed "s/clave/${1}/" /etc/netplan/01-network-manager-all.yaml -i
sudo sed "s/puerta/${2}/" /etc/netplan/01-network-manager-all.yaml -i
sudo sed "s/dns/${3}/" /etc/netplan/01-network-manager-all.yaml -i
sudo systemctl restart systemd-networkd.service
sudo netplan apply