class TheOther implements Prototype, Command
{
	public Object clone() {
		return new TheOther();
	}

	public String getName() {
		return "TheOther";
	}

	public void execute() {
		System.out.println( "TheOther: execute" );
	}
}

