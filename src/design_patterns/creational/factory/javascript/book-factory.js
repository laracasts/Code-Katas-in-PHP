// Book Factory singleton
var BookFactory = (function () {
	
	var existingBooks = {}, existingBook;
 
	return {
		createBook: function ( title, author, genre, pageCount, publisherID, ISBN ) {

			// Find out if a particular book meta-data combination has been created before
			// !! or (bang bang) forces a boolean to be returned
			existingBook = existingBooks[ISBN];
			
			if ( !!existingBook ) {
				return existingBook;
			} else {
				// if not, let's create a new instance of the book and store it
				var book = new Book( title, author, genre, pageCount, publisherID, ISBN );
				existingBooks[ISBN] = book;
				return book;
			}
		}
	};

})();

// Usage: create a Book object
var Book = function(title, author, genre, pageCount, publisherID, ISBN) {
	this.title = title;
	this.author = author;
	this.genre = genre;
	this.pageCount = pageCount;
	this.publisherID = publisherID;
	this.ISBN = ISBN;
}


console.log( BookFactory.createBook('first boook', 'first author', 'first genre', '111', 'A219bG6', '1ISBN1') );
console.log( BookFactory.createBook('second boook', 'second author', 'second genre', '111', 'A219bG6', '1ISBN2') );
