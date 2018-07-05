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
require_once(trailingslashit(dirname(__FILE__)) . 'vendors/did-web/wp-my-autoloader/autoloader.php');

```

More information on how to use **composer**: [Info Composer](https://getcomposer.org/)

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
require_once(trailingslashit(dirname(__FILE__)) . 'vendors/did-web/wp-my-autoloader/autoloader.php');

```

Weitere Informationen zur Verwendung  **composer**: [Info Composer](https://getcomposer.org/)

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
require_once(trailingslashit(dirname(__FILE__)) . 'vendors/did-web/wp-my-autoloader/autoloader.php');

```

Más información de como usar **composer**: [Info Composer](https://getcomposer.org/)
