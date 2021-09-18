def  eliminate_duplicate(chars):
    """ Write a code to convert all the characters in uppercase and lowercase 
    and eliminate duplicate letters from a given sequence. Use map() function. """

def eliminate_duplicate(char):
    
    for ch in char:
        return ch.upper(),ch.lower()
 
chars = {'a', 'b', 'E', 'f', 'a', 'i', 'o', 'U', 'a'}
a = map(eliminate_duplicate, chars)
print(a)


