LibravatarBundle
================

This bundle offers the support of the [Libravatar service] (https://www.libravatar.org/) for your Symfony's web apps.

Libravatar is an open-source alternative for Gravatar, offering more features and respect for privacy. 

The service is federated and everyone may run his own instance of the service. The DNS Records indicate which instance of libravatar should be used to show the avatars'pictures.

This bundle is an implementation of the Melissa Draper's PEAR package (http://pear.php.net/package/Services_Libravatar/). It interrogates DNS Records and compose the URL's avatar with the result of the records.

Installation
------------

Add `"fastre/libravatar-bundle": "dev-master"` to your require's section of your composer.json file, like this: 


```
    "require": {
        "fastre/libravatar-bundle": "*@dev"
    }
```

Then, add the bundle to your AppKernel's file : 

```
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            //...
            new Fastre\LibravatarBundle\FastreLibravatarBundle(),
        );

        // etc.

        return $bundles;
    }
```

Usage
------

Call the Libravatar's service into your script and use the method 

```
$libravatarService = $container->get('libravatar.provider');

$avatarUrl = $libravatarService->getUrl('email@example.com');

```

(In a controller, you may call the service with `$this->get('libravatar.provider');`.

Some options may be used to improve url :

- `'https'` (bool)
- `'algorithm'` (string `'md5'` or `'sha512'`)
- `'size'` (int)
- `'default'` for the default image : 
    - "404" - give a "404 File not found" instead of an image
    - "mm"
    - "identicon"
    - "monsterid"
    - "wavata

Example: 

```
$libravatarService = $container->get('libravatar.provider');

$options = array('https' => true, 'algorithm' => 'sha512', 'size' => 200);

$avatarUrl = $libravatarService->getUrl('email@example.com', $options);

```

Further development
-------------------

- I am planning to use PHP-APC to improve the rapidity of the bundle, and avoid to repeat DNS queries.

- I am thinking about replacing the 'https' option by the scheme from the symfony kernel.