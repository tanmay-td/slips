import java.awt.*;
import java.awt.event.*;
class Ass8A extends Frame implements Runnable,ActionListener
{
  Thread t1;
  Button b1;
  Label l1;
   boolean b;
  public Ass8A()
  {
     setLayout(null);
     l1=new Label("D Y Patil");
     b1=new Button("Click");
     t1=new Thread(this,"A");
     l1.setBounds(100,100,100,30);
     b1.setBounds(100,140,100,30);
     add(l1);
     add(b1);
     b1.addActionListener(this);
     setSize(400,300);
     setVisible(true);
    b=true;
   }
   public void actionPerformed(ActionEvent ae)
   {
      t1.start();
   }
   public void run()
   {
    try
    {
      while(true)
      {
        
          t1.sleep(200);
          if(b)
          {
               l1.setVisible(true);
                b=false;
          }
          else
          {
                 l1.setVisible(false);
                 b=true;
          }
       }
    }
      catch(Exception obj)
      {
      }
   }
public static void main(String args[])
 {
      new Ass8A();
 }
}     