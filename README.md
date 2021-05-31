# Mr.Milú Device Helper

## Usage
You can call it directly or with dependency injection

```php
\Drupal::service('device_helper')->getCurrentDevice();
\Drupal::service('device_helper')->isDesktop();
\Drupal::service('device_helper')->isTablet();
\Drupal::service('device_helper')->isMobile();
```

## Twig
You can use same function in twig
```twig
{{ get_current_device() }}
{{ is_desktop() }}
{{ is_tablet() }}
{{ is_mobile() }}
```

## Cache
You can add device type context to render arrays
````php
$my_render_array['anything']['#cache']['contexts'][] = 'device_type';
````

If you want to assocviate this cache context with every render array, add it to **required_cache_contexts** in your services.yml file
```yaml
required_cache_contexts: ['languages:language_interface', 'theme', 'user.permissions', ... ,  'device_type']
```
