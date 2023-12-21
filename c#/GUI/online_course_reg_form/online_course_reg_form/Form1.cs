using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace online_course_reg_form
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            label8.Text = label2.Text + " " + textBox1.Text + "\n";
            label8.Text += label3.Text + " " + textBox2.Text + "\n";
            label8.Text += label4.Text + " " + textBox3.Text + "\n";
            label8.Text += label5.Text + " " + comboBox1.Text + "\n";
            if (radioButton1.Checked)
            {
                label8.Text += label6.Text + " " + radioButton1.Text + "\n";
            }
            if (radioButton2.Checked)
            {
                label8.Text += label6.Text + " " + radioButton2.Text + "\n";
            }
            label7.Show();
            pictureBox1.Image = Image.FromFile("C:\\amtech\\payment_slip.png");
            pictureBox1.SizeMode = PictureBoxSizeMode.StretchImage;

        }
    }
}
