<?php

require("ListItem.php");
require("CompositeListItem.php");

class ToDoList extends CompositeListItem { }
class GroceryList extends CompositeListItem { }
class LibraryList extends CompositeListItem { }
class GroceryItem extends ListItem { }
class LibraryItem extends ListItem { }
class PostOfficeItem extends ListItem { }

// Create our post office item
$poItem = new PostOfficeItem("Post letter at post office.");
 
// Create our Library List and Library Items
$libList = new LibraryList( "Go to the Library" );
$libItem1 = new LibraryItem("Return Craig Sefton's book.");
$libItem2 = new LibraryItem("Get another PHP book.");
$libList->addListItem( $libItem1 );
$libList->addListItem( $libItem2 );
 
// Create our Grocery List and Grocery Items
$groceryList = new GroceryList("Grocery Shopping List");
$groceryItem1 = new GroceryItem("Milk");
$groceryItem2 = new GroceryItem("Eggs");
$groceryItem3 = new GroceryItem("Bread");
$groceryList->addListItem( $groceryItem1 );
$groceryList->addListItem( $groceryItem2 );
$groceryList->addListItem( $groceryItem3 );
 
// Create our To-Do List, and add our other lists and items to it
$todoList = new ToDoList("My ToDo List");
$todoList->addListItem( $groceryList );
$todoList->addListItem( $libList );
$todoList->addListItem( $poItem );

foreach ($todoList->listItems() as $todo ) {
    $list = $todoList->getComposite();
    if ( is_object($list) ) {
	// we've got a composite list item
    } else {
	// we've got an individual list item
    }
}
