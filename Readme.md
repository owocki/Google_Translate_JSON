# Google Translate a Nested JSON array

This PHP script will translate a Nested JSON array from one language to another language.  I used this script during various parts of my career to provide quick-cut translations of my teams application into other languages.

## Getting Configured

1. Get a Google Translate API key at [developers.google.com](https://developers.google.com/translate/v2/getting_started) and place the key into *lib/config.php*.
2. Select a to language and a from language.  Supported Languages as of August 2014 are listed [here](help/supported_languages_Aug2014.json).  For an update to date list, see [the google translate API docs](https://developers.google.com/translate/v2/getting_started#list_languages).
3. Place a file containing the JSON array you'd like to translate into the `input/` folder.
4. Run the translate.php script with the following three parameters

		php translate.php <input file> <from lang> <to lang>


## Example 

`php translate.php input/test.json en de` 

will turn

```

{
    "application": {
        "hello": "Hello, ", 
        "settings": "Settings", 
        "sign_out": "Sign Out", 
        "copyright": "Copyright", 
        "privacy": "Privacy", 
        "terms_of_use": "Terms Of Use", 
        "faqs": "FAQs", 
        "about": "About", 
    }
}

```

into

```
{
    "application": {
        "hello": "Hallo,",
        "settings": "Einstellungen",
        "sign_out": "Austragen",
        "copyright": "Copyright",
        "privacy": "Ruhe",
        "terms_of_use": "Nutzungsbedingungen",
        "faqs": "FAQs",
        "about": "\u00dcber",
    }
}

```

## Thanks 

Thanks to [diversen](http://github.com/diversen) for providing access to his [Simple gTranslate PHP class](https://github.com/diversen/simple-php-classes/blob/master/diversen/gtranslate.php).

## Versioning 

Runs with PHP 5.4 or later.
