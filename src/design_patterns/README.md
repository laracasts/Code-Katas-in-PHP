Design Patterns
==================

Design Patterns are a software engineering concept describing recurring solutions to common problems in software design.

"A pattern describes a problem which occurs over and over again in our environment, and then describes the core of the solution to that problem, in such a way that you can use this solution a million times over, without ever doing it the same way twice".
[Christopher Alexander, Sara Ishikawa, Murray Silverstein, Max Jacobson, Ingrid Fiksdahl-King, Shlomo Angel. A Pattern Language. Oxford University Press, New York, 1977.]

Accepted solutions for a common problem.

Italian summary
------------------

I Pattern sono soluzioni a problemi ricorrenti che si incontrano in applicazioni reali.
I Pattern spiegano come realizzare oggetti e le interazioni tra essi, costruendo codice riusabile.

About the code
------------------

The code of the classes in this section is only a DEMO to show basic implementation of every single pattern.
For PHP files, for example, we can use composer to build an autoloader and separate each class or interface in a single file.

Wikipedia
------------------

- <a href="http://en.wikipedia.org/wiki/Design_pattern_(computer_science)" title="Design Patterns on Wikipedia">Design Patterns on Wikipedia</a>
- [Creational Patterns](http://en.wikipedia.org/wiki/Creational_pattern)
- Concurrency patterns
- [Structural Patterns](http://en.wikipedia.org/wiki/Structural_pattern)
- [Behavioral Patterns](http://en.wikipedia.org/wiki/Behavioral_pattern)
- [OO Design](http://en.wikipedia.org/wiki/Object-oriented_design)

Gang of Four
------------------

[Erich Gamma](http://en.wikipedia.org/wiki/Erich_Gamma)
[Richard Helm](http://en.wikipedia.org/wiki/Richard_Helm)
[Ralph Johnson](http://en.wikipedia.org/wiki/Ralph_Johnson)
[John Vlissides](http://en.wikipedia.org/wiki/John_Vlissides)

Books
------------------
Design Patterns: Elements of Reusable Object-Oriented Software, Erich Gamma, Richard Helm, Ralph Johnson and John Vlissides (Gang of Four); 23 classic software design patterns providing recurring solutions to common problems in software design.

Patterns of Enterprise Application Architecture, Martin Fowler.

Resources
------------------

[GOF patterns](http://www.gofpatterns.com/)
[Sourcemaking](http://sourcemaking.com/design_patterns)

Glossary
------------------

- <strong>Abstract algorithms</strong>: Algorithms that do things without precise specifications of how or even what they are doing.
- <strong>Abstract class</strong>: a class that contains one or more abstract methods, and therefore can never be instantiated. Abstract classes are defined so that other classes can extend them and make them concrete by implementing the abstract methods.
- <strong>Abstract method:</strong> a method that has no implementation.
- <strong>Abstract Window Toolkit</strong> (AWT): a collection of Java-supplied GUI components. These components provide that subset of functionality which is common to all native platforms.
- <strong>Accessor method</strong>: a method which allows other classes to read (but not change) the values of the attributes. Accessor methods are also known as "getter methods." Accessor methods are public methods that merely return the value of the attribute. See also getter method.
- <strong>Access protection</strong>: access protection allows programmers to restrict access to members of the class.
- <strong>API</strong>: Application Programming Interface. The API specifies the method used by a programmer when writing an application to access the behavior and state of classes and objects.
- <strong>Applet</strong>: A program written in Java to run within a Java-enabled Web browser.
- <strong>Application</strong>: Unlike an applet, a Java application does not require a Web browser to function. Applications are often referred to as "stand-alone."
- <strong>Argument</strong>: a data item specified in a method call. An argument can be a literal value, a variable, or an expression.
- <strong>array</strong> a collection of data items, all of the same type, in which the position of each item is uniquely designated by a discrete type.
- <strong>ASCII</strong> American Standard Code for Information Interchange. A standard assignment of 7-bit numeric codes to characters
- <strong>attribute</strong> The attributes of the class are the values that define the state of the class. Attributes are also referred to as fields or variables.
- <strong>Bean:</strong> a reusable software component. Beans can be combined to create an application.
- boolean Refers to an expression or variable that can have only a true or false value. Java provides the boolean type and the literal values true and false.
- <strong>CASE tool:</strong> a CASE tool creates design specifications for programmers and software designers. CASE stands for "Computer Assisted Software Engineering." A good CASE tool not only draws diagrams; it also can convert those diagrams to compilable source code in any of variety of languages.
- <strong>children</strong> or <strong>child</strong> A term occasionally substituted for subclass.
- <strong>class</strong> In Java, a type that defines the implementation of a particular kind of object. A class definition defines instance and class variables and methods, as well as specifying the interfaces the class implements and the immediate superclass of the class.
- client Any object or class outside the pattern; generally one that only knows about the public interface the pattern and its classes present, rather than about its private implementation.
- <strong>comment</strong> In a program, the explanatory text that is ignored by the compiler. In Java programs, comments are delimited using // or /*...*/.
- <strong>compiler</strong> A program to translate source code into code to be executed by a computer. The Java compiler translates Java source code into Java bytecode.
- <strong>composition</strong> Creating objects with other objects as members. Composition should be used when a "has-a" relationship applies.
- <strong>constructor</strong> A pseudo-method that creates an object.
- <strong>data structure</strong> Describes how data is arranged in the structure.
- <strong>delegation</strong> This pattern is one where a given object provides an interface to a set of operations. However, the actual work for those operations is performed by one or more other objects.
- <strong>deprecation</strong> Refers to a class or method that is no longer important, and will probably cease to exist in the future.
- <strong>early binding</strong> Early binding assumes that everything is known at compile time. It is always obvious which method will be invoked in which class at which point in the flow of a program. Early binding is slightly faster than late binding and is used exclusively by procedural languages like C and FORTRAN.
- <strong>encapsulation</strong> The localization of knowledge within a module. Because objects encapsulate data and implementation, the user of an object can view the object as a black box that provides services. Instance variables and methods can be added, deleted, or changed, but as long as the services provided by the object remain the same, code that uses the object can continue to use it without being rewritten. See also instance variable, instance method.
- <strong>exception</strong> An event during program execution that prevents the program from continuing normally; generally, an error.
- <strong>extends</strong> Another term for "is a subclass of."
- <strong>extrinsic</strong> Something other than the object itself keeps track of the state of the object.
- <strong>field</strong> The fields of the class are the values that define the state of the class. Fields are also referred to as attributes or variables.
- <strong>friendly</strong> access Providing friendly access to the fields of a class exposes the normally private implementation of a class to certain closely related classes that must access the class's fields frequently. Friendly members of a class are identified in a class diagram by underlining them.
- <strong>getter method</strong> A method that allows other classes to read (but not change) the values of the attributes. Getter methods are also known as accessor methods. Getter methods are public methods that merely return the value to the attribute.
- <strong>GUI Graphical User Interface.</strong> Refers to the techniques involved in using graphics, along with a keyboard and a mouse, to provide an easy-to-use interface.
- <strong>hierarchy</strong> A classification of relationships in which each item except the top one is a specialized form of the item above it. Each item can have one or more items below it in the hierarchy.
- <strong>implementation</strong> The implementation of a pattern is a set of code that uses the pattern. It shows the details and tricks that are needed to make it work.
- <strong>implementation inheritance</strong> Implementation inheritance allows a superclass and a subclass to share identical code for the same method. This sort of inheritance encourages code reuse.
- <strong>inheritance</strong> The concept of classes automatically containing the variables and methods defined in their supertypes. See also superclass, subclass.
- <strong>instance</strong> An object of a particular class.
- <strong>interface</strong> The public members of a class.
- <strong>Java</strong> An object-oriented programming language developed by Sun Microsystems. A "write-once, run-anywhere" programming language.
- <strong>JavaBeans</strong> A portable, platform-independent reusable component model.
- <strong>Java Development Kit</strong> (JDK) A software development environment for writing applets and application in Java.
- <strong>late binding</strong> Late binding allows design decisions to be deferred until runtime. Late binding is generally more flexible, and is used exclusively by Smalltalk and Java.
- <strong>literal</strong> The basic representation of any integer, floating point, or character value. For example, 3.0 is a single-precision floating point literal, and "a" is a character literal.
- <strong>member</strong> A field or method of a class. Unless specified otherwise, a member is not static.
- <strong>method</strong> The operations of a class are stored as methods. A method, similar to a function in a procedural language like C, represents an action an object takes, or an operation the class performs.
- <strong>method overloading</strong> Method overloading permits two methods (or constructors) to have the same name as each other, provided they can be distinguished by their argument lists.
- <strong>multiple inheritance</strong> Multiple inheritance allows a single subclass to extend more than one superclass.
- <strong>multithreaded</strong> Describes a program that is designed to have parts of its code execute concurrently.
- <strong>mutator method</strong> Mutator methods allow nonsibling objects to change the state of an object. Typically, a mutator method is a public method. Mutator methods return as void and generally take a single argument of the same type they are setting. Mutator methods are also known as "setter methods." See also setter method.
- <strong>Noargs constructor</strong> A constructor that does not take arguments. They are sometimes referred to as "no-initializer constructors."
- <strong>Object</strong> The principal building block of object-oriented programs. Each object is a programming unit consisting of data and functionality.
- <strong>Object composition</strong> Other objects are stored as pointers or references inside the object that provides the interface to clients. Object composition is a powerful yet often overlooked tool in the OOP programmer's toolbox. Structural patterns show you how to take advantage of it.
- <strong>Object-oriented design</strong> A software design method that models the characteristics of abstract or real objects using classes and objects.
- <strong>Object-oriented programming</strong> A programming methodology that uses distinct units of functionality, with each unit called an object.
- <strong>Operations</strong> The operations of a class define what an object does.
- <strong>Operations</strong> compartment The operations compartment is the box at the bottom of the class diagram that contains method names.
- <strong>Overloaded</strong> method An overloaded method has the same name but a different argument list as another method in the same class.
- <strong>Overloading</strong> Using one identifier to refer to multiple items in the same scope.
- <strong>Overriding</strong> Replacing a method that would otherwise be inherited from a superclass with a new method defined in the subclass is called overriding the method.
- Packet fragmentation Every packet-based network has an MTU (Maximum Transmission Unit) size. The MTU is the size of the largest packet which that network can transmit. Packets larger than the allowable MTU must be divided into multiple smaller packets, or fragments, to enable them to traverse the network.
- <strong>Parent</strong> A term occasionally substituted for superclass.
- <strong>Protected</strong> By declaring that a member of a class is protected, you indicate that subclasses are allowed to access the member, though other nondescendant classes are not. Protected members are preceded by a "#" in the class diagram.
- <strong>Read-only properties</strong> Attributes with an accessor method but no mutator method can be gotten but not set. These are called read-only properties.
- <strong>Responsibilities</strong> The responsibilities of a class are defined as things the class knows, or the attributes of the class, plus the things the class does, or the operations of the class.
- <strong>Return values</strong> Methods can return information to whoever called them. This information is commonly called the method's return value, and like a method argument it has a type. Unlike a method argument, the return value does not have a name.
- <strong>Reverse engineering</strong> The vice versa direction-source code to diagrams-is commonly referred to as reverse engineering.
- <strong>Scope</strong> A characteristic of an identifier that determines where the identifier can be used. Most identifiers in Java have either class or local scope. Instance and class variables and methods have class scope; they can be used outside the class and its subclasses only by prefixing them with an instance of the class or (for class variables and methods) with the class name. All other variables are declared within methods and have local scope; they can be used only within the enclosing block.
- <strong>Setter</strong> method <strong>Setter methods</strong> allow nonsibling objects to change the state of an object. Typically, a setter method is a public method. Setter methods return as void and generally take a single argument of the same type they are setting. Setter methods are also known as "mutator methods." See also mutator method.
- <strong>Sibling</strong> Objects of the same class are called siblings. Siblings are allowed to access the private elements of other siblings.
- <strong>Signature</strong> The signature of a method is its list of argument types.
- <strong>Static</strong> field Another name for "class variable."
- <strong>Static</strong> member A member that is shared by all variables of that class and is stored in only one place. Static members are identified by underlining them in a class diagram.
- <strong>Static</strong> method Another name for "class method."
- <strong>Subclass</strong> A class that is derived from a particular class, perhaps with one or more classes in between.
- <strong>Superclass</strong> A class from which a particular class is derived, perhaps with one or more classes in between.
- <strong>Variable</strong> The variables of the class are the values that define the state of the class. Variables are also referred to as "attributes" or "fields."
- <strong>Void</strong> A method that does not return a value is considered void.
- <strong>Write-only</strong> properties Attributes with a mutator method but no accessor method can be set but not gotten. These are called write-only properties.