class BuilderExample {

	public static void main(String[] args) {
		Waiter waiter = new Waiter();
		PizzaBuilder hawaiian_pizzabuilder = new HawaiianPizzaBuilder();
		PizzaBuilder spicy_pizzabuilder = new SpicyPizzaBuilder();

		waiter.setPizzaBuilder( hawaiian_pizzabuilder );
		waiter.constructPizza();

		Pizza pizza = waiter.getPizza();
	}
}

