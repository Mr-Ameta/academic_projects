using System;

class Rectangle
{
    protected double length;
    protected double width;
    protected double area;

    public Rectangle(double length, double width)
    {
        this.length = length;
        this.width = width;
    }

    public virtual void Find_Area()
    {
        area = length * width;
    }
}

class Tabletop : Rectangle
{
    public Tabletop(double length, double width) : base(length, width)
    {
    }

    public override void Find_Area()
    {
        base.Find_Area();
        Console.WriteLine($"Area of Tabletop: {area}");
    }
}

class ExecuteRectangle
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        Tabletop tabletop = new Tabletop(5.0, 7.0);
        tabletop.Find_Area();
    }
}
