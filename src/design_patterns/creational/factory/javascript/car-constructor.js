// constructor function to create car objects
function Car(make, model, year) {
	this.make   = make;
	this.model  = model;
	this.year   = year;
	this.sayCar = function() {
		console.log('I have a ' + this.year + ' ' + this.make + ' ' + this.model + '.');
	};
}

// create 2 car objects for John and Jane
var johnCar = new Car('Ford', 'F150', '2011'),
	janeCar = new Car('Audi', 'A4', '2007');

// call method on J
console.log(johnCar.constructor === Car); // true
console.log(johnCar.constructor === Car); // true