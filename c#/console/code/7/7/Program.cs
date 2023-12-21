using System;

abstract class Telephone
{
    protected string phonetype;

    public Telephone(string type)
    {
        phonetype = type;
    }

    public abstract void Ring();
}

class DigitalPhone : Telephone
{
    public DigitalPhone() : base("Digital")
    {
    }

    public override void Ring()
    {
        Console.WriteLine($"Ringing the {phonetype} phone.");
    }
}

class TalkingPhone : Telephone
{
    public TalkingPhone() : base("Talking")
    {
    }

    public override void Ring()
    {
        Console.WriteLine($"Ringing the {phonetype} phone with voice.");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        Telephone digitalPhone = new DigitalPhone();
        Telephone talkingPhone = new TalkingPhone();

        digitalPhone.Ring();
        talkingPhone.Ring();
    }
}
