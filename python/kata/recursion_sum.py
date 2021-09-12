def sum1(lst):
    total = 0
    for element in lst:
        if type(element) is list:
            total = total + sum1(element)
        else:
            total = total + element
    return total


# print("Sum is:", sum1([[1, 2], [3, 4]]))

# assert sum([1, 2, [3, 4], [5, [6, 7]]]) == 28
# assert sum([1, 1, [1, 1], [1, [1, [[1, [1, 1, 1, [1, 1], 1]], 1, 1], 1]]]) == 16

print(sum1([1, 2, [3, 4], [5, [6, 7]]]))
# print(sum1([1, 1, [1, 1], [1, [1, [[1, [1, 1, 1, [1, 1], 1]], 1, 1], 1]]]))
