def max_aggregate(score_list):
    """ Write a code to calculate the maximum aggregate from the list of tuples (pairs). """
    b = []
    for i in score_list:
        b.append(i[1])
    c = max(b)
    for d in score_list:
        if c in d:
            return d
<<<<<<< HEAD

=======
>>>>>>> master

print(max_aggregate([
    ('Juan Whelan', 90), 
    ('Sabah Colley', 88), 
    ('Peter Nichols', 7), 
    ('Juan Whelan', 122), 
    ('Sabah Colley', 84)
]))

# Expected Result: ('Juan Whelan', 212)
