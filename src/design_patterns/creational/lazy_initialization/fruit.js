var Fruit = (function() {

	var types = {};

	function Fruit() {};

	// count own properties in object
	function count(obj) {
		return Object.keys(obj).length;
	}

	var _static = {
	getFruit: function(type) {
	  if (typeof types[type] == 'undefined') {
		types[type] = new Fruit;
	  }
	  return types[type];
	},
	printCurrentTypes: function () {
		console.log('Number of instances made: ' + count(types));
		for (var type in types) {
			console.log(type);
		}
	}

};

return _static;

})();

Fruit.getFruit('Apple');
Fruit.printCurrentTypes();
Fruit.getFruit('Banana');
Fruit.printCurrentTypes();
Fruit.getFruit('Apple');
Fruit.printCurrentTypes();