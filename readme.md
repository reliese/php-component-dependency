# Reliese Component Dependency

This is the definition of a Dependency Container, also known as Inversion of Control Container, Service Container.

## The Container Interface

It comes with three groups of methods:

### Dependency Registration

- Allows for singleton registration

```php
/**
 * @param string $dependency
 * @param Closure $abstraction
 *
 * @return Container
 */
public function singleton(string $dependency, Closure $abstraction) : Container;
```

- Allows for a non singleton registration

```php
/**
 * @param string $dependency
 * @param Closure $abstraction
 *
 * @return Container
 */
public function register(string $dependency, Closure $abstraction) : Container;
```

### Service Location

Each registered dependency can be retrieved with the `resolve` method.

```php
/**
 * @param string $dependency
 *
 * @return mixed
 * @throws UnresolvableDependencyException
 */
public function resolve(string $dependency);
```

### Method Injection

```php
/**
 * @param object $object
 * @param string $method
 *
 * @return mixed
 * @throws UnresolvableDependencyException
 */
public function call(object $object, string $method);
```