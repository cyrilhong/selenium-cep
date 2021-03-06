# Example for Selenium testing

* Open [`src/TestSuite.html`](src/TestSuite.html) with [Selenium IDE](http://docs.seleniumhq.org/projects/ide/)
* [`tests/PHPUnitSeleniumTest.php`](tests/PHPUnitSeleniumTest.php) uses [PHPUnit Selenium](https://github.com/giorgiosironi/phpunit-selenium)
* [`tests/PHPWebDriverTest.php`](tests/PHPWebDriverTest.php) uses [PHP WebDriver](https://github.com/instaclick/php-webdriver)
* [`tests/acceptance/GitHubCept.php`](tests/acceptance/GitHubCept.php) uses [Codeception WebDriver Module](http://codeception.com/docs/modules/WebDriver)

## Installation

```
git clone https://github.com/jaceju/selenium-demo.git
cd selenium-demo
composer install
```

## Testing

Run Selenium server first. Then execute the commands below:

```
./vendor/bin/phpunit
./vendor/bin/codecept run
```
