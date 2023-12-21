using System;

class Person
{
    protected int RollNo;
    protected string Name;

    public void Get_Data()
    {
        Console.Write("Enter Roll No.: ");
        RollNo = int.Parse(Console.ReadLine());

        Console.Write("Enter Name: ");
        Name = Console.ReadLine();
    }

    public virtual void Display_Data()
    {
        Console.WriteLine($"Roll No.: {RollNo}");
        Console.WriteLine($"Name: {Name}");
    }
}

class Student : Person
{
}

class Details : Student
{
}

class Telephone
{
    protected string phonetype;

    public Telephone()
    {
        phonetype = "";
    }

    public void Ring()
    {
        Console.WriteLine($"Ringing the {phonetype}.");
    }
}

class ElectronicPhone : Telephone
{
    public ElectronicPhone()
    {
        phonetype = "Digital";
    }

    public void Run()
    {
        Ring();
    }
}

class ElectronicPhonePolymorphic : Telephone
{
    public ElectronicPhonePolymorphic()
    {
        phonetype = "Digital";
    }

    public  void Ring()
    {
        Console.WriteLine($"Custom ringing message for {phonetype}.");
    }
}

class TestClass
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        Details details = new Details();
        details.Get_Data();
        details.Display_Data();

        Console.WriteLine("\nDemonstrating Telephone and ElectronicPhone:");
        ElectronicPhone electronicPhone = new ElectronicPhone();
        electronicPhone.Run();

        Console.WriteLine("\nDemonstrating Polymorphism:");
        Telephone phone = new ElectronicPhonePolymorphic();
        phone.Ring();
    }
}
