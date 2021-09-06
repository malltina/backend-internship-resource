def sort_by_last_element(numbers):
    return sorted(numbers, key=lambda x: x[-1])

number_of_tuples = int(input())
list_of_tuples = [(tuple(map(int, input().split()))) for i in range(number_of_tuples)]

print(sort_by_last_element(list_of_tuples))
# print(sort_by_last_element([(2, 5), (1, 2), (4, 4), (2, 3), (2, 1)]))
# Expected Result : [(2, 1), (1, 2), (2, 3), (4, 4), (2, 5)]
