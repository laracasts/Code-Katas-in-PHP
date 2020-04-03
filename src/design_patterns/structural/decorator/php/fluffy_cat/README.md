BookTitleDecorator
===============================

In this example, the Book class will have it's title shown in different ways by the BookTitleDecorator and it's child classes BookTitleExclaimDecorator and BookTitleStarDecorator. 

In my example I do this by having BookTitleDecorator make a copy of Book's title value, which is then changed for display. 

Depending on the implementation, it might be better to actually change the original object.
