# Simple Captive Portal
A captive portal is a Web page that the user of a public-access network is obliged to view and interact with before access is granted. Captive portals are typically used by business centers, airports, hotel lobbies, coffee shops, and other venues that offer free Wi-Fi hot spots for Internet users.

This example will require an unsuspecting user's credentials before proceeding, which are logged into the corresponding auth.txt file. After the credentials are logged, the user is redirected to google.com; giving the appearance that their credentials were valid and the login attempt has succeeded.

## Requirements
A functioning web server and PHP _must_ be installed in order for this captive portal to function as intended.
## Installation (Apache)
Place files within the server root directory, commonly the /var/www directory. If you are running a different server or the root directory differs, you'll need to read your server's documentation for correct placement.
## WiFi Pineapple users
I've not tested this on the latest generation of Pineapple, but on the Mark V a different setup method is required.
* **Option 1:** Upload the contents of /css /js /img remotely and edit index.html to call the full url path for each file.
* **Option 2:** Place the contents of /css /js and /img in the same directory as index.html and log.php, edit index.html to reflect the file path changes.
* Move the auth.txt file located in /includes to the same directory as index.html and log.php on the Pineapple
* Edit log.php to reflect the correct location of auth.txt

## Interaction
The auth.txt file can be watched for live changes:
```
$ tail -f auth.txt
```
It can also be downloaded for later review. It is merely a text file. Some further obfuscation and layers of protection could be added to ensure only the "owner" of the file able to view its contents.
## Disclaimer
This captive portal and its contents are provided for **educational purposes only**. I accept no liability for any illegal activities resulting from the misuse of these files or the examples shown. Use wisely and ethically.
