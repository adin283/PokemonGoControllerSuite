## PokemonGoController
1. You should setup a web server, to run the HTML and php.
2. After start the web server, visit the page with url like:http://10.0.0.100/PokemonGoController.You can also use virtual host to access the page.

## PokemonGoScript
1. Auto click the simulate location in Xcode.

## PokemonHandler
1. Simple blank Xcode project with a gpx file.

## Usage
1. Setup the web server, visit the page like http://10.0.0.100/PokemonGoController, you will see the UI below;
2. Modify the Bundle Identifier and sign of the PokemonGoController Xcode project;
3. Run the PokemonGoController project on your iOS device, which is also run the PokemonGo App;
4. Adjust the x,y poisition in PokemonGoScript/runAutoClick.py.
5. Run ```python runAutoClick.py```
6. Open PokemonGo App.
7. use http://10.0.0.100/PokemonGoController to control your role in the game.
8. Enjoy and catch Pokemon.