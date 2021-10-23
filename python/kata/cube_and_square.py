def cube(numbers):
    return list(map(lambda x: x ** 3, nums))


def square(numbers):
    return list(map(lambda x: x ** 2, nums))



nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

print(cube(nums))
# Expected Result: [1, 8, 27, 64, 125, 216, 343, 512, 729, 1000]


print(square(nums))
# Expected Result: [1, 4, 9, 16, 25, 36, 49, 64, 81, 100]
