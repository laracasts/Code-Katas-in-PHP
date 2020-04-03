// ------------
// OLOO Pattern
// ------------

// constructor object to create car objects
var Car = {
	init: function(make, model, year) {
		this.make   = make;
		this.model  = model;
		this.year   = year;        
	},
	sayCar: function() {
		alert('I have a ' + this.year + ' ' + this.make + ' ' + this.model + '.');    
	}
};


// create 2 car objects for John and Jane
var johnCar = Object.create(Car),
	janeCar = Object.create(Car);

// call init method on John and Jane
johnCar.init('Ford', 'F150', '2011');
janeCar.init('Audi', 'A4', '2007');

// call method on Jane's car
janeCar.sayCar();