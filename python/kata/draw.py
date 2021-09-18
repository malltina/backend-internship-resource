def draw_triangle():
    """ Write a code to construct the following pattern, 
    using a nested for loop. """

    for i in range(5):
        for b in range(i):
            print("*", end=' ')
        print(' ')
    for c in range(5,0,-1):
        for d in range(c):
            print("*", end=' ')
        print(' ')


draw_triangle()
""" Expected Result:

* 
* * 
* * * 
* * * * 
* * * * * 
* * * * 
* * * 
* * 
*

"""
