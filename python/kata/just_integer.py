def just_integer(collection):
    return list(filter(lambda x: type(x) == int, collection))


print(just_integer(['Kourosh', 1, None, True, [], 2, 3, ()]))
# expect result : [1, 2, 3]

