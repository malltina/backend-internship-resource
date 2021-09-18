def just_integer(collection):
    """ Write a code to filter collection to get integer values
    using Python filter and local function. """
    collection = [x for x in collection if isinstance(x,int) and not isinstance(x,bool)]
    return collection

c = ['Kourosh', 1, None, True, [], 2, 3, ()]



assert just_integer(c) == [1, 2, 3]


