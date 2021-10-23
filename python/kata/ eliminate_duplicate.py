def  eliminate_duplicate(chars):
    print(list(map(lambda letter: (letter.upper(), letter.lower()), chars)))


chars = {'f', 'b', 'U', 'i', 'o', 'E', 'a', 'c'}
eliminate_duplicate(chars)
# Expected Result: {('U', 'u'), ('O', 'o'), ('A', 'a'), ('B', 'b'), ('F', 'f'), ('I', 'i'), ('E', 'e')}
