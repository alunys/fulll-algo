# FizzBuzz

## Description

Display numbers between **1** and **N** by following the rules:

- if number can be divided by 3: **Fizz** is displayed ;
- if number can be divided by 5: **Buzz** is displayed ;
- if number can be divided by 3 **AND** 5 : **FizzBuzz** is displayed;
- else: the number is displayed.

## Usage

### with php-cli installed on the host
To run the script, use the following command in the root of the project with the desired `<number>`:
```bash
php fizzbuzz.php <number>
```

### with docker
```bash
docker run -it --rm --name FizzBuzz -v "$PWD/src":/srv/fizzbuzz/src -w /srv/fizzbuzz/src php:8.3-cli php fizzbuzz.php <number>
```
