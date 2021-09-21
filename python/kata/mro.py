# How MRO works?

Mro is an ordering of the inheritance graph.

for examale :


	class A:
		pass

	class B(A):
		pass
		
	class C(A):
		pass
		
	class D(B, C):
		pass
    
 if we try `D.mro()` for this example, the result will be something like this :

	[<class '__main__.D'>, <class '__main__.B'>, <class '__main__.C'>, <class '__main__.A'>, <class 'object'>]

Mention that -> 'object is a base class of every classes in python'


But the question is here :
	**How mro exactly works ?**
	
MRO works base on an alogorithm named C3,now we going to explain this algorithm.

Imagine a structure like this :

	 class O
	 class A extends O
	 class B extends O
	 class C extends O
	 class D extends O
	 class E extends O
	 class K1 extends A, B, C
	 class K2 extends D, B, E
	 class K3 extends D, A
	 class Z extends K1, K2, K3


![alt text](c3.svg)

`The merge of parents' linearizations and parents list is done by selecting the first head of the lists which does not appear in the tail (all elements of a list except the first) of any of the lists. Note, that a good head may appear as the first element in multiple lists at the same time, but it is forbidden to appear anywhere else. `

The mro of z calculate like this :
```
L(O)   = [O]
L(A)   = [A] + merge(L(O), [O])
       = [A] + merge([O], [O])
       = [A, O]

L(B)   = [B, O]
L(C)   = [C, O]
L(D)   = [D, O]
L(E)   = [E, O]

L(K1)  = [K1] + merge(L(A), L(B), L(C), [A, B, C])
       = [K1] + merge([A, O], [B, O], [C, O], [A, B, C])
	   = [K1, A] + merge([O], [B, O], [C, O], [B, C])
	   = [K1, A, B] + merge([O], [O], [C, O], [C])
	   = [K1, A, B, C] + merge([O], [O], [O])
	   = [K1, A, B, C, O]

L(K2)  = [K2] + merge(L(D), L(B), L(E), [D, B, E])
       = [K2] + merge([D, O], [B, O], [E, O], [D, B, E])
	   = [K2, D] + merge([O], [B, O], [E, O], [B, E])
	   = [K2, D, B] + merge([O], [O], [E, O], [E])
	   = [K2, D, B, E] + merge([O], [O], [O])
	   = [K2, D, B, E, O]

L(K3)  = [K3] + merge(L(D), L(A), [D, A])
       = [K3] + merge([D, O], [A, O], [D, A])
	   = [K3, D] + merge([O], [A, O], [A])
	   = [K3, D, A] + merge([O], [O])
	   = [K3, D, A, O]

L(Z)  = [Z] + merge(L(K1), L(K2), L(K3), [K1, K2, K3])
	  = [Z] + merge([K1, A, B, C, O], [K2, D, B, E, O],
	  [K3, D, A, O], [K1, K2, K3])
	  = [Z, K1] + merge([A, B, C, O], [K2, D, B, E, O],
	   [K3, D, A, O], [K2, K3])
	  = [Z, K1, K2] + merge([A, B, C, O], [D, B, E, O],
	   [K3, D, A, O], [K3])
	  = [Z, K1, K2, K3] + merge([A, B, C, O], [D, B, E,
	   O], [D, A, O])
	  = [Z, K1, K2, K3, D] + merge([A, B, C, O], [B, E,
	   O], [A, O])
	  = [Z, K1, K2, K3, D, A] + merge([B, C, O], [B, E,
	   O], [O])
	  = [Z, K1, K2, K3, D, A, B] + merge([C, O], [E, O],
	   [O])
	  = [Z, K1, K2, K3, D, A, B, C] + merge([O], [E, O],
	   [O])
	  = [Z, K1, K2, K3, D, A, B, C, E] + merge([O], [O],
	   [O])
	  = [Z, K1, K2, K3, D, A, B, C, E, O]

