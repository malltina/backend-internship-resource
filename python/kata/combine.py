def combine_together(d1, d2):
    ans = {}
    for i in d1:
        if i in d2:
            ans[i] = d1[i] + d2[i]
            del d2[i]
        else:
            ans[i] = d1[i]

    return dict(ans.items() | d2.items())

d1 = {'a': 100, 'b': 200, 'c':300, 'd':500}
d2 = {'a': 300, 'b': 200, 'd':400, 'g':600}
print(combine_together(d1, d2))
# Expected Result: {'a': 400, 'b': 400, 'd': 400, 'c': 300}
