# Lazy initialization pattern

In a software design pattern view, lazy initialization is often used together with a factory method pattern.
This combines three ideas:

- Using a factory method to create instances of a class (factory method pattern)
- Storing the instances in a map, and returning the same instance to each request for an instance with same parameters (multiton pattern)
- Using lazy initialization to instantiate the object the first time it is requested (lazy initialization pattern)

## Resources

- [Wikipedia](https://en.wikipedia.org/wiki/Lazy_initialization)