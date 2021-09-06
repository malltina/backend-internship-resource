def max_aggregate(score_list):
    counter = {}
    for person in score_list:
        if person[0] in counter:
            counter[person[0]] += person[1]
        else:
            counter[person[0]] = person[1]
    return (max(counter, key=counter.get), counter[max(counter, key=counter.get)])


print(max_aggregate([
    ('Juan Whelan', 90), 
    ('Sabah Colley', 88), 
    ('Peter Nichols', 7), 
    ('Juan Whelan', 122), 
    ('Sabah Colley', 84)
]))

# Expected Result: ('Juan Whelan', 212)
