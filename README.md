# PHP UI Text

#### Easily localize your web app

### Requirements

- PHP 5

### Installation

- Put the "uit" folder in your project directory, and done.

#### How to use

- Include `ui_text.php` in any page that needs the ability of localization.
- Make translation files and include them in `ui_text.php`.
- Call `uit()` function in your php pages to get translation results.
- Make POST request with parameter `lang` to current page, then the new language will take into effect within the same domain. For example, `$_POST['lang']="zh_cn"` will change whole site language into Simplified Chinese.

##### The `demo` directory contains a functional site using PHP UI Text. You can see it live at <http://phpuitext.mogita.com/>

### Author

mogita (<me@mogita.com>)
