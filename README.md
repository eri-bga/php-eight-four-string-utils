# 📦 String Utils for PHP 8.4

A lightweight utility library to help with common string manipulations in PHP 8.4.

## 🧩 Features

This package provides easy-to-use static methods for transforming and analyzing strings, including:

- Convert strings to:
  - `camelCase`
  - `PascalCase`
  - `snake_case`
  - `kebab-case`
- Check if a string is a palindrome

---

## 🛠️ Installation

You can install this package via Composer:

```bash
composer require php-eight-four/string-utils
```

---

## 🧪 Usage Examples

### Import the class:

```php
use PhpEightFour\StringUtils\StringUtils;
```

### Convert to camelCase

```php
echo StringUtils::toCamelCase("hello world"); // Outputs: helloWorld
```

### Convert to PascalCase

```php
echo StringUtils::toPascalCase("hello world"); // Outputs: HelloWorld
```

### Convert to snake_case

```php
echo StringUtils::toSnakeCase("HelloWorld"); // Outputs: hello_world
```

### Convert to kebab-case

```php
echo StringUtils::toKebabCase("HelloWorld"); // Outputs: hello-world
```

### Check if a string is a palindrome

```php
var_dump(StringUtils::isPalindrome("RaceCar")); // Outputs: true
var_dump(StringUtils::isPalindrome("Hello"));   // Outputs: false
```

---

## 📁 Namespace Structure

All classes are under the namespace:

```php
\PhpEightFour\StringUtils\
```

---

## 📚 Requirements

- PHP 8.4 or higher
- Composer (for installation)

---

## 🧑‍💻 Contributing

Contributions are welcome! Please open an issue or submit a pull request on GitHub.

1. Fork the repo
2. Create your feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Submit a pull request

---

## 📄 License

MIT License – see the [LICENSE](LICENSE) file for details.

---

## 📬 Contact

If you have any questions or suggestions, feel free to reach out at:

- GitHub: [https://github.com/eri-bga/php-eight-four-string-utils](https://github.com/eri-bga/php-eight-four-string-utils)

---