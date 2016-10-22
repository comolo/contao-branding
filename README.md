Register the Branding bundle in the AppKernel.

```php
// app/AppKernel.php

// ...
$bundles = [
    new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    new Symfony\Bundle\SecurityBundle\SecurityBundle(),
    new Symfony\Bundle\TwigBundle\TwigBundle(),
    // ... and some more

    // add this line
    new Comolo\Contao\BrandingBundle\ComoloContaoBrandingBundle(),
];
// ...
```


Add the following lines to the beginning of app/config/routing.yml
```yaml
ComoloContaoBrandingBundle:
    resource: "@ComoloContaoBrandingBundle/Resources/config/routing.yml"
```
