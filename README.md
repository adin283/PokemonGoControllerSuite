## PokemonGoController
1. You should setup a web server, to run the HTML and php.
2. After start the web server, visit the page with url like:http://10.0.0.100/PokemonGoController.You can also use virtual host to access the page.

## PokemonGoScript
1. Auto click the simulate location in Xcode.

## PokemonHandler
1. Simple blank Xcode project with a gpx file.

## Requirement
1. Hardware:
	1. a Mac
	2. an iOS Device(iPhone or iPad)
	3. a Lighting USB Cable
	4. because of the autoClicker, you'd better have another device to visit the web page.
2. Software:
	1. PHP WebServer(Apache, Nginx)
	2. Python
	3. Xcode
	4. Chrome/Safari or any other modern WebBrowser

## Usage
1. Setup the web server, visit the page like http://10.0.0.100/PokemonGoController, you will see the UI below;
![web_controller](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/web_controller.png)
2. Modify the Bundle Identifier and sign of the PokemonGoController Xcode project;
3. Run the PokemonGoController project on your iOS device, which is also run the PokemonGo App;
4. Adjust the x,y poisition in PokemonGoScript/runAutoClick.py.
![change_location_xcode](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/change_location_xcode.png)
5. Run ```python runAutoClick.py```
6. Open PokemonGo App on your iOS device.
7. use http://10.0.0.100/PokemonGoController to control your role in the game.
8. Enjoy and catch Pokemon.

## Thanks
Thanks to the project of kahopoon [Pokemon-Go-Controller](https://github.com/kahopoon/Pokemon-Go-Controller). I don't have two iOS 9 device, so I implement with HTML page.

## Images
![PokemonGo1](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/PokemonGo1.jpg)
![PokemonGo2](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/PokemonGo2.jpg)
![PokemonGo3](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/PokemonGo3.jpg)
![PokemonGo4](https://raw.githubusercontent.com/adin283/PokemonGoControllerSuite/master/Images/PokemonGo4.jpg)

## Todo
1. add map and current location on the html page.