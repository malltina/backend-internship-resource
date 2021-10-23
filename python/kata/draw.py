def draw_triangle():
    n = 5
    draw = []
    for i in range(1, n + 1):
        draw.append((i * '*').replace('', ' '))
    draw = draw
    draw2 = draw[::-1]
    draw2 = draw2[1:]
    draw = draw + draw2
    for star in draw:
        print(star.strip())



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
