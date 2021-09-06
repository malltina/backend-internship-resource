## What is self in php

- selfrefers to the class members, but not for any particular object. This is because the static members (variables 
or functions) are class members shared by all the objecxts of the class.
Whereas, $this wil refer the member variables and function for a particular instance.

# What is difference between self and static

- self refers to the same class in which the new keyword is actually written.
static , in PHP 5.3's late static bindings, refers to whatever class in the hierarchy you called the method on

- When you use self to refer to a class member,
you're referring to the class within which you use the keyword.

- In this case, your Example class defines a protected static property called $bar. When you use self in the 
Example class to refer to the property, you're referencing the same class.

- When you call a method via static, you're invoking a feature called late static bindings

# What is late static bindings

- PHP implements a feature called late static bindings which can be used to reference the called class in a context 
of static inheritance.
More precisely, late static bindings work by storing the class named in the last "non-forwarding call". In case of static method calls, this is the class explicitly named (usually the one on the left of the :: operator); in case of non static method calls, it is the class of the object. A "forwarding call" is a static one that is introduced by self::, parent::, static::, or, if going up in the class hierarchy, forward_static_call(). The function get_called_class() can be used to retrieve a string with the name of the called class and static:: introduces its scope.
