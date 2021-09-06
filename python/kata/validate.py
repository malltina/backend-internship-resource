def validate(string):
    problems = []
    # validate number
    if any(i.isdigit() for i in string) is False:
        problems.append('The word must also contain a number')
    # validate uppercase
    is_upper = False
    for letter in string:
        if letter.isupper():
            is_upper = True
            break
        else:
            is_upper = False
    if is_upper is False:
        problems.append('The word must also contain a uppercase')

    # validate lowercase
    is_lower = False
    for letter in string:
        if letter.islower():
            is_lower = True
            break
        else:
            is_lower = False
    if is_lower is False:
        problems.append('The word must also contain lowercase')

    # validate len
    if len(string) < 5:
        problems.append('Minimum string length must be greater than 5')

    if len(problems) == 0:
        return['Valid string']
    else:
        return problems



print(validate('D3veloper'))
# Expected Result: ['Valid string']

print(validate('Word'))
# Expected Result: ['Minimum string length must be greater than 5', 'The word must also contain a number']
