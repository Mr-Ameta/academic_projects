using System;

class Shape
{
    public virtual void Draw()
    {
        Console.WriteLine("Drawing a shape");
    }

    public virtual void Erase()
    {
        Console.WriteLine("Erasing a shape");
    }
}

class Circle : Shape
{
    public override void Draw()
    {
        Console.WriteLine("Drawing a circle");
    }

    public override void Erase()
    {
        Console.WriteLine("Erasing a circle");
    }
}

class Triangle : Shape
{
    public override void Draw()
    {
        Console.WriteLine("Drawing a triangle");
    }

    public override void Erase()
    {
        Console.WriteLine("Erasing a triangle");
    }
}

class Square : Shape
{
    public override void Draw()
    {
        Console.WriteLine("Drawing a square");
    }

    public override void Erase()
    {
        Console.WriteLine("Erasing a square");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        Shape[] shapes = new Shape[] { new Circle(), new Triangle(), new Square() };

        foreach (Shape shape in shapes)
        {
            shape.Draw();
            shape.Erase();
            Console.WriteLine();
        }
    }
}
