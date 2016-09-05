

read -p "Now i will start the raspi-config. Just enable the spi there!"

raspi-config

read -p "Then you should add www-data to the sudoers: www-data ALL=(ALL) NOPASSWD: ALL (Will start nano now...)"

nano /etc/sudoers

echo "OK :-) Everything should work now"
