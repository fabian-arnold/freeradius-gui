<pre>
 _____                            _ _              ____ _   _ ___ 
|  ___| __ ___  ___ _ __ __ _  __| (_)_   _ ___   / ___| | | |_ _|
| |_ | '__/ _ \/ _ \ '__/ _` |/ _` | | | | / __| | |  _| | | || | 
|  _|| | |  __/  __/ | | (_| | (_| | | |_| \__ \ | |_| | |_| || | 
|_|  |_|  \___|\___|_|  \__,_|\__,_|_|\__,_|___/  \____|\___/|___|
</pre>   

Installation:
<pre>
sudo apt-get install libssh2-1-dev libssh2-php
</pre>
Um zu testen ob das ganze läuft:
<pre>
php -m |grep ssh2
</pre>
Falls der Befehl ssh2 zurückgibt ist die Extension richtig installiert.
