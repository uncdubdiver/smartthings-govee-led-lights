# smartthings-govee-led-lights
Govee LED Light Strips integration for Samsung SmartThings

### Pre-requisites
Must have a Samsung SmartThings account setup (https://account.smartthings.com)
Govee LED Light Strips
Govee API Key (generated from the Govee mobile app)

### To integrate this into SmartThings, you'll follow these steps:
![#f03c15](https://via.placeholder.com/15/f03c15/000000?text=+) Please execute the index.html file locally to successfully integrate into Samsung SmartThings.
This index.html file will provide you step-by-step procedures on add the device and device type handlers into your SmartThings account.  You provide it your Govee API Key and it will retrieve the list of device ids, names, and models for the device preferences.

#### The following list of model numbers are currently supported (according to Govee API document):
- H6160
- H6163
- H6104
- H6109
- H6110
- H6117
- H6159
- H7021
- H7022
- H6086
- H6089
- H6182
- H6085
- H7014
- H5081
- H6188
- H6135
- H6137
- H6141
- H6142
- H6195
- H6196
- H7005
- H6083
- H6002
- H6003
- H6148

### DTH DISCLAIMER
After further testing, the API call for getting the device state may not work for all supported Govee models listed above.  Determing if it's a problem with the Govee API or if it's not supported due to the nature of the device model.

### DISCLOSURE
I am not SmartThings developer, I just did this because I wanted to be able to integrate my multiple Govee LED Light strips into my Smart home network, so I created this myself.  It works well for me and this isn't for sale, so feel free to use it, tweak it, whatever you want!
Just a heads up, this isn't perfect by any means, so feel free to provide me some input and updates, I'll be happy to make them!

### SPECIAL THANKS
Those who have downloaded the DTH and are testing with it, thanks so much and please reach out to me with any questions or comments, I'm using this DTH daily so updating it will make me very happy with new features!

And an even more thanks to **@jc73uk** for your contribution to the app integration!  Your support will help further the development and integration of this DTH and other devices which may/may not be supported as of yet with Govee!

Enjoy!
