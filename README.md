# WP My Autoloader :gb:

Simple autoloader to use in your WordPress plugins.

## Instalación

To be able to install it, place it in the `composer.json` of your plugin ...

```
{
  "require": {
            "did-web/wp-my-autoloader": "1.0.*"
}
```

## Mode of use

To be able to use it in your code you will have to place the following line of code in the header of your files ...


```
require_once(dirname(__FILE__) . 'vendor/did-web/wp-my-autoloader/autoloader.php');

```

**note** In the main file of the plugin we must define a constant with the name: **PLUGIN_NAME_AUTOLOADER**.

```
define ('PLUGIN_NAME_AUTOLOADER', plugin_basename (dirname (__ FILE__)));

```

If you need to use AJAX, place the following code to make sure that the
Constant with the name of the plugin written manually:


```
if (! defined ('PLUGIN_NAME_AUTOLOADER')) {
     define ('PLUGIN_NAME_AUTOLOADER', 'name_your_plugin');
}

```


More information on how to use **composer**: [Info Composer](https://getcomposer.org/)


## Compatibility

Tested on:

* WordPress 4.9.6


---

# WP My Autoloader :de:

Einfacher Autoloader zur Verwendung in Ihren WordPress-Plugins.

## Installation

Um es zu installieren, legen Sie es in die `composer.json` Ihres Plugins ...

```
{
  "require": {
            "did-web/wp-my-autoloader": "1.0.*"
}
```

## Modus der Verwendung

Um es in Ihrem Code verwenden zu können, müssen Sie die folgende Codezeile in die Kopfzeile Ihrer Dateien einfügen ...


```
require_once(dirname(__FILE__) . 'vendor/did-web/wp-my-autoloader/autoloader.php');

```

**Hinweis** In der Hauptdatei des Plugins müssen wir eine Konstante mit folgendem Namen definieren: **PLUGIN_NAME_AUTOLOADER**.

```
define ('PLUGIN_NAME_AUTOLOADER', plugin_basename (dirname (__ FILE__)));

```

Wenn Sie AJAX verwenden müssen, fügen Sie den folgenden Code ein, um sicherzustellen, dass der
Konstante mit dem Namen des manuell geschriebenen Plugins:


```
if (! defined ('PLUGIN_NAME_AUTOLOADER')) {
     define ('PLUGIN_NAME_AUTOLOADER', 'Name_Ihr_Plugin');
}

```


Weitere Informationen zur Verwendung  **composer**: [Info Composer](https://getcomposer.org/)


## Kompatibilität

Getestet am:

* WordPress 4.9.6

---

# WP My Autoloader :es:

Sencillo autoloader para utilizar en tus plugins de WordPress.

## Instalación

Para poderlo instalar coloca en el `composer.json` de tu plugin ...

```
{
  "require": {
            "did-web/wp-my-autoloader": "1.0.*"
}
```

## Modo de uso

Para poderlo utilizar en tu código tendrás que colocar la siguiente línea de código en la cabecera de tus archivos...


```
require_once(dirname(__FILE__) . 'vendor/did-web/wp-my-autoloader/autoloader.php');

```

**nota** En el archivo principal del plugin debemos definir una constante con el nombre: **PLUGIN_NAME_AUTOLOADER** .

```
define('PLUGIN_NAME_AUTOLOADER', plugin_basename(dirname(__FILE__)));

```

Si necesitas usar AJAX coloca el siguiente código para asegurarte de que existe la
constante con el nombre del plugin escrito manualmente:


```
if (!defined('PLUGIN_NAME_AUTOLOADER')) {
    define('PLUGIN_NAME_AUTOLOADER', 'name_your_plugin');
}

```

Más información de como usar **composer**: [Info Composer](https://getcomposer.org/)

## Compatibilidad

Probado en:

* WordPress 4.9.6

---

# Change Log

* 1.0.5 - 2018-7-10 : Plugin name with constant
* 1.0.4 - 2018-7-5 : Change name function
* 1.0.3 - 2018-7-5 : More Documentation
* 1.0.2 - 2018-7-5 : Fix Bug Documentation
* 1.0.1 - 2018-7-5 : Documentation
* 1.0.0 - 2018-7-5 : Basic Functions
