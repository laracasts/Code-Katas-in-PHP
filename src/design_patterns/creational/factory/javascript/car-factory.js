// factory function to create car objects
function createCar(make, model, year) {
	var o = new Object();

	o.make   = make;
	o.model  = model;
	o.year   = year;
	o.sayCar = function() {
		console.log('I have a ' + this.year + ' ' + this.make + ' ' + this.model + '.');
	};

	return o;
}

// create 2 car objects for John and Jane
var johnCar = createCar('Ford', 'F150', '2011'),
	janeCar = createCar('Audi', 'A4', '2007');

// call method on Jane's car
janeCar.sayCar();

console.log(johnCar.constructor === Car); // false
console.log(johnCar.constructor === Car); // false