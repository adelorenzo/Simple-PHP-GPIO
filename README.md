# Simple-PHP-GPIO
Control GPIO modules connected to a Raspberry Pi

This a very simple PHP scritp I wrote to control my bedside lamp with a relay module connected to a Raspberry Pi and my cell phone. It is very straight forward and simple to use.

# Requirements
## Software

```
sudo apt-get install lighttpd php
```

Yup, that simple. Once lighttpd (or apache2 if you prefer) and php are installed place the script in the /var/www/html folder. It is important that the correct GPIO pins are mapped so the script can work properly.

You can access the script on the http://RASPBERRY_IP/ where RASPBERRY_IP is the ip adress of your Raspberry Pi.

Ideally your Raspberry Pi is connected to the Internet so bootstrap css script is loaded from the Internet.

## Hardware
A Arduino/Raspberry compatible module is required for the script to work. These modules are quite cheap and available on eBay.

* Raspberry Pi 2/3

![alt text](https://next.dinossauro.org/index.php/apps/files_sharing/ajax/publicpreview.php?x=1366&y=251&a=true&file=rpi2b_1024x1024.png&t=fG8Vng9PlRy8CVO&scalingup=0 "Raspberry Pi 2/3")

* 4 channel Arduino/Raspberry Pi compatible module.

![alt text](https://next.dinossauro.org/index.php/apps/files_sharing/ajax/publicpreview.php?x=1366&y=251&a=true&file=modulo-rele-4-canais-5v-arduino-472411-MLB20534208643_122015-O.png&t=Gkg48BCy9tSMXXd&scalingup=0 "Relay module")

## GPIO and Relay module connections

In order to the script work with the GPIO mapped properly make sure that the pins are connected as follows:

| GPIO PIN | Relay module PIN |
|----------|------------------|
| 2        | VCC              |
| 6        | GND              |
| 12       | IN1              |
| 13       | IN2              |
| 15       | IN3              |
| 16       | IN4              |


>Bitcoin address for donations: 1A5kwcwe6whjqPwXnJan537PrXVRey2Kxj
