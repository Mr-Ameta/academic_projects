using System;

class Delegate_Demo
{
    public static int num = 10;
}

delegate int NumberChanger(int n);

class Program
{
    static int AddNum(int p)
    {
        Delegate_Demo.num += p;
        return Delegate_Demo.num;
    }

    static int MultNum(int q)
    {
        Delegate_Demo.num *= q;
        return Delegate_Demo.num;
    }

    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        NumberChanger nc1 = new NumberChanger(AddNum);
        NumberChanger nc2 = new NumberChanger(MultNum);

        nc1(5);
        Console.WriteLine($"Value of num after addition: {Delegate_Demo.num}");

        nc2(2);
        Console.WriteLine($"Value of num after multiplication: {Delegate_Demo.num}");
    }
}
