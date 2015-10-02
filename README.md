# WooApu 
### A WooCommerce REST API bundle

Installation
============

Step 1: Download Bundle

```bash
$ composer require ederribeiro/wooapubundle "~1.*"
```

Step 2: Enable the Bundle

In the 'app/AppKernel.php' file, you will add this row:
```php
<?php
// app/AppKernel.php
// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
        	// ...
            new Woo\ApuBundle\WooApuBundle(),
        );
    }
}
?>
```
Step 2: Add to parameters.yml.dist
```yml
woo_apu.consumer_key: <your key>
woo_apu.consumer_secret: <your secret>
woo_apu.shop: <your shop address>
```
Step 3: Update with composer

```bash
$ composer update
```
When the key is requested, put the key from woocommerce panel.


## License

[MIT License](http://ederribeiro.mit-license.org/) Eder Ribeiro