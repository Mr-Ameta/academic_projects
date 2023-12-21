using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace combo_box_ex
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            comboBox1.Items.Add(comboBox1.Text);
        }

        private void button2_Click(object sender, EventArgs e)
        {
            comboBox1.Items.Remove(comboBox1.Text);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            label2.Text = "Total Subjects: "+comboBox1.Items.Count.ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            comboBox1.Items.Clear();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            label2.Text = comboBox1.Text;



                notifyIcon1.BalloonTipTitle = "alert";



                notifyIcon1.ShowBalloonTip(1000);


        }

    }
}
