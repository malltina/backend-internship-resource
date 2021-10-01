def power(a, b):
    if b == 0:
        return 1
    return a * power(a, b - 1)


print(power(2, 4))

assert power(3, 4) == 81
assert power(5, 3) == 125
assert power(0, 2) == 0
