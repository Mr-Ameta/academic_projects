using System;

class MyClass
{
    public event EventHandler MyEvent;

    public void DoSomething()
    {
        Console.WriteLine("DoSomething method is called.");
        MyEvent?.Invoke(this, EventArgs.Empty);
    }
}

class EventSubscriber
{
    public void OnMyEvent(object sender, EventArgs e)
    {
        Console.WriteLine("MyEvent handler in EventSubscriber is executed.");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        MyClass myClass = new MyClass();
        EventSubscriber subscriber = new EventSubscriber();

        myClass.MyEvent += subscriber.OnMyEvent;

        myClass.DoSomething();
    }
}
