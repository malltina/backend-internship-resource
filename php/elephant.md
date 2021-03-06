# 🐘 The Elephant project

This project is defined to wrap up `PHP/OOP/Test` skills. Probably you're familiar with [URL shortening](https://en.wikipedia.org/wiki/URL_shortening) already.

The goal of the project is to deliver minimal software that taken a vali URL and given an identifier for that. The software can return the URL by taking the identifier generated by itself later.
Try to deliver a **clean**, **testable**, and **well-designed** code as much as possible. The software will run in the console environment, there is no need to deliver rest API, front-end, etc.

## Implementation
- Use the latest version of PHP and it's features
- Use composer and psr-4 autoloading mechanism
- Use PHPUnit for test purposes
- Write a short README file and describe how did you do this project

> Feel free to use any third-part package, but consider your design principles and testability in choosing third-parties

## Persistence
Consider any persistence way you like, but it should be interchangeable with other ways, for example, If you gonna save the data on SQLite, it should be interchangeable with a file and your design must support interchangeability for the persistence layer


## Running
Consider running the software in these ways:
> **Encode** means to convert a URL to a short identifier, and **decode** means convert the generated identifier by software to a given URL


### Encoding input
```sh
php app.php encode 'https://example.com/foo/bar?baz=1#down'
```
### Encoding output (A sample value)
`xYurE8`
### Decoding input
```sh
php app.php decode 'xYurE8'
```
### Decoding output
`https://example.com/foo/bar?baz=1#down`


## Submission
Create a **private Github repository** and Grant access to your mentor's account.

**Feel free to ask any question**

**Good luck :v:**
