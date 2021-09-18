def print_me(f):
    """ Implement decorator to print result of function """
    def inner(*args, **kwargs):
        a = f(*args, **kwargs)
         
        return a
         
    return inner

@print_me
def add(x, y):
    return x + y

print(add(10, 20))
# Expected Output: 30
