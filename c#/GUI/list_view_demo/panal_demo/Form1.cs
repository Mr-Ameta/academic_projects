﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace panal_demo
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            panel1.Visible = true; panel2.Visible = false;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            panel1.Visible = false; panel2.Visible = true;
        }
    }
}
