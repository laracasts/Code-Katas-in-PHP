Creational patterns
=================================

The definitions are taken from Wikipedia.

Abstract factory
----------------------------------------------------------------------
Provide an interface for creating families of related or dependent objects without specifying their concrete classes.

Builder
----------------------------------------------------------------------
Separate the construction of a complex object from its representation, allowing the same construction process to create various representations.

Factory method
----------------------------------------------------------------------
Define an interface for creating a single object, but let subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses (dependency injection).

Lazy initialization
----------------------------------------------------------------------
Tactic of delaying the creation of an object, the calculation of a value, or some other expensive process until the first time it is needed. This pattern appears in the GoF catalog as "virtual proxy", an implementation strategy for the Proxy pattern.

Multiton
----------------------------------------------------------------------
Ensure a class has only named instances, and provide global point of access to them
	
Object pool
----------------------------------------------------------------------
Avoid expensive acquisition and release of resources by recycling objects that are no longer in use. Can be considered a generalisation of connection pool and thread pool patterns.

Prototype
----------------------------------------------------------------------
Specify the kinds of objects to create using a prototypical instance, and create new objects by copying this prototype.

Resource acquisition is initialization
----------------------------------------------------------------------
Ensure that resources are properly released by tying them to the lifespan of suitable objects.

Singleton
----------------------------------------------------------------------
Ensure a class has only one instance, and provide a global point of access to it.
