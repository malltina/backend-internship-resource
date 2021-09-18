def combine_together(d1, d2):
    for i in d2.keys():
        if i in d1:
            d2[i] += d1[i]
    for b in d1.keys():
        if b not in d2:
            d2[b] = d1[b]
    return d2


d1 = {'a': 200, 'b': 200, 'c':300}
d2 = {'a': 200, 'b': 200, 'd':400}
print(combine_together(d1, d2))
# Expected Result: {'a': 400, 'b': 400, 'd': 400, 'c': 300}
